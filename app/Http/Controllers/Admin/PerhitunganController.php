<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\PendudukNilai;
use App\Models\Penerima;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {
        $penerimas = $this->hitung($request);

        $headers = [
            'c1' => 'Penghasilan',
            'c2' => 'Aset',
            'c3' => 'Kepemilikan Rumah',
            'c4' => 'Kondisi Dinding Rumah',
            'c5' => 'Kondisi Lantai Rumah',
            'c6' => 'Syarat Khusus',
        ];

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.perhitungan');
        $data = compact('page_attr', 'view', 'penerimas', 'headers');
        $data['compact'] = $data;

        return view($view, $data);
    }

    public function hitung($request)
    {
        $resutls = [];
        // nilai kriteria
        $penerimas = Penerima::orderBy('nama')->limit(10)->get();

        $resutls[] = $penerimas;
        // sub kriteria
        $subs = [];
        foreach ($penerimas as $penerima) {
            $penerima->c1_nilai_str = ($penerima->c1 <= 2000000 ? "Rendah" : ($penerima->c1 <= 2500000 ? "Sedang" : "Tinggi"));
            $penerima->c2_nilai_str = ($penerima->c2 <= 20000000 ? "Rendah" : ($penerima->c2 <= 30000000 ? "Sedang" : "Tinggi"));
            $penerima->c3_nilai_str = ($penerima->c3 <= 40 ? "Numpang" : ($penerima->c3 <= 85 ? "Sewa" : "Milik Sendiri"));
            $penerima->c4_nilai_str = ($penerima->c4 <= 40 ? "Kayu" : ($penerima->c4 <= 85 ? "Setengah Bata" : "Bata"));
            $penerima->c5_nilai_str = ($penerima->c5 <= 40 ? "Tanah" : ($penerima->c5 <= 85 ? "Semen" : "Keramik"));
            $penerima->c6_nilai_str = ($penerima->c6 == 1 ? "Ya" : "Tidak");
            $subs[] = $penerima;
        }
        $resutls[] = $subs;

        // Skor kriteria
        $skors = [];
        foreach ($subs as $penerima) {
            $penerima->c1_nilai_skor = ($penerima->c1 <= 2000000 ? 1 : ($penerima->c1 <= 2500000 ? 2 : 3));
            $penerima->c2_nilai_skor = ($penerima->c2 <= 20000000 ? 1 : ($penerima->c2 <= 30000000 ? 2 : 3));
            $penerima->c3_nilai_skor = ($penerima->c3 <= 40 ? 1 : ($penerima->c3 <= 85 ? 2 : 3));
            $penerima->c4_nilai_skor = ($penerima->c4 <= 40 ? 1 : ($penerima->c4 <= 85 ? 2 : 3));
            $penerima->c5_nilai_skor = ($penerima->c5 <= 40 ? 1 : ($penerima->c5 <= 85 ? 2 : 3));
            $penerima->c6_nilai_skor = ($penerima->c6 == 1 ? 1 : 0);
            $skors[] = $penerima;
        }
        $resutls[] = $skors;

        // Total Skor kriteria
        $totals = [];
        foreach ($skors as $penerima) {
            $penerima->c6_nilai_skor = ($penerima->c6 == 1 ? 1 : 0);
            $penerima->totals = $penerima->c1_nilai_skor + $penerima->c2_nilai_skor + $penerima->c3_nilai_skor + $penerima->c4_nilai_skor + $penerima->c5_nilai_skor + $penerima->c6_nilai_skor;
            $penerima->totals_str = "$penerima->c1_nilai_skor + $penerima->c2_nilai_skor + $penerima->c3_nilai_skor + $penerima->c4_nilai_skor + $penerima->c5_nilai_skor + $penerima->c6_nilai_skor";
            $totals[] = $penerima;
        }
        $resutls[] = $totals;

        // Keputusan
        $keputusans = [];
        foreach ($totals as $penduduk) {
            $penduduk->layak = $penduduk->totals < 10 ? "Layak" : "Tidak";
            $penduduk->layak_class = $penduduk->totals < 10 ? "success" : "warning";
            $keputusans[] = $penduduk;
        }
        $resutls[] = $keputusans;

        return $resutls;
    }
}
