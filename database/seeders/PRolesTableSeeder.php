<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_roles')->delete();
        
        \DB::table('p_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'guard_name' => 'web',
                'created_at' => '2022-08-04 16:05:41',
                'updated_at' => '2023-01-15 14:27:05',
            ),
            1 => 
            array (
                'id' => 9,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2022-08-06 01:26:51',
                'updated_at' => '2023-01-15 14:26:05',
            ),
            2 => 
            array (
                'id' => 10,
                'name' => 'Pendamping',
                'guard_name' => 'web',
                'created_at' => '2023-05-29 15:16:13',
                'updated_at' => '2023-05-30 00:11:00',
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'Kepala Desa',
                'guard_name' => 'web',
                'created_at' => '2023-08-15 01:55:06',
                'updated_at' => '2023-08-15 01:55:06',
            ),
        ));
        
        
    }
}