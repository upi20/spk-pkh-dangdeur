<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Penduduk extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'id',
        'nama',
        'nik',
        'alamat',
        'status',
    ];

    protected $primaryKey = 'id';
    protected $table = 'penduduk';
    const tableName = 'penduduk';

    public function nilais()
    {
        return $this->hasMany(PendudukNilai::class, 'penduduk_id', 'id');
    }
}
