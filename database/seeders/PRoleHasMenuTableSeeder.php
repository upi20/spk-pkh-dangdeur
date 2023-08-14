<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_menu')->delete();
        
        \DB::table('p_role_has_menu')->insert(array (
            0 => 
            array (
                'id' => 155,
                'role_id' => 1,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            1 => 
            array (
                'id' => 156,
                'role_id' => 9,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            2 => 
            array (
                'id' => 258,
                'role_id' => 1,
                'menu_id' => 430,
                'created_at' => '2023-05-16 18:10:19',
                'updated_at' => '2023-05-16 18:10:19',
            ),
            3 => 
            array (
                'id' => 285,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2023-05-23 21:06:14',
                'updated_at' => '2023-05-23 21:06:14',
            ),
            4 => 
            array (
                'id' => 298,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2023-05-29 15:15:08',
                'updated_at' => '2023-05-29 15:15:08',
            ),
            5 => 
            array (
                'id' => 299,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2023-05-29 15:15:25',
                'updated_at' => '2023-05-29 15:15:25',
            ),
            6 => 
            array (
                'id' => 300,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2023-05-29 15:15:33',
                'updated_at' => '2023-05-29 15:15:33',
            ),
            7 => 
            array (
                'id' => 301,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2023-05-29 15:15:40',
                'updated_at' => '2023-05-29 15:15:40',
            ),
            8 => 
            array (
                'id' => 306,
                'role_id' => 1,
                'menu_id' => 438,
                'created_at' => '2023-05-29 20:03:50',
                'updated_at' => '2023-05-29 20:03:50',
            ),
            9 => 
            array (
                'id' => 307,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2023-05-30 02:11:23',
                'updated_at' => '2023-05-30 02:11:23',
            ),
            10 => 
            array (
                'id' => 308,
                'role_id' => 1,
                'menu_id' => 432,
                'created_at' => '2023-05-30 02:12:30',
                'updated_at' => '2023-05-30 02:12:30',
            ),
            11 => 
            array (
                'id' => 309,
                'role_id' => 9,
                'menu_id' => 432,
                'created_at' => '2023-05-30 02:12:30',
                'updated_at' => '2023-05-30 02:12:30',
            ),
            12 => 
            array (
                'id' => 310,
                'role_id' => 10,
                'menu_id' => 432,
                'created_at' => '2023-05-30 02:12:30',
                'updated_at' => '2023-05-30 02:12:30',
            ),
            13 => 
            array (
                'id' => 314,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2023-05-30 02:20:34',
                'updated_at' => '2023-05-30 02:20:34',
            ),
            14 => 
            array (
                'id' => 315,
                'role_id' => 9,
                'menu_id' => 345,
                'created_at' => '2023-05-30 02:20:34',
                'updated_at' => '2023-05-30 02:20:34',
            ),
            15 => 
            array (
                'id' => 316,
                'role_id' => 10,
                'menu_id' => 345,
                'created_at' => '2023-05-30 02:20:34',
                'updated_at' => '2023-05-30 02:20:34',
            ),
            16 => 
            array (
                'id' => 317,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2023-05-30 02:20:42',
                'updated_at' => '2023-05-30 02:20:42',
            ),
            17 => 
            array (
                'id' => 318,
                'role_id' => 9,
                'menu_id' => 386,
                'created_at' => '2023-05-30 02:20:42',
                'updated_at' => '2023-05-30 02:20:42',
            ),
            18 => 
            array (
                'id' => 319,
                'role_id' => 10,
                'menu_id' => 386,
                'created_at' => '2023-05-30 02:20:42',
                'updated_at' => '2023-05-30 02:20:42',
            ),
            19 => 
            array (
                'id' => 320,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2023-05-30 02:20:47',
                'updated_at' => '2023-05-30 02:20:47',
            ),
            20 => 
            array (
                'id' => 321,
                'role_id' => 9,
                'menu_id' => 373,
                'created_at' => '2023-05-30 02:20:47',
                'updated_at' => '2023-05-30 02:20:47',
            ),
            21 => 
            array (
                'id' => 322,
                'role_id' => 10,
                'menu_id' => 373,
                'created_at' => '2023-05-30 02:20:47',
                'updated_at' => '2023-05-30 02:20:47',
            ),
            22 => 
            array (
                'id' => 323,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2023-05-30 02:20:52',
                'updated_at' => '2023-05-30 02:20:52',
            ),
            23 => 
            array (
                'id' => 324,
                'role_id' => 9,
                'menu_id' => 411,
                'created_at' => '2023-05-30 02:20:52',
                'updated_at' => '2023-05-30 02:20:52',
            ),
            24 => 
            array (
                'id' => 325,
                'role_id' => 10,
                'menu_id' => 411,
                'created_at' => '2023-05-30 02:20:52',
                'updated_at' => '2023-05-30 02:20:52',
            ),
            25 => 
            array (
                'id' => 329,
                'role_id' => 1,
                'menu_id' => 439,
                'created_at' => '2023-08-08 23:51:24',
                'updated_at' => '2023-08-08 23:51:24',
            ),
            26 => 
            array (
                'id' => 330,
                'role_id' => 1,
                'menu_id' => 435,
                'created_at' => '2023-08-15 00:31:38',
                'updated_at' => '2023-08-15 00:31:38',
            ),
            27 => 
            array (
                'id' => 331,
                'role_id' => 1,
                'menu_id' => 437,
                'created_at' => '2023-08-15 00:31:53',
                'updated_at' => '2023-08-15 00:31:53',
            ),
            28 => 
            array (
                'id' => 332,
                'role_id' => 9,
                'menu_id' => 437,
                'created_at' => '2023-08-15 00:31:53',
                'updated_at' => '2023-08-15 00:31:53',
            ),
            29 => 
            array (
                'id' => 333,
                'role_id' => 10,
                'menu_id' => 437,
                'created_at' => '2023-08-15 00:31:53',
                'updated_at' => '2023-08-15 00:31:53',
            ),
        ));
        
        
    }
}