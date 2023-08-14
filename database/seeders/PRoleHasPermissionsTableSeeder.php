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
                'permission_id' => 1,
                'role_id' => 11,
            ),
            3 => 
            array (
                'permission_id' => 18,
                'role_id' => 10,
            ),
            4 => 
            array (
                'permission_id' => 35,
                'role_id' => 9,
            ),
            5 => 
            array (
                'permission_id' => 35,
                'role_id' => 10,
            ),
            6 => 
            array (
                'permission_id' => 35,
                'role_id' => 11,
            ),
            7 => 
            array (
                'permission_id' => 36,
                'role_id' => 9,
            ),
            8 => 
            array (
                'permission_id' => 36,
                'role_id' => 11,
            ),
            9 => 
            array (
                'permission_id' => 37,
                'role_id' => 9,
            ),
            10 => 
            array (
                'permission_id' => 37,
                'role_id' => 10,
            ),
            11 => 
            array (
                'permission_id' => 37,
                'role_id' => 11,
            ),
            12 => 
            array (
                'permission_id' => 38,
                'role_id' => 9,
            ),
            13 => 
            array (
                'permission_id' => 38,
                'role_id' => 10,
            ),
            14 => 
            array (
                'permission_id' => 38,
                'role_id' => 11,
            ),
            15 => 
            array (
                'permission_id' => 39,
                'role_id' => 9,
            ),
            16 => 
            array (
                'permission_id' => 39,
                'role_id' => 10,
            ),
            17 => 
            array (
                'permission_id' => 39,
                'role_id' => 11,
            ),
            18 => 
            array (
                'permission_id' => 40,
                'role_id' => 9,
            ),
            19 => 
            array (
                'permission_id' => 40,
                'role_id' => 10,
            ),
            20 => 
            array (
                'permission_id' => 46,
                'role_id' => 9,
            ),
            21 => 
            array (
                'permission_id' => 46,
                'role_id' => 10,
            ),
            22 => 
            array (
                'permission_id' => 51,
                'role_id' => 9,
            ),
            23 => 
            array (
                'permission_id' => 52,
                'role_id' => 9,
            ),
            24 => 
            array (
                'permission_id' => 53,
                'role_id' => 10,
            ),
            25 => 
            array (
                'permission_id' => 54,
                'role_id' => 9,
            ),
            26 => 
            array (
                'permission_id' => 55,
                'role_id' => 10,
            ),
            27 => 
            array (
                'permission_id' => 61,
                'role_id' => 10,
            ),
            28 => 
            array (
                'permission_id' => 67,
                'role_id' => 10,
            ),
            29 => 
            array (
                'permission_id' => 67,
                'role_id' => 11,
            ),
        ));
        
        
    }
}