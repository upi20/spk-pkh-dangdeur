<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('logs')->delete();
        
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:06:19',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/113.0.0.0 Safari\\/537.36 Edg\\/113.0.1774.57"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:18',
                'table_name' => 'p_menu',
                'log_type' => 'create',
                'data' => '{"sequence":"25","parent_id":null,"active":"1","title":"Penduduk","icon":"fas fa-user-edit","route":"admin.penduduk","type":"1","updated_at":"2023-05-29T11:08:18.000000Z","created_at":"2023-05-29T11:08:18.000000Z","id":437}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:18',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":437,"updated_at":"2023-05-29T11:08:18.000000Z","created_at":"2023-05-29T11:08:18.000000Z","id":302}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":437,"parent_id":null,"title":"Penduduk","icon":"fas fa-user-edit","route":"admin.penduduk","sequence":25,"active":1,"type":1,"created_at":"2023-05-29 18:08:18","updated_at":"2023-05-29 18:08:18"}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":5,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-05-29 15:14:23"}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":430,"parent_id":null,"title":"Import","icon":"fas fa-upload","route":null,"sequence":6,"active":1,"type":1,"created_at":"2023-05-16 18:10:19","updated_at":"2023-05-29 15:14:23"}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":436,"parent_id":430,"title":"Kriteria","icon":null,"route":"admin.import.kriteria","sequence":7,"active":1,"type":1,"created_at":"2023-05-29 14:59:27","updated_at":"2023-05-29 15:14:23"}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Pengguna","icon":"fas fa-list","route":"admin.user","sequence":17,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:14:23"}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":"admin.menu.admin","sequence":18,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:15:08"}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"Akses Pengguna","icon":"fas fa-user-check","route":null,"sequence":21,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:15:40"}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Perizinan","icon":null,"route":"admin.user_access.permission","sequence":22,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:15:25"}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Sebagai","icon":null,"route":"admin.user_access.role","sequence":23,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:15:33"}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":24,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:14:23"}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:08:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":25,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-05-29 15:14:23"}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:15:07',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"32032610080000","nama":"Isep Lutpi Nur","alamat":"Alamat","updated_at":"2023-05-29T11:15:07.000000Z","created_at":"2023-05-29T11:15:07.000000Z","id":1}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:15:07',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:15:07.000000Z","created_at":"2023-05-29T11:15:07.000000Z","id":1}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:15:07',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:15:07.000000Z","created_at":"2023-05-29T11:15:07.000000Z","id":2}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:15:07',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:15:07.000000Z","created_at":"2023-05-29T11:15:07.000000Z","id":3}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:15:07',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:15:07.000000Z","created_at":"2023-05-29T11:15:07.000000Z","id":4}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:15:07',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:15:07.000000Z","created_at":"2023-05-29T11:15:07.000000Z","id":5}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:15:07',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:15:07.000000Z","created_at":"2023-05-29T11:15:07.000000Z","id":6}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:41:28',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":1,"nilai":"3500000","updated_at":"2023-05-29T11:41:28.000000Z","created_at":"2023-05-29T11:41:28.000000Z","id":7}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:41:28',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:41:28.000000Z","created_at":"2023-05-29T11:41:28.000000Z","id":8}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:41:28',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:41:28.000000Z","created_at":"2023-05-29T11:41:28.000000Z","id":9}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:41:28',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:41:28.000000Z","created_at":"2023-05-29T11:41:28.000000Z","id":10}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:41:28',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:41:28.000000Z","created_at":"2023-05-29T11:41:28.000000Z","id":11}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:41:28',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:41:28.000000Z","created_at":"2023-05-29T11:41:28.000000Z","id":12}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:04',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":1,"nilai":"3500000","updated_at":"2023-05-29T11:42:04.000000Z","created_at":"2023-05-29T11:42:04.000000Z","id":13}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:04',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:04.000000Z","created_at":"2023-05-29T11:42:04.000000Z","id":14}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:04',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:04.000000Z","created_at":"2023-05-29T11:42:04.000000Z","id":15}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:04',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:04.000000Z","created_at":"2023-05-29T11:42:04.000000Z","id":16}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:04',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:04.000000Z","created_at":"2023-05-29T11:42:04.000000Z","id":17}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:04',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:04.000000Z","created_at":"2023-05-29T11:42:04.000000Z","id":18}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":1,"nilai":"3500000","updated_at":"2023-05-29T11:42:34.000000Z","created_at":"2023-05-29T11:42:34.000000Z","id":19}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:34.000000Z","created_at":"2023-05-29T11:42:34.000000Z","id":20}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:34.000000Z","created_at":"2023-05-29T11:42:34.000000Z","id":21}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:34.000000Z","created_at":"2023-05-29T11:42:34.000000Z","id":22}',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:34.000000Z","created_at":"2023-05-29T11:42:34.000000Z","id":23}',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:42:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:42:34.000000Z","created_at":"2023-05-29T11:42:34.000000Z","id":24}',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:49:51',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":1,"nilai":"3500000","updated_at":"2023-05-29T11:49:51.000000Z","created_at":"2023-05-29T11:49:51.000000Z","id":25}',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:49:51',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:49:51.000000Z","created_at":"2023-05-29T11:49:51.000000Z","id":26}',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:49:51',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":1,"nilai":"1.5","updated_at":"2023-05-29T11:49:51.000000Z","created_at":"2023-05-29T11:49:51.000000Z","id":27}',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:49:51',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:49:51.000000Z","created_at":"2023-05-29T11:49:51.000000Z","id":28}',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:49:51',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:49:51.000000Z","created_at":"2023-05-29T11:49:51.000000Z","id":29}',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:49:51',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T11:49:51.000000Z","created_at":"2023-05-29T11:49:51.000000Z","id":30}',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-05-29 18:55:06',
                'table_name' => 'penduduk',
                'log_type' => 'delete',
                'data' => '{"id":1,"nik":"32032610080000","nama":"Isep Lutpi Nur","alamat":"Alamat","status":0,"import_id":null,"created_at":"2023-05-29 18:15:07","updated_at":"2023-05-29 18:15:07"}',
            ),
        ));
        
        
    }
}