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
                'slug' => 'penghasilan',
                'kode' => 'C1',
                'keterangan' => '0 - 3.500.000',
                'dari' => 0,
                'sampai' => 0,
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-08-08 00:28:34',
            ),
            1 => 
            array (
                'id' => 8,
                'nama' => 'Aset',
                'slug' => 'aset',
                'kode' => 'C2',
                'keterangan' => '0 - 40.000.000',
                'dari' => 0,
                'sampai' => 0,
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-08-08 00:28:36',
            ),
            2 => 
            array (
                'id' => 9,
                'nama' => 'Kepemilikan Rumah',
                'slug' => 'kepemilikan-rumah',
                'kode' => 'C3',
                'keterangan' => '0 - 100',
                'dari' => 0,
                'sampai' => 0,
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-08-08 00:28:39',
            ),
            3 => 
            array (
                'id' => 10,
                'nama' => 'Kondisi Dinding Rumah',
                'slug' => 'kondisi-dinding-rumah',
                'kode' => 'C4',
                'keterangan' => '0 - 100',
                'dari' => 0,
                'sampai' => 0,
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-08-08 00:28:41',
            ),
            4 => 
            array (
                'id' => 11,
                'nama' => 'Kondisi Lantai Rumah',
                'slug' => 'kondisi-lantai-rumah',
                'kode' => 'C5',
                'keterangan' => '0 - 100',
                'dari' => 0,
                'sampai' => 0,
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-08-08 00:28:44',
            ),
            5 => 
            array (
                'id' => 12,
                'nama' => 'Syarat Khusus',
                'slug' => 'syarat-khusus',
                'kode' => 'C6',
                'keterangan' => '0 Tidak, 1 Ada',
                'dari' => 0,
                'sampai' => 1,
                'import_id' => 1,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-08-08 00:30:42',
            ),
        ));
        
        
    }
}