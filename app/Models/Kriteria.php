<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class Kriteria extends Model
{
    use HasFactory, Loggable, Sluggable;

    protected $fillable = [
        'id',
        'nama',
        'slug',
        'kode',
        'keterangan',
        'dari',
        'sampai',
    ];

    protected $primaryKey = 'id';
    protected $table = 'kriteria';
    const tableName = 'kriteria';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function nilais()
    {
        return $this->hasMany(PendudukNilai::class, 'kriteria_id', 'id');
    }

    public static function datatable(Request $request): mixed
    {
        $query = [];
        // import
        $table = self::tableName;
        // ========================================================================================================
        // select raw as alias
        $sraa = function (string $col): string {
            global $query;
            return $query[$col] . ' as ' . $query[$col . '_alias'];
        };
        $model_filter = [];

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

    public function refersDariSampai()
    {
        $id = $this->attributes['id'];

        // Dari
        $dari = KriteriaNilai::where('kriteria_id', $id)->orderBy('dari')->first();

        // Sampai
        $sampai = KriteriaNilai::where('kriteria_id', $id)->orderBy('sampai', 'desc')->first();

        $this->dari = is_null($dari) ? 0 : $dari->dari;
        $this->sampai = is_null($sampai) ? 0 : $sampai->sampai;

        return $this->save();
    }
}
