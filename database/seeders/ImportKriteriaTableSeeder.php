<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportKriteriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_kriteria')->delete();
        
        \DB::table('import_kriteria')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Testing',
                'slug' => 'testing',
                'file' => '20230530120121-testing.xlsx',
                'count' => 6,
                'created_at' => '2023-05-30 12:01:21',
                'updated_at' => '2023-05-30 12:01:21',
            ),
        ));
        
        
    }
}