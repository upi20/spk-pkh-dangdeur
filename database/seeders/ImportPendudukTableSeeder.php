<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportPendudukTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_penduduk')->delete();
        
        \DB::table('import_penduduk')->insert(array (
            0 => 
            array (
                'id' => 7,
                'nama' => 'Testing',
                'slug' => 'testing',
                'file' => '20230530120157-testing.xlsx',
                'count' => 269,
                'created_at' => '2023-05-30 12:01:57',
                'updated_at' => '2023-05-30 12:02:03',
            ),
        ));
        
        
    }
}