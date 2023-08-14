<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Config\Exception\ValidationException;

class PenerimaController extends Controller
{
    private $validate_model = [
        'nik' => ['required', 'integer'],
        'nama' => ['required', 'string'],
        'alamat' => ['required', 'string'],
        'c1' => ['required', 'integer'],
        'c2' => ['required', 'integer'],
        'c3' => ['required', 'integer'],
        'c4' => ['required', 'integer'],
        'c5' => ['required', 'integer'],
        'c6' => ['required', 'integer'],
    ];

    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Penerima::datatable($request);
        }
        $page_attr = adminBreadcumb(h_prefix());

        $view = path_view('pages.admin.penerima');
        $data = compact('page_attr', 'view');
        $data['compact'] = $data;
        return view($view, $data);
    }

    public function insert(Request $request): mixed
    {
        try {
            $request->validate($this->validate_model);

            $model = new Penerima();
            $model->nik = $request->nik;
            $model->nama = $request->nama;
            $model->alamat = $request->alamat;
            $model->c1 = $request->c1;
            $model->c2 = $request->c2;
            $model->c3 = $request->c3;
            $model->c4 = $request->c4;
            $model->c5 = $request->c5;
            $model->c6 = $request->c6;
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
            $model = Penerima::findOrFail($request->id);
            $request->validate(array_merge(['id' => [
                'required', 'int',
            ]], $this->validate_model));

            $model->nik = $request->nik;
            $model->nama = $request->nama;
            $model->alamat = $request->alamat;
            $model->c1 = $request->c1;
            $model->c2 = $request->c2;
            $model->c3 = $request->c3;
            $model->c4 = $request->c4;
            $model->c5 = $request->c5;
            $model->c6 = $request->c6;
            $model->save();

            return response()->json();
        } catch (ValidationException $error) {
            return response()->json([
                'message' => 'Something went wrong',
                'error' => $error,
            ], 500);
        }
    }

    public function delete(Penerima $model): mixed
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

    public function delete_bulk(Request $request): mixed
    {
        try {
            DB::beginTransaction();
            foreach ($request->ids as $id) {
                $return = $this->delete(Penerima::find($id));
                if ($return->getStatusCode() != 200) {
                    return response()->json($return->original, $return->getStatusCode());
                }
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

    public function find(Request $request)
    {
        return Penerima::findOrFail($request->id);
    }

    public function set_status(Request $request)
    {
        $penduduk = Penerima::findOrFail($request->id);
        $penduduk->status = in_array($request->status, [0, 1, 2]) ? $request->status : $penduduk->status;
        $penduduk->save();
        return response()->json($penduduk);
    }
}
