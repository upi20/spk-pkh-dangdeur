<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KriteriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kriteria')->delete();
        
        \DB::table('kriteria')->insert(array (
            0 => 
            array (
                'id' => 7,
                'nama' => 'Penghasilan',
                'kode' => 'C1',
                'keterangan' => '0 - 3.500.000',
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-05-30 12:01:21',
            ),
            1 => 
            array (
                'id' => 8,
                'nama' => 'Aset',
                'kode' => 'C2',
                'keterangan' => '0 - 40.000.000',
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-05-30 12:01:21',
            ),
            2 => 
            array (
                'id' => 9,
                'nama' => 'Kepemilikan Rumah',
                'kode' => 'C3',
                'keterangan' => '0 - 100',
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-05-30 12:01:21',
            ),
            3 => 
            array (
                'id' => 10,
                'nama' => 'Kondisi Dinding Rumah',
                'kode' => 'C4',
                'keterangan' => '0 - 100',
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-05-30 12:01:21',
            ),
            4 => 
            array (
                'id' => 11,
                'nama' => 'Kondisi Lantai Rumah',
                'kode' => 'C5',
                'keterangan' => '0 - 100',
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-05-30 12:01:21',
            ),
            5 => 
            array (
                'id' => 12,
                'nama' => 'Syarat Khusus',
                'kode' => 'C6',
                'keterangan' => '0 Tidak, 1 Ada',
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-05-30 12:01:21',
            ),
        ));
        
        
    }
}