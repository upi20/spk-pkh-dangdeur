<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_permissions')->delete();
        
        \DB::table('p_role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 9,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 10,
            ),
            2 => 
            array (
                'permission_id' => 18,
                'role_id' => 10,
            ),
            3 => 
            array (
                'permission_id' => 35,
                'role_id' => 9,
            ),
            4 => 
            array (
                'permission_id' => 35,
                'role_id' => 10,
            ),
            5 => 
            array (
                'permission_id' => 36,
                'role_id' => 9,
            ),
            6 => 
            array (
                'permission_id' => 37,
                'role_id' => 9,
            ),
            7 => 
            array (
                'permission_id' => 37,
                'role_id' => 10,
            ),
            8 => 
            array (
                'permission_id' => 38,
                'role_id' => 9,
            ),
            9 => 
            array (
                'permission_id' => 38,
                'role_id' => 10,
            ),
            10 => 
            array (
                'permission_id' => 39,
                'role_id' => 9,
            ),
            11 => 
            array (
                'permission_id' => 39,
                'role_id' => 10,
            ),
            12 => 
            array (
                'permission_id' => 40,
                'role_id' => 9,
            ),
            13 => 
            array (
                'permission_id' => 40,
                'role_id' => 10,
            ),
            14 => 
            array (
                'permission_id' => 46,
                'role_id' => 9,
            ),
            15 => 
            array (
                'permission_id' => 46,
                'role_id' => 10,
            ),
            16 => 
            array (
                'permission_id' => 51,
                'role_id' => 9,
            ),
            17 => 
            array (
                'permission_id' => 52,
                'role_id' => 9,
            ),
            18 => 
            array (
                'permission_id' => 53,
                'role_id' => 10,
            ),
            19 => 
            array (
                'permission_id' => 54,
                'role_id' => 9,
            ),
            20 => 
            array (
                'permission_id' => 55,
                'role_id' => 10,
            ),
            21 => 
            array (
                'permission_id' => 61,
                'role_id' => 10,
            ),
        ));
        
        
    }
}