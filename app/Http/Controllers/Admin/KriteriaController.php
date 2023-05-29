<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Import\Kriteria as ImportKriteria;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class KriteriaController extends Controller
{
    private $validate_model = [
        'kode' => ['required', 'string', 'unique:' . Kriteria::tableName],
        'nama' => ['required', 'string'],
        'keterangan' => ['nullable', 'string'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Kriteria::datatable($request);
        }

        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.kriteria');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Kriteria();
            $model->kode = $request->kode;
            $model->nama = $request->nama;
            $model->keterangan = $request->keterangan;
            $model->save();
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
            $this->validate_model['kode'] = ['required', 'string', 'unique:' . Kriteria::tableName . ',kode,' . $request->id];

            $model = Kriteria::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->kode = $request->kode;
            $model->nama = $request->nama;
            $model->keterangan = $request->keterangan;
            $model->save();
            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Kriteria $model): mixed
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

    public function find(Request $request)
    {
        return Kriteria::findOrFail($request->id);
    }

    public function export(Request $request)
    {
        return ImportKriteria::export($request);
    }
}
