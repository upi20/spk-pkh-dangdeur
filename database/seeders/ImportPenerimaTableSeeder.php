<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportPenerimaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_penerima')->delete();
        
        \DB::table('import_penerima')->insert(array (
            0 => 
            array (
                'id' => 9,
                'nama' => 'Data full',
                'slug' => 'data-full',
                'file' => '20230815122900-data-full.xlsx',
                'count' => 269,
                'created_at' => '2023-08-15 00:29:00',
                'updated_at' => '2023-08-15 00:29:02',
            ),
        ));
        
        
    }
}