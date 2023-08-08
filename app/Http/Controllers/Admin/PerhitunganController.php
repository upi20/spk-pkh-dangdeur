<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\PendudukNilai;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {
        $penduduks = $this->hitung($request);

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.perhitungan');
        $data = compact('page_attr', 'view', 'penduduks');
        $data['compact'] = $data;

        return view($view, $data);
    }

    public function hitung($request)
    {
        $resutls = [];
        // nilai kriteria
        $penduduks = PendudukNilai::datatable($request);
        $header = $penduduks['header'];

        $resutls[] = $penduduks['body'];
        // sub kriteria
        $subs = [];
        foreach ($penduduks['body'] as $penduduk) {
            $nilais = [];
            foreach ($penduduk->nilais as $nilai) {
                if ($nilai->kriteria == null) {
                    $nilais[] = null;
                    continue;
                }

                if ($nilai->kriteria->kode == "C1") $nilai->nilai_str = ($nilai->nilai <= 2000000 ? "Rendah" : ($nilai->nilai <= 2500000 ? "Sedang" : "Tinggi"));
                if ($nilai->kriteria->kode == "C2") $nilai->nilai_str = ($nilai->nilai <= 20000000 ? "Rendah" : ($nilai->nilai <= 30000000 ? "Sedang" : "Tinggi"));
                if ($nilai->kriteria->kode == "C3") $nilai->nilai_str = ($nilai->nilai <= 40 ? "Numpang" : ($nilai->nilai <= 85 ? "Sewa" : "Milik Sendiri"));
                if ($nilai->kriteria->kode == "C4") $nilai->nilai_str = ($nilai->nilai <= 40 ? "Kayu" : ($nilai->nilai <= 85 ? "Setengah Bata" : "Bata"));
                if ($nilai->kriteria->kode == "C5") $nilai->nilai_str = ($nilai->nilai <= 40 ? "Tanah" : ($nilai->nilai <= 85 ? "Semen" : "Keramik"));
                if ($nilai->kriteria->kode == "C6") $nilai->nilai_str = ($nilai->nilai == 1 ? "Ya" : "Tidak");

                $nilais[] = $nilai;
            }

            $penduduk->nilais = $nilais;

            $subs[] = $penduduk;
        }
        $resutls[] = $subs;

        // Skor kriteria
        $skors = [];
        foreach ($subs as $penduduk) {
            $nilais = [];
            foreach ($penduduk->nilais as $nilai) {
                if ($nilai->kriteria == null) {
                    $nilais[] = null;
                    continue;
                }

                if ($nilai->kriteria->kode == "C1") $nilai->skor = ($nilai->nilai <= 2000000 ? 1 : ($nilai->nilai <= 2500000 ? 2 : 3));
                if ($nilai->kriteria->kode == "C2") $nilai->skor = ($nilai->nilai <= 20000000 ? 1 : ($nilai->nilai <= 30000000 ? 2 : 3));
                if ($nilai->kriteria->kode == "C3") $nilai->skor = ($nilai->nilai <= 40 ? 1 : ($nilai->nilai <= 85 ? 2 : 3));
                if ($nilai->kriteria->kode == "C4") $nilai->skor = ($nilai->nilai <= 40 ? 1 : ($nilai->nilai <= 85 ? 2 : 3));
                if ($nilai->kriteria->kode == "C5") $nilai->skor = ($nilai->nilai <= 40 ? 1 : ($nilai->nilai <= 85 ? 2 : 3));
                if ($nilai->kriteria->kode == "C6") $nilai->skor = ($nilai->nilai);

                $nilais[] = $nilai;
            }

            $penduduk->nilais = $nilais;

            $skors[] = $penduduk;
        }
        $resutls[] = $skors;

        // Total Skor kriteria
        $totals = [];
        foreach ($skors as $penduduk) {
            $totals_sum = 0;
            $totals_str = "";
            foreach ($penduduk->nilais as $nilai) {
                if ($nilai->kriteria == null) {
                    $nilais[] = null;
                    continue;
                }
                $totals_sum += $nilai->skor;
                $totals_str .= ($totals_str == "" ? ""  : " + ") . $nilai->skor;
            }

            $penduduk->totals = $totals_sum;
            $penduduk->totals_str = $totals_str;
            $totals[] = $penduduk;
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

        $body = $resutls;

        return compact('header', 'body');
    }
}
