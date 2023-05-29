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
                'id' => 1,
                'nama' => 'Testing',
                'slug' => 'testing',
                'file' => '20230529075231-testing.xlsx',
                'count' => 269,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:38',
            ),
        ));
        
        
    }
}