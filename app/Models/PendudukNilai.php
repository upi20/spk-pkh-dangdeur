<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;

class PendudukNilai extends Model
{
    use HasFactory, Loggable;
    protected $fillable = [
        'id',
        'kriteria_id',
        'penduduk_id',
        'nilai',
    ];

    protected $primaryKey = 'id';
    protected $table = Penduduk::tableName . '_nilai';
    const tableName = Penduduk::tableName . '_nilai';

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'penduduk_id', 'id');
    }

    public static function datatable(Request $request)
    {
        $kriterias = Kriteria::orderBy('kode')->get();
        $model = Penduduk::with(['nilais.kriteria']);
        if ($request->status !== null) {
            $model->where('status', $request->status);
        }
        $alternatifs = $model->get();

        // sort nilai berdasarkan kriteria
        $results = [];
        foreach ($alternatifs as $alternatif) {
            $new_nilais = [];
            foreach ($kriterias as $kriteria) {
                $get_nilai = null;
                foreach ($alternatif->nilais as $nilai) {
                    if ($nilai->kriteria_id == $kriteria->id) $get_nilai = $nilai;
                }
                $new_nilais[] = $get_nilai;
            }

            unset($alternatif->nilais);
            $alternatif['nilais'] = $new_nilais;
            $results[] = $alternatif;
        }

        return [
            'header' => $kriterias,
            'body' => $results
        ];
    }

    public static function getEdit(Penduduk $penduduk)
    {
        $kriterias = Kriteria::with(['nilais' => fn ($query) => $query->where('penduduk_id', $penduduk->id)])
            ->orderBy('kode')->get();
        $penduduk->kriterias = $kriterias;
        return $penduduk;
    }
}
