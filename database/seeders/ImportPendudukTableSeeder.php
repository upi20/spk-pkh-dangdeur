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
        
        
        
    }
}