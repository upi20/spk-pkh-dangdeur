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
                'id' => 50,
                'role_id' => 1,
                'menu_id' => 386,
                'created_at' => '2023-01-17 21:46:58',
                'updated_at' => '2023-01-17 21:46:58',
            ),
            1 => 
            array (
                'id' => 51,
                'role_id' => 9,
                'menu_id' => 386,
                'created_at' => '2023-01-17 21:46:58',
                'updated_at' => '2023-01-17 21:46:58',
            ),
            2 => 
            array (
                'id' => 155,
                'role_id' => 1,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            3 => 
            array (
                'id' => 156,
                'role_id' => 9,
                'menu_id' => 398,
                'created_at' => '2023-03-25 00:10:13',
                'updated_at' => '2023-03-25 00:10:13',
            ),
            4 => 
            array (
                'id' => 228,
                'role_id' => 1,
                'menu_id' => 345,
                'created_at' => '2023-04-18 05:43:44',
                'updated_at' => '2023-04-18 05:43:44',
            ),
            5 => 
            array (
                'id' => 229,
                'role_id' => 9,
                'menu_id' => 345,
                'created_at' => '2023-04-18 05:43:44',
                'updated_at' => '2023-04-18 05:43:44',
            ),
            6 => 
            array (
                'id' => 234,
                'role_id' => 1,
                'menu_id' => 373,
                'created_at' => '2023-04-18 21:00:47',
                'updated_at' => '2023-04-18 21:00:47',
            ),
            7 => 
            array (
                'id' => 235,
                'role_id' => 9,
                'menu_id' => 373,
                'created_at' => '2023-04-18 21:00:47',
                'updated_at' => '2023-04-18 21:00:47',
            ),
            8 => 
            array (
                'id' => 258,
                'role_id' => 1,
                'menu_id' => 430,
                'created_at' => '2023-05-16 18:10:19',
                'updated_at' => '2023-05-16 18:10:19',
            ),
            9 => 
            array (
                'id' => 285,
                'role_id' => 1,
                'menu_id' => 346,
                'created_at' => '2023-05-23 21:06:14',
                'updated_at' => '2023-05-23 21:06:14',
            ),
            10 => 
            array (
                'id' => 294,
                'role_id' => 1,
                'menu_id' => 436,
                'created_at' => '2023-05-29 15:00:38',
                'updated_at' => '2023-05-29 15:00:38',
            ),
            11 => 
            array (
                'id' => 295,
                'role_id' => 1,
                'menu_id' => 432,
                'created_at' => '2023-05-29 15:14:11',
                'updated_at' => '2023-05-29 15:14:11',
            ),
            12 => 
            array (
                'id' => 296,
                'role_id' => 1,
                'menu_id' => 411,
                'created_at' => '2023-05-29 15:14:17',
                'updated_at' => '2023-05-29 15:14:17',
            ),
            13 => 
            array (
                'id' => 297,
                'role_id' => 9,
                'menu_id' => 411,
                'created_at' => '2023-05-29 15:14:17',
                'updated_at' => '2023-05-29 15:14:17',
            ),
            14 => 
            array (
                'id' => 298,
                'role_id' => 1,
                'menu_id' => 361,
                'created_at' => '2023-05-29 15:15:08',
                'updated_at' => '2023-05-29 15:15:08',
            ),
            15 => 
            array (
                'id' => 299,
                'role_id' => 1,
                'menu_id' => 368,
                'created_at' => '2023-05-29 15:15:25',
                'updated_at' => '2023-05-29 15:15:25',
            ),
            16 => 
            array (
                'id' => 300,
                'role_id' => 1,
                'menu_id' => 369,
                'created_at' => '2023-05-29 15:15:33',
                'updated_at' => '2023-05-29 15:15:33',
            ),
            17 => 
            array (
                'id' => 301,
                'role_id' => 1,
                'menu_id' => 367,
                'created_at' => '2023-05-29 15:15:40',
                'updated_at' => '2023-05-29 15:15:40',
            ),
            18 => 
            array (
                'id' => 302,
                'role_id' => 1,
                'menu_id' => 437,
                'created_at' => '2023-05-29 18:08:18',
                'updated_at' => '2023-05-29 18:08:18',
            ),
            19 => 
            array (
                'id' => 303,
                'role_id' => 1,
                'menu_id' => 435,
                'created_at' => '2023-05-29 19:21:32',
                'updated_at' => '2023-05-29 19:21:32',
            ),
            20 => 
            array (
                'id' => 304,
                'role_id' => 1,
                'menu_id' => 397,
                'created_at' => '2023-05-29 20:03:31',
                'updated_at' => '2023-05-29 20:03:31',
            ),
            21 => 
            array (
                'id' => 305,
                'role_id' => 9,
                'menu_id' => 397,
                'created_at' => '2023-05-29 20:03:31',
                'updated_at' => '2023-05-29 20:03:31',
            ),
            22 => 
            array (
                'id' => 306,
                'role_id' => 1,
                'menu_id' => 438,
                'created_at' => '2023-05-29 20:03:50',
                'updated_at' => '2023-05-29 20:03:50',
            ),
        ));
        
        
    }
}