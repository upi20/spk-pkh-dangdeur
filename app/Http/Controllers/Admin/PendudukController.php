<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Penduduk;
use App\Models\PendudukNilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class PendudukController extends Controller
{
    private $validate_model = [
        'nik' => ['required', 'string', 'unique:' . Penduduk::tableName],
        'nama' => ['required', 'string'],
        'alamat' => ['nullable', 'string'],
    ];

    public function index(Request $request)
    {
        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.penduduk');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            DB::beginTransaction();
            $request->validate($this->validate_model);

            $model = new Penduduk();
            $model->nik = $request->nik;
            $model->nama = $request->nama;
            $model->alamat = $request->alamat;
            $model->save();

            // masukan nilai nya
            foreach ($request->nilais as $kriteria_id => $nilai) {
                $new_nilai = new PendudukNilai();
                $new_nilai->kriteria_id = $kriteria_id;
                $new_nilai->penduduk_id = $model->id;
                $new_nilai->nilai = $nilai;
                $new_nilai->save();
            }

            DB::commit();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function update(Request $request): mixed
    {
        try {
            $this->validate_model['nik'] = ['required', 'string', 'unique:' . Penduduk::tableName . ',nik,' . $request->id];

            $model = Penduduk::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->nik = $request->nik;
            $model->nama = $request->nama;
            $model->alamat = $request->alamat;
            $model->save();

            // hapus semua nilai
            PendudukNilai::where('penduduk_id', $model->id)->delete();

            // masukan nilai nya
            foreach ($request->nilais as $kriteria_id => $nilai) {
                $new_nilai = new PendudukNilai();
                $new_nilai->kriteria_id = $kriteria_id;
                $new_nilai->penduduk_id = $model->id;
                $new_nilai->nilai = $nilai;
                $new_nilai->save();
            }

            DB::commit();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Penduduk $model): mixed
    {
        try {
            $model->delete();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function kriteria(Request $request)
    {
        return Kriteria::orderBy('kode')->get();
    }

    public function find(Request $request)
    {
        $penduduk = Penduduk::findOrFail($request->id);
        return PendudukNilai::getEdit($penduduk);
    }

    public function datatable(Request $request)
    {
        return PendudukNilai::datatable($request);
    }
}
