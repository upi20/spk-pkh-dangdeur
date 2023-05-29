<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_menu')->delete();
        
        \DB::table('p_menu')->insert(array (
            0 => 
            array (
                'id' => 345,
                'parent_id' => NULL,
                'title' => 'Dashboard',
                'icon' => 'fas fa-tachometer-alt',
                'route' => 'admin.dashboard',
                'sequence' => 1,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-04-18 05:36:59',
            ),
            1 => 
            array (
                'id' => 346,
                'parent_id' => NULL,
                'title' => 'Pengguna',
                'icon' => 'fas fa-list',
                'route' => 'admin.user',
                'sequence' => 17,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            2 => 
            array (
                'id' => 361,
                'parent_id' => NULL,
                'title' => 'Menu Management',
                'icon' => 'fas fa-stream',
                'route' => 'admin.menu.admin',
                'sequence' => 18,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-29 15:15:08',
            ),
            3 => 
            array (
                'id' => 367,
                'parent_id' => NULL,
                'title' => 'Akses Pengguna',
                'icon' => 'fas fa-user-check',
                'route' => NULL,
                'sequence' => 21,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-29 15:15:40',
            ),
            4 => 
            array (
                'id' => 368,
                'parent_id' => 367,
                'title' => 'Perizinan',
                'icon' => NULL,
                'route' => 'admin.user_access.permission',
                'sequence' => 22,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-29 15:15:25',
            ),
            5 => 
            array (
                'id' => 369,
                'parent_id' => 367,
                'title' => 'Sebagai',
                'icon' => NULL,
                'route' => 'admin.user_access.role',
                'sequence' => 23,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-29 15:15:33',
            ),
            6 => 
            array (
                'id' => 373,
                'parent_id' => NULL,
                'title' => 'Profile',
                'icon' => 'fas fa-user',
                'route' => 'admin.profile',
                'sequence' => 24,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:50:28',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            7 => 
            array (
                'id' => 386,
                'parent_id' => NULL,
                'title' => 'Logout',
                'icon' => 'fas fa-sign-out-alt',
                'route' => 'logout',
                'sequence' => 25,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-05 23:54:09',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            8 => 
            array (
                'id' => 397,
                'parent_id' => NULL,
                'title' => 'Pengaturan',
                'icon' => 'fas fa-wrench',
                'route' => NULL,
                'sequence' => 10,
                'active' => 0,
                'type' => 1,
                'created_at' => '2022-08-14 21:10:57',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            9 => 
            array (
                'id' => 398,
                'parent_id' => 397,
                'title' => 'Informasi Admin',
                'icon' => NULL,
                'route' => 'admin.setting.admin',
                'sequence' => 11,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-14 21:11:42',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            10 => 
            array (
                'id' => 404,
                'parent_id' => 403,
                'title' => 'Anggota',
                'icon' => NULL,
                'route' => 'admin.lapooran.anggota',
                'sequence' => 41,
                'active' => 1,
                'type' => 1,
                'created_at' => '2022-08-18 18:55:08',
                'updated_at' => '2022-08-20 14:04:25',
            ),
            11 => 
            array (
                'id' => 411,
                'parent_id' => NULL,
                'title' => 'Menu Lainnya',
                'icon' => NULL,
                'route' => NULL,
                'sequence' => 5,
                'active' => 1,
                'type' => 0,
                'created_at' => '2022-09-15 21:18:04',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            12 => 
            array (
                'id' => 430,
                'parent_id' => NULL,
                'title' => 'Import',
                'icon' => 'fas fa-upload',
                'route' => NULL,
                'sequence' => 6,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-16 18:10:19',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            13 => 
            array (
                'id' => 432,
                'parent_id' => NULL,
                'title' => 'Kriteria',
                'icon' => 'fas fa-edit',
                'route' => 'admin.kriteria',
                'sequence' => 2,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-23 20:26:29',
                'updated_at' => '2023-05-29 15:14:22',
            ),
            14 => 
            array (
                'id' => 433,
                'parent_id' => NULL,
                'title' => 'Calon',
                'icon' => 'fas fa-user',
                'route' => 'admin.calon',
                'sequence' => 3,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-23 21:06:47',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            15 => 
            array (
                'id' => 434,
                'parent_id' => NULL,
                'title' => 'Calon Nilai',
                'icon' => 'fas fa-user-edit',
                'route' => 'admin.calon.nilai',
                'sequence' => 4,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-24 00:00:09',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            16 => 
            array (
                'id' => 435,
                'parent_id' => 430,
                'title' => 'Calon',
                'icon' => NULL,
                'route' => 'admin.import.calon',
                'sequence' => 9,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-29 02:19:06',
                'updated_at' => '2023-05-29 15:14:23',
            ),
            17 => 
            array (
                'id' => 436,
                'parent_id' => 430,
                'title' => 'Kriteria',
                'icon' => NULL,
                'route' => 'admin.import.kriteria',
                'sequence' => 7,
                'active' => 1,
                'type' => 1,
                'created_at' => '2023-05-29 14:59:27',
                'updated_at' => '2023-05-29 15:14:23',
            ),
        ));
        
        
    }
}