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
                'id' => '1',
                'nama' => 'Penghasilan',
                'kode' => 'C1',
                'keterangan' => '0 - 3.500.000',
                'import_id' => NULL,
                'created_at' => '2023-05-29 15:08:59',
                'updated_at' => '2023-05-29 15:08:59',
            ),
            1 => 
            array (
                'id' => '2',
                'nama' => 'Aset',
                'kode' => 'C2',
                'keterangan' => '0 - 40.000.000',
                'import_id' => NULL,
                'created_at' => '2023-05-29 15:09:16',
                'updated_at' => '2023-05-29 15:09:16',
            ),
            2 => 
            array (
                'id' => '3',
                'nama' => 'Kepemilikan Rumah',
                'kode' => 'C3',
                'keterangan' => '0 - 100',
                'import_id' => NULL,
                'created_at' => '2023-05-29 15:09:31',
                'updated_at' => '2023-05-29 15:09:31',
            ),
            3 => 
            array (
                'id' => '4',
                'nama' => 'Kondisi Dinding Rumah',
                'kode' => 'C4',
                'keterangan' => '0 - 100',
                'import_id' => NULL,
                'created_at' => '2023-05-29 15:09:45',
                'updated_at' => '2023-05-29 15:09:45',
            ),
            4 => 
            array (
                'id' => '5',
                'nama' => 'Kondisi Lantai Rumah',
                'kode' => 'C5',
                'keterangan' => '0 - 100',
                'import_id' => NULL,
                'created_at' => '2023-05-29 15:10:00',
                'updated_at' => '2023-05-29 15:10:00',
            ),
            5 => 
            array (
                'id' => '6',
                'nama' => 'Syarat Khusus',
                'kode' => 'C6',
                'keterangan' => '0 Tidak, 1 Ada',
                'import_id' => NULL,
                'created_at' => '2023-05-29 15:10:18',
                'updated_at' => '2023-05-29 15:10:18',
            ),
        ));
        
        
    }
}