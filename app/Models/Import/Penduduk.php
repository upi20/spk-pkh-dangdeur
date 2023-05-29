<?php

namespace App\Models\Import;

use App\Models\Penduduk as ModelsPenduduk;
use App\Models\PendudukNilai;
use App\Models\Kecamatan;
use App\Models\Kriteria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Cviebrock\EloquentSluggable\Sluggable;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class Penduduk extends Model
{
    use HasFactory, Loggable, Sluggable;

    protected $fillable = [
        'id',
        'nama',
        'slug',
        'file',
        'count',
    ];

    protected $excelHeader = [
        "No",
        "NIK",
        "Nama",
        "Alamat",
    ];

    protected $primaryKey = 'id';
    protected $table = 'import_penduduk';
    const tableName = 'import_penduduk';
    const excelFolder = 'assets/import/penduduk';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function items()
    {
        return $this->hasMany(ModelsPenduduk::class, 'import_id', 'id');
    }

    public function fileUrl()
    {
        $file = $this->attributes['file'];
        return url(static::excelFolder . '/' . $file);
    }

    public static function datatable(Request $request): mixed
    {
        $query = [];
        $base_url_excel_folder = url(str_replace('./', '', static::excelFolder)) . '/';
        // import
        $table = self::tableName;

        // excel
        $c_excel_link = 'excel_link';
        $query[$c_excel_link] = <<<SQL
            (concat('$base_url_excel_folder', $table.file))
        SQL;
        $query["{$c_excel_link}_alias"] = $c_excel_link;
        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col) use ($query): string {
            return $query[$col] . ' as ' . $query[$col . '_alias'];
        };

        $model_filter = [$c_excel_link];

        $to_db_raw = array_map(function ($a) use ($sraa) {
            return DB::raw($sraa($a));
        }, $model_filter);
        // ========================================================================================================


        // Select =====================================================================================================
        $model = self::select(array_merge([
            DB::raw("$table.*"),
        ], $to_db_raw));

        // Filter =====================================================================================================
        // filter check
        $f_c = function (string $param) use ($request): mixed {
            $filter = $request->filter;
            return isset($filter[$param]) ? $filter[$param] : false;
        };

        // filter ini menurut data model filter
        $f = [];
        // loop filter
        foreach ($f as $v) {
            if ($f_c($v) !== false) {
                $model->whereRaw("{$query[$v]}='{$f_c($v)}'");
            }
        }

        // filter custom
        $filters = [];
        foreach ($filters as  $f) {
            if ($f_c($f) !== false) {
                $model->whereRaw("$table.$f='{$f_c($f)}'");
            }
        }
        // ========================================================================================================


        // ========================================================================================================
        $datatable = Datatables::of($model)->addIndexColumn();

        // search
        // ========================================================================================================
        $query_filter = $query;
        $datatable->filter(function ($query) use ($model_filter, $query_filter, $table) {
            $search = request('search');
            $search = isset($search['value']) ? $search['value'] : null;
            if ((is_null($search) || $search == '') && count($model_filter) > 0) return false;

            // tambah pencarian
            $static = new static();
            $search_add = $static->fillable;
            $search_add = array_map(function ($v) use ($table) {
                return "$table.$v";
            }, $search_add);
            $search_arr = array_merge($model_filter, $search_add);


            // pake or where
            $search_str = "(";
            foreach ($search_arr as $k => $v) {
                $or = (($k + 1) < count($search_arr)) ? 'or' : '';
                $column = isset($query_filter[$v]) ? $query_filter[$v] : $v;
                $search_str .= "$column like '%$search%' $or ";
            }

            $search_str .= ")";
            $query->whereRaw($search_str);
        });

        // create datatable
        return $datatable->make(true);
    }

    public static function import(Request $request, Penduduk $model)
    {
        // setup
        $folder = static::excelFolder;
        $excel = null;
        $error = null;
        $start = 5;
        $file_excel = '';

        try {
            if ($file = $request->file('file')) {
                // $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $excel = date('Ymdhis-') . $model->slug  .  '.' .  $file->getClientOriginalExtension();
                $file->move("$folder", $excel);
                $file_excel = "./$folder/$excel";

                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_excel);
                $array_from_excel = $spreadsheet->getActiveSheet()->toArray();
            }
        } catch (\Throwable $th) {
            $error = $th;
            delete_file($file_excel);
        }
        if (is_null($excel)) {
            return [
                'status' => false,
                'error' => response()->json(['message' => 'File Not found', 'error' => $error], 400),
                'excel' => $file_excel
            ];
        }

        // preprocess
        $kecamatans = Kecamatan::select(['id', 'kode', 'nama'])->orderBy('kode')->get();
        $kecamatan_kode = $kecamatans->map(fn ($query) => $query->kode)->toArray();
        $kec_id = [];
        foreach ($kecamatans as $kecamatan) $kec_id[$kecamatan->kode] = $kecamatan->id;

        $kriterias = Kriteria::select(['id', 'kode', 'nama'])->orderBy('kode')->get();
        $tah_id = [];
        foreach ($kriterias as $kriteria) $tah_id[$kriteria->kode] = $kriteria->id;

        $static = new static();
        $header_code = [];
        $header = $array_from_excel[3];
        $kriteria_start = count($static->excelHeader);
        $kriteria_end = 0;
        for ($i = $kriteria_start; $i < count($header); $i++) {
            if ($header[$i] == null) {
                break;
            } else {
                $header_code[$i] = isset($tah_id[$header[$i]]) ? $tah_id[$header[$i]] : null;
                $kriteria_end = $i + 1;
            }
        }

        $count = 0;
        foreach ($array_from_excel as $i => $v) {
            if ($i < $start || $v[0] == null) continue;
            // cek kode kecamatan
            $kode = $v[1];
            if (!in_array($kode, $kecamatan_kode)) return [
                'status' => false,
                'error' => response()->json(['message' => "Kode Kecamatan $kode Tidak ada di database, Silahkan cek data nomor {$v[0]}", 'error' => $v], 400),
                'excel' => $file_excel
            ];

            // cek no pendaftaran
            $nomor_pendaftaran = $v[3];
            $cek = ModelsPenduduk::where('nomor_pendaftaran', $nomor_pendaftaran)->count();
            if ($cek > 0) return [
                'status' => false,
                'error' => response()->json(['message' => "Nomor Pendaftaran $nomor_pendaftaran Sudah di gunakan, Silahkan cek data nomor {$v[0]}", 'error' => $v], 400),
                'excel' => $file_excel
            ];

            // set tanggal_lahir
            $tanggal_lahir = null;
            $tle = explode('/', $v[6] ?? ''); // tanggal lahir explode
            if (count($tle) == 3) {
                $tanggal_lahir = "$tle[2]-$tle[0]-$tle[1]";
            }

            $penduduk = new ModelsPenduduk();
            $penduduk->kecamatan_id = $kec_id[$kode];
            $penduduk->nomor_pendaftaran = $nomor_pendaftaran;
            $penduduk->nama = $v[4];
            $penduduk->jenis_kelamin = $v[5];
            $penduduk->tanggal_lahir = $tanggal_lahir;
            $penduduk->nomor_telepon = $v[7];
            $penduduk->import_id = $model->id;
            $penduduk->save();

            // insert kriteria
            for ($i = $kriteria_start; $i < $kriteria_end; $i++) {
                $penduduk_nilai = new PendudukNilai();
                $penduduk_nilai->kriteria_id = $header_code[$i];
                $penduduk_nilai->penduduk_id = $penduduk->id;
                $penduduk_nilai->nilai = $v[$i];
                $penduduk_nilai->save();
            }

            $count++;
        }

        $model->count = $count;
        $model->file = $excel;
        $model->save();
        return ['status' => true];
    }

    public static function format(Request $request)
    {
        // data body
        // $details = [];
        $bulan_array = [
            1 => 'Januari',
            2 => 'February',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember',
        ];
        $today_m = (int)Date("m");
        $today_d = (int)Date("d");
        $today_y = (int)Date("Y");

        $date = $today_d . " " . $bulan_array[$today_m] . " " . $today_y;

        // poin-poin header disini
        $kriterias = Kriteria::select(['kode', 'nama'])->orderBy('kode')->get();
        $kecamatans = Kecamatan::select(['kode', 'nama'])->orderBy('kode')->get();

        $static = new static();
        $headers = $static->excelHeader;

        $nilai_kodes = $kriterias->map(fn ($query) => $query->kode)->toArray();
        $headers = array_merge($headers, $nilai_kodes);

        // laporan baru
        $row = 1;
        $col_start = "A";
        $col_end = chr(64 + count($headers));
        $title_excel = "Formulir Import Penduduk";
        $jml_body = 400;
        // Header excel ================================================================================================
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Dokumen Properti
        $spreadsheet->getProperties()
            ->setCreator("Administrator")
            ->setLastModifiedBy("Administrator")
            ->setTitle($title_excel)
            ->setSubject("Administrator")
            ->setDescription("LIst Company $date")
            ->setKeywords("Laporan, Report")
            ->setCategory("Laporan, Report");

        // set default font
        $spreadsheet->getDefaultStyle()->getFont()->setName('Calibri');
        $spreadsheet->getDefaultStyle()->getFont()->setSize(11);

        // header 2 ====================================================================================================
        $row += 1;
        $sheet->mergeCells($col_start . $row . ":" . $col_end . $row)
            ->setCellValue("A$row", "Formulir Import Penduduk");
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray([
            "font" => [
                "bold" => true,
                "size" => 13
            ],
            "alignment" => [
                "horizontal" => Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        // Tabel =======================================================================================================
        // Tabel Header
        $row += 2;
        $styleHeader = [
            'font' => [
                'bold' => true,
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '93C5FD',
                ]
            ],
        ];
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray($styleHeader);
        $row++;
        $styleSubHeader = $styleHeader;
        $styleSubHeader['fill']['startColor']['rgb'] = 'E5E7EB';
        $sheet->getStyle($col_start . $row . ":" . $col_end . $row)->applyFromArray($styleSubHeader);

        // apply header
        for ($i = 0; $i < count($headers); $i++) {
            $sheet->setCellValue(chr(65 + $i) . ($row - 1), $headers[$i]);
            $sheet->setCellValue(chr(65 + $i) . $row, ($i + 1));
        }


        // tabel body
        $styleBody = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => '000000'],
                ],
            ],
            "alignment" => [
                'wrapText' => TRUE,
                'vertical' => Alignment::VERTICAL_TOP
            ]
        ];
        $start_tabel = $row + 1;
        // foreach ($details as $detail) {
        //     $c = 0;
        //     $row++;
        //     $detail = (object)$detail;
        //     $sheet->setCellValue(chr(65 + $c) . "$row", ($row - 5));
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->nama);
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->dari);
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->sampai);
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->keterangan);
        //     $sheet->setCellValue(chr(65 + ++$c) . "$row", $detail->status_str);
        // }
        // format
        // nomor center
        $sheet->getStyle($col_start . $start_tabel . ":" . $col_start . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // border all data
        $sheet->getStyle($col_start . $start_tabel . ":" . $col_end . ($start_tabel + $jml_body))->applyFromArray($styleBody);

        $spreadsheet->getActiveSheet()->getStyle('B' . $start_tabel . ":B" . $row)->getNumberFormat()->setFormatCode('0');


        // Set Keterangan =============================================================================================
        // Kecamatan ==
        $ket_kec_col_start = chr(64 + count($headers) + 2);
        $ket_kec_col_end = chr(64 + count($headers) + 3);
        $ket_kec_row = $row - 1;

        // merge
        $spreadsheet->getActiveSheet()->mergeCells("{$ket_kec_col_start}{$ket_kec_row}:{$ket_kec_col_end}{$ket_kec_row}");
        // set value
        $sheet->setCellValue($ket_kec_col_start . "$ket_kec_row", "Kecamatan");
        // set style
        $sheet->getStyle("{$ket_kec_col_start}{$ket_kec_row}:{$ket_kec_col_end}{$ket_kec_row}")->applyFromArray($styleHeader);

        // set body value
        $ket_kec_row++;
        $ket_kec_row_start = $ket_kec_row;
        foreach ($kecamatans as $kec) {
            $sheet->setCellValue("{$ket_kec_col_start}{$ket_kec_row}", $kec->kode);
            $sheet->setCellValue("{$ket_kec_col_end}{$ket_kec_row}", $kec->nama);
            $ket_kec_row++;
        }
        $ket_kec_row_end = $ket_kec_row - 1;

        // set style
        $sheet->getStyle("{$ket_kec_col_start}{$ket_kec_row_start}:{$ket_kec_col_end}{$ket_kec_row_end}")->applyFromArray($styleBody);

        $spreadsheet->getActiveSheet()->getColumnDimension($ket_kec_col_start)->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension($ket_kec_col_end)->setAutoSize(true);

        // Kriteria ==
        $ket_kriteria_col_start = chr(64 + count($headers) + 5);
        $ket_kriteria_col_end = chr(64 + count($headers) + 6);
        $ket_kriteria_row = $row - 1;

        // merge
        $spreadsheet->getActiveSheet()->mergeCells("{$ket_kriteria_col_start}{$ket_kriteria_row}:{$ket_kriteria_col_end}{$ket_kriteria_row}");
        // set value
        $sheet->setCellValue($ket_kriteria_col_start . "$ket_kriteria_row", "Kriteria");
        // set style
        $sheet->getStyle("{$ket_kriteria_col_start}{$ket_kriteria_row}:{$ket_kriteria_col_end}{$ket_kriteria_row}")->applyFromArray($styleHeader);

        // set body value
        $ket_kriteria_row++;
        $ket_kriteria_row_start = $ket_kriteria_row;
        foreach ($kriterias as $kriteria) {
            $sheet->setCellValue("{$ket_kriteria_col_start}{$ket_kriteria_row}", $kriteria->kode);
            $sheet->setCellValue("{$ket_kriteria_col_end}{$ket_kriteria_row}", $kriteria->nama);
            $ket_kriteria_row++;
        }
        $ket_kriteria_row_end = $ket_kriteria_row - 1;

        // set style
        $sheet->getStyle("{$ket_kriteria_col_start}{$ket_kriteria_row_start}:{$ket_kriteria_col_end}{$ket_kriteria_row_end}")->applyFromArray($styleBody);

        $spreadsheet->getActiveSheet()->getColumnDimension($ket_kriteria_col_start)->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension($ket_kriteria_col_end)->setAutoSize(true);
        // Set Keterangan =============================================================================================

        // Set Validation =============================================================================================
        // Jenis Kelamin ==
        $dataList = ['LAKI-LAKI', 'PEREMPUAN']; // Set up the data validation list
        $jk_col = chr(64 + 6);
        $end_tabel = $start_tabel + $jml_body;

        // Define the range where you want to apply the data validation
        $validationRange = "{$jk_col}{$start_tabel}:{$jk_col}{$end_tabel}";

        // Create a DataValidation object
        $dataValidation = $sheet->getCell("{$jk_col}{$start_tabel}")->getDataValidation();

        // Set the data validation type to lists
        $dataValidation->setType(\PhpOffice\PhpSpreadsheet\Cell\DataValidation::TYPE_LIST);

        // Set the formula1 property with the list of options
        $dataValidation->setFormula1('"' . implode(',', $dataList) . '"');

        // Set the showDropDown property to display a dropdown arrow
        $dataValidation->setShowDropDown(true);

        // Apply the data validation to the range
        $sheet->setDataValidation($validationRange, $dataValidation);

        // Kecamatan ==
        $dataList = $kecamatans->map(fn ($query) => $query->kode)->toArray(); // Set up the data validation list
        $kode_kec_col = chr(64 + 2);
        $end_tabel = $start_tabel + $jml_body;

        // Define the range where you want to apply the data validation
        $validationRange = "{$kode_kec_col}{$start_tabel}:{$kode_kec_col}{$end_tabel}";

        // Create a DataValidation object
        $dataValidation = $sheet->getCell("{$kode_kec_col}{$start_tabel}")->getDataValidation();

        // Set the data validation type to lists
        $dataValidation->setType(\PhpOffice\PhpSpreadsheet\Cell\DataValidation::TYPE_LIST);

        // Set the formula1 property with the list of options
        $dataValidation->setFormula1('"' . implode(',', $dataList) . '"');

        // Set the showDropDown property to display a dropdown arrow
        $dataValidation->setShowDropDown(true);

        // Apply the data validation to the range
        $sheet->setDataValidation($validationRange, $dataValidation);
        // Set Validation =============================================================================================

        // Set Rumus ==================================================================================================
        // Kecamatan
        $col_kecamatan = chr(64 + 3);
        $table_kecamatan = "\${$ket_kec_col_start}\${$ket_kec_row_start}:\${$ket_kec_col_end}\${$ket_kec_row_end}";
        for ($i = $start_tabel; $i <= $end_tabel; $i++) {
            $sheet->setCellValue("{$col_kecamatan}{$i}", ("=IFERROR(VLOOKUP(" . "{$kode_kec_col}{$i}" . "," . $table_kecamatan . ",2,FALSE),\"\")"));
        }

        // function for width column
        function w($width)
        {
            return 0.71 + $width;
        }

        // set width column
        for ($i = 65; $i < (65 + count($headers)); $i++) {
            $spreadsheet->getActiveSheet()->getColumnDimension(chr($i))->setAutoSize(true);
        }

        // set  printing area
        $spreadsheet->getActiveSheet()->getPageSetup()->setPrintArea($col_start . '1:' . $col_end . $row);
        $spreadsheet->getActiveSheet()->getPageSetup()->setOrientation(PageSetup::ORIENTATION_PORTRAIT);
        $spreadsheet->getActiveSheet()->getPageSetup()->setPaperSize(PageSetup::PAPERSIZE_A4);

        // margin
        $spreadsheet->getActiveSheet()->getPageMargins()->setTop(1);
        $spreadsheet->getActiveSheet()->getPageMargins()->setRight(0);
        $spreadsheet->getActiveSheet()->getPageMargins()->setLeft(0);
        $spreadsheet->getActiveSheet()->getPageMargins()->setBottom(0);

        // page center on
        $spreadsheet->getActiveSheet()->getPageSetup()->setHorizontalCentered(true);
        $spreadsheet->getActiveSheet()->getPageSetup()->setVerticalCentered(false);

        // simpan langsung
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $title_excel . '.xlsx"');
        header('Cache-Control: max-age=0');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
        die;
    }
}
