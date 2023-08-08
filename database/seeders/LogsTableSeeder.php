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
                'log_date' => '2023-05-30 01:58:35',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Admin","email":"admin@gmail.com","active":"1","updated_at":"2023-05-29T18:58:35.000000Z","created_at":"2023-05-29T18:58:35.000000Z","id":2,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=A&color=7F9CF5&background=EBF4FF"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-05-30 01:58:46',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Tini Patmawati","email":"tini@gmail.com","active":"1","updated_at":"2023-05-29T18:58:46.000000Z","created_at":"2023-05-29T18:58:46.000000Z","id":3,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=T+P&color=7F9CF5&background=EBF4FF"}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-05-30 01:59:01',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Pendamping","email":"pendamping@gmail.com","active":"1","updated_at":"2023-05-29T18:59:01.000000Z","created_at":"2023-05-29T18:59:01.000000Z","id":4,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=P&color=7F9CF5&background=EBF4FF"}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'log_date' => '2023-05-30 01:59:24',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/113.0.0.0 Safari\\/537.36 Edg\\/113.0.1774.57"}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:11:23',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":397,"updated_at":"2023-05-29T19:11:23.000000Z","created_at":"2023-05-29T19:11:23.000000Z","id":307}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'log_date' => '2023-05-30 02:12:11',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":2,"name":"Admin","email":"admin@gmail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$dBPmkmoutOKjYKFY9nrVFO2KXYrKx7jyJHTQ5Gx.ITAckivlS2emS","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":"2023-05-30 01:58:35","updated_at":"2023-05-30 01:58:35"}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:12:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":432,"updated_at":"2023-05-29T19:12:30.000000Z","created_at":"2023-05-29T19:12:30.000000Z","id":308}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:12:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":432,"updated_at":"2023-05-29T19:12:30.000000Z","created_at":"2023-05-29T19:12:30.000000Z","id":309}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:12:30',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":10,"menu_id":432,"updated_at":"2023-05-29T19:12:30.000000Z","created_at":"2023-05-29T19:12:30.000000Z","id":310}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:12:54',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":437,"updated_at":"2023-05-29T19:12:54.000000Z","created_at":"2023-05-29T19:12:54.000000Z","id":311}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:12:54',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":437,"updated_at":"2023-05-29T19:12:54.000000Z","created_at":"2023-05-29T19:12:54.000000Z","id":312}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:12:54',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":10,"menu_id":437,"updated_at":"2023-05-29T19:12:54.000000Z","created_at":"2023-05-29T19:12:54.000000Z","id":313}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 4,
                'log_date' => '2023-05-30 02:20:22',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/113.0.0.0 Safari\\/537.36 Edg\\/113.0.1774.57"}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:34',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":345,"updated_at":"2023-05-29T19:20:34.000000Z","created_at":"2023-05-29T19:20:34.000000Z","id":314}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:34',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":345,"updated_at":"2023-05-29T19:20:34.000000Z","created_at":"2023-05-29T19:20:34.000000Z","id":315}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:34',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":10,"menu_id":345,"updated_at":"2023-05-29T19:20:34.000000Z","created_at":"2023-05-29T19:20:34.000000Z","id":316}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:42',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":386,"updated_at":"2023-05-29T19:20:42.000000Z","created_at":"2023-05-29T19:20:42.000000Z","id":317}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:42',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":386,"updated_at":"2023-05-29T19:20:42.000000Z","created_at":"2023-05-29T19:20:42.000000Z","id":318}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:42',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":10,"menu_id":386,"updated_at":"2023-05-29T19:20:42.000000Z","created_at":"2023-05-29T19:20:42.000000Z","id":319}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:47',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":373,"updated_at":"2023-05-29T19:20:47.000000Z","created_at":"2023-05-29T19:20:47.000000Z","id":320}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:47',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":373,"updated_at":"2023-05-29T19:20:47.000000Z","created_at":"2023-05-29T19:20:47.000000Z","id":321}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:47',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":10,"menu_id":373,"updated_at":"2023-05-29T19:20:47.000000Z","created_at":"2023-05-29T19:20:47.000000Z","id":322}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:52',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":411,"updated_at":"2023-05-29T19:20:52.000000Z","created_at":"2023-05-29T19:20:52.000000Z","id":323}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:52',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":411,"updated_at":"2023-05-29T19:20:52.000000Z","created_at":"2023-05-29T19:20:52.000000Z","id":324}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-05-30 02:20:52',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":10,"menu_id":411,"updated_at":"2023-05-29T19:20:52.000000Z","created_at":"2023-05-29T19:20:52.000000Z","id":325}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 4,
                'log_date' => '2023-05-30 02:22:18',
                'table_name' => 'penduduk',
                'log_type' => 'edit',
                'data' => '{"id":566,"nik":"320523001300091","nama":"CICAH JULIANTI","alamat":"KP. BOJONG GEDE RT 02\\/08","status":0,"import_id":6,"created_at":"2023-05-29 20:44:29","updated_at":"2023-05-29 20:44:29"}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'log_date' => '2023-05-30 11:00:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/113.0.0.0 Safari\\/537.36 Edg\\/113.0.1774.57"}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:00:57',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":1,"nama":"Penghasilan","kode":"C1","keterangan":"0 - 3.500.000","import_id":null,"created_at":"2023-05-29 15:08:59","updated_at":"2023-05-29 15:08:59"}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:00:59',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":2,"nama":"Aset","kode":"C2","keterangan":"0 - 40.000.000","import_id":null,"created_at":"2023-05-29 15:09:16","updated_at":"2023-05-29 15:09:16"}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:02',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":3,"nama":"Kepemilikan Rumah","kode":"C3","keterangan":"0 - 100","import_id":null,"created_at":"2023-05-29 15:09:31","updated_at":"2023-05-29 15:09:31"}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:04',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":4,"nama":"Kondisi Dinding Rumah","kode":"C4","keterangan":"0 - 100","import_id":null,"created_at":"2023-05-29 15:09:45","updated_at":"2023-05-29 15:09:45"}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:07',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":5,"nama":"Kondisi Lantai Rumah","kode":"C5","keterangan":"0 - 100","import_id":null,"created_at":"2023-05-29 15:10:00","updated_at":"2023-05-29 15:10:00"}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:09',
                'table_name' => 'kriteria',
                'log_type' => 'delete',
                'data' => '{"id":6,"nama":"Syarat Khusus","kode":"C6","keterangan":"0 Tidak, 1 Ada","import_id":null,"created_at":"2023-05-29 15:10:18","updated_at":"2023-05-29 15:10:18"}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:21',
                'table_name' => 'import_kriteria',
                'log_type' => 'create',
                'data' => '{"nama":"Testing","slug":"testing","updated_at":"2023-05-30T05:01:21.000000Z","created_at":"2023-05-30T05:01:21.000000Z","id":1}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:21',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C1","nama":"Penghasilan","keterangan":"0 - 3.500.000","import_id":1,"updated_at":"2023-05-30T05:01:21.000000Z","created_at":"2023-05-30T05:01:21.000000Z","id":7}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:21',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C2","nama":"Aset","keterangan":"0 - 40.000.000","import_id":1,"updated_at":"2023-05-30T05:01:21.000000Z","created_at":"2023-05-30T05:01:21.000000Z","id":8}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:21',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C3","nama":"Kepemilikan Rumah","keterangan":"0 - 100","import_id":1,"updated_at":"2023-05-30T05:01:21.000000Z","created_at":"2023-05-30T05:01:21.000000Z","id":9}',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:21',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C4","nama":"Kondisi Dinding Rumah","keterangan":"0 - 100","import_id":1,"updated_at":"2023-05-30T05:01:21.000000Z","created_at":"2023-05-30T05:01:21.000000Z","id":10}',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:21',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C5","nama":"Kondisi Lantai Rumah","keterangan":"0 - 100","import_id":1,"updated_at":"2023-05-30T05:01:21.000000Z","created_at":"2023-05-30T05:01:21.000000Z","id":11}',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:21',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C6","nama":"Syarat Khusus","keterangan":"0 Tidak, 1 Ada","import_id":1,"updated_at":"2023-05-30T05:01:21.000000Z","created_at":"2023-05-30T05:01:21.000000Z","id":12}',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:21',
                'table_name' => 'import_kriteria',
                'log_type' => 'edit',
                'data' => '{"nama":"Testing","slug":"testing","updated_at":"2023-05-30 12:01:21","created_at":"2023-05-30 12:01:21","id":1}',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:43',
                'table_name' => 'import_penduduk',
                'log_type' => 'delete',
                'data' => '{"id":6,"nama":"Testing","slug":"testing","file":"20230529084428-testing.xlsx","count":269,"created_at":"2023-05-29 20:44:28","updated_at":"2023-05-29 20:44:36"}',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'import_penduduk',
                'log_type' => 'create',
                'data' => '{"nama":"Testing","slug":"testing","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":7}',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061114","nama":"ADE KHODIJAH","alamat":"KP JATI RT 03 RW 10","import_id":7,"status":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":808}',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":808,"nilai":"2144450","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4843}',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":808,"nilai":"69.81","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4844}',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":808,"nilai":"39136000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4845}',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":808,"nilai":"66.08","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4846}',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":808,"nilai":"72.14","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4847}',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":808,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4848}',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060991","nama":"ADE ROHANAH","alamat":"KP JATI RT 02 RW 03","import_id":7,"status":"2","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":809}',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":809,"nilai":"3327100","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4849}',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":809,"nilai":"58.87","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4850}',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":809,"nilai":"28752000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4851}',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":809,"nilai":"36.41","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4852}',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":809,"nilai":"80.67","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4853}',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":809,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4854}',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061104","nama":"ADE WATIN","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":810}',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":810,"nilai":"3158050","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4855}',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":810,"nilai":"92.91","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4856}',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":810,"nilai":"12272000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4857}',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":810,"nilai":"50.01","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4858}',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":810,"nilai":"69.65","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4859}',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":810,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4860}',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016023545","nama":"AI ATIKAH","alamat":"KP PASIR MUNCANG RT 01 RW 02","import_id":7,"status":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":811}',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":811,"nilai":"1212050","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4861}',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":811,"nilai":"67.03","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4862}',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":811,"nilai":"14176000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4863}',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":811,"nilai":"80.31","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4864}',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":811,"nilai":"30.15","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4865}',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":811,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4866}',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300085","nama":"AI MARDIAH","alamat":"KP. PASIR MUNCANG RT. 02 RW. 07","import_id":7,"status":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":812}',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":812,"nilai":"2014950","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4867}',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":812,"nilai":"91.98","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4868}',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":812,"nilai":"22712000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4869}',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":812,"nilai":"46.61","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4870}',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":812,"nilai":"38.61","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4871}',
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":812,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4872}',
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300890","nama":"AI MARLINA","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":813}',
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":813,"nilai":"2710750","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4873}',
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":813,"nilai":"57.89","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4874}',
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":813,"nilai":"24092000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4875}',
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":813,"nilai":"86.55","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4876}',
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":813,"nilai":"50.63","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4877}',
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":813,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4878}',
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300888","nama":"AI MARPUAH","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":814}',
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":814,"nilai":"3214400","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4879}',
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":814,"nilai":"83.46","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4880}',
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":814,"nilai":"12484000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4881}',
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":814,"nilai":"61.27","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4882}',
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":814,"nilai":"69.81","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4883}',
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":814,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4884}',
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980521","nama":"AI NAPISAH","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":7,"status":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":815}',
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":815,"nilai":"3451700","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4885}',
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":815,"nilai":"44.36","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4886}',
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":815,"nilai":"21592000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4887}',
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":815,"nilai":"91.19","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4888}',
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":815,"nilai":"57.95","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4889}',
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":815,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4890}',
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300064","nama":"AI ROHAENI","alamat":"KP. BOJONG GEDE RT 01\\/05","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":816}',
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":816,"nilai":"2644950","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4891}',
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":816,"nilai":"69.79","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4892}',
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":816,"nilai":"34888000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4893}',
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":816,"nilai":"68.68","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4894}',
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":816,"nilai":"83.37","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4895}',
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":816,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4896}',
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300850","nama":"AI ROSTINI","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":817}',
            ),
            107 => 
            array (
                'id' => 108,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":817,"nilai":"2098250","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4897}',
            ),
            108 => 
            array (
                'id' => 109,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":817,"nilai":"81.9","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4898}',
            ),
            109 => 
            array (
                'id' => 110,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":817,"nilai":"27004000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4899}',
            ),
            110 => 
            array (
                'id' => 111,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":817,"nilai":"80.07","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4900}',
            ),
            111 => 
            array (
                'id' => 112,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":817,"nilai":"66.09","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4901}',
            ),
            112 => 
            array (
                'id' => 113,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":817,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4902}',
            ),
            113 => 
            array (
                'id' => 114,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300892","nama":"AISYAH","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":818}',
            ),
            114 => 
            array (
                'id' => 115,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":818,"nilai":"1574650","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4903}',
            ),
            115 => 
            array (
                'id' => 116,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":818,"nilai":"86.77","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4904}',
            ),
            116 => 
            array (
                'id' => 117,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":818,"nilai":"29508000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4905}',
            ),
            117 => 
            array (
                'id' => 118,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":818,"nilai":"60.54","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4906}',
            ),
            118 => 
            array (
                'id' => 119,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":818,"nilai":"78.06","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4907}',
            ),
            119 => 
            array (
                'id' => 120,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":818,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4908}',
            ),
            120 => 
            array (
                'id' => 121,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300082","nama":"ALIS","alamat":"KP. GEGERLOA RT. 01 RW. 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":819}',
            ),
            121 => 
            array (
                'id' => 122,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":819,"nilai":"1594950","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4909}',
            ),
            122 => 
            array (
                'id' => 123,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":819,"nilai":"55.51","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4910}',
            ),
            123 => 
            array (
                'id' => 124,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":819,"nilai":"12008000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4911}',
            ),
            124 => 
            array (
                'id' => 125,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":819,"nilai":"66.08","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4912}',
            ),
            125 => 
            array (
                'id' => 126,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":819,"nilai":"72.14","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4913}',
            ),
            126 => 
            array (
                'id' => 127,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":819,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4914}',
            ),
            127 => 
            array (
                'id' => 128,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060981","nama":"AMINAH","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":820}',
            ),
            128 => 
            array (
                'id' => 129,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":820,"nilai":"2256450","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4915}',
            ),
            129 => 
            array (
                'id' => 130,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":820,"nilai":"85.76","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4916}',
            ),
            130 => 
            array (
                'id' => 131,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":820,"nilai":"25088000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4917}',
            ),
            131 => 
            array (
                'id' => 132,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":820,"nilai":"98.09","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4918}',
            ),
            132 => 
            array (
                'id' => 133,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":820,"nilai":"51.59","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4919}',
            ),
            133 => 
            array (
                'id' => 134,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":820,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4920}',
            ),
            134 => 
            array (
                'id' => 135,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300883","nama":"ANI LESTARI","alamat":"KP JATI RW 10 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":821}',
            ),
            135 => 
            array (
                'id' => 136,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":821,"nilai":"2573200","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4921}',
            ),
            136 => 
            array (
                'id' => 137,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":821,"nilai":"78.02","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4922}',
            ),
            137 => 
            array (
                'id' => 138,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":821,"nilai":"11276000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4923}',
            ),
            138 => 
            array (
                'id' => 139,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":821,"nilai":"90.23","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4924}',
            ),
            139 => 
            array (
                'id' => 140,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":821,"nilai":"92.91","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4925}',
            ),
            140 => 
            array (
                'id' => 141,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":821,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4926}',
            ),
            141 => 
            array (
                'id' => 142,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980524","nama":"ANI NURHAYATI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":822}',
            ),
            142 => 
            array (
                'id' => 143,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":822,"nilai":"3253600","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4927}',
            ),
            143 => 
            array (
                'id' => 144,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":822,"nilai":"28.08","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4928}',
            ),
            144 => 
            array (
                'id' => 145,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":822,"nilai":"15520000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4929}',
            ),
            145 => 
            array (
                'id' => 146,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":822,"nilai":"98.67","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4930}',
            ),
            146 => 
            array (
                'id' => 147,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":822,"nilai":"34.39","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4931}',
            ),
            147 => 
            array (
                'id' => 148,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":822,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4932}',
            ),
            148 => 
            array (
                'id' => 149,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523019000049","nama":"ANIH","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":823}',
            ),
            149 => 
            array (
                'id' => 150,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":823,"nilai":"960750","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4933}',
            ),
            150 => 
            array (
                'id' => 151,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":823,"nilai":"66.37","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4934}',
            ),
            151 => 
            array (
                'id' => 152,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":823,"nilai":"17124000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4935}',
            ),
            152 => 
            array (
                'id' => 153,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":823,"nilai":"95.7","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4936}',
            ),
            153 => 
            array (
                'id' => 154,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":823,"nilai":"83.68","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4937}',
            ),
            154 => 
            array (
                'id' => 155,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":823,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4938}',
            ),
            155 => 
            array (
                'id' => 156,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980541","nama":"ANISA","alamat":"KP CISALAM RW 06 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":824}',
            ),
            156 => 
            array (
                'id' => 157,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":824,"nilai":"1454950","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4939}',
            ),
            157 => 
            array (
                'id' => 158,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":824,"nilai":"89.93","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4940}',
            ),
            158 => 
            array (
                'id' => 159,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":824,"nilai":"37444000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4941}',
            ),
            159 => 
            array (
                'id' => 160,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":824,"nilai":"40.26","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4942}',
            ),
            160 => 
            array (
                'id' => 161,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":824,"nilai":"34.99","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4943}',
            ),
            161 => 
            array (
                'id' => 162,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":824,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4944}',
            ),
            162 => 
            array (
                'id' => 163,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000089","nama":"ANISAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":825}',
            ),
            163 => 
            array (
                'id' => 164,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":825,"nilai":"1651650","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4945}',
            ),
            164 => 
            array (
                'id' => 165,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":825,"nilai":"77.94","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4946}',
            ),
            165 => 
            array (
                'id' => 166,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":825,"nilai":"18812000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4947}',
            ),
            166 => 
            array (
                'id' => 167,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":825,"nilai":"37.16","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4948}',
            ),
            167 => 
            array (
                'id' => 168,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":825,"nilai":"35.34","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4949}',
            ),
            168 => 
            array (
                'id' => 169,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":825,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4950}',
            ),
            169 => 
            array (
                'id' => 170,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016024803","nama":"APON","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":826}',
            ),
            170 => 
            array (
                'id' => 171,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":826,"nilai":"2425850","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4951}',
            ),
            171 => 
            array (
                'id' => 172,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":826,"nilai":"92.28","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4952}',
            ),
            172 => 
            array (
                'id' => 173,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":826,"nilai":"25488000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4953}',
            ),
            173 => 
            array (
                'id' => 174,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":826,"nilai":"42.83","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4954}',
            ),
            174 => 
            array (
                'id' => 175,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":826,"nilai":"48.21","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4955}',
            ),
            175 => 
            array (
                'id' => 176,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":826,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4956}',
            ),
            176 => 
            array (
                'id' => 177,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060966","nama":"ASEP TAJUDIN","alamat":"KP DANGDEUR RT 01 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":827}',
            ),
            177 => 
            array (
                'id' => 178,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":827,"nilai":"1223950","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4957}',
            ),
            178 => 
            array (
                'id' => 179,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":827,"nilai":"45.94","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4958}',
            ),
            179 => 
            array (
                'id' => 180,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":827,"nilai":"33148000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4959}',
            ),
            180 => 
            array (
                'id' => 181,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":827,"nilai":"57.02","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4960}',
            ),
            181 => 
            array (
                'id' => 182,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":827,"nilai":"29.08","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4961}',
            ),
            182 => 
            array (
                'id' => 183,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":827,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4962}',
            ),
            183 => 
            array (
                'id' => 184,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300066","nama":"ATIKAH","alamat":"KP. BOJONG GEDE RT 02\\/05","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":828}',
            ),
            184 => 
            array (
                'id' => 185,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":828,"nilai":"2970100","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4963}',
            ),
            185 => 
            array (
                'id' => 186,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":828,"nilai":"65.23","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4964}',
            ),
            186 => 
            array (
                'id' => 187,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":828,"nilai":"27012000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4965}',
            ),
            187 => 
            array (
                'id' => 188,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":828,"nilai":"48.79","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4966}',
            ),
            188 => 
            array (
                'id' => 189,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":828,"nilai":"71.65","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4967}',
            ),
            189 => 
            array (
                'id' => 190,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":828,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4968}',
            ),
            190 => 
            array (
                'id' => 191,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061045","nama":"ATING","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":829}',
            ),
            191 => 
            array (
                'id' => 192,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":829,"nilai":"1623650","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4969}',
            ),
            192 => 
            array (
                'id' => 193,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":829,"nilai":"53.7","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4970}',
            ),
            193 => 
            array (
                'id' => 194,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":829,"nilai":"34372000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4971}',
            ),
            194 => 
            array (
                'id' => 195,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":829,"nilai":"93.11","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4972}',
            ),
            195 => 
            array (
                'id' => 196,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":829,"nilai":"75.47","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4973}',
            ),
            196 => 
            array (
                'id' => 197,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":829,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4974}',
            ),
            197 => 
            array (
                'id' => 198,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000224","nama":"AYIN","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":830}',
            ),
            198 => 
            array (
                'id' => 199,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":830,"nilai":"2207450","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4975}',
            ),
            199 => 
            array (
                'id' => 200,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":830,"nilai":"63.14","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4976}',
            ),
            200 => 
            array (
                'id' => 201,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":830,"nilai":"26840000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4977}',
            ),
            201 => 
            array (
                'id' => 202,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":830,"nilai":"80.31","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4978}',
            ),
            202 => 
            array (
                'id' => 203,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":830,"nilai":"30.15","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4979}',
            ),
            203 => 
            array (
                'id' => 204,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":830,"nilai":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4980}',
            ),
            204 => 
            array (
                'id' => 205,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300829","nama":"BADRIAH","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":831}',
            ),
            205 => 
            array (
                'id' => 206,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":831,"nilai":"2403800","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4981}',
            ),
            206 => 
            array (
                'id' => 207,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":831,"nilai":"83.37","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4982}',
            ),
            207 => 
            array (
                'id' => 208,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":831,"nilai":"32352000","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4983}',
            ),
            208 => 
            array (
                'id' => 209,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":831,"nilai":"62.17","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4984}',
            ),
            209 => 
            array (
                'id' => 210,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":831,"nilai":"51.16","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4985}',
            ),
            210 => 
            array (
                'id' => 211,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:57',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":831,"nilai":"1","updated_at":"2023-05-30T05:01:57.000000Z","created_at":"2023-05-30T05:01:57.000000Z","id":4986}',
            ),
            211 => 
            array (
                'id' => 212,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061005","nama":"BADRIAH","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":832}',
            ),
            212 => 
            array (
                'id' => 213,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":832,"nilai":"2175950","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4987}',
            ),
            213 => 
            array (
                'id' => 214,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":832,"nilai":"51.16","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4988}',
            ),
            214 => 
            array (
                'id' => 215,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":832,"nilai":"33632000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4989}',
            ),
            215 => 
            array (
                'id' => 216,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":832,"nilai":"69.31","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4990}',
            ),
            216 => 
            array (
                'id' => 217,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":832,"nilai":"92.28","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4991}',
            ),
            217 => 
            array (
                'id' => 218,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":832,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4992}',
            ),
            218 => 
            array (
                'id' => 219,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061033","nama":"CACIH SUMINAR","alamat":"KP CISALAM RW 06 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":833}',
            ),
            219 => 
            array (
                'id' => 220,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":833,"nilai":"3300500","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4993}',
            ),
            220 => 
            array (
                'id' => 221,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":833,"nilai":"56.97","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4994}',
            ),
            221 => 
            array (
                'id' => 222,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":833,"nilai":"15452000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4995}',
            ),
            222 => 
            array (
                'id' => 223,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":833,"nilai":"98.83","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4996}',
            ),
            223 => 
            array (
                'id' => 224,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":833,"nilai":"92.4","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4997}',
            ),
            224 => 
            array (
                'id' => 225,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":833,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4998}',
            ),
            225 => 
            array (
                'id' => 226,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300010","nama":"CIAH","alamat":"KP. DANGDEUR RT. 02 RW. 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":834}',
            ),
            226 => 
            array (
                'id' => 227,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":834,"nilai":"2038050","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":4999}',
            ),
            227 => 
            array (
                'id' => 228,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":834,"nilai":"85.44","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5000}',
            ),
            228 => 
            array (
                'id' => 229,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":834,"nilai":"26380000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5001}',
            ),
            229 => 
            array (
                'id' => 230,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":834,"nilai":"48.73","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5002}',
            ),
            230 => 
            array (
                'id' => 231,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":834,"nilai":"61.22","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5003}',
            ),
            231 => 
            array (
                'id' => 232,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":834,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5004}',
            ),
            232 => 
            array (
                'id' => 233,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300091","nama":"CICAH JULIANTI","alamat":"KP. BOJONG GEDE RT 02\\/08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":835}',
            ),
            233 => 
            array (
                'id' => 234,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":835,"nilai":"3286850","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5005}',
            ),
            234 => 
            array (
                'id' => 235,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":835,"nilai":"99.43","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5006}',
            ),
            235 => 
            array (
                'id' => 236,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":835,"nilai":"34996000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5007}',
            ),
            236 => 
            array (
                'id' => 237,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":835,"nilai":"55.84","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5008}',
            ),
            237 => 
            array (
                'id' => 238,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":835,"nilai":"80.54","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5009}',
            ),
            238 => 
            array (
                'id' => 239,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":835,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5010}',
            ),
            239 => 
            array (
                'id' => 240,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980480","nama":"CUCU SUMIATI","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":836}',
            ),
            240 => 
            array (
                'id' => 241,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":836,"nilai":"2195550","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5011}',
            ),
            241 => 
            array (
                'id' => 242,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":836,"nilai":"77.33","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5012}',
            ),
            242 => 
            array (
                'id' => 243,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":836,"nilai":"23488000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5013}',
            ),
            243 => 
            array (
                'id' => 244,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":836,"nilai":"38.66","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5014}',
            ),
            244 => 
            array (
                'id' => 245,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":836,"nilai":"41.97","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5015}',
            ),
            245 => 
            array (
                'id' => 246,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":836,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5016}',
            ),
            246 => 
            array (
                'id' => 247,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300818","nama":"DEDE","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":837}',
            ),
            247 => 
            array (
                'id' => 248,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":837,"nilai":"2537500","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5017}',
            ),
            248 => 
            array (
                'id' => 249,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":837,"nilai":"81.27","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5018}',
            ),
            249 => 
            array (
                'id' => 250,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":837,"nilai":"33268000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5019}',
            ),
            250 => 
            array (
                'id' => 251,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":837,"nilai":"60.54","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5020}',
            ),
            251 => 
            array (
                'id' => 252,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":837,"nilai":"54.75","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5021}',
            ),
            252 => 
            array (
                'id' => 253,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":837,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5022}',
            ),
            253 => 
            array (
                'id' => 254,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060990","nama":"DEDE ENI","alamat":"KP JATI RT 02 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":838}',
            ),
            254 => 
            array (
                'id' => 255,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":838,"nilai":"1690150","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5023}',
            ),
            255 => 
            array (
                'id' => 256,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":838,"nilai":"61.19","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5024}',
            ),
            256 => 
            array (
                'id' => 257,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":838,"nilai":"25624000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5025}',
            ),
            257 => 
            array (
                'id' => 258,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":838,"nilai":"57.58","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5026}',
            ),
            258 => 
            array (
                'id' => 259,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":838,"nilai":"80.17","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5027}',
            ),
            259 => 
            array (
                'id' => 260,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":838,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5028}',
            ),
            260 => 
            array (
                'id' => 261,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980506","nama":"DEDE MASRIPAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":839}',
            ),
            261 => 
            array (
                'id' => 262,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":839,"nilai":"2975000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5029}',
            ),
            262 => 
            array (
                'id' => 263,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":839,"nilai":"28.51","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5030}',
            ),
            263 => 
            array (
                'id' => 264,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":839,"nilai":"28416000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5031}',
            ),
            264 => 
            array (
                'id' => 265,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":839,"nilai":"37.78","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5032}',
            ),
            265 => 
            array (
                'id' => 266,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":839,"nilai":"40.91","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5033}',
            ),
            266 => 
            array (
                'id' => 267,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":839,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5034}',
            ),
            267 => 
            array (
                'id' => 268,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060989","nama":"DEDE NANI","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":840}',
            ),
            268 => 
            array (
                'id' => 269,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":840,"nilai":"2582300","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5035}',
            ),
            269 => 
            array (
                'id' => 270,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":840,"nilai":"34.81","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5036}',
            ),
            270 => 
            array (
                'id' => 271,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":840,"nilai":"37208000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5037}',
            ),
            271 => 
            array (
                'id' => 272,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":840,"nilai":"66.05","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5038}',
            ),
            272 => 
            array (
                'id' => 273,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":840,"nilai":"37.3","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5039}',
            ),
            273 => 
            array (
                'id' => 274,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":840,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5040}',
            ),
            274 => 
            array (
                'id' => 275,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980276","nama":"DEDE SITI NURJANAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":841}',
            ),
            275 => 
            array (
                'id' => 276,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":841,"nilai":"3314850","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5041}',
            ),
            276 => 
            array (
                'id' => 277,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":841,"nilai":"36.49","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5042}',
            ),
            277 => 
            array (
                'id' => 278,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":841,"nilai":"35672000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5043}',
            ),
            278 => 
            array (
                'id' => 279,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":841,"nilai":"50.34","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5044}',
            ),
            279 => 
            array (
                'id' => 280,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":841,"nilai":"83.19","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5045}',
            ),
            280 => 
            array (
                'id' => 281,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":841,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5046}',
            ),
            281 => 
            array (
                'id' => 282,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000251","nama":"DEDE SOLIHAH","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":842}',
            ),
            282 => 
            array (
                'id' => 283,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":842,"nilai":"1876000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5047}',
            ),
            283 => 
            array (
                'id' => 284,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":842,"nilai":"58.67","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5048}',
            ),
            284 => 
            array (
                'id' => 285,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":842,"nilai":"19308000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5049}',
            ),
            285 => 
            array (
                'id' => 286,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":842,"nilai":"42.83","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5050}',
            ),
            286 => 
            array (
                'id' => 287,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":842,"nilai":"48.21","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5051}',
            ),
            287 => 
            array (
                'id' => 288,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":842,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5052}',
            ),
            288 => 
            array (
                'id' => 289,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300856","nama":"DEDE SUPRIATNA","alamat":"KP GEGERLOA RT 01 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":843}',
            ),
            289 => 
            array (
                'id' => 290,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":843,"nilai":"2248050","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5053}',
            ),
            290 => 
            array (
                'id' => 291,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":843,"nilai":"50.28","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5054}',
            ),
            291 => 
            array (
                'id' => 292,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":843,"nilai":"38840000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5055}',
            ),
            292 => 
            array (
                'id' => 293,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":843,"nilai":"56.4","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5056}',
            ),
            293 => 
            array (
                'id' => 294,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":843,"nilai":"56.99","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5057}',
            ),
            294 => 
            array (
                'id' => 295,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":843,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5058}',
            ),
            295 => 
            array (
                'id' => 296,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300045","nama":"DEDEH","alamat":"KP. JATI RT 03\\/03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":844}',
            ),
            296 => 
            array (
                'id' => 297,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":844,"nilai":"3074750","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5059}',
            ),
            297 => 
            array (
                'id' => 298,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":844,"nilai":"46.15","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5060}',
            ),
            298 => 
            array (
                'id' => 299,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":844,"nilai":"38812000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5061}',
            ),
            299 => 
            array (
                'id' => 300,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":844,"nilai":"93.11","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5062}',
            ),
            300 => 
            array (
                'id' => 301,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":844,"nilai":"75.47","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5063}',
            ),
            301 => 
            array (
                'id' => 302,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":844,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5064}',
            ),
            302 => 
            array (
                'id' => 303,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000250","nama":"DEDEH JUARIAH","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":845}',
            ),
            303 => 
            array (
                'id' => 304,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":845,"nilai":"2517550","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5065}',
            ),
            304 => 
            array (
                'id' => 305,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":845,"nilai":"55.85","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5066}',
            ),
            305 => 
            array (
                'id' => 306,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":845,"nilai":"17976000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5067}',
            ),
            306 => 
            array (
                'id' => 307,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":845,"nilai":"77.45","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5068}',
            ),
            307 => 
            array (
                'id' => 308,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":845,"nilai":"57.89","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5069}',
            ),
            308 => 
            array (
                'id' => 309,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":845,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5070}',
            ),
            309 => 
            array (
                'id' => 310,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061074","nama":"DEDEH KODARIAH","alamat":"KP PATROL RT 01 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":846}',
            ),
            310 => 
            array (
                'id' => 311,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":846,"nilai":"2802100","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5071}',
            ),
            311 => 
            array (
                'id' => 312,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":846,"nilai":"34.65","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5072}',
            ),
            312 => 
            array (
                'id' => 313,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":846,"nilai":"19880000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5073}',
            ),
            313 => 
            array (
                'id' => 314,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":846,"nilai":"99.47","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5074}',
            ),
            314 => 
            array (
                'id' => 315,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":846,"nilai":"68.33","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5075}',
            ),
            315 => 
            array (
                'id' => 316,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":846,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5076}',
            ),
            316 => 
            array (
                'id' => 317,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061025","nama":"DETI","alamat":"KP. SARPEUNDEUY RT 002 \\/ RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":847}',
            ),
            317 => 
            array (
                'id' => 318,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":847,"nilai":"3180100","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5077}',
            ),
            318 => 
            array (
                'id' => 319,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":847,"nilai":"80.59","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5078}',
            ),
            319 => 
            array (
                'id' => 320,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":847,"nilai":"29712000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5079}',
            ),
            320 => 
            array (
                'id' => 321,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":847,"nilai":"88.38","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5080}',
            ),
            321 => 
            array (
                'id' => 322,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":847,"nilai":"68.24","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5081}',
            ),
            322 => 
            array (
                'id' => 323,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":847,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5082}',
            ),
            323 => 
            array (
                'id' => 324,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060960","nama":"DEVITA","alamat":"KP DANGDEUR RT 01 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":848}',
            ),
            324 => 
            array (
                'id' => 325,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":848,"nilai":"1153950","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5083}',
            ),
            325 => 
            array (
                'id' => 326,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":848,"nilai":"29.74","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5084}',
            ),
            326 => 
            array (
                'id' => 327,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":848,"nilai":"31684000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5085}',
            ),
            327 => 
            array (
                'id' => 328,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":848,"nilai":"41.51","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5086}',
            ),
            328 => 
            array (
                'id' => 329,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":848,"nilai":"86.52","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5087}',
            ),
            329 => 
            array (
                'id' => 330,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":848,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5088}',
            ),
            330 => 
            array (
                'id' => 331,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300853","nama":"DEWI KODARIAH","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":849}',
            ),
            331 => 
            array (
                'id' => 332,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":849,"nilai":"2312800","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5089}',
            ),
            332 => 
            array (
                'id' => 333,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":849,"nilai":"72.14","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5090}',
            ),
            333 => 
            array (
                'id' => 334,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":849,"nilai":"17584000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5091}',
            ),
            334 => 
            array (
                'id' => 335,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":849,"nilai":"46.39","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5092}',
            ),
            335 => 
            array (
                'id' => 336,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":849,"nilai":"53.7","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5093}',
            ),
            336 => 
            array (
                'id' => 337,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":849,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5094}',
            ),
            337 => 
            array (
                'id' => 338,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300822","nama":"DEWI MARDIANA","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":850}',
            ),
            338 => 
            array (
                'id' => 339,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":850,"nilai":"2502150","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5095}',
            ),
            339 => 
            array (
                'id' => 340,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":850,"nilai":"92.36","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5096}',
            ),
            340 => 
            array (
                'id' => 341,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":850,"nilai":"12596000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5097}',
            ),
            341 => 
            array (
                'id' => 342,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":850,"nilai":"38","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5098}',
            ),
            342 => 
            array (
                'id' => 343,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":850,"nilai":"46.85","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5099}',
            ),
            343 => 
            array (
                'id' => 344,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":850,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5100}',
            ),
            344 => 
            array (
                'id' => 345,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300076","nama":"DUDUNG EYE","alamat":"KP. CISALAM RT 02\\/06","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":851}',
            ),
            345 => 
            array (
                'id' => 346,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":851,"nilai":"3323950","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5101}',
            ),
            346 => 
            array (
                'id' => 347,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":851,"nilai":"73.75","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5102}',
            ),
            347 => 
            array (
                'id' => 348,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":851,"nilai":"11816000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5103}',
            ),
            348 => 
            array (
                'id' => 349,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":851,"nilai":"50.01","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5104}',
            ),
            349 => 
            array (
                'id' => 350,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":851,"nilai":"69.65","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5105}',
            ),
            350 => 
            array (
                'id' => 351,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":851,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5106}',
            ),
            351 => 
            array (
                'id' => 352,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061116","nama":"ECIN","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":852}',
            ),
            352 => 
            array (
                'id' => 353,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":852,"nilai":"3029250","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5107}',
            ),
            353 => 
            array (
                'id' => 354,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":852,"nilai":"50.63","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5108}',
            ),
            354 => 
            array (
                'id' => 355,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":852,"nilai":"17936000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5109}',
            ),
            355 => 
            array (
                'id' => 356,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":852,"nilai":"46.61","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5110}',
            ),
            356 => 
            array (
                'id' => 357,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":852,"nilai":"38.61","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5111}',
            ),
            357 => 
            array (
                'id' => 358,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":852,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5112}',
            ),
            358 => 
            array (
                'id' => 359,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300836","nama":"EEN","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":853}',
            ),
            359 => 
            array (
                'id' => 360,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":853,"nilai":"3392900","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5113}',
            ),
            360 => 
            array (
                'id' => 361,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":853,"nilai":"34.78","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5114}',
            ),
            361 => 
            array (
                'id' => 362,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":853,"nilai":"34832000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5115}',
            ),
            362 => 
            array (
                'id' => 363,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":853,"nilai":"98.67","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5116}',
            ),
            363 => 
            array (
                'id' => 364,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":853,"nilai":"34.39","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5117}',
            ),
            364 => 
            array (
                'id' => 365,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":853,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5118}',
            ),
            365 => 
            array (
                'id' => 366,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300898","nama":"EET","alamat":"KP SARPEUNDEUY RT 003 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":854}',
            ),
            366 => 
            array (
                'id' => 367,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":854,"nilai":"2579500","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5119}',
            ),
            367 => 
            array (
                'id' => 368,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":854,"nilai":"78.46","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5120}',
            ),
            368 => 
            array (
                'id' => 369,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":854,"nilai":"33528000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5121}',
            ),
            369 => 
            array (
                'id' => 370,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":854,"nilai":"34.03","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5122}',
            ),
            370 => 
            array (
                'id' => 371,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":854,"nilai":"47.85","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5123}',
            ),
            371 => 
            array (
                'id' => 372,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":854,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5124}',
            ),
            372 => 
            array (
                'id' => 373,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300017","nama":"ELA NURLAELA","alamat":"KP PASIR MUNCANG RT 01 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":855}',
            ),
            373 => 
            array (
                'id' => 374,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":855,"nilai":"1025500","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5125}',
            ),
            374 => 
            array (
                'id' => 375,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":855,"nilai":"65.02","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5126}',
            ),
            375 => 
            array (
                'id' => 376,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":855,"nilai":"30476000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5127}',
            ),
            376 => 
            array (
                'id' => 377,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":855,"nilai":"69.31","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5128}',
            ),
            377 => 
            array (
                'id' => 378,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":855,"nilai":"92.28","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5129}',
            ),
            378 => 
            array (
                'id' => 379,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":855,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5130}',
            ),
            379 => 
            array (
                'id' => 380,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300035","nama":"ELIN","alamat":"KP. PATROL RT. 04 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":856}',
            ),
            380 => 
            array (
                'id' => 381,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":856,"nilai":"2804900","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5131}',
            ),
            381 => 
            array (
                'id' => 382,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":856,"nilai":"89","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5132}',
            ),
            382 => 
            array (
                'id' => 383,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":856,"nilai":"37672000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5133}',
            ),
            383 => 
            array (
                'id' => 384,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":856,"nilai":"98.83","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5134}',
            ),
            384 => 
            array (
                'id' => 385,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":856,"nilai":"92.4","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5135}',
            ),
            385 => 
            array (
                'id' => 386,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":856,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5136}',
            ),
            386 => 
            array (
                'id' => 387,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001380055","nama":"ELIS LISNAWATI","alamat":"SARIPEUNDEUY RT 04\\/04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":857}',
            ),
            387 => 
            array (
                'id' => 388,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":857,"nilai":"1548050","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5137}',
            ),
            388 => 
            array (
                'id' => 389,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":857,"nilai":"34.93","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5138}',
            ),
            389 => 
            array (
                'id' => 390,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":857,"nilai":"12788000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5139}',
            ),
            390 => 
            array (
                'id' => 391,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":857,"nilai":"95.7","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5140}',
            ),
            391 => 
            array (
                'id' => 392,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":857,"nilai":"83.68","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5141}',
            ),
            392 => 
            array (
                'id' => 393,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":857,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5142}',
            ),
            393 => 
            array (
                'id' => 394,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061055","nama":"EMIN","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":858}',
            ),
            394 => 
            array (
                'id' => 395,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":858,"nilai":"3499300","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5143}',
            ),
            395 => 
            array (
                'id' => 396,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":858,"nilai":"53.09","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5144}',
            ),
            396 => 
            array (
                'id' => 397,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":858,"nilai":"17020000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5145}',
            ),
            397 => 
            array (
                'id' => 398,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":858,"nilai":"92.35","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5146}',
            ),
            398 => 
            array (
                'id' => 399,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":858,"nilai":"26.73","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5147}',
            ),
            399 => 
            array (
                'id' => 400,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":858,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5148}',
            ),
            400 => 
            array (
                'id' => 401,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300018","nama":"EMPOL SITI HULAELAH","alamat":"KP PASIR MUNCANG RT 01 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":859}',
            ),
            401 => 
            array (
                'id' => 402,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":859,"nilai":"2425150","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5149}',
            ),
            402 => 
            array (
                'id' => 403,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":859,"nilai":"59.86","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5150}',
            ),
            403 => 
            array (
                'id' => 404,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":859,"nilai":"39480000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5151}',
            ),
            404 => 
            array (
                'id' => 405,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":859,"nilai":"33.18","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5152}',
            ),
            405 => 
            array (
                'id' => 406,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":859,"nilai":"80.94","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5153}',
            ),
            406 => 
            array (
                'id' => 407,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":859,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5154}',
            ),
            407 => 
            array (
                'id' => 408,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061007","nama":"EMPONG KOMARIAH","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":860}',
            ),
            408 => 
            array (
                'id' => 409,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":860,"nilai":"2355150","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5155}',
            ),
            409 => 
            array (
                'id' => 410,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":860,"nilai":"39.48","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5156}',
            ),
            410 => 
            array (
                'id' => 411,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":860,"nilai":"39216000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5157}',
            ),
            411 => 
            array (
                'id' => 412,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":860,"nilai":"33.18","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5158}',
            ),
            412 => 
            array (
                'id' => 413,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":860,"nilai":"80.94","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5159}',
            ),
            413 => 
            array (
                'id' => 414,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":860,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5160}',
            ),
            414 => 
            array (
                'id' => 415,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300839","nama":"ENCENG","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":861}',
            ),
            415 => 
            array (
                'id' => 416,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":861,"nilai":"2786350","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5161}',
            ),
            416 => 
            array (
                'id' => 417,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":861,"nilai":"94.63","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5162}',
            ),
            417 => 
            array (
                'id' => 418,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":861,"nilai":"32784000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5163}',
            ),
            418 => 
            array (
                'id' => 419,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":861,"nilai":"40.26","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5164}',
            ),
            419 => 
            array (
                'id' => 420,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":861,"nilai":"34.99","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5165}',
            ),
            420 => 
            array (
                'id' => 421,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":861,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5166}',
            ),
            421 => 
            array (
                'id' => 422,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060997","nama":"ENCUM","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":862}',
            ),
            422 => 
            array (
                'id' => 423,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":862,"nilai":"1668800","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5167}',
            ),
            423 => 
            array (
                'id' => 424,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":862,"nilai":"66.93","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5168}',
            ),
            424 => 
            array (
                'id' => 425,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":862,"nilai":"27716000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5169}',
            ),
            425 => 
            array (
                'id' => 426,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":862,"nilai":"97.19","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5170}',
            ),
            426 => 
            array (
                'id' => 427,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":862,"nilai":"35.9","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5171}',
            ),
            427 => 
            array (
                'id' => 428,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":862,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5172}',
            ),
            428 => 
            array (
                'id' => 429,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300894","nama":"ENI MARLENI","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":863}',
            ),
            429 => 
            array (
                'id' => 430,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":863,"nilai":"1798300","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5173}',
            ),
            430 => 
            array (
                'id' => 431,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":863,"nilai":"41.84","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5174}',
            ),
            431 => 
            array (
                'id' => 432,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":863,"nilai":"27296000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5175}',
            ),
            432 => 
            array (
                'id' => 433,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":863,"nilai":"51.4","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5176}',
            ),
            433 => 
            array (
                'id' => 434,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":863,"nilai":"61.91","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5177}',
            ),
            434 => 
            array (
                'id' => 435,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":863,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5178}',
            ),
            435 => 
            array (
                'id' => 436,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061090","nama":"ENIS","alamat":"KP PATROL RT 02 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":864}',
            ),
            436 => 
            array (
                'id' => 437,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":864,"nilai":"2573900","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5179}',
            ),
            437 => 
            array (
                'id' => 438,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":864,"nilai":"37.7","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5180}',
            ),
            438 => 
            array (
                'id' => 439,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":864,"nilai":"18136000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5181}',
            ),
            439 => 
            array (
                'id' => 440,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":864,"nilai":"47.42","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5182}',
            ),
            440 => 
            array (
                'id' => 441,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":864,"nilai":"79.77","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5183}',
            ),
            441 => 
            array (
                'id' => 442,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":864,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5184}',
            ),
            442 => 
            array (
                'id' => 443,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300012","nama":"ENJANG JAMALUDIN","alamat":"KP PASIRMUNCANG RT. 01 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":865}',
            ),
            443 => 
            array (
                'id' => 444,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":865,"nilai":"2737350","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5185}',
            ),
            444 => 
            array (
                'id' => 445,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":865,"nilai":"83.87","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5186}',
            ),
            445 => 
            array (
                'id' => 446,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":865,"nilai":"19540000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5187}',
            ),
            446 => 
            array (
                'id' => 447,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":865,"nilai":"95.11","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5188}',
            ),
            447 => 
            array (
                'id' => 448,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":865,"nilai":"52.06","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5189}',
            ),
            448 => 
            array (
                'id' => 449,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":865,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5190}',
            ),
            449 => 
            array (
                'id' => 450,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061050","nama":"ENOH","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":866}',
            ),
            450 => 
            array (
                'id' => 451,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":866,"nilai":"1572550","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5191}',
            ),
            451 => 
            array (
                'id' => 452,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":866,"nilai":"59.39","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5192}',
            ),
            452 => 
            array (
                'id' => 453,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":866,"nilai":"29176000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5193}',
            ),
            453 => 
            array (
                'id' => 454,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":866,"nilai":"47.72","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5194}',
            ),
            454 => 
            array (
                'id' => 455,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":866,"nilai":"34.55","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5195}',
            ),
            455 => 
            array (
                'id' => 456,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":866,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5196}',
            ),
            456 => 
            array (
                'id' => 457,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300857","nama":"ENOK","alamat":"KP GEGERLOA RT 01 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":867}',
            ),
            457 => 
            array (
                'id' => 458,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":867,"nilai":"1273650","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5197}',
            ),
            458 => 
            array (
                'id' => 459,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":867,"nilai":"66.59","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5198}',
            ),
            459 => 
            array (
                'id' => 460,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":867,"nilai":"18332000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5199}',
            ),
            460 => 
            array (
                'id' => 461,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":867,"nilai":"76.03","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5200}',
            ),
            461 => 
            array (
                'id' => 462,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":867,"nilai":"30.69","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5201}',
            ),
            462 => 
            array (
                'id' => 463,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":867,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5202}',
            ),
            463 => 
            array (
                'id' => 464,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016013743","nama":"ENTI NURHAETI","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":868}',
            ),
            464 => 
            array (
                'id' => 465,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":868,"nilai":"3362100","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5203}',
            ),
            465 => 
            array (
                'id' => 466,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":868,"nilai":"70.42","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5204}',
            ),
            466 => 
            array (
                'id' => 467,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":868,"nilai":"25968000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5205}',
            ),
            467 => 
            array (
                'id' => 468,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":868,"nilai":"37.16","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5206}',
            ),
            468 => 
            array (
                'id' => 469,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":868,"nilai":"35.34","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5207}',
            ),
            469 => 
            array (
                'id' => 470,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":868,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5208}',
            ),
            470 => 
            array (
                'id' => 471,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000176","nama":"ENUNG","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":869}',
            ),
            471 => 
            array (
                'id' => 472,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":869,"nilai":"2867550","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5209}',
            ),
            472 => 
            array (
                'id' => 473,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":869,"nilai":"51.71","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5210}',
            ),
            473 => 
            array (
                'id' => 474,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":869,"nilai":"35168000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5211}',
            ),
            474 => 
            array (
                'id' => 475,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":869,"nilai":"73.52","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5212}',
            ),
            475 => 
            array (
                'id' => 476,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":869,"nilai":"78.02","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5213}',
            ),
            476 => 
            array (
                'id' => 477,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":869,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5214}',
            ),
            477 => 
            array (
                'id' => 478,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980486","nama":"ENUNG HAYATI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":870}',
            ),
            478 => 
            array (
                'id' => 479,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":870,"nilai":"2599800","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5215}',
            ),
            479 => 
            array (
                'id' => 480,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":870,"nilai":"51.48","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5216}',
            ),
            480 => 
            array (
                'id' => 481,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":870,"nilai":"13264000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5217}',
            ),
            481 => 
            array (
                'id' => 482,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":870,"nilai":"62.17","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5218}',
            ),
            482 => 
            array (
                'id' => 483,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":870,"nilai":"51.16","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5219}',
            ),
            483 => 
            array (
                'id' => 484,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":870,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5220}',
            ),
            484 => 
            array (
                'id' => 485,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050701","nama":"ENUNG HOIROH","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":871}',
            ),
            485 => 
            array (
                'id' => 486,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":871,"nilai":"1621900","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5221}',
            ),
            486 => 
            array (
                'id' => 487,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":871,"nilai":"93.6","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5222}',
            ),
            487 => 
            array (
                'id' => 488,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":871,"nilai":"25120000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5223}',
            ),
            488 => 
            array (
                'id' => 489,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":871,"nilai":"73.7","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5224}',
            ),
            489 => 
            array (
                'id' => 490,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":871,"nilai":"78.46","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5225}',
            ),
            490 => 
            array (
                'id' => 491,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":871,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5226}',
            ),
            491 => 
            array (
                'id' => 492,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300077","nama":"ENUR","alamat":"KP. CISALAM RT 02\\/06","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":872}',
            ),
            492 => 
            array (
                'id' => 493,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":872,"nilai":"1312150","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5227}',
            ),
            493 => 
            array (
                'id' => 494,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":872,"nilai":"65.54","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5228}',
            ),
            494 => 
            array (
                'id' => 495,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":872,"nilai":"23768000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5229}',
            ),
            495 => 
            array (
                'id' => 496,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":872,"nilai":"93.15","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5230}',
            ),
            496 => 
            array (
                'id' => 497,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":872,"nilai":"89.6","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5231}',
            ),
            497 => 
            array (
                'id' => 498,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":872,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5232}',
            ),
            498 => 
            array (
                'id' => 499,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300895","nama":"EPON","alamat":"K SARPEUNDEUY RW 11 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":873}',
            ),
            499 => 
            array (
                'id' => 500,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":873,"nilai":"3238550","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5233}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 501,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":873,"nilai":"40.47","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5234}',
            ),
            1 => 
            array (
                'id' => 502,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":873,"nilai":"34512000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5235}',
            ),
            2 => 
            array (
                'id' => 503,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":873,"nilai":"96.65","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5236}',
            ),
            3 => 
            array (
                'id' => 504,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":873,"nilai":"54.86","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5237}',
            ),
            4 => 
            array (
                'id' => 505,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":873,"nilai":"1","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5238}',
            ),
            5 => 
            array (
                'id' => 506,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300834","nama":"ERAT","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":874}',
            ),
            6 => 
            array (
                'id' => 507,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":874,"nilai":"1707650","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5239}',
            ),
            7 => 
            array (
                'id' => 508,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":874,"nilai":"71.65","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5240}',
            ),
            8 => 
            array (
                'id' => 509,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":874,"nilai":"37516000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5241}',
            ),
            9 => 
            array (
                'id' => 510,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":874,"nilai":"37.78","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5242}',
            ),
            10 => 
            array (
                'id' => 511,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":874,"nilai":"40.91","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5243}',
            ),
            11 => 
            array (
                'id' => 512,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":874,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5244}',
            ),
            12 => 
            array (
                'id' => 513,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300079","nama":"EROS ROSITA","alamat":"KP. CISALAM RT 02\\/06","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":875}',
            ),
            13 => 
            array (
                'id' => 514,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":875,"nilai":"1529500","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5245}',
            ),
            14 => 
            array (
                'id' => 515,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":875,"nilai":"46.2","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5246}',
            ),
            15 => 
            array (
                'id' => 516,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":875,"nilai":"39708000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5247}',
            ),
            16 => 
            array (
                'id' => 517,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":875,"nilai":"59.95","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5248}',
            ),
            17 => 
            array (
                'id' => 518,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":875,"nilai":"81.9","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5249}',
            ),
            18 => 
            array (
                'id' => 519,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":875,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5250}',
            ),
            19 => 
            array (
                'id' => 520,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300813","nama":"ESAH","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":876}',
            ),
            20 => 
            array (
                'id' => 521,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":876,"nilai":"2793700","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5251}',
            ),
            21 => 
            array (
                'id' => 522,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":876,"nilai":"60.23","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5252}',
            ),
            22 => 
            array (
                'id' => 523,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":876,"nilai":"27384000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5253}',
            ),
            23 => 
            array (
                'id' => 524,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":876,"nilai":"73.78","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5254}',
            ),
            24 => 
            array (
                'id' => 525,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":876,"nilai":"34.81","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5255}',
            ),
            25 => 
            array (
                'id' => 526,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":876,"nilai":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5256}',
            ),
            26 => 
            array (
                'id' => 527,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050710","nama":"ETI","alamat":"KP SARPEUNDEUY RT 003 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":877}',
            ),
            27 => 
            array (
                'id' => 528,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":877,"nilai":"998200","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5257}',
            ),
            28 => 
            array (
                'id' => 529,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":877,"nilai":"62.67","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5258}',
            ),
            29 => 
            array (
                'id' => 530,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:58',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":877,"nilai":"24496000","updated_at":"2023-05-30T05:01:58.000000Z","created_at":"2023-05-30T05:01:58.000000Z","id":5259}',
            ),
            30 => 
            array (
                'id' => 531,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":877,"nilai":"96.92","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5260}',
            ),
            31 => 
            array (
                'id' => 532,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":877,"nilai":"85.28","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5261}',
            ),
            32 => 
            array (
                'id' => 533,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":877,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5262}',
            ),
            33 => 
            array (
                'id' => 534,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300815","nama":"ETI","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":878}',
            ),
            34 => 
            array (
                'id' => 535,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":878,"nilai":"3232250","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5263}',
            ),
            35 => 
            array (
                'id' => 536,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":878,"nilai":"26.73","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5264}',
            ),
            36 => 
            array (
                'id' => 537,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":878,"nilai":"24536000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5265}',
            ),
            37 => 
            array (
                'id' => 538,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":878,"nilai":"95.06","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5266}',
            ),
            38 => 
            array (
                'id' => 539,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":878,"nilai":"58.87","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5267}',
            ),
            39 => 
            array (
                'id' => 540,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":878,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5268}',
            ),
            40 => 
            array (
                'id' => 541,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300873","nama":"ETI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":879}',
            ),
            41 => 
            array (
                'id' => 542,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":879,"nilai":"1741950","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5269}',
            ),
            42 => 
            array (
                'id' => 543,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":879,"nilai":"72.7","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5270}',
            ),
            43 => 
            array (
                'id' => 544,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":879,"nilai":"29508000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5271}',
            ),
            44 => 
            array (
                'id' => 545,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":879,"nilai":"31.35","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5272}',
            ),
            45 => 
            array (
                'id' => 546,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":879,"nilai":"33.24","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5273}',
            ),
            46 => 
            array (
                'id' => 547,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":879,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5274}',
            ),
            47 => 
            array (
                'id' => 548,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980208","nama":"ETI KUSMIATI","alamat":"KP DANGDEUR RT 01 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":880}',
            ),
            48 => 
            array (
                'id' => 549,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":880,"nilai":"3035550","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5275}',
            ),
            49 => 
            array (
                'id' => 550,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":880,"nilai":"63.41","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5276}',
            ),
            50 => 
            array (
                'id' => 551,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":880,"nilai":"18940000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5277}',
            ),
            51 => 
            array (
                'id' => 552,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":880,"nilai":"65.48","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5278}',
            ),
            52 => 
            array (
                'id' => 553,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":880,"nilai":"61.87","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5279}',
            ),
            53 => 
            array (
                'id' => 554,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":880,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5280}',
            ),
            54 => 
            array (
                'id' => 555,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980107","nama":"ETI MULYANI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":881}',
            ),
            55 => 
            array (
                'id' => 556,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":881,"nilai":"3232600","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5281}',
            ),
            56 => 
            array (
                'id' => 557,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":881,"nilai":"82.64","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5282}',
            ),
            57 => 
            array (
                'id' => 558,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":881,"nilai":"39872000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5283}',
            ),
            58 => 
            array (
                'id' => 559,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":881,"nilai":"32.97","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5284}',
            ),
            59 => 
            array (
                'id' => 560,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":881,"nilai":"29.74","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5285}',
            ),
            60 => 
            array (
                'id' => 561,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":881,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5286}',
            ),
            61 => 
            array (
                'id' => 562,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061021","nama":"ETI SUMIATI","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":882}',
            ),
            62 => 
            array (
                'id' => 563,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":882,"nilai":"3453450","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5287}',
            ),
            63 => 
            array (
                'id' => 564,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":882,"nilai":"34.39","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5288}',
            ),
            64 => 
            array (
                'id' => 565,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":882,"nilai":"30276000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5289}',
            ),
            65 => 
            array (
                'id' => 566,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":882,"nilai":"46.34","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5290}',
            ),
            66 => 
            array (
                'id' => 567,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":882,"nilai":"93.6","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5291}',
            ),
            67 => 
            array (
                'id' => 568,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":882,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5292}',
            ),
            68 => 
            array (
                'id' => 569,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050703","nama":"EUIS LATIPAH","alamat":"KP CISALAM RW 06 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":883}',
            ),
            69 => 
            array (
                'id' => 570,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":883,"nilai":"3093300","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5293}',
            ),
            70 => 
            array (
                'id' => 571,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":883,"nilai":"68.24","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5294}',
            ),
            71 => 
            array (
                'id' => 572,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":883,"nilai":"37720000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5295}',
            ),
            72 => 
            array (
                'id' => 573,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":883,"nilai":"42.57","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5296}',
            ),
            73 => 
            array (
                'id' => 574,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":883,"nilai":"74.14","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5297}',
            ),
            74 => 
            array (
                'id' => 575,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":883,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5298}',
            ),
            75 => 
            array (
                'id' => 576,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061117","nama":"EUIS SUSILAWATI","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":884}',
            ),
            76 => 
            array (
                'id' => 577,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":884,"nilai":"1463000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5299}',
            ),
            77 => 
            array (
                'id' => 578,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":884,"nilai":"34.29","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5300}',
            ),
            78 => 
            array (
                'id' => 579,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":884,"nilai":"22096000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5301}',
            ),
            79 => 
            array (
                'id' => 580,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":884,"nilai":"64.23","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5302}',
            ),
            80 => 
            array (
                'id' => 581,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":884,"nilai":"50.28","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5303}',
            ),
            81 => 
            array (
                'id' => 582,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":884,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5304}',
            ),
            82 => 
            array (
                'id' => 583,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050706","nama":"EULIS HARYANTI","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":885}',
            ),
            83 => 
            array (
                'id' => 584,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":885,"nilai":"3053750","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5305}',
            ),
            84 => 
            array (
                'id' => 585,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":885,"nilai":"52.28","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5306}',
            ),
            85 => 
            array (
                'id' => 586,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":885,"nilai":"26804000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5307}',
            ),
            86 => 
            array (
                'id' => 587,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":885,"nilai":"32.97","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5308}',
            ),
            87 => 
            array (
                'id' => 588,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":885,"nilai":"29.74","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5309}',
            ),
            88 => 
            array (
                'id' => 589,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":885,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5310}',
            ),
            89 => 
            array (
                'id' => 590,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000049","nama":"EULIS MARDIAH","alamat":"KP PATROL RT 01 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":886}',
            ),
            90 => 
            array (
                'id' => 591,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":886,"nilai":"2937550","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5311}',
            ),
            91 => 
            array (
                'id' => 592,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":886,"nilai":"91.47","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5312}',
            ),
            92 => 
            array (
                'id' => 593,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":886,"nilai":"28736000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5313}',
            ),
            93 => 
            array (
                'id' => 594,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":886,"nilai":"49.77","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5314}',
            ),
            94 => 
            array (
                'id' => 595,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":886,"nilai":"72.7","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5315}',
            ),
            95 => 
            array (
                'id' => 596,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":886,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5316}',
            ),
            96 => 
            array (
                'id' => 597,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300854","nama":"EULIS ROHIMAH","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":887}',
            ),
            97 => 
            array (
                'id' => 598,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":887,"nilai":"2184700","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5317}',
            ),
            98 => 
            array (
                'id' => 599,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":887,"nilai":"46.69","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5318}',
            ),
            99 => 
            array (
                'id' => 600,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":887,"nilai":"29864000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5319}',
            ),
            100 => 
            array (
                'id' => 601,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":887,"nilai":"61.79","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5320}',
            ),
            101 => 
            array (
                'id' => 602,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":887,"nilai":"34.67","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5321}',
            ),
            102 => 
            array (
                'id' => 603,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":887,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5322}',
            ),
            103 => 
            array (
                'id' => 604,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300034","nama":"EUTIK","alamat":"KP. PATROL RT. 04 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":888}',
            ),
            104 => 
            array (
                'id' => 605,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":888,"nilai":"1554700","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5323}',
            ),
            105 => 
            array (
                'id' => 606,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":888,"nilai":"39.24","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5324}',
            ),
            106 => 
            array (
                'id' => 607,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":888,"nilai":"29780000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5325}',
            ),
            107 => 
            array (
                'id' => 608,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":888,"nilai":"28.52","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5326}',
            ),
            108 => 
            array (
                'id' => 609,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":888,"nilai":"62.67","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5327}',
            ),
            109 => 
            array (
                'id' => 610,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":888,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5328}',
            ),
            110 => 
            array (
                'id' => 611,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300083","nama":"EUTIK","alamat":"KP. PASIR MUNCANG RT. 02 RW. 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":889}',
            ),
            111 => 
            array (
                'id' => 612,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":889,"nilai":"2898000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5329}',
            ),
            112 => 
            array (
                'id' => 613,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":889,"nilai":"69.03","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5330}',
            ),
            113 => 
            array (
                'id' => 614,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":889,"nilai":"35796000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5331}',
            ),
            114 => 
            array (
                'id' => 615,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":889,"nilai":"62.42","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5332}',
            ),
            115 => 
            array (
                'id' => 616,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":889,"nilai":"46.69","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5333}',
            ),
            116 => 
            array (
                'id' => 617,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":889,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5334}',
            ),
            117 => 
            array (
                'id' => 618,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061057","nama":"FATIMAH","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":890}',
            ),
            118 => 
            array (
                'id' => 619,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":890,"nilai":"1823500","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5335}',
            ),
            119 => 
            array (
                'id' => 620,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":890,"nilai":"72.72","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5336}',
            ),
            120 => 
            array (
                'id' => 621,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":890,"nilai":"15472000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5337}',
            ),
            121 => 
            array (
                'id' => 622,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":890,"nilai":"72.5","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5338}',
            ),
            122 => 
            array (
                'id' => 623,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":890,"nilai":"81.27","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5339}',
            ),
            123 => 
            array (
                'id' => 624,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":890,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5340}',
            ),
            124 => 
            array (
                'id' => 625,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016026002","nama":"FATMAWATI","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":891}',
            ),
            125 => 
            array (
                'id' => 626,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":891,"nilai":"2358300","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5341}',
            ),
            126 => 
            array (
                'id' => 627,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":891,"nilai":"66.37","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5342}',
            ),
            127 => 
            array (
                'id' => 628,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":891,"nilai":"39088000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5343}',
            ),
            128 => 
            array (
                'id' => 629,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":891,"nilai":"92.53","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5344}',
            ),
            129 => 
            array (
                'id' => 630,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":891,"nilai":"40.47","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5345}',
            ),
            130 => 
            array (
                'id' => 631,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":891,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5346}',
            ),
            131 => 
            array (
                'id' => 632,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300823","nama":"GEUGEU","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":892}',
            ),
            132 => 
            array (
                'id' => 633,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":892,"nilai":"1318450","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5347}',
            ),
            133 => 
            array (
                'id' => 634,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":892,"nilai":"92.39","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5348}',
            ),
            134 => 
            array (
                'id' => 635,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":892,"nilai":"34424000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5349}',
            ),
            135 => 
            array (
                'id' => 636,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":892,"nilai":"76.21","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5350}',
            ),
            136 => 
            array (
                'id' => 637,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":892,"nilai":"42.58","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5351}',
            ),
            137 => 
            array (
                'id' => 638,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":892,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5352}',
            ),
            138 => 
            array (
                'id' => 639,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980448","nama":"HABSAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":893}',
            ),
            139 => 
            array (
                'id' => 640,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":893,"nilai":"2710400","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5353}',
            ),
            140 => 
            array (
                'id' => 641,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":893,"nilai":"54.32","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5354}',
            ),
            141 => 
            array (
                'id' => 642,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":893,"nilai":"36212000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5355}',
            ),
            142 => 
            array (
                'id' => 643,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":893,"nilai":"76.21","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5356}',
            ),
            143 => 
            array (
                'id' => 644,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":893,"nilai":"42.58","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5357}',
            ),
            144 => 
            array (
                'id' => 645,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":893,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5358}',
            ),
            145 => 
            array (
                'id' => 646,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061113","nama":"HAJAR","alamat":"KP JATI RT 03 RW 10","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":894}',
            ),
            146 => 
            array (
                'id' => 647,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":894,"nilai":"1073450","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5359}',
            ),
            147 => 
            array (
                'id' => 648,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":894,"nilai":"99.27","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5360}',
            ),
            148 => 
            array (
                'id' => 649,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":894,"nilai":"17584000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5361}',
            ),
            149 => 
            array (
                'id' => 650,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":894,"nilai":"93.43","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5362}',
            ),
            150 => 
            array (
                'id' => 651,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":894,"nilai":"62.34","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5363}',
            ),
            151 => 
            array (
                'id' => 652,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":894,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5364}',
            ),
            152 => 
            array (
                'id' => 653,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300027","nama":"HALIAH","alamat":"KP PASIR MUNCANG RT 02 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":895}',
            ),
            153 => 
            array (
                'id' => 654,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":895,"nilai":"1814050","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5365}',
            ),
            154 => 
            array (
                'id' => 655,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":895,"nilai":"31.79","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5366}',
            ),
            155 => 
            array (
                'id' => 656,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":895,"nilai":"22760000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5367}',
            ),
            156 => 
            array (
                'id' => 657,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":895,"nilai":"88.38","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5368}',
            ),
            157 => 
            array (
                'id' => 658,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":895,"nilai":"68.24","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5369}',
            ),
            158 => 
            array (
                'id' => 659,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":895,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5370}',
            ),
            159 => 
            array (
                'id' => 660,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300016","nama":"HANA REHANA","alamat":"KP PASIRMUNCANG RT. 01 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":896}',
            ),
            160 => 
            array (
                'id' => 661,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":896,"nilai":"2850400","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5371}',
            ),
            161 => 
            array (
                'id' => 662,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":896,"nilai":"90.37","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5372}',
            ),
            162 => 
            array (
                'id' => 663,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":896,"nilai":"25392000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5373}',
            ),
            163 => 
            array (
                'id' => 664,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":896,"nilai":"39.74","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5374}',
            ),
            164 => 
            array (
                'id' => 665,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":896,"nilai":"53.21","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5375}',
            ),
            165 => 
            array (
                'id' => 666,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":896,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5376}',
            ),
            166 => 
            array (
                'id' => 667,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300887","nama":"HANI NURHANIFAH","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":897}',
            ),
            167 => 
            array (
                'id' => 668,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":897,"nilai":"1303750","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5377}',
            ),
            168 => 
            array (
                'id' => 669,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":897,"nilai":"97.74","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5378}',
            ),
            169 => 
            array (
                'id' => 670,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":897,"nilai":"17640000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5379}',
            ),
            170 => 
            array (
                'id' => 671,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":897,"nilai":"30.67","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5380}',
            ),
            171 => 
            array (
                'id' => 672,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":897,"nilai":"99.27","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5381}',
            ),
            172 => 
            array (
                'id' => 673,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":897,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5382}',
            ),
            173 => 
            array (
                'id' => 674,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300869","nama":"HASANAH","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":898}',
            ),
            174 => 
            array (
                'id' => 675,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":898,"nilai":"2177350","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5383}',
            ),
            175 => 
            array (
                'id' => 676,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":898,"nilai":"26.56","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5384}',
            ),
            176 => 
            array (
                'id' => 677,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":898,"nilai":"11244000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5385}',
            ),
            177 => 
            array (
                'id' => 678,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":898,"nilai":"30.82","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5386}',
            ),
            178 => 
            array (
                'id' => 679,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":898,"nilai":"66.91","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5387}',
            ),
            179 => 
            array (
                'id' => 680,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":898,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5388}',
            ),
            180 => 
            array (
                'id' => 681,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300876","nama":"HENI HANDAYANI","alamat":"KP PATROL RT 02 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":899}',
            ),
            181 => 
            array (
                'id' => 682,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":899,"nilai":"2345350","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5389}',
            ),
            182 => 
            array (
                'id' => 683,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":899,"nilai":"34.99","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5390}',
            ),
            183 => 
            array (
                'id' => 684,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":899,"nilai":"27756000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5391}',
            ),
            184 => 
            array (
                'id' => 685,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":899,"nilai":"48.84","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5392}',
            ),
            185 => 
            array (
                'id' => 686,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":899,"nilai":"74.98","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5393}',
            ),
            186 => 
            array (
                'id' => 687,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":899,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5394}',
            ),
            187 => 
            array (
                'id' => 688,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300858","nama":"HERLINA","alamat":"KP PASIRMUNCANG RT 02 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":900}',
            ),
            188 => 
            array (
                'id' => 689,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":900,"nilai":"3431400","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5395}',
            ),
            189 => 
            array (
                'id' => 690,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":900,"nilai":"39.7","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5396}',
            ),
            190 => 
            array (
                'id' => 691,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":900,"nilai":"35836000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5397}',
            ),
            191 => 
            array (
                'id' => 692,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":900,"nilai":"99.98","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5398}',
            ),
            192 => 
            array (
                'id' => 693,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":900,"nilai":"53.09","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5399}',
            ),
            193 => 
            array (
                'id' => 694,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":900,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5400}',
            ),
            194 => 
            array (
                'id' => 695,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061081","nama":"IBAH","alamat":"KP PATROL RT 01 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":901}',
            ),
            195 => 
            array (
                'id' => 696,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":901,"nilai":"1709400","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5401}',
            ),
            196 => 
            array (
                'id' => 697,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":901,"nilai":"74.98","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5402}',
            ),
            197 => 
            array (
                'id' => 698,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":901,"nilai":"27860000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5403}',
            ),
            198 => 
            array (
                'id' => 699,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":901,"nilai":"82.33","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5404}',
            ),
            199 => 
            array (
                'id' => 700,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":901,"nilai":"77.88","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5405}',
            ),
            200 => 
            array (
                'id' => 701,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":901,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5406}',
            ),
            201 => 
            array (
                'id' => 702,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300049","nama":"IDA","alamat":"KP. JATI RT 03\\/03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":902}',
            ),
            202 => 
            array (
                'id' => 703,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":902,"nilai":"907550","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5407}',
            ),
            203 => 
            array (
                'id' => 704,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":902,"nilai":"52.38","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5408}',
            ),
            204 => 
            array (
                'id' => 705,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":902,"nilai":"26952000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5409}',
            ),
            205 => 
            array (
                'id' => 706,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":902,"nilai":"47.72","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5410}',
            ),
            206 => 
            array (
                'id' => 707,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":902,"nilai":"34.55","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5411}',
            ),
            207 => 
            array (
                'id' => 708,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":902,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5412}',
            ),
            208 => 
            array (
                'id' => 709,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300872","nama":"IDAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":903}',
            ),
            209 => 
            array (
                'id' => 710,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":903,"nilai":"2249100","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5413}',
            ),
            210 => 
            array (
                'id' => 711,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":903,"nilai":"45.4","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5414}',
            ),
            211 => 
            array (
                'id' => 712,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":903,"nilai":"12100000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5415}',
            ),
            212 => 
            array (
                'id' => 713,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":903,"nilai":"34.87","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5416}',
            ),
            213 => 
            array (
                'id' => 714,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":903,"nilai":"60.16","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5417}',
            ),
            214 => 
            array (
                'id' => 715,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":903,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5418}',
            ),
            215 => 
            array (
                'id' => 716,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300074","nama":"IHAT SOLIHAT","alamat":"KP. CISALAM RT 02\\/06","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":904}',
            ),
            216 => 
            array (
                'id' => 717,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":904,"nilai":"1535800","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5419}',
            ),
            217 => 
            array (
                'id' => 718,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":904,"nilai":"61.17","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5420}',
            ),
            218 => 
            array (
                'id' => 719,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":904,"nilai":"33964000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5421}',
            ),
            219 => 
            array (
                'id' => 720,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":904,"nilai":"84.69","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5422}',
            ),
            220 => 
            array (
                'id' => 721,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":904,"nilai":"31.92","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5423}',
            ),
            221 => 
            array (
                'id' => 722,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":904,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5424}',
            ),
            222 => 
            array (
                'id' => 723,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523019000048","nama":"IHIN","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":905}',
            ),
            223 => 
            array (
                'id' => 724,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":905,"nilai":"1452850","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5425}',
            ),
            224 => 
            array (
                'id' => 725,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":905,"nilai":"86.52","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5426}',
            ),
            225 => 
            array (
                'id' => 726,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":905,"nilai":"10868000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5427}',
            ),
            226 => 
            array (
                'id' => 727,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":905,"nilai":"62.21","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5428}',
            ),
            227 => 
            array (
                'id' => 728,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":905,"nilai":"26.56","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5429}',
            ),
            228 => 
            array (
                'id' => 729,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":905,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5430}',
            ),
            229 => 
            array (
                'id' => 730,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300803","nama":"IIK NURHIKMAH","alamat":"KP DANGDEUR RT 02 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":906}',
            ),
            230 => 
            array (
                'id' => 731,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":906,"nilai":"1132950","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5431}',
            ),
            231 => 
            array (
                'id' => 732,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":906,"nilai":"93.85","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5432}',
            ),
            232 => 
            array (
                'id' => 733,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":906,"nilai":"16444000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5433}',
            ),
            233 => 
            array (
                'id' => 734,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":906,"nilai":"97.03","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5434}',
            ),
            234 => 
            array (
                'id' => 735,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":906,"nilai":"74.45","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5435}',
            ),
            235 => 
            array (
                'id' => 736,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":906,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5436}',
            ),
            236 => 
            array (
                'id' => 737,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061010","nama":"IING SOLIHIN","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":907}',
            ),
            237 => 
            array (
                'id' => 738,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":907,"nilai":"1322300","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5437}',
            ),
            238 => 
            array (
                'id' => 739,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":907,"nilai":"40.91","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5438}',
            ),
            239 => 
            array (
                'id' => 740,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":907,"nilai":"28740000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5439}',
            ),
            240 => 
            array (
                'id' => 741,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":907,"nilai":"39.82","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5440}',
            ),
            241 => 
            array (
                'id' => 742,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":907,"nilai":"34.15","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5441}',
            ),
            242 => 
            array (
                'id' => 743,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":907,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5442}',
            ),
            243 => 
            array (
                'id' => 744,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300030","nama":"IIS","alamat":"KP. PATROL RT. 03 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":908}',
            ),
            244 => 
            array (
                'id' => 745,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":908,"nilai":"2051350","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5443}',
            ),
            245 => 
            array (
                'id' => 746,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":908,"nilai":"97.85","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5444}',
            ),
            246 => 
            array (
                'id' => 747,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":908,"nilai":"37900000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5445}',
            ),
            247 => 
            array (
                'id' => 748,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":908,"nilai":"91.4","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5446}',
            ),
            248 => 
            array (
                'id' => 749,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":908,"nilai":"79.76","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5447}',
            ),
            249 => 
            array (
                'id' => 750,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":908,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5448}',
            ),
            250 => 
            array (
                'id' => 751,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060988","nama":"IIS ISMAYANTINI","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":909}',
            ),
            251 => 
            array (
                'id' => 752,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":909,"nilai":"1030750","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5449}',
            ),
            252 => 
            array (
                'id' => 753,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":909,"nilai":"70.01","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5450}',
            ),
            253 => 
            array (
                'id' => 754,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":909,"nilai":"34044000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5451}',
            ),
            254 => 
            array (
                'id' => 755,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":909,"nilai":"70","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5452}',
            ),
            255 => 
            array (
                'id' => 756,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":909,"nilai":"44.64","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5453}',
            ),
            256 => 
            array (
                'id' => 757,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":909,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5454}',
            ),
            257 => 
            array (
                'id' => 758,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320520001800099","nama":"IIS KARIMAH","alamat":"KP. CISALAM","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":910}',
            ),
            258 => 
            array (
                'id' => 759,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":910,"nilai":"3339350","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5455}',
            ),
            259 => 
            array (
                'id' => 760,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":910,"nilai":"40.41","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5456}',
            ),
            260 => 
            array (
                'id' => 761,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":910,"nilai":"15636000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5457}',
            ),
            261 => 
            array (
                'id' => 762,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":910,"nilai":"98.09","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5458}',
            ),
            262 => 
            array (
                'id' => 763,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":910,"nilai":"51.59","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5459}',
            ),
            263 => 
            array (
                'id' => 764,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":910,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5460}',
            ),
            264 => 
            array (
                'id' => 765,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300100","nama":"IJANG ABDULAH SAHRONI","alamat":"KP. BOJONG GEDE RT 03\\/08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":911}',
            ),
            265 => 
            array (
                'id' => 766,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":911,"nilai":"1311800","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5461}',
            ),
            266 => 
            array (
                'id' => 767,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":911,"nilai":"62.96","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5462}',
            ),
            267 => 
            array (
                'id' => 768,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":911,"nilai":"11436000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5463}',
            ),
            268 => 
            array (
                'id' => 769,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":911,"nilai":"53.05","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5464}',
            ),
            269 => 
            array (
                'id' => 770,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":911,"nilai":"56.87","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5465}',
            ),
            270 => 
            array (
                'id' => 771,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":911,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5466}',
            ),
            271 => 
            array (
                'id' => 772,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300805","nama":"IKAH","alamat":"KP PASIRMUNCANG RT 01 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":912}',
            ),
            272 => 
            array (
                'id' => 773,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":912,"nilai":"1750000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5467}',
            ),
            273 => 
            array (
                'id' => 774,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":912,"nilai":"80.88","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5468}',
            ),
            274 => 
            array (
                'id' => 775,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":912,"nilai":"19752000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5469}',
            ),
            275 => 
            array (
                'id' => 776,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":912,"nilai":"64.47","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5470}',
            ),
            276 => 
            array (
                'id' => 777,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":912,"nilai":"85.76","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5471}',
            ),
            277 => 
            array (
                'id' => 778,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":912,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5472}',
            ),
            278 => 
            array (
                'id' => 779,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001380089","nama":"ILAH","alamat":"DUSUN BATUKARUT RT 02 RW 02 DESA DANGDEUR KEC BANYURESMI","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":913}',
            ),
            279 => 
            array (
                'id' => 780,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":913,"nilai":"3228400","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5473}',
            ),
            280 => 
            array (
                'id' => 781,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":913,"nilai":"57.11","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5474}',
            ),
            281 => 
            array (
                'id' => 782,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":913,"nilai":"31552000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5475}',
            ),
            282 => 
            array (
                'id' => 783,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":913,"nilai":"64.26","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5476}',
            ),
            283 => 
            array (
                'id' => 784,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":913,"nilai":"45.4","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5477}',
            ),
            284 => 
            array (
                'id' => 785,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":913,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5478}',
            ),
            285 => 
            array (
                'id' => 786,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300003","nama":"IMAS KOMALA","alamat":"KP. DANGDEUR RT. 01 RW. 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":914}',
            ),
            286 => 
            array (
                'id' => 787,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":914,"nilai":"1457050","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5479}',
            ),
            287 => 
            array (
                'id' => 788,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":914,"nilai":"62.06","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5480}',
            ),
            288 => 
            array (
                'id' => 789,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":914,"nilai":"29988000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5481}',
            ),
            289 => 
            array (
                'id' => 790,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":914,"nilai":"78.58","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5482}',
            ),
            290 => 
            array (
                'id' => 791,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":914,"nilai":"69.65","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5483}',
            ),
            291 => 
            array (
                'id' => 792,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":914,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5484}',
            ),
            292 => 
            array (
                'id' => 793,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300080","nama":"IMAS MAEMUNAH","alamat":"KP. CISALAM RT 02\\/06","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":915}',
            ),
            293 => 
            array (
                'id' => 794,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":915,"nilai":"1131550","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5485}',
            ),
            294 => 
            array (
                'id' => 795,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":915,"nilai":"56.05","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5486}',
            ),
            295 => 
            array (
                'id' => 796,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":915,"nilai":"35508000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5487}',
            ),
            296 => 
            array (
                'id' => 797,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":915,"nilai":"93.43","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5488}',
            ),
            297 => 
            array (
                'id' => 798,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":915,"nilai":"62.34","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5489}',
            ),
            298 => 
            array (
                'id' => 799,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":915,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5490}',
            ),
            299 => 
            array (
                'id' => 800,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300036","nama":"IMAS MASRIAH","alamat":"KP. PATROL RT. 04 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":916}',
            ),
            300 => 
            array (
                'id' => 801,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":916,"nilai":"1316350","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5491}',
            ),
            301 => 
            array (
                'id' => 802,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":916,"nilai":"50.38","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5492}',
            ),
            302 => 
            array (
                'id' => 803,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":916,"nilai":"13092000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5493}',
            ),
            303 => 
            array (
                'id' => 804,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":916,"nilai":"58.48","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5494}',
            ),
            304 => 
            array (
                'id' => 805,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":916,"nilai":"62.55","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5495}',
            ),
            305 => 
            array (
                'id' => 806,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":916,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5496}',
            ),
            306 => 
            array (
                'id' => 807,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000172","nama":"IMAS MINTARSIH","alamat":"KP CISALAM RW 06 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":917}',
            ),
            307 => 
            array (
                'id' => 808,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":917,"nilai":"2774800","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5497}',
            ),
            308 => 
            array (
                'id' => 809,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":917,"nilai":"64.6","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5498}',
            ),
            309 => 
            array (
                'id' => 810,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":917,"nilai":"37148000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5499}',
            ),
            310 => 
            array (
                'id' => 811,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":917,"nilai":"63.44","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5500}',
            ),
            311 => 
            array (
                'id' => 812,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":917,"nilai":"86.41","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5501}',
            ),
            312 => 
            array (
                'id' => 813,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":917,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5502}',
            ),
            313 => 
            array (
                'id' => 814,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016015803","nama":"IMAS NIA","alamat":"KP JATI RT 02 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":918}',
            ),
            314 => 
            array (
                'id' => 815,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":918,"nilai":"2311750","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5503}',
            ),
            315 => 
            array (
                'id' => 816,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":918,"nilai":"37.3","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5504}',
            ),
            316 => 
            array (
                'id' => 817,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":918,"nilai":"14264000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5505}',
            ),
            317 => 
            array (
                'id' => 818,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":918,"nilai":"57.86","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5506}',
            ),
            318 => 
            array (
                'id' => 819,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":918,"nilai":"31.91","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5507}',
            ),
            319 => 
            array (
                'id' => 820,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":918,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5508}',
            ),
            320 => 
            array (
                'id' => 821,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300059","nama":"IMAS SITI NURJANAH","alamat":"KP. SARPEUNDEUY RT. 05 RW. 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":919}',
            ),
            321 => 
            array (
                'id' => 822,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":919,"nilai":"2245950","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5509}',
            ),
            322 => 
            array (
                'id' => 823,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":919,"nilai":"34.57","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5510}',
            ),
            323 => 
            array (
                'id' => 824,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":919,"nilai":"39400000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5511}',
            ),
            324 => 
            array (
                'id' => 825,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":919,"nilai":"37.67","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5512}',
            ),
            325 => 
            array (
                'id' => 826,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":919,"nilai":"92.39","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5513}',
            ),
            326 => 
            array (
                'id' => 827,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":919,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5514}',
            ),
            327 => 
            array (
                'id' => 828,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300871","nama":"IMAS WAWAT","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":920}',
            ),
            328 => 
            array (
                'id' => 829,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":920,"nilai":"3349500","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5515}',
            ),
            329 => 
            array (
                'id' => 830,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":920,"nilai":"83.68","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5516}',
            ),
            330 => 
            array (
                'id' => 831,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":920,"nilai":"35716000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5517}',
            ),
            331 => 
            array (
                'id' => 832,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":920,"nilai":"80.06","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5518}',
            ),
            332 => 
            array (
                'id' => 833,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":920,"nilai":"34.65","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5519}',
            ),
            333 => 
            array (
                'id' => 834,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":920,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5520}',
            ),
            334 => 
            array (
                'id' => 835,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300023","nama":"IPAH","alamat":"KP PASIRMUNCANG RT. 02 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":921}',
            ),
            335 => 
            array (
                'id' => 836,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":921,"nilai":"1404900","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5521}',
            ),
            336 => 
            array (
                'id' => 837,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":921,"nilai":"64.9","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5522}',
            ),
            337 => 
            array (
                'id' => 838,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":921,"nilai":"33284000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5523}',
            ),
            338 => 
            array (
                'id' => 839,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":921,"nilai":"67.38","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5524}',
            ),
            339 => 
            array (
                'id' => 840,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":921,"nilai":"66.37","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5525}',
            ),
            340 => 
            array (
                'id' => 841,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":921,"nilai":"1","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5526}',
            ),
            341 => 
            array (
                'id' => 842,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000264","nama":"IPAH HANIPAH","alamat":"KP JATI RT 03 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":922}',
            ),
            342 => 
            array (
                'id' => 843,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":922,"nilai":"1238650","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5527}',
            ),
            343 => 
            array (
                'id' => 844,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":922,"nilai":"38.78","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5528}',
            ),
            344 => 
            array (
                'id' => 845,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":922,"nilai":"37688000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5529}',
            ),
            345 => 
            array (
                'id' => 846,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":922,"nilai":"51.38","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5530}',
            ),
            346 => 
            array (
                'id' => 847,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":922,"nilai":"41.84","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5531}',
            ),
            347 => 
            array (
                'id' => 848,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":922,"nilai":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5532}',
            ),
            348 => 
            array (
                'id' => 849,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300899","nama":"IRNA ALIFAH","alamat":"KP SARPEUNDEUY RT 003 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":923}',
            ),
            349 => 
            array (
                'id' => 850,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":923,"nilai":"1489950","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5533}',
            ),
            350 => 
            array (
                'id' => 851,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:01:59',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":923,"nilai":"74.14","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5534}',
            ),
            351 => 
            array (
                'id' => 852,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":923,"nilai":"13180000","updated_at":"2023-05-30T05:01:59.000000Z","created_at":"2023-05-30T05:01:59.000000Z","id":5535}',
            ),
            352 => 
            array (
                'id' => 853,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":923,"nilai":"72.84","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5536}',
            ),
            353 => 
            array (
                'id' => 854,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":923,"nilai":"68.2","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5537}',
            ),
            354 => 
            array (
                'id' => 855,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":923,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5538}',
            ),
            355 => 
            array (
                'id' => 856,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061053","nama":"ISAH","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":924}',
            ),
            356 => 
            array (
                'id' => 857,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":924,"nilai":"1974000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5539}',
            ),
            357 => 
            array (
                'id' => 858,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":924,"nilai":"56.99","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5540}',
            ),
            358 => 
            array (
                'id' => 859,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":924,"nilai":"39972000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5541}',
            ),
            359 => 
            array (
                'id' => 860,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":924,"nilai":"79.82","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5542}',
            ),
            360 => 
            array (
                'id' => 861,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":924,"nilai":"60.23","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5543}',
            ),
            361 => 
            array (
                'id' => 862,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":924,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5544}',
            ),
            362 => 
            array (
                'id' => 863,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300033","nama":"IYAM MARYANI","alamat":"KP PATROL RT 03 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":925}',
            ),
            363 => 
            array (
                'id' => 864,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":925,"nilai":"2018450","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5545}',
            ),
            364 => 
            array (
                'id' => 865,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":925,"nilai":"28.58","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5546}',
            ),
            365 => 
            array (
                'id' => 866,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":925,"nilai":"38760000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5547}',
            ),
            366 => 
            array (
                'id' => 867,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":925,"nilai":"87.25","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5548}',
            ),
            367 => 
            array (
                'id' => 868,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":925,"nilai":"52.28","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5549}',
            ),
            368 => 
            array (
                'id' => 869,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":925,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5550}',
            ),
            369 => 
            array (
                'id' => 870,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300889","nama":"JUA","alamat":"JKP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":926}',
            ),
            370 => 
            array (
                'id' => 871,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":926,"nilai":"2810850","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5551}',
            ),
            371 => 
            array (
                'id' => 872,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":926,"nilai":"30.15","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5552}',
            ),
            372 => 
            array (
                'id' => 873,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":926,"nilai":"19604000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5553}',
            ),
            373 => 
            array (
                'id' => 874,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":926,"nilai":"29.2","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5554}',
            ),
            374 => 
            array (
                'id' => 875,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":926,"nilai":"29.81","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5555}',
            ),
            375 => 
            array (
                'id' => 876,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":926,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5556}',
            ),
            376 => 
            array (
                'id' => 877,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300008","nama":"JUJU","alamat":"KP. DANGDEUR RT. 02 RW. 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":927}',
            ),
            377 => 
            array (
                'id' => 878,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":927,"nilai":"2446500","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5557}',
            ),
            378 => 
            array (
                'id' => 879,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":927,"nilai":"80.91","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5558}',
            ),
            379 => 
            array (
                'id' => 880,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":927,"nilai":"35544000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5559}',
            ),
            380 => 
            array (
                'id' => 881,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":927,"nilai":"36.41","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5560}',
            ),
            381 => 
            array (
                'id' => 882,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":927,"nilai":"80.67","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5561}',
            ),
            382 => 
            array (
                'id' => 883,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":927,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5562}',
            ),
            383 => 
            array (
                'id' => 884,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061108","nama":"JUMA","alamat":"KP JATI RT 03 RW 10","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":928}',
            ),
            384 => 
            array (
                'id' => 885,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":928,"nilai":"3198300","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5563}',
            ),
            385 => 
            array (
                'id' => 886,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":928,"nilai":"94.76","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5564}',
            ),
            386 => 
            array (
                'id' => 887,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":928,"nilai":"10472000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5565}',
            ),
            387 => 
            array (
                'id' => 888,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":928,"nilai":"59.95","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5566}',
            ),
            388 => 
            array (
                'id' => 889,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":928,"nilai":"81.9","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5567}',
            ),
            389 => 
            array (
                'id' => 890,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":928,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5568}',
            ),
            390 => 
            array (
                'id' => 891,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300878","nama":"KARMASIH","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":929}',
            ),
            391 => 
            array (
                'id' => 892,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":929,"nilai":"1475600","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5569}',
            ),
            392 => 
            array (
                'id' => 893,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":929,"nilai":"73.06","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5570}',
            ),
            393 => 
            array (
                'id' => 894,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":929,"nilai":"26628000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5571}',
            ),
            394 => 
            array (
                'id' => 895,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":929,"nilai":"73.54","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5572}',
            ),
            395 => 
            array (
                'id' => 896,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":929,"nilai":"37.7","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5573}',
            ),
            396 => 
            array (
                'id' => 897,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":929,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5574}',
            ),
            397 => 
            array (
                'id' => 898,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016018086","nama":"KARYATI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":930}',
            ),
            398 => 
            array (
                'id' => 899,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":930,"nilai":"1274350","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5575}',
            ),
            399 => 
            array (
                'id' => 900,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":930,"nilai":"80.67","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5576}',
            ),
            400 => 
            array (
                'id' => 901,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":930,"nilai":"29580000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5577}',
            ),
            401 => 
            array (
                'id' => 902,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":930,"nilai":"73.52","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5578}',
            ),
            402 => 
            array (
                'id' => 903,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":930,"nilai":"78.02","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5579}',
            ),
            403 => 
            array (
                'id' => 904,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":930,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5580}',
            ),
            404 => 
            array (
                'id' => 905,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300068","nama":"KOKOM","alamat":"KP. BOJONG GEDE RT 03\\/05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":931}',
            ),
            405 => 
            array (
                'id' => 906,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":931,"nilai":"3306800","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5581}',
            ),
            406 => 
            array (
                'id' => 907,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":931,"nilai":"57.99","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5582}',
            ),
            407 => 
            array (
                'id' => 908,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":931,"nilai":"10488000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5583}',
            ),
            408 => 
            array (
                'id' => 909,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":931,"nilai":"96.94","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5584}',
            ),
            409 => 
            array (
                'id' => 910,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":931,"nilai":"34.78","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5585}',
            ),
            410 => 
            array (
                'id' => 911,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":931,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5586}',
            ),
            411 => 
            array (
                'id' => 912,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300014","nama":"LANI HERNAWATI","alamat":"KP PASIRMUNCANG RT. 01 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":932}',
            ),
            412 => 
            array (
                'id' => 913,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":932,"nilai":"1331050","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5587}',
            ),
            413 => 
            array (
                'id' => 914,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":932,"nilai":"72.05","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5588}',
            ),
            414 => 
            array (
                'id' => 915,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":932,"nilai":"30092000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5589}',
            ),
            415 => 
            array (
                'id' => 916,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":932,"nilai":"71.48","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5590}',
            ),
            416 => 
            array (
                'id' => 917,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":932,"nilai":"40.67","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5591}',
            ),
            417 => 
            array (
                'id' => 918,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":932,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5592}',
            ),
            418 => 
            array (
                'id' => 919,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300004","nama":"LELAH","alamat":"KP DANGDEUR RT 01 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":933}',
            ),
            419 => 
            array (
                'id' => 920,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":933,"nilai":"1421350","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5593}',
            ),
            420 => 
            array (
                'id' => 921,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":933,"nilai":"88.67","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5594}',
            ),
            421 => 
            array (
                'id' => 922,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":933,"nilai":"38324000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5595}',
            ),
            422 => 
            array (
                'id' => 923,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":933,"nilai":"70","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5596}',
            ),
            423 => 
            array (
                'id' => 924,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":933,"nilai":"44.64","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5597}',
            ),
            424 => 
            array (
                'id' => 925,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":933,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5598}',
            ),
            425 => 
            array (
                'id' => 926,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300065","nama":"LENI MARLINA","alamat":"KP. BOJONG GEDE RT 02\\/05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":934}',
            ),
            426 => 
            array (
                'id' => 927,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":934,"nilai":"3074400","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5599}',
            ),
            427 => 
            array (
                'id' => 928,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":934,"nilai":"53.1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5600}',
            ),
            428 => 
            array (
                'id' => 929,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":934,"nilai":"33724000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5601}',
            ),
            429 => 
            array (
                'id' => 930,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":934,"nilai":"71.13","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5602}',
            ),
            430 => 
            array (
                'id' => 931,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":934,"nilai":"60.41","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5603}',
            ),
            431 => 
            array (
                'id' => 932,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":934,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5604}',
            ),
            432 => 
            array (
                'id' => 933,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061126","nama":"LIA","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":935}',
            ),
            433 => 
            array (
                'id' => 934,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":935,"nilai":"3382750","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5605}',
            ),
            434 => 
            array (
                'id' => 935,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":935,"nilai":"54.86","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5606}',
            ),
            435 => 
            array (
                'id' => 936,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":935,"nilai":"27792000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5607}',
            ),
            436 => 
            array (
                'id' => 937,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":935,"nilai":"55.84","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5608}',
            ),
            437 => 
            array (
                'id' => 938,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":935,"nilai":"80.54","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5609}',
            ),
            438 => 
            array (
                'id' => 939,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":935,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5610}',
            ),
            439 => 
            array (
                'id' => 940,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300026","nama":"LILIS","alamat":"KP PASIR MUNCANG RT 02 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":936}',
            ),
            440 => 
            array (
                'id' => 941,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":936,"nilai":"2166850","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5611}',
            ),
            441 => 
            array (
                'id' => 942,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":936,"nilai":"51.14","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5612}',
            ),
            442 => 
            array (
                'id' => 943,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":936,"nilai":"29440000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5613}',
            ),
            443 => 
            array (
                'id' => 944,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":936,"nilai":"46.34","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5614}',
            ),
            444 => 
            array (
                'id' => 945,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":936,"nilai":"93.6","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5615}',
            ),
            445 => 
            array (
                'id' => 946,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":936,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5616}',
            ),
            446 => 
            array (
                'id' => 947,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523019000047","nama":"LILIS","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":937}',
            ),
            447 => 
            array (
                'id' => 948,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":937,"nilai":"1081500","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5617}',
            ),
            448 => 
            array (
                'id' => 949,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":937,"nilai":"52.73","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5618}',
            ),
            449 => 
            array (
                'id' => 950,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":937,"nilai":"24228000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5619}',
            ),
            450 => 
            array (
                'id' => 951,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":937,"nilai":"53.05","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5620}',
            ),
            451 => 
            array (
                'id' => 952,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":937,"nilai":"56.87","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5621}',
            ),
            452 => 
            array (
                'id' => 953,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":937,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5622}',
            ),
            453 => 
            array (
                'id' => 954,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016011995","nama":"LILIS K","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":938}',
            ),
            454 => 
            array (
                'id' => 955,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":938,"nilai":"936950","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5623}',
            ),
            455 => 
            array (
                'id' => 956,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":938,"nilai":"52.04","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5624}',
            ),
            456 => 
            array (
                'id' => 957,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":938,"nilai":"15940000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5625}',
            ),
            457 => 
            array (
                'id' => 958,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":938,"nilai":"49.77","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5626}',
            ),
            458 => 
            array (
                'id' => 959,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":938,"nilai":"72.7","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5627}',
            ),
            459 => 
            array (
                'id' => 960,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":938,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5628}',
            ),
            460 => 
            array (
                'id' => 961,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300880","nama":"LILIS LISWANTI","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":939}',
            ),
            461 => 
            array (
                'id' => 962,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":939,"nilai":"2025100","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5629}',
            ),
            462 => 
            array (
                'id' => 963,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":939,"nilai":"31.91","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5630}',
            ),
            463 => 
            array (
                'id' => 964,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":939,"nilai":"28056000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5631}',
            ),
            464 => 
            array (
                'id' => 965,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":939,"nilai":"79.86","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5632}',
            ),
            465 => 
            array (
                'id' => 966,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":939,"nilai":"90.15","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5633}',
            ),
            466 => 
            array (
                'id' => 967,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":939,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5634}',
            ),
            467 => 
            array (
                'id' => 968,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300819","nama":"LINA","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":940}',
            ),
            468 => 
            array (
                'id' => 969,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":940,"nilai":"3359650","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5635}',
            ),
            469 => 
            array (
                'id' => 970,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":940,"nilai":"90.99","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5636}',
            ),
            470 => 
            array (
                'id' => 971,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":940,"nilai":"18868000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5637}',
            ),
            471 => 
            array (
                'id' => 972,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":940,"nilai":"47.68","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5638}',
            ),
            472 => 
            array (
                'id' => 973,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":940,"nilai":"66.93","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5639}',
            ),
            473 => 
            array (
                'id' => 974,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":940,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5640}',
            ),
            474 => 
            array (
                'id' => 975,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300841","nama":"LISNAWATI","alamat":"KP BOJONG GEDE RT 03 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":941}',
            ),
            475 => 
            array (
                'id' => 976,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":941,"nilai":"2964150","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5641}',
            ),
            476 => 
            array (
                'id' => 977,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":941,"nilai":"31.92","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5642}',
            ),
            477 => 
            array (
                'id' => 978,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":941,"nilai":"30888000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5643}',
            ),
            478 => 
            array (
                'id' => 979,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":941,"nilai":"25.5","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5644}',
            ),
            479 => 
            array (
                'id' => 980,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":941,"nilai":"29.78","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5645}',
            ),
            480 => 
            array (
                'id' => 981,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":941,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5646}',
            ),
            481 => 
            array (
                'id' => 982,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300002","nama":"MAE","alamat":"KP. DANGDEUR RT. 01 RW. 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":942}',
            ),
            482 => 
            array (
                'id' => 983,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":942,"nilai":"1296750","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5647}',
            ),
            483 => 
            array (
                'id' => 984,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":942,"nilai":"91.38","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5648}',
            ),
            484 => 
            array (
                'id' => 985,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":942,"nilai":"29160000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5649}',
            ),
            485 => 
            array (
                'id' => 986,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":942,"nilai":"96.06","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5650}',
            ),
            486 => 
            array (
                'id' => 987,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":942,"nilai":"70.42","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5651}',
            ),
            487 => 
            array (
                'id' => 988,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":942,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5652}',
            ),
            488 => 
            array (
                'id' => 989,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980529","nama":"MARLINA","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":943}',
            ),
            489 => 
            array (
                'id' => 990,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":943,"nilai":"2111200","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5653}',
            ),
            490 => 
            array (
                'id' => 991,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":943,"nilai":"47.64","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5654}',
            ),
            491 => 
            array (
                'id' => 992,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":943,"nilai":"31752000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5655}',
            ),
            492 => 
            array (
                'id' => 993,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":943,"nilai":"90.86","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5656}',
            ),
            493 => 
            array (
                'id' => 994,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":943,"nilai":"80.59","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5657}',
            ),
            494 => 
            array (
                'id' => 995,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":943,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5658}',
            ),
            495 => 
            array (
                'id' => 996,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300058","nama":"MARNI","alamat":"KP. BOJONGGEDE RT. 03 RW. 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":944}',
            ),
            496 => 
            array (
                'id' => 997,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":944,"nilai":"2152850","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5659}',
            ),
            497 => 
            array (
                'id' => 998,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":944,"nilai":"86.93","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5660}',
            ),
            498 => 
            array (
                'id' => 999,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":944,"nilai":"11308000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5661}',
            ),
            499 => 
            array (
                'id' => 1000,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":944,"nilai":"71.49","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5662}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":944,"nilai":"92.36","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5663}',
            ),
            1 => 
            array (
                'id' => 1002,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":944,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5664}',
            ),
            2 => 
            array (
                'id' => 1003,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016017381","nama":"MARPU AH","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":945}',
            ),
            3 => 
            array (
                'id' => 1004,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":945,"nilai":"2015300","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5665}',
            ),
            4 => 
            array (
                'id' => 1005,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":945,"nilai":"80.17","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5666}',
            ),
            5 => 
            array (
                'id' => 1006,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":945,"nilai":"10724000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5667}',
            ),
            6 => 
            array (
                'id' => 1007,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":945,"nilai":"63.44","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5668}',
            ),
            7 => 
            array (
                'id' => 1008,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":945,"nilai":"86.41","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5669}',
            ),
            8 => 
            array (
                'id' => 1009,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":945,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5670}',
            ),
            9 => 
            array (
                'id' => 1010,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300826","nama":"MARWATI","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":946}',
            ),
            10 => 
            array (
                'id' => 1011,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":946,"nilai":"2877000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5671}',
            ),
            11 => 
            array (
                'id' => 1012,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":946,"nilai":"36.63","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5672}',
            ),
            12 => 
            array (
                'id' => 1013,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":946,"nilai":"22648000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5673}',
            ),
            13 => 
            array (
                'id' => 1014,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":946,"nilai":"63.91","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5674}',
            ),
            14 => 
            array (
                'id' => 1015,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":946,"nilai":"57.35","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5675}',
            ),
            15 => 
            array (
                'id' => 1016,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":946,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5676}',
            ),
            16 => 
            array (
                'id' => 1017,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016012953","nama":"MAS AAM","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":947}',
            ),
            17 => 
            array (
                'id' => 1018,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":947,"nilai":"2396800","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5677}',
            ),
            18 => 
            array (
                'id' => 1019,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":947,"nilai":"56.78","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5678}',
            ),
            19 => 
            array (
                'id' => 1020,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":947,"nilai":"22648000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5679}',
            ),
            20 => 
            array (
                'id' => 1021,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":947,"nilai":"46.64","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5680}',
            ),
            21 => 
            array (
                'id' => 1022,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":947,"nilai":"89.31","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5681}',
            ),
            22 => 
            array (
                'id' => 1023,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":947,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5682}',
            ),
            23 => 
            array (
                'id' => 1024,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061049","nama":"MAS IKOH","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":948}',
            ),
            24 => 
            array (
                'id' => 1025,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":948,"nilai":"2162650","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5683}',
            ),
            25 => 
            array (
                'id' => 1026,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":948,"nilai":"34.67","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5684}',
            ),
            26 => 
            array (
                'id' => 1027,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":948,"nilai":"16532000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5685}',
            ),
            27 => 
            array (
                'id' => 1028,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":948,"nilai":"32.06","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5686}',
            ),
            28 => 
            array (
                'id' => 1029,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":948,"nilai":"82.22","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5687}',
            ),
            29 => 
            array (
                'id' => 1030,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":948,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5688}',
            ),
            30 => 
            array (
                'id' => 1031,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060985","nama":"MASITOH","alamat":"KP JATI RT 02 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":949}',
            ),
            31 => 
            array (
                'id' => 1032,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":949,"nilai":"1145550","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5689}',
            ),
            32 => 
            array (
                'id' => 1033,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":949,"nilai":"95.18","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5690}',
            ),
            33 => 
            array (
                'id' => 1034,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":949,"nilai":"27564000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5691}',
            ),
            34 => 
            array (
                'id' => 1035,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":949,"nilai":"96.06","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5692}',
            ),
            35 => 
            array (
                'id' => 1036,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":949,"nilai":"70.42","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5693}',
            ),
            36 => 
            array (
                'id' => 1037,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":949,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5694}',
            ),
            37 => 
            array (
                'id' => 1038,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061038","nama":"MIMIH","alamat":"KP GEGERLOA RT 01 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":950}',
            ),
            38 => 
            array (
                'id' => 1039,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":950,"nilai":"2802450","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5695}',
            ),
            39 => 
            array (
                'id' => 1040,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":950,"nilai":"66.09","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5696}',
            ),
            40 => 
            array (
                'id' => 1041,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":950,"nilai":"27368000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5697}',
            ),
            41 => 
            array (
                'id' => 1042,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":950,"nilai":"32.37","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5698}',
            ),
            42 => 
            array (
                'id' => 1043,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":950,"nilai":"93.85","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5699}',
            ),
            43 => 
            array (
                'id' => 1044,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":950,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5700}',
            ),
            44 => 
            array (
                'id' => 1045,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300855","nama":"MIMIN","alamat":"KP CISALAM RW 06 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":951}',
            ),
            45 => 
            array (
                'id' => 1046,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":951,"nilai":"1631350","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5701}',
            ),
            46 => 
            array (
                'id' => 1047,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":951,"nilai":"38.61","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5702}',
            ),
            47 => 
            array (
                'id' => 1048,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":951,"nilai":"20000000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5703}',
            ),
            48 => 
            array (
                'id' => 1049,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":951,"nilai":"44.93","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5704}',
            ),
            49 => 
            array (
                'id' => 1050,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":951,"nilai":"59.39","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5705}',
            ),
            50 => 
            array (
                'id' => 1051,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":951,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5706}',
            ),
            51 => 
            array (
                'id' => 1052,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300865","nama":"MIMIN","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":952}',
            ),
            52 => 
            array (
                'id' => 1053,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":952,"nilai":"3166450","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5707}',
            ),
            53 => 
            array (
                'id' => 1054,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":952,"nilai":"83.96","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5708}',
            ),
            54 => 
            array (
                'id' => 1055,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":952,"nilai":"38008000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5709}',
            ),
            55 => 
            array (
                'id' => 1056,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":952,"nilai":"77.52","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5710}',
            ),
            56 => 
            array (
                'id' => 1057,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":952,"nilai":"82.3","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5711}',
            ),
            57 => 
            array (
                'id' => 1058,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":952,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5712}',
            ),
            58 => 
            array (
                'id' => 1059,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016013744","nama":"MIMIN ASMINAH","alamat":"KP JATI RT 02 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":953}',
            ),
            59 => 
            array (
                'id' => 1060,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":953,"nilai":"2750300","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5713}',
            ),
            60 => 
            array (
                'id' => 1061,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":953,"nilai":"69.65","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5714}',
            ),
            61 => 
            array (
                'id' => 1062,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":953,"nilai":"21244000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5715}',
            ),
            62 => 
            array (
                'id' => 1063,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":953,"nilai":"42.16","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5716}',
            ),
            63 => 
            array (
                'id' => 1064,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":953,"nilai":"73.06","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5717}',
            ),
            64 => 
            array (
                'id' => 1065,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":953,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5718}',
            ),
            65 => 
            array (
                'id' => 1066,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061096","nama":"MUNI\'AH","alamat":"KP JATI RW 10 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":954}',
            ),
            66 => 
            array (
                'id' => 1067,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":954,"nilai":"2795100","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5719}',
            ),
            67 => 
            array (
                'id' => 1068,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":954,"nilai":"90.15","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5720}',
            ),
            68 => 
            array (
                'id' => 1069,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":954,"nilai":"31776000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5721}',
            ),
            69 => 
            array (
                'id' => 1070,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":954,"nilai":"84.69","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5722}',
            ),
            70 => 
            array (
                'id' => 1071,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":954,"nilai":"31.92","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5723}',
            ),
            71 => 
            array (
                'id' => 1072,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":954,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5724}',
            ),
            72 => 
            array (
                'id' => 1073,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523019000004","nama":"MUTIAH","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":955}',
            ),
            73 => 
            array (
                'id' => 1074,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":955,"nilai":"2549400","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5725}',
            ),
            74 => 
            array (
                'id' => 1075,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":955,"nilai":"68.2","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5726}',
            ),
            75 => 
            array (
                'id' => 1076,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":955,"nilai":"25492000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5727}',
            ),
            76 => 
            array (
                'id' => 1077,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":955,"nilai":"90.47","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5728}',
            ),
            77 => 
            array (
                'id' => 1078,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":955,"nilai":"83.96","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5729}',
            ),
            78 => 
            array (
                'id' => 1079,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":955,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5730}',
            ),
            79 => 
            array (
                'id' => 1080,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300800","nama":"NANA RUSMANA","alamat":"KP DANGDEUR RW 01 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":956}',
            ),
            80 => 
            array (
                'id' => 1081,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":956,"nilai":"3459050","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5731}',
            ),
            81 => 
            array (
                'id' => 1082,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":956,"nilai":"92.4","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5732}',
            ),
            82 => 
            array (
                'id' => 1083,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":956,"nilai":"16164000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5733}',
            ),
            83 => 
            array (
                'id' => 1084,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":956,"nilai":"34.97","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5734}',
            ),
            84 => 
            array (
                'id' => 1085,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":956,"nilai":"45.94","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5735}',
            ),
            85 => 
            array (
                'id' => 1086,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":956,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5736}',
            ),
            86 => 
            array (
                'id' => 1087,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061003","nama":"NANI SUMARNI","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":957}',
            ),
            87 => 
            array (
                'id' => 1088,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":957,"nilai":"2236850","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5737}',
            ),
            88 => 
            array (
                'id' => 1089,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":957,"nilai":"57.35","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5738}',
            ),
            89 => 
            array (
                'id' => 1090,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":957,"nilai":"25496000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5739}',
            ),
            90 => 
            array (
                'id' => 1091,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":957,"nilai":"34.63","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5740}',
            ),
            91 => 
            array (
                'id' => 1092,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":957,"nilai":"67.03","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5741}',
            ),
            92 => 
            array (
                'id' => 1093,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":957,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5742}',
            ),
            93 => 
            array (
                'id' => 1094,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000253","nama":"NENA","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":958}',
            ),
            94 => 
            array (
                'id' => 1095,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":958,"nilai":"1038800","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5743}',
            ),
            95 => 
            array (
                'id' => 1096,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":958,"nilai":"44.56","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5744}',
            ),
            96 => 
            array (
                'id' => 1097,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":958,"nilai":"10796000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5745}',
            ),
            97 => 
            array (
                'id' => 1098,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":958,"nilai":"44.99","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5746}',
            ),
            98 => 
            array (
                'id' => 1099,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":958,"nilai":"86.77","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5747}',
            ),
            99 => 
            array (
                'id' => 1100,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":958,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5748}',
            ),
            100 => 
            array (
                'id' => 1101,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300838","nama":"NENDI","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":959}',
            ),
            101 => 
            array (
                'id' => 1102,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":959,"nilai":"1659700","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5749}',
            ),
            102 => 
            array (
                'id' => 1103,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":959,"nilai":"79.77","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5750}',
            ),
            103 => 
            array (
                'id' => 1104,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":959,"nilai":"38440000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5751}',
            ),
            104 => 
            array (
                'id' => 1105,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":959,"nilai":"90.86","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5752}',
            ),
            105 => 
            array (
                'id' => 1106,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":959,"nilai":"80.59","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5753}',
            ),
            106 => 
            array (
                'id' => 1107,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":959,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5754}',
            ),
            107 => 
            array (
                'id' => 1108,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300067","nama":"NENENG AMINAH","alamat":"KP. BOJONG GEDE RT 02\\/05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":960}',
            ),
            108 => 
            array (
                'id' => 1109,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":960,"nilai":"1214500","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5755}',
            ),
            109 => 
            array (
                'id' => 1110,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":960,"nilai":"51.35","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5756}',
            ),
            110 => 
            array (
                'id' => 1111,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":960,"nilai":"18728000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5757}',
            ),
            111 => 
            array (
                'id' => 1112,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":960,"nilai":"82.33","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5758}',
            ),
            112 => 
            array (
                'id' => 1113,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":960,"nilai":"77.88","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5759}',
            ),
            113 => 
            array (
                'id' => 1114,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":960,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5760}',
            ),
            114 => 
            array (
                'id' => 1115,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300019","nama":"NENENG PIPIH SARIPAH","alamat":"KP PASIR MUNCANG RT 01 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":961}',
            ),
            115 => 
            array (
                'id' => 1116,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":961,"nilai":"1756300","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5761}',
            ),
            116 => 
            array (
                'id' => 1117,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":961,"nilai":"32.07","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5762}',
            ),
            117 => 
            array (
                'id' => 1118,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":961,"nilai":"14592000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5763}',
            ),
            118 => 
            array (
                'id' => 1119,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":961,"nilai":"39.82","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5764}',
            ),
            119 => 
            array (
                'id' => 1120,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":961,"nilai":"34.15","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5765}',
            ),
            120 => 
            array (
                'id' => 1121,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":961,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5766}',
            ),
            121 => 
            array (
                'id' => 1122,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060756","nama":"NENG SANTIA","alamat":"KP. BOJONG GEDE RT 02 \\/ RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":962}',
            ),
            122 => 
            array (
                'id' => 1123,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":962,"nilai":"3464300","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5767}',
            ),
            123 => 
            array (
                'id' => 1124,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":962,"nilai":"27.15","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5768}',
            ),
            124 => 
            array (
                'id' => 1125,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":962,"nilai":"20976000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5769}',
            ),
            125 => 
            array (
                'id' => 1126,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":962,"nilai":"30.9","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5770}',
            ),
            126 => 
            array (
                'id' => 1127,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":962,"nilai":"52.73","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5771}',
            ),
            127 => 
            array (
                'id' => 1128,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":962,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5772}',
            ),
            128 => 
            array (
                'id' => 1129,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300043","nama":"NENI","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":963}',
            ),
            129 => 
            array (
                'id' => 1130,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":963,"nilai":"2064650","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5773}',
            ),
            130 => 
            array (
                'id' => 1131,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":963,"nilai":"85.56","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5774}',
            ),
            131 => 
            array (
                'id' => 1132,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":963,"nilai":"23768000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5775}',
            ),
            132 => 
            array (
                'id' => 1133,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":963,"nilai":"50","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5776}',
            ),
            133 => 
            array (
                'id' => 1134,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":963,"nilai":"80.88","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5777}',
            ),
            134 => 
            array (
                'id' => 1135,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":963,"nilai":"1","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5778}',
            ),
            135 => 
            array (
                'id' => 1136,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061064","nama":"NENI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":964}',
            ),
            136 => 
            array (
                'id' => 1137,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":964,"nilai":"2713200","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5779}',
            ),
            137 => 
            array (
                'id' => 1138,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":964,"nilai":"82.3","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5780}',
            ),
            138 => 
            array (
                'id' => 1139,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":964,"nilai":"39780000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5781}',
            ),
            139 => 
            array (
                'id' => 1140,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":964,"nilai":"71.49","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5782}',
            ),
            140 => 
            array (
                'id' => 1141,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":964,"nilai":"92.36","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5783}',
            ),
            141 => 
            array (
                'id' => 1142,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":964,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5784}',
            ),
            142 => 
            array (
                'id' => 1143,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980493","nama":"NENI ANGGRAENI","alamat":"KP JATI RT 02 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":965}',
            ),
            143 => 
            array (
                'id' => 1144,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":965,"nilai":"1344350","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5785}',
            ),
            144 => 
            array (
                'id' => 1145,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":965,"nilai":"71.3","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5786}',
            ),
            145 => 
            array (
                'id' => 1146,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":965,"nilai":"39520000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5787}',
            ),
            146 => 
            array (
                'id' => 1147,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":965,"nilai":"67.29","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5788}',
            ),
            147 => 
            array (
                'id' => 1148,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":965,"nilai":"39.48","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5789}',
            ),
            148 => 
            array (
                'id' => 1149,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":965,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5790}',
            ),
            149 => 
            array (
                'id' => 1150,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061012","nama":"NEPI NISPIATI","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":966}',
            ),
            150 => 
            array (
                'id' => 1151,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":966,"nilai":"3191650","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5791}',
            ),
            151 => 
            array (
                'id' => 1152,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":966,"nilai":"57.95","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5792}',
            ),
            152 => 
            array (
                'id' => 1153,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":966,"nilai":"22524000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5793}',
            ),
            153 => 
            array (
                'id' => 1154,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":966,"nilai":"67.38","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5794}',
            ),
            154 => 
            array (
                'id' => 1155,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":966,"nilai":"66.37","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5795}',
            ),
            155 => 
            array (
                'id' => 1156,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":966,"nilai":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5796}',
            ),
            156 => 
            array (
                'id' => 1157,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300007","nama":"NINING","alamat":"KP DANGDEUR RT 01 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":967}',
            ),
            157 => 
            array (
                'id' => 1158,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":967,"nilai":"3088050","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5797}',
            ),
            158 => 
            array (
                'id' => 1159,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":967,"nilai":"57.93","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5798}',
            ),
            159 => 
            array (
                'id' => 1160,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":967,"nilai":"17748000","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5799}',
            ),
            160 => 
            array (
                'id' => 1161,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:00',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":967,"nilai":"57.58","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5800}',
            ),
            161 => 
            array (
                'id' => 1162,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":967,"nilai":"80.17","updated_at":"2023-05-30T05:02:00.000000Z","created_at":"2023-05-30T05:02:00.000000Z","id":5801}',
            ),
            162 => 
            array (
                'id' => 1163,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":967,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5802}',
            ),
            163 => 
            array (
                'id' => 1164,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300094","nama":"NINING YUNINGSIH","alamat":"KP. BOJONG GEDE RT 03\\/08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":968}',
            ),
            164 => 
            array (
                'id' => 1165,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":968,"nilai":"2012500","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5803}',
            ),
            165 => 
            array (
                'id' => 1166,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":968,"nilai":"70.04","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5804}',
            ),
            166 => 
            array (
                'id' => 1167,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":968,"nilai":"38192000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5805}',
            ),
            167 => 
            array (
                'id' => 1168,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":968,"nilai":"54.06","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5806}',
            ),
            168 => 
            array (
                'id' => 1169,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":968,"nilai":"31.24","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5807}',
            ),
            169 => 
            array (
                'id' => 1170,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":968,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5808}',
            ),
            170 => 
            array (
                'id' => 1171,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060974","nama":"NUNUNG AMINAH","alamat":"KP PASIRMUNCANG RT 01 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":969}',
            ),
            171 => 
            array (
                'id' => 1172,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":969,"nilai":"3396050","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5809}',
            ),
            172 => 
            array (
                'id' => 1173,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":969,"nilai":"74.45","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5810}',
            ),
            173 => 
            array (
                'id' => 1174,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":969,"nilai":"30752000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5811}',
            ),
            174 => 
            array (
                'id' => 1175,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":969,"nilai":"34.46","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5812}',
            ),
            175 => 
            array (
                'id' => 1176,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":969,"nilai":"45.61","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5813}',
            ),
            176 => 
            array (
                'id' => 1177,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":969,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5814}',
            ),
            177 => 
            array (
                'id' => 1178,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300861","nama":"NUNUNG RUHAITIN","alamat":"KP PASIRMUNCANG RT 02 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":970}',
            ),
            178 => 
            array (
                'id' => 1179,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":970,"nilai":"1892100","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5815}',
            ),
            179 => 
            array (
                'id' => 1180,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":970,"nilai":"31.24","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5816}',
            ),
            180 => 
            array (
                'id' => 1181,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":970,"nilai":"18328000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5817}',
            ),
            181 => 
            array (
                'id' => 1182,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":970,"nilai":"80.59","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5818}',
            ),
            182 => 
            array (
                'id' => 1183,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":970,"nilai":"33.11","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5819}',
            ),
            183 => 
            array (
                'id' => 1184,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":970,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5820}',
            ),
            184 => 
            array (
                'id' => 1185,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061063","nama":"NUR HASANAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":971}',
            ),
            185 => 
            array (
                'id' => 1186,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":971,"nilai":"2820650","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5821}',
            ),
            186 => 
            array (
                'id' => 1187,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":971,"nilai":"33.11","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5822}',
            ),
            187 => 
            array (
                'id' => 1188,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":971,"nilai":"30344000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5823}',
            ),
            188 => 
            array (
                'id' => 1189,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":971,"nilai":"95.99","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5824}',
            ),
            189 => 
            array (
                'id' => 1190,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":971,"nilai":"90.99","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5825}',
            ),
            190 => 
            array (
                'id' => 1191,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":971,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5826}',
            ),
            191 => 
            array (
                'id' => 1192,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300846","nama":"NURAENI","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":972}',
            ),
            192 => 
            array (
                'id' => 1193,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":972,"nilai":"3260250","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5827}',
            ),
            193 => 
            array (
                'id' => 1194,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":972,"nilai":"89.6","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5828}',
            ),
            194 => 
            array (
                'id' => 1195,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":972,"nilai":"20836000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5829}',
            ),
            195 => 
            array (
                'id' => 1196,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":972,"nilai":"91.07","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5830}',
            ),
            196 => 
            array (
                'id' => 1197,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":972,"nilai":"65.61","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5831}',
            ),
            197 => 
            array (
                'id' => 1198,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":972,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5832}',
            ),
            198 => 
            array (
                'id' => 1199,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980338","nama":"NURLELA","alamat":"KP JATI RT 03 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":973}',
            ),
            199 => 
            array (
                'id' => 1200,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":973,"nilai":"1262100","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5833}',
            ),
            200 => 
            array (
                'id' => 1201,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":973,"nilai":"43.01","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5834}',
            ),
            201 => 
            array (
                'id' => 1202,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":973,"nilai":"35180000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5835}',
            ),
            202 => 
            array (
                'id' => 1203,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":973,"nilai":"60.54","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5836}',
            ),
            203 => 
            array (
                'id' => 1204,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":973,"nilai":"54.75","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5837}',
            ),
            204 => 
            array (
                'id' => 1205,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":973,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5838}',
            ),
            205 => 
            array (
                'id' => 1206,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300088","nama":"NURLELAH","alamat":"KP. BOJONG GEDE RT 01\\/08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":974}',
            ),
            206 => 
            array (
                'id' => 1207,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":974,"nilai":"1361850","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5839}',
            ),
            207 => 
            array (
                'id' => 1208,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":974,"nilai":"42.28","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5840}',
            ),
            208 => 
            array (
                'id' => 1209,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":974,"nilai":"33664000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5841}',
            ),
            209 => 
            array (
                'id' => 1210,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":974,"nilai":"36.39","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5842}',
            ),
            210 => 
            array (
                'id' => 1211,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":974,"nilai":"66.59","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5843}',
            ),
            211 => 
            array (
                'id' => 1212,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":974,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5844}',
            ),
            212 => 
            array (
                'id' => 1213,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300827","nama":"NURYANI","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":975}',
            ),
            213 => 
            array (
                'id' => 1214,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":975,"nilai":"3481450","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5845}',
            ),
            214 => 
            array (
                'id' => 1215,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":975,"nilai":"68.33","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5846}',
            ),
            215 => 
            array (
                'id' => 1216,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":975,"nilai":"27044000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5847}',
            ),
            216 => 
            array (
                'id' => 1217,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":975,"nilai":"38.66","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5848}',
            ),
            217 => 
            array (
                'id' => 1218,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":975,"nilai":"41.97","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5849}',
            ),
            218 => 
            array (
                'id' => 1219,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":975,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5850}',
            ),
            219 => 
            array (
                'id' => 1220,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300090","nama":"NURYATI","alamat":"KP. BOJONG GEDE RT 01\\/08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":976}',
            ),
            220 => 
            array (
                'id' => 1221,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":976,"nilai":"2566550","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5851}',
            ),
            221 => 
            array (
                'id' => 1222,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":976,"nilai":"83.7","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5852}',
            ),
            222 => 
            array (
                'id' => 1223,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":976,"nilai":"34292000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5853}',
            ),
            223 => 
            array (
                'id' => 1224,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":976,"nilai":"98.04","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5854}',
            ),
            224 => 
            array (
                'id' => 1225,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":976,"nilai":"39.7","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5855}',
            ),
            225 => 
            array (
                'id' => 1226,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":976,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5856}',
            ),
            226 => 
            array (
                'id' => 1227,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050705","nama":"OBAY SOBARIAH","alamat":"KP PATROL RT 01 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":977}',
            ),
            227 => 
            array (
                'id' => 1228,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":977,"nilai":"3199000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5857}',
            ),
            228 => 
            array (
                'id' => 1229,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":977,"nilai":"79.76","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5858}',
            ),
            229 => 
            array (
                'id' => 1230,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":977,"nilai":"35640000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5859}',
            ),
            230 => 
            array (
                'id' => 1231,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":977,"nilai":"98.98","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5860}',
            ),
            231 => 
            array (
                'id' => 1232,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":977,"nilai":"27.15","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5861}',
            ),
            232 => 
            array (
                'id' => 1233,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":977,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5862}',
            ),
            233 => 
            array (
                'id' => 1234,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300038","nama":"ONEH","alamat":"KP PATROL","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":978}',
            ),
            234 => 
            array (
                'id' => 1235,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":978,"nilai":"2420600","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5863}',
            ),
            235 => 
            array (
                'id' => 1236,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":978,"nilai":"79.01","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5864}',
            ),
            236 => 
            array (
                'id' => 1237,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":978,"nilai":"30352000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5865}',
            ),
            237 => 
            array (
                'id' => 1238,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":978,"nilai":"32.37","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5866}',
            ),
            238 => 
            array (
                'id' => 1239,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":978,"nilai":"93.85","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5867}',
            ),
            239 => 
            array (
                'id' => 1240,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":978,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5868}',
            ),
            240 => 
            array (
                'id' => 1241,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061129","nama":"OYOH","alamat":"KP SARPEUNDEUY RT 003 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":979}',
            ),
            241 => 
            array (
                'id' => 1242,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":979,"nilai":"1191050","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5869}',
            ),
            242 => 
            array (
                'id' => 1243,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":979,"nilai":"47.85","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5870}',
            ),
            243 => 
            array (
                'id' => 1244,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":979,"nilai":"11640000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5871}',
            ),
            244 => 
            array (
                'id' => 1245,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":979,"nilai":"54.06","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5872}',
            ),
            245 => 
            array (
                'id' => 1246,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":979,"nilai":"31.24","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5873}',
            ),
            246 => 
            array (
                'id' => 1247,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":979,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5874}',
            ),
            247 => 
            array (
                'id' => 1248,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980271","nama":"PANJI SUGIRI","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":980}',
            ),
            248 => 
            array (
                'id' => 1249,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":980,"nilai":"1820700","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5875}',
            ),
            249 => 
            array (
                'id' => 1250,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":980,"nilai":"34.86","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5876}',
            ),
            250 => 
            array (
                'id' => 1251,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":980,"nilai":"13412000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5877}',
            ),
            251 => 
            array (
                'id' => 1252,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":980,"nilai":"32.73","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5878}',
            ),
            252 => 
            array (
                'id' => 1253,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":980,"nilai":"95.18","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5879}',
            ),
            253 => 
            array (
                'id' => 1254,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":980,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5880}',
            ),
            254 => 
            array (
                'id' => 1255,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060986","nama":"PATONAH","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":981}',
            ),
            255 => 
            array (
                'id' => 1256,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":981,"nilai":"1761900","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5881}',
            ),
            256 => 
            array (
                'id' => 1257,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":981,"nilai":"83.19","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5882}',
            ),
            257 => 
            array (
                'id' => 1258,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":981,"nilai":"14900000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5883}',
            ),
            258 => 
            array (
                'id' => 1259,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":981,"nilai":"78.58","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5884}',
            ),
            259 => 
            array (
                'id' => 1260,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":981,"nilai":"69.65","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5885}',
            ),
            260 => 
            array (
                'id' => 1261,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":981,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5886}',
            ),
            261 => 
            array (
                'id' => 1262,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000202","nama":"PIANAH","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":982}',
            ),
            262 => 
            array (
                'id' => 1263,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":982,"nilai":"1157800","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5887}',
            ),
            263 => 
            array (
                'id' => 1264,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":982,"nilai":"30.88","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5888}',
            ),
            264 => 
            array (
                'id' => 1265,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":982,"nilai":"32948000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5889}',
            ),
            265 => 
            array (
                'id' => 1266,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":982,"nilai":"26.27","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5890}',
            ),
            266 => 
            array (
                'id' => 1267,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":982,"nilai":"60.43","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5891}',
            ),
            267 => 
            array (
                'id' => 1268,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":982,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5892}',
            ),
            268 => 
            array (
                'id' => 1269,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061075","nama":"POPON","alamat":"KP PATROL RT 01 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":983}',
            ),
            269 => 
            array (
                'id' => 1270,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":983,"nilai":"1220450","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5893}',
            ),
            270 => 
            array (
                'id' => 1271,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":983,"nilai":"60.16","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5894}',
            ),
            271 => 
            array (
                'id' => 1272,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":983,"nilai":"21408000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5895}',
            ),
            272 => 
            array (
                'id' => 1273,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":983,"nilai":"68.68","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5896}',
            ),
            273 => 
            array (
                'id' => 1274,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":983,"nilai":"83.37","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5897}',
            ),
            274 => 
            array (
                'id' => 1275,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":983,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5898}',
            ),
            275 => 
            array (
                'id' => 1276,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300810","nama":"PUPU MARPUAH","alamat":"KP JATI RT 03 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":984}',
            ),
            276 => 
            array (
                'id' => 1277,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":984,"nilai":"1670200","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5899}',
            ),
            277 => 
            array (
                'id' => 1278,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":984,"nilai":"34.55","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5900}',
            ),
            278 => 
            array (
                'id' => 1279,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":984,"nilai":"27700000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5901}',
            ),
            279 => 
            array (
                'id' => 1280,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":984,"nilai":"29.45","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5902}',
            ),
            280 => 
            array (
                'id' => 1281,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":984,"nilai":"70.01","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5903}',
            ),
            281 => 
            array (
                'id' => 1282,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":984,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5904}',
            ),
            282 => 
            array (
                'id' => 1283,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016021893","nama":"PUPUN","alamat":"KP PASIRMUNCANG RT 01 RW 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":985}',
            ),
            283 => 
            array (
                'id' => 1284,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":985,"nilai":"3328850","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5905}',
            ),
            284 => 
            array (
                'id' => 1285,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":985,"nilai":"52.06","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5906}',
            ),
            285 => 
            array (
                'id' => 1286,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":985,"nilai":"34696000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5907}',
            ),
            286 => 
            array (
                'id' => 1287,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":985,"nilai":"37.25","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5908}',
            ),
            287 => 
            array (
                'id' => 1288,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":985,"nilai":"97.74","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5909}',
            ),
            288 => 
            array (
                'id' => 1289,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":985,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5910}',
            ),
            289 => 
            array (
                'id' => 1290,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300050","nama":"PUROH","alamat":"KP. JATI RT 04\\/03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":986}',
            ),
            290 => 
            array (
                'id' => 1291,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":986,"nilai":"2420600","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5911}',
            ),
            291 => 
            array (
                'id' => 1292,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":986,"nilai":"93.64","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5912}',
            ),
            292 => 
            array (
                'id' => 1293,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":986,"nilai":"11416000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5913}',
            ),
            293 => 
            array (
                'id' => 1294,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":986,"nilai":"79.82","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5914}',
            ),
            294 => 
            array (
                'id' => 1295,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":986,"nilai":"60.23","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5915}',
            ),
            295 => 
            array (
                'id' => 1296,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":986,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5916}',
            ),
            296 => 
            array (
                'id' => 1297,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300006","nama":"RANI","alamat":"KP DANGDEUR RT 01 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":987}',
            ),
            297 => 
            array (
                'id' => 1298,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":987,"nilai":"1455650","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5917}',
            ),
            298 => 
            array (
                'id' => 1299,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":987,"nilai":"32.35","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5918}',
            ),
            299 => 
            array (
                'id' => 1300,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":987,"nilai":"19500000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5919}',
            ),
            300 => 
            array (
                'id' => 1301,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":987,"nilai":"66.05","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5920}',
            ),
            301 => 
            array (
                'id' => 1302,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":987,"nilai":"37.3","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5921}',
            ),
            302 => 
            array (
                'id' => 1303,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":987,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5922}',
            ),
            303 => 
            array (
                'id' => 1304,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523021000064","nama":"RANI FITRI HANDAYANI","alamat":"KP JATI RT 02 RW 10","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":988}',
            ),
            304 => 
            array (
                'id' => 1305,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":988,"nilai":"1469300","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5923}',
            ),
            305 => 
            array (
                'id' => 1306,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":988,"nilai":"78.12","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5924}',
            ),
            306 => 
            array (
                'id' => 1307,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":988,"nilai":"20988000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5925}',
            ),
            307 => 
            array (
                'id' => 1308,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":988,"nilai":"25.5","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5926}',
            ),
            308 => 
            array (
                'id' => 1309,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":988,"nilai":"29.78","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5927}',
            ),
            309 => 
            array (
                'id' => 1310,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":988,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5928}',
            ),
            310 => 
            array (
                'id' => 1311,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061054","nama":"RENI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":989}',
            ),
            311 => 
            array (
                'id' => 1312,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":989,"nilai":"2661050","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5929}',
            ),
            312 => 
            array (
                'id' => 1313,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":989,"nilai":"30.69","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5930}',
            ),
            313 => 
            array (
                'id' => 1314,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":989,"nilai":"18800000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5931}',
            ),
            314 => 
            array (
                'id' => 1315,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":989,"nilai":"94.11","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5932}',
            ),
            315 => 
            array (
                'id' => 1316,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":989,"nilai":"68.95","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5933}',
            ),
            316 => 
            array (
                'id' => 1317,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":989,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5934}',
            ),
            317 => 
            array (
                'id' => 1318,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300877","nama":"ROHANAH","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":990}',
            ),
            318 => 
            array (
                'id' => 1319,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":990,"nilai":"1300600","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5935}',
            ),
            319 => 
            array (
                'id' => 1320,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":990,"nilai":"35.34","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5936}',
            ),
            320 => 
            array (
                'id' => 1321,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":990,"nilai":"35400000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5937}',
            ),
            321 => 
            array (
                'id' => 1322,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":990,"nilai":"99.44","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5938}',
            ),
            322 => 
            array (
                'id' => 1323,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":990,"nilai":"53.63","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5939}',
            ),
            323 => 
            array (
                'id' => 1324,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":990,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5940}',
            ),
            324 => 
            array (
                'id' => 1325,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061100","nama":"ROHANAH","alamat":"KP JATI RW 10 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":991}',
            ),
            325 => 
            array (
                'id' => 1326,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":991,"nilai":"2660000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5941}',
            ),
            326 => 
            array (
                'id' => 1327,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":991,"nilai":"73.28","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5942}',
            ),
            327 => 
            array (
                'id' => 1328,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":991,"nilai":"31376000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5943}',
            ),
            328 => 
            array (
                'id' => 1329,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":991,"nilai":"69.87","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5944}',
            ),
            329 => 
            array (
                'id' => 1330,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":991,"nilai":"25.89","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5945}',
            ),
            330 => 
            array (
                'id' => 1331,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":991,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5946}',
            ),
            331 => 
            array (
                'id' => 1332,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061000","nama":"ROHANI","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":992}',
            ),
            332 => 
            array (
                'id' => 1333,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":992,"nilai":"1330000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5947}',
            ),
            333 => 
            array (
                'id' => 1334,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":992,"nilai":"46.85","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5948}',
            ),
            334 => 
            array (
                'id' => 1335,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":992,"nilai":"24552000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5949}',
            ),
            335 => 
            array (
                'id' => 1336,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":992,"nilai":"95.11","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5950}',
            ),
            336 => 
            array (
                'id' => 1337,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":992,"nilai":"52.06","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5951}',
            ),
            337 => 
            array (
                'id' => 1338,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":992,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5952}',
            ),
            338 => 
            array (
                'id' => 1339,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300835","nama":"ROHAYANI","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":993}',
            ),
            339 => 
            array (
                'id' => 1340,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":993,"nilai":"2881550","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5953}',
            ),
            340 => 
            array (
                'id' => 1341,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":993,"nilai":"77.88","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5954}',
            ),
            341 => 
            array (
                'id' => 1342,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":993,"nilai":"35504000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5955}',
            ),
            342 => 
            array (
                'id' => 1343,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":993,"nilai":"91.19","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5956}',
            ),
            343 => 
            array (
                'id' => 1344,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":993,"nilai":"57.95","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5957}',
            ),
            344 => 
            array (
                'id' => 1345,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":993,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5958}',
            ),
            345 => 
            array (
                'id' => 1346,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300069","nama":"ROKAYAH","alamat":"KP. CISALAM RT 01\\/06","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":994}',
            ),
            346 => 
            array (
                'id' => 1347,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":994,"nilai":"1718500","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5959}',
            ),
            347 => 
            array (
                'id' => 1348,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":994,"nilai":"58.4","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5960}',
            ),
            348 => 
            array (
                'id' => 1349,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":994,"nilai":"20344000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5961}',
            ),
            349 => 
            array (
                'id' => 1350,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":994,"nilai":"47.42","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5962}',
            ),
            350 => 
            array (
                'id' => 1351,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":994,"nilai":"79.77","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5963}',
            ),
            351 => 
            array (
                'id' => 1352,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":994,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5964}',
            ),
            352 => 
            array (
                'id' => 1353,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061037","nama":"ROKAYAH","alamat":"KP GEGERLOA RT 01 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":995}',
            ),
            353 => 
            array (
                'id' => 1354,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":995,"nilai":"3187450","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5965}',
            ),
            354 => 
            array (
                'id' => 1355,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":995,"nilai":"65.61","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5966}',
            ),
            355 => 
            array (
                'id' => 1356,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":995,"nilai":"22524000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5967}',
            ),
            356 => 
            array (
                'id' => 1357,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":995,"nilai":"58.48","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5968}',
            ),
            357 => 
            array (
                'id' => 1358,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":995,"nilai":"62.55","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5969}',
            ),
            358 => 
            array (
                'id' => 1359,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":995,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5970}',
            ),
            359 => 
            array (
                'id' => 1360,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300086","nama":"ROMI AISYAH","alamat":"KP. PASIR MUNCANG RT. 02 RW. 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":996}',
            ),
            360 => 
            array (
                'id' => 1361,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":996,"nilai":"2921450","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5971}',
            ),
            361 => 
            array (
                'id' => 1362,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":996,"nilai":"28.55","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5972}',
            ),
            362 => 
            array (
                'id' => 1363,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":996,"nilai":"37648000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5973}',
            ),
            363 => 
            array (
                'id' => 1364,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":996,"nilai":"64.23","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5974}',
            ),
            364 => 
            array (
                'id' => 1365,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":996,"nilai":"50.28","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5975}',
            ),
            365 => 
            array (
                'id' => 1366,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":996,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5976}',
            ),
            366 => 
            array (
                'id' => 1367,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061065","nama":"ROMLAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":997}',
            ),
            367 => 
            array (
                'id' => 1368,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":997,"nilai":"1651650","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5977}',
            ),
            368 => 
            array (
                'id' => 1369,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":997,"nilai":"75.42","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5978}',
            ),
            369 => 
            array (
                'id' => 1370,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":997,"nilai":"18012000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5979}',
            ),
            370 => 
            array (
                'id' => 1371,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":997,"nilai":"37.67","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5980}',
            ),
            371 => 
            array (
                'id' => 1372,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":997,"nilai":"92.39","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5981}',
            ),
            372 => 
            array (
                'id' => 1373,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":997,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5982}',
            ),
            373 => 
            array (
                'id' => 1374,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000002","nama":"ROSMAWATI","alamat":"KP PATROL RT 01 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":998}',
            ),
            374 => 
            array (
                'id' => 1375,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":998,"nilai":"1995700","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5983}',
            ),
            375 => 
            array (
                'id' => 1376,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":998,"nilai":"29.08","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5984}',
            ),
            376 => 
            array (
                'id' => 1377,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":998,"nilai":"32676000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5985}',
            ),
            377 => 
            array (
                'id' => 1378,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":998,"nilai":"64.26","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5986}',
            ),
            378 => 
            array (
                'id' => 1379,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":998,"nilai":"45.4","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5987}',
            ),
            379 => 
            array (
                'id' => 1380,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":998,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5988}',
            ),
            380 => 
            array (
                'id' => 1381,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980305","nama":"RUSMIATI","alamat":"KP JATI RW 10 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":999}',
            ),
            381 => 
            array (
                'id' => 1382,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":999,"nilai":"2229850","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5989}',
            ),
            382 => 
            array (
                'id' => 1383,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":999,"nilai":"45.63","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5990}',
            ),
            383 => 
            array (
                'id' => 1384,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":999,"nilai":"25536000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5991}',
            ),
            384 => 
            array (
                'id' => 1385,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":999,"nilai":"73.78","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5992}',
            ),
            385 => 
            array (
                'id' => 1386,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":999,"nilai":"34.81","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5993}',
            ),
            386 => 
            array (
                'id' => 1387,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":999,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5994}',
            ),
            387 => 
            array (
                'id' => 1388,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016019912","nama":"SA\'ADAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":1000}',
            ),
            388 => 
            array (
                'id' => 1389,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1000,"nilai":"3401650","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5995}',
            ),
            389 => 
            array (
                'id' => 1390,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1000,"nilai":"35.9","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5996}',
            ),
            390 => 
            array (
                'id' => 1391,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1000,"nilai":"35548000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5997}',
            ),
            391 => 
            array (
                'id' => 1392,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1000,"nilai":"26.27","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5998}',
            ),
            392 => 
            array (
                'id' => 1393,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1000,"nilai":"60.43","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":5999}',
            ),
            393 => 
            array (
                'id' => 1394,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1000,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6000}',
            ),
            394 => 
            array (
                'id' => 1395,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061094","nama":"SA\'ADAH","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":1001}',
            ),
            395 => 
            array (
                'id' => 1396,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1001,"nilai":"2078300","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6001}',
            ),
            396 => 
            array (
                'id' => 1397,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1001,"nilai":"60.15","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6002}',
            ),
            397 => 
            array (
                'id' => 1398,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1001,"nilai":"39236000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6003}',
            ),
            398 => 
            array (
                'id' => 1399,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1001,"nilai":"79.61","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6004}',
            ),
            399 => 
            array (
                'id' => 1400,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1001,"nilai":"94.63","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6005}',
            ),
            400 => 
            array (
                'id' => 1401,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1001,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6006}',
            ),
            401 => 
            array (
                'id' => 1402,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016026000","nama":"SAHID","alamat":"KP. PASIR MUNCANG RT 001\\/RW 002","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":1002}',
            ),
            402 => 
            array (
                'id' => 1403,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1002,"nilai":"1161300","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6007}',
            ),
            403 => 
            array (
                'id' => 1404,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1002,"nilai":"80.94","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6008}',
            ),
            404 => 
            array (
                'id' => 1405,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1002,"nilai":"12520000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6009}',
            ),
            405 => 
            array (
                'id' => 1406,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1002,"nilai":"44.99","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6010}',
            ),
            406 => 
            array (
                'id' => 1407,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1002,"nilai":"86.77","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6011}',
            ),
            407 => 
            array (
                'id' => 1408,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1002,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6012}',
            ),
            408 => 
            array (
                'id' => 1409,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000301","nama":"SANTI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":1003}',
            ),
            409 => 
            array (
                'id' => 1410,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1003,"nilai":"1948100","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6013}',
            ),
            410 => 
            array (
                'id' => 1411,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1003,"nilai":"61.49","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6014}',
            ),
            411 => 
            array (
                'id' => 1412,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1003,"nilai":"10296000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6015}',
            ),
            412 => 
            array (
                'id' => 1413,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1003,"nilai":"42.57","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6016}',
            ),
            413 => 
            array (
                'id' => 1414,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1003,"nilai":"74.14","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6017}',
            ),
            414 => 
            array (
                'id' => 1415,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1003,"nilai":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6018}',
            ),
            415 => 
            array (
                'id' => 1416,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980382","nama":"SANTI SUSANTI","alamat":"KP PATROL RT 02 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":1004}',
            ),
            416 => 
            array (
                'id' => 1417,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1004,"nilai":"1342250","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6019}',
            ),
            417 => 
            array (
                'id' => 1418,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1004,"nilai":"91.13","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6020}',
            ),
            418 => 
            array (
                'id' => 1419,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1004,"nilai":"29160000","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6021}',
            ),
            419 => 
            array (
                'id' => 1420,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1004,"nilai":"47.68","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6022}',
            ),
            420 => 
            array (
                'id' => 1421,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1004,"nilai":"66.93","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6023}',
            ),
            421 => 
            array (
                'id' => 1422,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1004,"nilai":"1","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6024}',
            ),
            422 => 
            array (
                'id' => 1423,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060967","nama":"SINTA SITI FATIMAH","alamat":"KP DANGDEUR RT 01 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":1005}',
            ),
            423 => 
            array (
                'id' => 1424,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:01',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1005,"nilai":"2291800","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6025}',
            ),
            424 => 
            array (
                'id' => 1425,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1005,"nilai":"61.87","updated_at":"2023-05-30T05:02:01.000000Z","created_at":"2023-05-30T05:02:01.000000Z","id":6026}',
            ),
            425 => 
            array (
                'id' => 1426,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1005,"nilai":"38972000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6027}',
            ),
            426 => 
            array (
                'id' => 1427,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1005,"nilai":"83.93","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6028}',
            ),
            427 => 
            array (
                'id' => 1428,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1005,"nilai":"91.47","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6029}',
            ),
            428 => 
            array (
                'id' => 1429,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1005,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6030}',
            ),
            429 => 
            array (
                'id' => 1430,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300891","nama":"SITI AMINAH","alamat":"KP JATI RT 03 RW 10","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1006}',
            ),
            430 => 
            array (
                'id' => 1431,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1006,"nilai":"1499050","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6031}',
            ),
            431 => 
            array (
                'id' => 1432,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1006,"nilai":"48.21","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6032}',
            ),
            432 => 
            array (
                'id' => 1433,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1006,"nilai":"32724000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6033}',
            ),
            433 => 
            array (
                'id' => 1434,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1006,"nilai":"41.8","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6034}',
            ),
            434 => 
            array (
                'id' => 1435,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1006,"nilai":"34.29","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6035}',
            ),
            435 => 
            array (
                'id' => 1436,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1006,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6036}',
            ),
            436 => 
            array (
                'id' => 1437,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061115","nama":"SITI AMINAH","alamat":"KP JATI RT 02 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1007}',
            ),
            437 => 
            array (
                'id' => 1438,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1007,"nilai":"1022000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6037}',
            ),
            438 => 
            array (
                'id' => 1439,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1007,"nilai":"29.81","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6038}',
            ),
            439 => 
            array (
                'id' => 1440,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1007,"nilai":"28812000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6039}',
            ),
            440 => 
            array (
                'id' => 1441,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1007,"nilai":"62.42","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6040}',
            ),
            441 => 
            array (
                'id' => 1442,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1007,"nilai":"46.69","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6041}',
            ),
            442 => 
            array (
                'id' => 1443,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1007,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6042}',
            ),
            443 => 
            array (
                'id' => 1444,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980244","nama":"SITI AMINAH","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1008}',
            ),
            444 => 
            array (
                'id' => 1445,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1008,"nilai":"2320150","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6043}',
            ),
            445 => 
            array (
                'id' => 1446,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1008,"nilai":"76.98","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6044}',
            ),
            446 => 
            array (
                'id' => 1447,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1008,"nilai":"26848000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6045}',
            ),
            447 => 
            array (
                'id' => 1448,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1008,"nilai":"64.47","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6046}',
            ),
            448 => 
            array (
                'id' => 1449,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1008,"nilai":"85.76","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6047}',
            ),
            449 => 
            array (
                'id' => 1450,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1008,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6048}',
            ),
            450 => 
            array (
                'id' => 1451,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061029","nama":"SITI FATIMAH","alamat":"KP CISALAM RW 06 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1009}',
            ),
            451 => 
            array (
                'id' => 1452,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1009,"nilai":"892500","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6049}',
            ),
            452 => 
            array (
                'id' => 1453,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1009,"nilai":"29.78","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6050}',
            ),
            453 => 
            array (
                'id' => 1454,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1009,"nilai":"37612000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6051}',
            ),
            454 => 
            array (
                'id' => 1455,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1009,"nilai":"87.25","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6052}',
            ),
            455 => 
            array (
                'id' => 1456,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1009,"nilai":"52.28","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6053}',
            ),
            456 => 
            array (
                'id' => 1457,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1009,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6054}',
            ),
            457 => 
            array (
                'id' => 1458,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980201","nama":"SITI INAYAH","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1010}',
            ),
            458 => 
            array (
                'id' => 1459,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1010,"nilai":"1776600","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6055}',
            ),
            459 => 
            array (
                'id' => 1460,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1010,"nilai":"40.9","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6056}',
            ),
            460 => 
            array (
                'id' => 1461,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1010,"nilai":"10596000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6057}',
            ),
            461 => 
            array (
                'id' => 1462,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1010,"nilai":"34.97","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6058}',
            ),
            462 => 
            array (
                'id' => 1463,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1010,"nilai":"45.94","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6059}',
            ),
            463 => 
            array (
                'id' => 1464,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1010,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6060}',
            ),
            464 => 
            array (
                'id' => 1465,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300842","nama":"SITI JUBAEDAH","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1011}',
            ),
            465 => 
            array (
                'id' => 1466,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1011,"nilai":"2445450","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6061}',
            ),
            466 => 
            array (
                'id' => 1467,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1011,"nilai":"25.89","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6062}',
            ),
            467 => 
            array (
                'id' => 1468,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1011,"nilai":"17904000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6063}',
            ),
            468 => 
            array (
                'id' => 1469,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1011,"nilai":"43.53","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6064}',
            ),
            469 => 
            array (
                'id' => 1470,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1011,"nilai":"27.62","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6065}',
            ),
            470 => 
            array (
                'id' => 1471,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1011,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6066}',
            ),
            471 => 
            array (
                'id' => 1472,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300046","nama":"SITI JULAEHA","alamat":"KP. JATI RT 03\\/03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1012}',
            ),
            472 => 
            array (
                'id' => 1473,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1012,"nilai":"2768150","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6067}',
            ),
            473 => 
            array (
                'id' => 1474,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1012,"nilai":"69.07","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6068}',
            ),
            474 => 
            array (
                'id' => 1475,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1012,"nilai":"17620000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6069}',
            ),
            475 => 
            array (
                'id' => 1476,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1012,"nilai":"32.06","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6070}',
            ),
            476 => 
            array (
                'id' => 1477,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1012,"nilai":"82.22","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6071}',
            ),
            477 => 
            array (
                'id' => 1478,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1012,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6072}',
            ),
            478 => 
            array (
                'id' => 1479,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061004","nama":"SITI KHOLISOH","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1013}',
            ),
            479 => 
            array (
                'id' => 1480,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1013,"nilai":"1353100","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6073}',
            ),
            480 => 
            array (
                'id' => 1481,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1013,"nilai":"41.97","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6074}',
            ),
            481 => 
            array (
                'id' => 1482,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1013,"nilai":"29924000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6075}',
            ),
            482 => 
            array (
                'id' => 1483,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1013,"nilai":"39.74","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6076}',
            ),
            483 => 
            array (
                'id' => 1484,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1013,"nilai":"53.21","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6077}',
            ),
            484 => 
            array (
                'id' => 1485,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1013,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6078}',
            ),
            485 => 
            array (
                'id' => 1486,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300809","nama":"SITI MAESAROH","alamat":"KP JATI RT 03 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1014}',
            ),
            486 => 
            array (
                'id' => 1487,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1014,"nilai":"1122100","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6079}',
            ),
            487 => 
            array (
                'id' => 1488,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1014,"nilai":"82.22","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6080}',
            ),
            488 => 
            array (
                'id' => 1489,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1014,"nilai":"18616000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6081}',
            ),
            489 => 
            array (
                'id' => 1490,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1014,"nilai":"50.34","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6082}',
            ),
            490 => 
            array (
                'id' => 1491,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1014,"nilai":"83.19","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6083}',
            ),
            491 => 
            array (
                'id' => 1492,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1014,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6084}',
            ),
            492 => 
            array (
                'id' => 1493,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980236","nama":"SITI MARSITI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1015}',
            ),
            493 => 
            array (
                'id' => 1494,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1015,"nilai":"2665950","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6085}',
            ),
            494 => 
            array (
                'id' => 1495,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1015,"nilai":"34.76","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6086}',
            ),
            495 => 
            array (
                'id' => 1496,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1015,"nilai":"26252000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6087}',
            ),
            496 => 
            array (
                'id' => 1497,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1015,"nilai":"97.03","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6088}',
            ),
            497 => 
            array (
                'id' => 1498,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1015,"nilai":"74.45","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6089}',
            ),
            498 => 
            array (
                'id' => 1499,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1015,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6090}',
            ),
            499 => 
            array (
                'id' => 1500,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300852","nama":"SITI MARYAM","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1016}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1016,"nilai":"3270050","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6091}',
            ),
            1 => 
            array (
                'id' => 1502,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1016,"nilai":"62.34","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6092}',
            ),
            2 => 
            array (
                'id' => 1503,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1016,"nilai":"27820000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6093}',
            ),
            3 => 
            array (
                'id' => 1504,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1016,"nilai":"66.34","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6094}',
            ),
            4 => 
            array (
                'id' => 1505,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1016,"nilai":"54.08","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6095}',
            ),
            5 => 
            array (
                'id' => 1506,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1016,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6096}',
            ),
            6 => 
            array (
                'id' => 1507,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980164","nama":"SITI MARYAM","alamat":"KP JATI RW 10 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1017}',
            ),
            7 => 
            array (
                'id' => 1508,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1017,"nilai":"2170700","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6097}',
            ),
            8 => 
            array (
                'id' => 1509,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1017,"nilai":"47.87","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6098}',
            ),
            9 => 
            array (
                'id' => 1510,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1017,"nilai":"25300000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6099}',
            ),
            10 => 
            array (
                'id' => 1511,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1017,"nilai":"96.92","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6100}',
            ),
            11 => 
            array (
                'id' => 1512,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1017,"nilai":"85.28","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6101}',
            ),
            12 => 
            array (
                'id' => 1513,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1017,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6102}',
            ),
            13 => 
            array (
                'id' => 1514,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980331","nama":"SITI MARYATI","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1018}',
            ),
            14 => 
            array (
                'id' => 1515,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1018,"nilai":"3228750","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6103}',
            ),
            15 => 
            array (
                'id' => 1516,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1018,"nilai":"73.37","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6104}',
            ),
            16 => 
            array (
                'id' => 1517,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1018,"nilai":"14292000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6105}',
            ),
            17 => 
            array (
                'id' => 1518,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1018,"nilai":"95.06","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6106}',
            ),
            18 => 
            array (
                'id' => 1519,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1018,"nilai":"58.87","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6107}',
            ),
            19 => 
            array (
                'id' => 1520,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1018,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6108}',
            ),
            20 => 
            array (
                'id' => 1521,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000216","nama":"SITI MASITOH","alamat":"KP JATI RT 03 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1019}',
            ),
            21 => 
            array (
                'id' => 1522,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1019,"nilai":"2364600","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6109}',
            ),
            22 => 
            array (
                'id' => 1523,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1019,"nilai":"97","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6110}',
            ),
            23 => 
            array (
                'id' => 1524,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1019,"nilai":"33152000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6111}',
            ),
            24 => 
            array (
                'id' => 1525,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1019,"nilai":"37.25","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6112}',
            ),
            25 => 
            array (
                'id' => 1526,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1019,"nilai":"97.74","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6113}',
            ),
            26 => 
            array (
                'id' => 1527,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1019,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6114}',
            ),
            27 => 
            array (
                'id' => 1528,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980306","nama":"SITI MASUROH","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1020}',
            ),
            28 => 
            array (
                'id' => 1529,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1020,"nilai":"1799350","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6115}',
            ),
            29 => 
            array (
                'id' => 1530,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1020,"nilai":"75.89","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6116}',
            ),
            30 => 
            array (
                'id' => 1531,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1020,"nilai":"11840000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6117}',
            ),
            31 => 
            array (
                'id' => 1532,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1020,"nilai":"48.29","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6118}',
            ),
            32 => 
            array (
                'id' => 1533,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1020,"nilai":"61.19","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6119}',
            ),
            33 => 
            array (
                'id' => 1534,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1020,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6120}',
            ),
            34 => 
            array (
                'id' => 1535,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300015","nama":"SITI NURJANAH","alamat":"KP PASIRMUNCANG RT. 01 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1021}',
            ),
            35 => 
            array (
                'id' => 1536,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1021,"nilai":"1929200","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6121}',
            ),
            36 => 
            array (
                'id' => 1537,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1021,"nilai":"49.79","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6122}',
            ),
            37 => 
            array (
                'id' => 1538,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1021,"nilai":"34840000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6123}',
            ),
            38 => 
            array (
                'id' => 1539,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1021,"nilai":"34.63","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6124}',
            ),
            39 => 
            array (
                'id' => 1540,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1021,"nilai":"67.03","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6125}',
            ),
            40 => 
            array (
                'id' => 1541,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1021,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6126}',
            ),
            41 => 
            array (
                'id' => 1542,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300845","nama":"SITI ROHAYATI","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1022}',
            ),
            42 => 
            array (
                'id' => 1543,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1022,"nilai":"1750350","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6127}',
            ),
            43 => 
            array (
                'id' => 1544,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1022,"nilai":"69.65","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6128}',
            ),
            44 => 
            array (
                'id' => 1545,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1022,"nilai":"39176000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6129}',
            ),
            45 => 
            array (
                'id' => 1546,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1022,"nilai":"94.3","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6130}',
            ),
            46 => 
            array (
                'id' => 1547,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1022,"nilai":"56.97","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6131}',
            ),
            47 => 
            array (
                'id' => 1548,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1022,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6132}',
            ),
            48 => 
            array (
                'id' => 1549,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016021894","nama":"SITI SAIBAH","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1023}',
            ),
            49 => 
            array (
                'id' => 1550,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1023,"nilai":"2501800","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6133}',
            ),
            50 => 
            array (
                'id' => 1551,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1023,"nilai":"40.67","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6134}',
            ),
            51 => 
            array (
                'id' => 1552,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1023,"nilai":"25872000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6135}',
            ),
            52 => 
            array (
                'id' => 1553,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1023,"nilai":"91.84","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6136}',
            ),
            53 => 
            array (
                'id' => 1554,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1023,"nilai":"83.46","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6137}',
            ),
            54 => 
            array (
                'id' => 1555,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1023,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6138}',
            ),
            55 => 
            array (
                'id' => 1556,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980471","nama":"SITI SUHAENAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1024}',
            ),
            56 => 
            array (
                'id' => 1557,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1024,"nilai":"2657550","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6139}',
            ),
            57 => 
            array (
                'id' => 1558,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1024,"nilai":"29.75","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6140}',
            ),
            58 => 
            array (
                'id' => 1559,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1024,"nilai":"19040000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6141}',
            ),
            59 => 
            array (
                'id' => 1560,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1024,"nilai":"63.91","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6142}',
            ),
            60 => 
            array (
                'id' => 1561,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1024,"nilai":"57.35","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6143}',
            ),
            61 => 
            array (
                'id' => 1562,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1024,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6144}',
            ),
            62 => 
            array (
                'id' => 1563,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300057","nama":"SOPAH","alamat":"KP. SARPEUNDEUY RT. 03 RW. 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1025}',
            ),
            63 => 
            array (
                'id' => 1564,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1025,"nilai":"1705200","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6145}',
            ),
            64 => 
            array (
                'id' => 1565,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1025,"nilai":"98.19","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6146}',
            ),
            65 => 
            array (
                'id' => 1566,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1025,"nilai":"13796000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6147}',
            ),
            66 => 
            array (
                'id' => 1567,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1025,"nilai":"95.99","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6148}',
            ),
            67 => 
            array (
                'id' => 1568,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1025,"nilai":"90.99","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6149}',
            ),
            68 => 
            array (
                'id' => 1569,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1025,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6150}',
            ),
            69 => 
            array (
                'id' => 1570,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000223","nama":"SOPIAH","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1026}',
            ),
            70 => 
            array (
                'id' => 1571,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1026,"nilai":"2663850","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6151}',
            ),
            71 => 
            array (
                'id' => 1572,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1026,"nilai":"39.03","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6152}',
            ),
            72 => 
            array (
                'id' => 1573,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1026,"nilai":"31484000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6153}',
            ),
            73 => 
            array (
                'id' => 1574,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1026,"nilai":"91.84","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6154}',
            ),
            74 => 
            array (
                'id' => 1575,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1026,"nilai":"83.46","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6155}',
            ),
            75 => 
            array (
                'id' => 1576,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1026,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6156}',
            ),
            76 => 
            array (
                'id' => 1577,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980295","nama":"SUGIANTO","alamat":"KP GEGERLOA RT 02 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1027}',
            ),
            77 => 
            array (
                'id' => 1578,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1027,"nilai":"2185050","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6157}',
            ),
            78 => 
            array (
                'id' => 1579,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1027,"nilai":"75.1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6158}',
            ),
            79 => 
            array (
                'id' => 1580,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1027,"nilai":"22756000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6159}',
            ),
            80 => 
            array (
                'id' => 1581,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1027,"nilai":"29.45","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6160}',
            ),
            81 => 
            array (
                'id' => 1582,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1027,"nilai":"70.01","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6161}',
            ),
            82 => 
            array (
                'id' => 1583,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1027,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6162}',
            ),
            83 => 
            array (
                'id' => 1584,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000058","nama":"SUHAENAH","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1028}',
            ),
            84 => 
            array (
                'id' => 1585,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1028,"nilai":"1206100","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6163}',
            ),
            85 => 
            array (
                'id' => 1586,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1028,"nilai":"45.61","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6164}',
            ),
            86 => 
            array (
                'id' => 1587,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1028,"nilai":"11080000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6165}',
            ),
            87 => 
            array (
                'id' => 1588,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1028,"nilai":"46.64","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6166}',
            ),
            88 => 
            array (
                'id' => 1589,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1028,"nilai":"89.31","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6167}',
            ),
            89 => 
            array (
                'id' => 1590,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1028,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6168}',
            ),
            90 => 
            array (
                'id' => 1591,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300052","nama":"SUMARNI","alamat":"KP. JATI RT 04\\/03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1029}',
            ),
            91 => 
            array (
                'id' => 1592,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1029,"nilai":"1729000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6169}',
            ),
            92 => 
            array (
                'id' => 1593,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1029,"nilai":"63.34","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6170}',
            ),
            93 => 
            array (
                'id' => 1594,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1029,"nilai":"31720000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6171}',
            ),
            94 => 
            array (
                'id' => 1595,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1029,"nilai":"94.11","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6172}',
            ),
            95 => 
            array (
                'id' => 1596,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1029,"nilai":"68.95","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6173}',
            ),
            96 => 
            array (
                'id' => 1597,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1029,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6174}',
            ),
            97 => 
            array (
                'id' => 1598,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000059","nama":"SUMARNI","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1030}',
            ),
            98 => 
            array (
                'id' => 1599,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1030,"nilai":"1069250","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6175}',
            ),
            99 => 
            array (
                'id' => 1600,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1030,"nilai":"79.54","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6176}',
            ),
            100 => 
            array (
                'id' => 1601,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1030,"nilai":"32984000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6177}',
            ),
            101 => 
            array (
                'id' => 1602,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1030,"nilai":"67.01","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6178}',
            ),
            102 => 
            array (
                'id' => 1603,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1030,"nilai":"34.99","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6179}',
            ),
            103 => 
            array (
                'id' => 1604,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1030,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6180}',
            ),
            104 => 
            array (
                'id' => 1605,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300807","nama":"SUMI KULSUM","alamat":"KP JATI RT 01 RW 03","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1031}',
            ),
            105 => 
            array (
                'id' => 1606,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1031,"nilai":"3258850","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6181}',
            ),
            106 => 
            array (
                'id' => 1607,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1031,"nilai":"75.47","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6182}',
            ),
            107 => 
            array (
                'id' => 1608,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1031,"nilai":"21004000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6183}',
            ),
            108 => 
            array (
                'id' => 1609,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1031,"nilai":"32.73","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6184}',
            ),
            109 => 
            array (
                'id' => 1610,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1031,"nilai":"95.18","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6185}',
            ),
            110 => 
            array (
                'id' => 1611,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1031,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6186}',
            ),
            111 => 
            array (
                'id' => 1612,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000114","nama":"SUSANTI","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1032}',
            ),
            112 => 
            array (
                'id' => 1613,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1032,"nilai":"1929200","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6187}',
            ),
            113 => 
            array (
                'id' => 1614,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1032,"nilai":"90.44","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6188}',
            ),
            114 => 
            array (
                'id' => 1615,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1032,"nilai":"22032000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6189}',
            ),
            115 => 
            array (
                'id' => 1616,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1032,"nilai":"42.16","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6190}',
            ),
            116 => 
            array (
                'id' => 1617,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1032,"nilai":"73.06","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6191}',
            ),
            117 => 
            array (
                'id' => 1618,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1032,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6192}',
            ),
            118 => 
            array (
                'id' => 1619,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016024802","nama":"SUSI DIANA","alamat":"KP DANGDEUR RT 02 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1033}',
            ),
            119 => 
            array (
                'id' => 1620,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1033,"nilai":"1390900","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6193}',
            ),
            120 => 
            array (
                'id' => 1621,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1033,"nilai":"53.21","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6194}',
            ),
            121 => 
            array (
                'id' => 1622,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1033,"nilai":"31284000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6195}',
            ),
            122 => 
            array (
                'id' => 1623,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1033,"nilai":"77.45","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6196}',
            ),
            123 => 
            array (
                'id' => 1624,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1033,"nilai":"57.89","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6197}',
            ),
            124 => 
            array (
                'id' => 1625,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1033,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6198}',
            ),
            125 => 
            array (
                'id' => 1626,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061080","nama":"SUSUM","alamat":"KP PATROL RT 01 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1034}',
            ),
            126 => 
            array (
                'id' => 1627,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1034,"nilai":"1227100","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6199}',
            ),
            127 => 
            array (
                'id' => 1628,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1034,"nilai":"72.29","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6200}',
            ),
            128 => 
            array (
                'id' => 1629,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1034,"nilai":"13760000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6201}',
            ),
            129 => 
            array (
                'id' => 1630,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1034,"nilai":"48.79","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6202}',
            ),
            130 => 
            array (
                'id' => 1631,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1034,"nilai":"71.65","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6203}',
            ),
            131 => 
            array (
                'id' => 1632,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1034,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6204}',
            ),
            132 => 
            array (
                'id' => 1633,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300011","nama":"TATI","alamat":"KP. DANGDEUR RT. 02 RW. 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1035}',
            ),
            133 => 
            array (
                'id' => 1634,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1035,"nilai":"3331300","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6205}',
            ),
            134 => 
            array (
                'id' => 1635,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1035,"nilai":"29.69","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6206}',
            ),
            135 => 
            array (
                'id' => 1636,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1035,"nilai":"16540000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6207}',
            ),
            136 => 
            array (
                'id' => 1637,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1035,"nilai":"97.19","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6208}',
            ),
            137 => 
            array (
                'id' => 1638,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1035,"nilai":"35.9","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6209}',
            ),
            138 => 
            array (
                'id' => 1639,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1035,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6210}',
            ),
            139 => 
            array (
                'id' => 1640,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000291","nama":"TATI","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1036}',
            ),
            140 => 
            array (
                'id' => 1641,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1036,"nilai":"3117450","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6211}',
            ),
            141 => 
            array (
                'id' => 1642,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1036,"nilai":"51.25","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6212}',
            ),
            142 => 
            array (
                'id' => 1643,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1036,"nilai":"39484000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6213}',
            ),
            143 => 
            array (
                'id' => 1644,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1036,"nilai":"73.7","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6214}',
            ),
            144 => 
            array (
                'id' => 1645,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1036,"nilai":"78.46","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6215}',
            ),
            145 => 
            array (
                'id' => 1646,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1036,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6216}',
            ),
            146 => 
            array (
                'id' => 1647,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061107","nama":"TATI RAHMAWATI","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1037}',
            ),
            147 => 
            array (
                'id' => 1648,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1037,"nilai":"1894550","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6217}',
            ),
            148 => 
            array (
                'id' => 1649,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1037,"nilai":"33.34","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6218}',
            ),
            149 => 
            array (
                'id' => 1650,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1037,"nilai":"30548000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6219}',
            ),
            150 => 
            array (
                'id' => 1651,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1037,"nilai":"93.15","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6220}',
            ),
            151 => 
            array (
                'id' => 1652,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1037,"nilai":"89.6","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6221}',
            ),
            152 => 
            array (
                'id' => 1653,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1037,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6222}',
            ),
            153 => 
            array (
                'id' => 1654,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300879","nama":"TIAH","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1038}',
            ),
            154 => 
            array (
                'id' => 1655,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1038,"nilai":"1162350","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6223}',
            ),
            155 => 
            array (
                'id' => 1656,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1038,"nilai":"57.45","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6224}',
            ),
            156 => 
            array (
                'id' => 1657,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1038,"nilai":"29948000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6225}',
            ),
            157 => 
            array (
                'id' => 1658,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1038,"nilai":"59.38","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6226}',
            ),
            158 => 
            array (
                'id' => 1659,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1038,"nilai":"60.15","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6227}',
            ),
            159 => 
            array (
                'id' => 1660,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1038,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6228}',
            ),
            160 => 
            array (
                'id' => 1661,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016026001","nama":"TINI","alamat":"KP PATROL RT 02 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1039}',
            ),
            161 => 
            array (
                'id' => 1662,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1039,"nilai":"1393700","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6229}',
            ),
            162 => 
            array (
                'id' => 1663,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1039,"nilai":"34.15","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6230}',
            ),
            163 => 
            array (
                'id' => 1664,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1039,"nilai":"17148000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6231}',
            ),
            164 => 
            array (
                'id' => 1665,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1039,"nilai":"51.38","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6232}',
            ),
            165 => 
            array (
                'id' => 1666,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1039,"nilai":"41.84","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6233}',
            ),
            166 => 
            array (
                'id' => 1667,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1039,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6234}',
            ),
            167 => 
            array (
                'id' => 1668,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061040","nama":"TINI","alamat":"KP GEGERLOA RT 01 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1040}',
            ),
            168 => 
            array (
                'id' => 1669,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1040,"nilai":"2321900","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6235}',
            ),
            169 => 
            array (
                'id' => 1670,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1040,"nilai":"54.08","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6236}',
            ),
            170 => 
            array (
                'id' => 1671,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1040,"nilai":"15144000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6237}',
            ),
            171 => 
            array (
                'id' => 1672,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1040,"nilai":"50","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6238}',
            ),
            172 => 
            array (
                'id' => 1673,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1040,"nilai":"80.88","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6239}',
            ),
            173 => 
            array (
                'id' => 1674,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1040,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6240}',
            ),
            174 => 
            array (
                'id' => 1675,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300874","nama":"TITI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1041}',
            ),
            175 => 
            array (
                'id' => 1676,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1041,"nilai":"1632400","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6241}',
            ),
            176 => 
            array (
                'id' => 1677,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1041,"nilai":"89.31","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6242}',
            ),
            177 => 
            array (
                'id' => 1678,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1041,"nilai":"23644000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6243}',
            ),
            178 => 
            array (
                'id' => 1679,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1041,"nilai":"35.06","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6244}',
            ),
            179 => 
            array (
                'id' => 1680,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1041,"nilai":"72.29","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6245}',
            ),
            180 => 
            array (
                'id' => 1681,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1041,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6246}',
            ),
            181 => 
            array (
                'id' => 1682,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061089","nama":"TITI","alamat":"KP PASIR MUNCANG RT 02 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1042}',
            ),
            182 => 
            array (
                'id' => 1683,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1042,"nilai":"3480400","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6247}',
            ),
            183 => 
            array (
                'id' => 1684,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1042,"nilai":"53.63","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6248}',
            ),
            184 => 
            array (
                'id' => 1685,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1042,"nilai":"38052000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6249}',
            ),
            185 => 
            array (
                'id' => 1686,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1042,"nilai":"96.94","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6250}',
            ),
            186 => 
            array (
                'id' => 1687,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1042,"nilai":"34.78","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6251}',
            ),
            187 => 
            array (
                'id' => 1688,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1042,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6252}',
            ),
            188 => 
            array (
                'id' => 1689,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061120","nama":"TITI","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1043}',
            ),
            189 => 
            array (
                'id' => 1690,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1043,"nilai":"2118900","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6253}',
            ),
            190 => 
            array (
                'id' => 1691,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1043,"nilai":"78.06","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6254}',
            ),
            191 => 
            array (
                'id' => 1692,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1043,"nilai":"20564000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6255}',
            ),
            192 => 
            array (
                'id' => 1693,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1043,"nilai":"36.39","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6256}',
            ),
            193 => 
            array (
                'id' => 1694,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1043,"nilai":"66.59","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6257}',
            ),
            194 => 
            array (
                'id' => 1695,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1043,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6258}',
            ),
            195 => 
            array (
                'id' => 1696,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300867","nama":"TUKIYAH","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1044}',
            ),
            196 => 
            array (
                'id' => 1697,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1044,"nilai":"1856750","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6259}',
            ),
            197 => 
            array (
                'id' => 1698,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1044,"nilai":"56.87","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6260}',
            ),
            198 => 
            array (
                'id' => 1699,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1044,"nilai":"36656000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6261}',
            ),
            199 => 
            array (
                'id' => 1700,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1044,"nilai":"47.19","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6262}',
            ),
            200 => 
            array (
                'id' => 1701,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1044,"nilai":"75.42","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6263}',
            ),
            201 => 
            array (
                'id' => 1702,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1044,"nilai":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6264}',
            ),
            202 => 
            array (
                'id' => 1703,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300801","nama":"TUTI","alamat":"KP DANGDEUR RT 01 RW 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1045}',
            ),
            203 => 
            array (
                'id' => 1704,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1045,"nilai":"2046800","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6265}',
            ),
            204 => 
            array (
                'id' => 1705,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1045,"nilai":"62.55","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6266}',
            ),
            205 => 
            array (
                'id' => 1706,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1045,"nilai":"36632000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6267}',
            ),
            206 => 
            array (
                'id' => 1707,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1045,"nilai":"65.48","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6268}',
            ),
            207 => 
            array (
                'id' => 1708,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1045,"nilai":"61.87","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6269}',
            ),
            208 => 
            array (
                'id' => 1709,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1045,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6270}',
            ),
            209 => 
            array (
                'id' => 1710,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300832","nama":"UAY WARLIYAH","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1046}',
            ),
            210 => 
            array (
                'id' => 1711,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1046,"nilai":"2489550","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6271}',
            ),
            211 => 
            array (
                'id' => 1712,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1046,"nilai":"60.41","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6272}',
            ),
            212 => 
            array (
                'id' => 1713,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1046,"nilai":"37372000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6273}',
            ),
            213 => 
            array (
                'id' => 1714,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1046,"nilai":"67.29","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6274}',
            ),
            214 => 
            array (
                'id' => 1715,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1046,"nilai":"39.48","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6275}',
            ),
            215 => 
            array (
                'id' => 1716,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1046,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6276}',
            ),
            216 => 
            array (
                'id' => 1717,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016013739","nama":"UJANG HIDAYAT","alamat":"KP. BATU KARUT RT.02 RW. 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1047}',
            ),
            217 => 
            array (
                'id' => 1718,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1047,"nilai":"3433150","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6277}',
            ),
            218 => 
            array (
                'id' => 1719,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1047,"nilai":"51.59","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6278}',
            ),
            219 => 
            array (
                'id' => 1720,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1047,"nilai":"14632000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6279}',
            ),
            220 => 
            array (
                'id' => 1721,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1047,"nilai":"67.01","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6280}',
            ),
            221 => 
            array (
                'id' => 1722,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1047,"nilai":"34.99","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6281}',
            ),
            222 => 
            array (
                'id' => 1723,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1047,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6282}',
            ),
            223 => 
            array (
                'id' => 1724,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300063","nama":"ULIA","alamat":"KP. BOJONG GEDE RT 01\\/05","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1048}',
            ),
            224 => 
            array (
                'id' => 1725,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1048,"nilai":"2691150","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6283}',
            ),
            225 => 
            array (
                'id' => 1726,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1048,"nilai":"26.59","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6284}',
            ),
            226 => 
            array (
                'id' => 1727,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1048,"nilai":"25628000","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6285}',
            ),
            227 => 
            array (
                'id' => 1728,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1048,"nilai":"99.47","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6286}',
            ),
            228 => 
            array (
                'id' => 1729,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1048,"nilai":"68.33","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6287}',
            ),
            229 => 
            array (
                'id' => 1730,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1048,"nilai":"1","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6288}',
            ),
            230 => 
            array (
                'id' => 1731,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300881","nama":"WATI","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":1049}',
            ),
            231 => 
            array (
                'id' => 1732,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:02',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1049,"nilai":"2220400","updated_at":"2023-05-30T05:02:02.000000Z","created_at":"2023-05-30T05:02:02.000000Z","id":6289}',
            ),
            232 => 
            array (
                'id' => 1733,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1049,"nilai":"86.41","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6290}',
            ),
            233 => 
            array (
                'id' => 1734,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1049,"nilai":"28268000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6291}',
            ),
            234 => 
            array (
                'id' => 1735,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1049,"nilai":"76","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6292}',
            ),
            235 => 
            array (
                'id' => 1736,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1049,"nilai":"73.28","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6293}',
            ),
            236 => 
            array (
                'id' => 1737,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1049,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6294}',
            ),
            237 => 
            array (
                'id' => 1738,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061032","nama":"WATI","alamat":"KP CISALAM RW 06 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1050}',
            ),
            238 => 
            array (
                'id' => 1739,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1050,"nilai":"1523550","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6295}',
            ),
            239 => 
            array (
                'id' => 1740,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1050,"nilai":"27.62","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6296}',
            ),
            240 => 
            array (
                'id' => 1741,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1050,"nilai":"28952000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6297}',
            ),
            241 => 
            array (
                'id' => 1742,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1050,"nilai":"28.52","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6298}',
            ),
            242 => 
            array (
                'id' => 1743,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1050,"nilai":"62.67","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6299}',
            ),
            243 => 
            array (
                'id' => 1744,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1050,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6300}',
            ),
            244 => 
            array (
                'id' => 1745,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016018087","nama":"WATI","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1051}',
            ),
            245 => 
            array (
                'id' => 1746,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1051,"nilai":"1705550","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6301}',
            ),
            246 => 
            array (
                'id' => 1747,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1051,"nilai":"61.22","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6302}',
            ),
            247 => 
            array (
                'id' => 1748,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1051,"nilai":"16988000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6303}',
            ),
            248 => 
            array (
                'id' => 1749,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1051,"nilai":"78.43","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6304}',
            ),
            249 => 
            array (
                'id' => 1750,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1051,"nilai":"69.05","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6305}',
            ),
            250 => 
            array (
                'id' => 1751,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1051,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6306}',
            ),
            251 => 
            array (
                'id' => 1752,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980445","nama":"WIDA WIDIA","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1052}',
            ),
            252 => 
            array (
                'id' => 1753,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1052,"nilai":"2926000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6307}',
            ),
            253 => 
            array (
                'id' => 1754,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1052,"nilai":"39.16","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6308}',
            ),
            254 => 
            array (
                'id' => 1755,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1052,"nilai":"31296000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6309}',
            ),
            255 => 
            array (
                'id' => 1756,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1052,"nilai":"38","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6310}',
            ),
            256 => 
            array (
                'id' => 1757,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1052,"nilai":"46.85","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6311}',
            ),
            257 => 
            array (
                'id' => 1758,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1052,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6312}',
            ),
            258 => 
            array (
                'id' => 1759,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300147","nama":"WIWI","alamat":"KP. SARPEUNDEUY RT. 02 RW. 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1053}',
            ),
            259 => 
            array (
                'id' => 1760,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1053,"nilai":"1584800","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6313}',
            ),
            260 => 
            array (
                'id' => 1761,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1053,"nilai":"89.56","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6314}',
            ),
            261 => 
            array (
                'id' => 1762,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1053,"nilai":"36488000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6315}',
            ),
            262 => 
            array (
                'id' => 1763,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1053,"nilai":"62.21","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6316}',
            ),
            263 => 
            array (
                'id' => 1764,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1053,"nilai":"26.56","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6317}',
            ),
            264 => 
            array (
                'id' => 1765,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1053,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6318}',
            ),
            265 => 
            array (
                'id' => 1766,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000159","nama":"WIWIN","alamat":"KP PATROL RT 02 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1054}',
            ),
            266 => 
            array (
                'id' => 1767,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1054,"nilai":"3233650","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6319}',
            ),
            267 => 
            array (
                'id' => 1768,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1054,"nilai":"29.69","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6320}',
            ),
            268 => 
            array (
                'id' => 1769,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1054,"nilai":"28332000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6321}',
            ),
            269 => 
            array (
                'id' => 1770,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1054,"nilai":"33.21","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6322}',
            ),
            270 => 
            array (
                'id' => 1771,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1054,"nilai":"57.45","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6323}',
            ),
            271 => 
            array (
                'id' => 1772,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1054,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6324}',
            ),
            272 => 
            array (
                'id' => 1773,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300884","nama":"WIWIN WINARTI","alamat":"KP JATI RW 10 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1055}',
            ),
            273 => 
            array (
                'id' => 1774,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1055,"nilai":"2745050","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6325}',
            ),
            274 => 
            array (
                'id' => 1775,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1055,"nilai":"69.05","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6326}',
            ),
            275 => 
            array (
                'id' => 1776,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1055,"nilai":"15152000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6327}',
            ),
            276 => 
            array (
                'id' => 1777,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1055,"nilai":"54.13","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6328}',
            ),
            277 => 
            array (
                'id' => 1778,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1055,"nilai":"33.34","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6329}',
            ),
            278 => 
            array (
                'id' => 1779,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1055,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6330}',
            ),
            279 => 
            array (
                'id' => 1780,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000287","nama":"YANI","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1056}',
            ),
            280 => 
            array (
                'id' => 1781,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1056,"nilai":"2642150","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6331}',
            ),
            281 => 
            array (
                'id' => 1782,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1056,"nilai":"43.18","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6332}',
            ),
            282 => 
            array (
                'id' => 1783,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1056,"nilai":"35080000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6333}',
            ),
            283 => 
            array (
                'id' => 1784,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1056,"nilai":"92.53","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6334}',
            ),
            284 => 
            array (
                'id' => 1785,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1056,"nilai":"40.47","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6335}',
            ),
            285 => 
            array (
                'id' => 1786,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1056,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6336}',
            ),
            286 => 
            array (
                'id' => 1787,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300859","nama":"YANI HARYANI","alamat":"KP PASIRMUNCANG RT 02 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1057}',
            ),
            287 => 
            array (
                'id' => 1788,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1057,"nilai":"1954400","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6337}',
            ),
            288 => 
            array (
                'id' => 1789,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1057,"nilai":"80.54","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6338}',
            ),
            289 => 
            array (
                'id' => 1790,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1057,"nilai":"21364000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6339}',
            ),
            290 => 
            array (
                'id' => 1791,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1057,"nilai":"52.1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6340}',
            ),
            291 => 
            array (
                'id' => 1792,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1057,"nilai":"72.72","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6341}',
            ),
            292 => 
            array (
                'id' => 1793,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1057,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6342}',
            ),
            293 => 
            array (
                'id' => 1794,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061066","nama":"YANTI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1058}',
            ),
            294 => 
            array (
                'id' => 1795,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1058,"nilai":"1078700","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6343}',
            ),
            295 => 
            array (
                'id' => 1796,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1058,"nilai":"66.91","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6344}',
            ),
            296 => 
            array (
                'id' => 1797,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1058,"nilai":"35116000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6345}',
            ),
            297 => 
            array (
                'id' => 1798,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1058,"nilai":"82.2","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6346}',
            ),
            298 => 
            array (
                'id' => 1799,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1058,"nilai":"36.63","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6347}',
            ),
            299 => 
            array (
                'id' => 1800,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1058,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6348}',
            ),
            300 => 
            array (
                'id' => 1801,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061026","nama":"YANTI RUSTINI","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1059}',
            ),
            301 => 
            array (
                'id' => 1802,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1059,"nilai":"1409100","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6349}',
            ),
            302 => 
            array (
                'id' => 1803,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1059,"nilai":"34.99","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6350}',
            ),
            303 => 
            array (
                'id' => 1804,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1059,"nilai":"28072000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6351}',
            ),
            304 => 
            array (
                'id' => 1805,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1059,"nilai":"91.4","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6352}',
            ),
            305 => 
            array (
                'id' => 1806,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1059,"nilai":"79.76","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6353}',
            ),
            306 => 
            array (
                'id' => 1807,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1059,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6354}',
            ),
            307 => 
            array (
                'id' => 1808,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016015217","nama":"YANTI SITI PATIMAH","alamat":"KP JATI RW 10 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1060}',
            ),
            308 => 
            array (
                'id' => 1809,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1060,"nilai":"2450000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6355}',
            ),
            309 => 
            array (
                'id' => 1810,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1060,"nilai":"44.64","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6356}',
            ),
            310 => 
            array (
                'id' => 1811,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1060,"nilai":"17008000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6357}',
            ),
            311 => 
            array (
                'id' => 1812,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1060,"nilai":"33.21","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6358}',
            ),
            312 => 
            array (
                'id' => 1813,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1060,"nilai":"57.45","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6359}',
            ),
            313 => 
            array (
                'id' => 1814,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1060,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6360}',
            ),
            314 => 
            array (
                'id' => 1815,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000185","nama":"YANTI SUGIANTI","alamat":"KP GEGERLOA RT 01 RW 07","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1061}',
            ),
            315 => 
            array (
                'id' => 1816,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1061,"nilai":"1189300","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6361}',
            ),
            316 => 
            array (
                'id' => 1817,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1061,"nilai":"26.04","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6362}',
            ),
            317 => 
            array (
                'id' => 1818,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1061,"nilai":"21284000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6363}',
            ),
            318 => 
            array (
                'id' => 1819,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1061,"nilai":"78.43","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6364}',
            ),
            319 => 
            array (
                'id' => 1820,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1061,"nilai":"69.05","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6365}',
            ),
            320 => 
            array (
                'id' => 1821,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1061,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6366}',
            ),
            321 => 
            array (
                'id' => 1822,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300061","nama":"YATI","alamat":"KP. SARPEUNDEUY RT. 05 RW. 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1062}',
            ),
            322 => 
            array (
                'id' => 1823,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1062,"nilai":"1146950","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6367}',
            ),
            323 => 
            array (
                'id' => 1824,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1062,"nilai":"82.89","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6368}',
            ),
            324 => 
            array (
                'id' => 1825,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1062,"nilai":"13968000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6369}',
            ),
            325 => 
            array (
                'id' => 1826,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1062,"nilai":"82.2","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6370}',
            ),
            326 => 
            array (
                'id' => 1827,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1062,"nilai":"36.63","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6371}',
            ),
            327 => 
            array (
                'id' => 1828,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1062,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6372}',
            ),
            328 => 
            array (
                'id' => 1829,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060961","nama":"YATI","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1063}',
            ),
            329 => 
            array (
                'id' => 1830,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1063,"nilai":"3392200","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6373}',
            ),
            330 => 
            array (
                'id' => 1831,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1063,"nilai":"85.28","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6374}',
            ),
            331 => 
            array (
                'id' => 1832,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1063,"nilai":"32224000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6375}',
            ),
            332 => 
            array (
                'id' => 1833,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1063,"nilai":"27.45","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6376}',
            ),
            333 => 
            array (
                'id' => 1834,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1063,"nilai":"66.37","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6377}',
            ),
            334 => 
            array (
                'id' => 1835,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1063,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6378}',
            ),
            335 => 
            array (
                'id' => 1836,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061078","nama":"YATI","alamat":"KP PATROL RT 01 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1064}',
            ),
            336 => 
            array (
                'id' => 1837,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1064,"nilai":"1097250","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6379}',
            ),
            337 => 
            array (
                'id' => 1838,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1064,"nilai":"33.24","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6380}',
            ),
            338 => 
            array (
                'id' => 1839,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1064,"nilai":"31512000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6381}',
            ),
            339 => 
            array (
                'id' => 1840,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1064,"nilai":"71.13","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6382}',
            ),
            340 => 
            array (
                'id' => 1841,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1064,"nilai":"60.41","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6383}',
            ),
            341 => 
            array (
                'id' => 1842,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1064,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6384}',
            ),
            342 => 
            array (
                'id' => 1843,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000169","nama":"YAYA","alamat":"KP CISALAM RW 06 RT 01","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1065}',
            ),
            343 => 
            array (
                'id' => 1844,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1065,"nilai":"2052050","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6385}',
            ),
            344 => 
            array (
                'id' => 1845,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1065,"nilai":"77","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6386}',
            ),
            345 => 
            array (
                'id' => 1846,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1065,"nilai":"16120000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6387}',
            ),
            346 => 
            array (
                'id' => 1847,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1065,"nilai":"57.86","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6388}',
            ),
            347 => 
            array (
                'id' => 1848,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1065,"nilai":"31.91","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6389}',
            ),
            348 => 
            array (
                'id' => 1849,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1065,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6390}',
            ),
            349 => 
            array (
                'id' => 1850,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300075","nama":"YAYA PARIDAH","alamat":"KP. CISALAM RT 02\\/06","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1066}',
            ),
            350 => 
            array (
                'id' => 1851,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1066,"nilai":"2850050","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6391}',
            ),
            351 => 
            array (
                'id' => 1852,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1066,"nilai":"87.37","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6392}',
            ),
            352 => 
            array (
                'id' => 1853,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1066,"nilai":"36408000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6393}',
            ),
            353 => 
            array (
                'id' => 1854,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1066,"nilai":"69.87","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6394}',
            ),
            354 => 
            array (
                'id' => 1855,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1066,"nilai":"25.89","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6395}',
            ),
            355 => 
            array (
                'id' => 1856,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1066,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6396}',
            ),
            356 => 
            array (
                'id' => 1857,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061122","nama":"YAYAN","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1067}',
            ),
            357 => 
            array (
                'id' => 1858,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1067,"nilai":"1799000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6397}',
            ),
            358 => 
            array (
                'id' => 1859,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1067,"nilai":"61.91","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6398}',
            ),
            359 => 
            array (
                'id' => 1860,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1067,"nilai":"25704000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6399}',
            ),
            360 => 
            array (
                'id' => 1861,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1067,"nilai":"98.04","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6400}',
            ),
            361 => 
            array (
                'id' => 1862,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1067,"nilai":"39.7","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6401}',
            ),
            362 => 
            array (
                'id' => 1863,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1067,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6402}',
            ),
            363 => 
            array (
                'id' => 1864,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300056","nama":"YAYAT HIDAYAT","alamat":"KP. SARPEUNDEUY RT. 03 RW. 04","import_id":7,"status":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1068}',
            ),
            364 => 
            array (
                'id' => 1865,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1068,"nilai":"2497600","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6403}',
            ),
            365 => 
            array (
                'id' => 1866,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1068,"nilai":"94.46","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6404}',
            ),
            366 => 
            array (
                'id' => 1867,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1068,"nilai":"14480000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6405}',
            ),
            367 => 
            array (
                'id' => 1868,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1068,"nilai":"72.5","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6406}',
            ),
            368 => 
            array (
                'id' => 1869,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1068,"nilai":"81.27","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6407}',
            ),
            369 => 
            array (
                'id' => 1870,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1068,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6408}',
            ),
            370 => 
            array (
                'id' => 1871,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061002","nama":"YENI PADILAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1069}',
            ),
            371 => 
            array (
                'id' => 1872,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1069,"nilai":"2667350","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6409}',
            ),
            372 => 
            array (
                'id' => 1873,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1069,"nilai":"42.58","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6410}',
            ),
            373 => 
            array (
                'id' => 1874,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1069,"nilai":"12344000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6411}',
            ),
            374 => 
            array (
                'id' => 1875,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1069,"nilai":"71.48","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6412}',
            ),
            375 => 
            array (
                'id' => 1876,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1069,"nilai":"40.67","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6413}',
            ),
            376 => 
            array (
                'id' => 1877,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1069,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6414}',
            ),
            377 => 
            array (
                'id' => 1878,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060992","nama":"YETI","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1070}',
            ),
            378 => 
            array (
                'id' => 1879,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1070,"nilai":"2118900","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6415}',
            ),
            379 => 
            array (
                'id' => 1880,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1070,"nilai":"54.75","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6416}',
            ),
            380 => 
            array (
                'id' => 1881,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1070,"nilai":"39296000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6417}',
            ),
            381 => 
            array (
                'id' => 1882,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1070,"nilai":"48.73","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6418}',
            ),
            382 => 
            array (
                'id' => 1883,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1070,"nilai":"61.22","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6419}',
            ),
            383 => 
            array (
                'id' => 1884,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1070,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6420}',
            ),
            384 => 
            array (
                'id' => 1885,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300097","nama":"YIYIT","alamat":"KP. BOJONG GEDE RT 03\\/08","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1071}',
            ),
            385 => 
            array (
                'id' => 1886,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1071,"nilai":"2282350","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6421}',
            ),
            386 => 
            array (
                'id' => 1887,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1071,"nilai":"67.51","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6422}',
            ),
            387 => 
            array (
                'id' => 1888,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1071,"nilai":"23260000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6423}',
            ),
            388 => 
            array (
                'id' => 1889,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1071,"nilai":"90.47","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6424}',
            ),
            389 => 
            array (
                'id' => 1890,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1071,"nilai":"83.96","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6425}',
            ),
            390 => 
            array (
                'id' => 1891,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1071,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6426}',
            ),
            391 => 
            array (
                'id' => 1892,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300885","nama":"YOYOH ROBAYAH","alamat":"KP JATI RW 10 RT 01","import_id":7,"status":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1072}',
            ),
            392 => 
            array (
                'id' => 1893,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1072,"nilai":"919450","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6427}',
            ),
            393 => 
            array (
                'id' => 1894,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1072,"nilai":"60.43","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6428}',
            ),
            394 => 
            array (
                'id' => 1895,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1072,"nilai":"17544000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6429}',
            ),
            395 => 
            array (
                'id' => 1896,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1072,"nilai":"91.38","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6430}',
            ),
            396 => 
            array (
                'id' => 1897,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1072,"nilai":"94.76","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6431}',
            ),
            397 => 
            array (
                'id' => 1898,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1072,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6432}',
            ),
            398 => 
            array (
                'id' => 1899,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300814","nama":"YOYOH ROKAYAH","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":7,"status":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1073}',
            ),
            399 => 
            array (
                'id' => 1900,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1073,"nilai":"3293850","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6433}',
            ),
            400 => 
            array (
                'id' => 1901,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1073,"nilai":"68.95","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6434}',
            ),
            401 => 
            array (
                'id' => 1902,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1073,"nilai":"35124000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6435}',
            ),
            402 => 
            array (
                'id' => 1903,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1073,"nilai":"48.29","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6436}',
            ),
            403 => 
            array (
                'id' => 1904,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1073,"nilai":"61.19","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6437}',
            ),
            404 => 
            array (
                'id' => 1905,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1073,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6438}',
            ),
            405 => 
            array (
                'id' => 1906,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000306","nama":"YULI APRILIANTI","alamat":"KP PATROL RT 03 RW 09","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1074}',
            ),
            406 => 
            array (
                'id' => 1907,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1074,"nilai":"2518600","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6439}',
            ),
            407 => 
            array (
                'id' => 1908,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1074,"nilai":"30.29","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6440}',
            ),
            408 => 
            array (
                'id' => 1909,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1074,"nilai":"32908000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6441}',
            ),
            409 => 
            array (
                'id' => 1910,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1074,"nilai":"98.98","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6442}',
            ),
            410 => 
            array (
                'id' => 1911,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1074,"nilai":"27.15","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6443}',
            ),
            411 => 
            array (
                'id' => 1912,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1074,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6444}',
            ),
            412 => 
            array (
                'id' => 1913,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300071","nama":"YUYU","alamat":"KP. CISALAM RT 02\\/06","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1075}',
            ),
            413 => 
            array (
                'id' => 1914,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1075,"nilai":"1296750","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6445}',
            ),
            414 => 
            array (
                'id' => 1915,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1075,"nilai":"51.67","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6446}',
            ),
            415 => 
            array (
                'id' => 1916,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1075,"nilai":"33444000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6447}',
            ),
            416 => 
            array (
                'id' => 1917,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1075,"nilai":"79.61","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6448}',
            ),
            417 => 
            array (
                'id' => 1918,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1075,"nilai":"94.63","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6449}',
            ),
            418 => 
            array (
                'id' => 1919,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1075,"nilai":"1","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6450}',
            ),
            419 => 
            array (
                'id' => 1920,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300054","nama":"YUYUM","alamat":"KP. SARPEUNDEUY RT. 01 RW. 04","import_id":7,"status":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":1076}',
            ),
            420 => 
            array (
                'id' => 1921,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":7,"penduduk_id":1076,"nilai":"2970800","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6451}',
            ),
            421 => 
            array (
                'id' => 1922,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":8,"penduduk_id":1076,"nilai":"76.29","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6452}',
            ),
            422 => 
            array (
                'id' => 1923,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":9,"penduduk_id":1076,"nilai":"12360000","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6453}',
            ),
            423 => 
            array (
                'id' => 1924,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":10,"penduduk_id":1076,"nilai":"92.35","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6454}',
            ),
            424 => 
            array (
                'id' => 1925,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":11,"penduduk_id":1076,"nilai":"26.73","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6455}',
            ),
            425 => 
            array (
                'id' => 1926,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":12,"penduduk_id":1076,"nilai":"0","updated_at":"2023-05-30T05:02:03.000000Z","created_at":"2023-05-30T05:02:03.000000Z","id":6456}',
            ),
            426 => 
            array (
                'id' => 1927,
                'user_id' => 1,
                'log_date' => '2023-05-30 12:02:03',
                'table_name' => 'import_penduduk',
                'log_type' => 'edit',
                'data' => '{"nama":"Testing","slug":"testing","updated_at":"2023-05-30 12:01:57","created_at":"2023-05-30 12:01:57","id":7}',
            ),
            427 => 
            array (
                'id' => 1928,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:28:34',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":7,"nama":"Penghasilan","slug":null,"kode":"C1","keterangan":"0 - 3.500.000","dari":0,"sampai":0,"import_id":1,"created_at":"2023-05-30 12:01:21","updated_at":"2023-05-30 12:01:21"}',
            ),
            428 => 
            array (
                'id' => 1929,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:28:37',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":8,"nama":"Aset","slug":null,"kode":"C2","keterangan":"0 - 40.000.000","dari":0,"sampai":0,"import_id":1,"created_at":"2023-05-30 12:01:21","updated_at":"2023-05-30 12:01:21"}',
            ),
            429 => 
            array (
                'id' => 1930,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:28:39',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":9,"nama":"Kepemilikan Rumah","slug":null,"kode":"C3","keterangan":"0 - 100","dari":0,"sampai":0,"import_id":1,"created_at":"2023-05-30 12:01:21","updated_at":"2023-05-30 12:01:21"}',
            ),
            430 => 
            array (
                'id' => 1931,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:28:41',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":10,"nama":"Kondisi Dinding Rumah","slug":null,"kode":"C4","keterangan":"0 - 100","dari":0,"sampai":0,"import_id":1,"created_at":"2023-05-30 12:01:21","updated_at":"2023-05-30 12:01:21"}',
            ),
            431 => 
            array (
                'id' => 1932,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:28:44',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":11,"nama":"Kondisi Lantai Rumah","slug":null,"kode":"C5","keterangan":"0 - 100","dari":0,"sampai":0,"import_id":1,"created_at":"2023-05-30 12:01:21","updated_at":"2023-05-30 12:01:21"}',
            ),
            432 => 
            array (
                'id' => 1933,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:28:46',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":12,"nama":"Syarat Khusus","slug":null,"kode":"C6","keterangan":"0 Tidak, 1 Ada","dari":0,"sampai":0,"import_id":1,"created_at":"2023-05-30 12:01:21","updated_at":"2023-05-30 12:01:21"}',
            ),
            433 => 
            array (
                'id' => 1934,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:30:34',
                'table_name' => 'kriteria_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":"12","nama":"Tidak","nilai":"1","dari":"0","sampai":"0","updated_at":"2023-08-07T17:30:34.000000Z","created_at":"2023-08-07T17:30:34.000000Z","id":1}',
            ),
            434 => 
            array (
                'id' => 1935,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:30:42',
                'table_name' => 'kriteria_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":"12","nama":"Ya","nilai":"2","dari":"1","sampai":"1","updated_at":"2023-08-07T17:30:42.000000Z","created_at":"2023-08-07T17:30:42.000000Z","id":2}',
            ),
            435 => 
            array (
                'id' => 1936,
                'user_id' => 1,
                'log_date' => '2023-08-08 00:30:42',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":12,"nama":"Syarat Khusus","slug":"syarat-khusus","kode":"C6","keterangan":"0 Tidak, 1 Ada","dari":0,"sampai":0,"import_id":1,"created_at":"2023-05-30 12:01:21","updated_at":"2023-08-08 00:28:46"}',
            ),
            436 => 
            array (
                'id' => 1937,
                'user_id' => 1,
                'log_date' => '2023-08-08 22:46:33',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36 Edg\\/115.0.1901.188"}',
            ),
            437 => 
            array (
                'id' => 1938,
                'user_id' => 1,
                'log_date' => '2023-08-08 22:50:21',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":437,"parent_id":null,"title":"Penduduk","icon":"fas fa-user-edit","route":"admin.penduduk","sequence":3,"active":1,"type":1,"created_at":"2023-05-29 18:08:18","updated_at":"2023-05-30 00:11:30"}',
            ),
            438 => 
            array (
                'id' => 1939,
                'user_id' => 1,
                'log_date' => '2023-08-08 22:50:21',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":437,"updated_at":"2023-08-08T15:50:21.000000Z","created_at":"2023-08-08T15:50:21.000000Z","id":326}',
            ),
            439 => 
            array (
                'id' => 1940,
                'user_id' => 1,
                'log_date' => '2023-08-08 22:50:21',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":437,"updated_at":"2023-08-08T15:50:21.000000Z","created_at":"2023-08-08T15:50:21.000000Z","id":327}',
            ),
            440 => 
            array (
                'id' => 1941,
                'user_id' => 1,
                'log_date' => '2023-08-08 22:50:21',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":10,"menu_id":437,"updated_at":"2023-08-08T15:50:21.000000Z","created_at":"2023-08-08T15:50:21.000000Z","id":328}',
            ),
            441 => 
            array (
                'id' => 1942,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:24',
                'table_name' => 'p_menu',
                'log_type' => 'create',
                'data' => '{"sequence":"17","parent_id":null,"active":"1","title":"Perhitungan","icon":"fas fa-calculator","route":"admin.perhitungan","type":"1","updated_at":"2023-08-08T16:51:24.000000Z","created_at":"2023-08-08T16:51:24.000000Z","id":439}',
            ),
            442 => 
            array (
                'id' => 1943,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:24',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":439,"updated_at":"2023-08-08T16:51:24.000000Z","created_at":"2023-08-08T16:51:24.000000Z","id":329}',
            ),
            443 => 
            array (
                'id' => 1944,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":439,"parent_id":null,"title":"Perhitungan","icon":"fas fa-calculator","route":"admin.perhitungan","sequence":17,"active":1,"type":1,"created_at":"2023-08-08 23:51:24","updated_at":"2023-08-08 23:51:24"}',
            ),
            444 => 
            array (
                'id' => 1945,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":4,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-05-30 00:11:30"}',
            ),
            445 => 
            array (
                'id' => 1946,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":430,"parent_id":null,"title":"Import","icon":"fas fa-upload","route":null,"sequence":5,"active":1,"type":1,"created_at":"2023-05-16 18:10:19","updated_at":"2023-05-30 00:11:30"}',
            ),
            446 => 
            array (
                'id' => 1947,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":436,"parent_id":430,"title":"Kriteria","icon":null,"route":"admin.import.kriteria","sequence":6,"active":1,"type":1,"created_at":"2023-05-29 14:59:27","updated_at":"2023-05-30 00:11:30"}',
            ),
            447 => 
            array (
                'id' => 1948,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":435,"parent_id":430,"title":"Penduduk","icon":null,"route":"admin.import.penduduk","sequence":7,"active":1,"type":1,"created_at":"2023-05-29 02:19:06","updated_at":"2023-05-30 00:11:30"}',
            ),
            448 => 
            array (
                'id' => 1949,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":8,"active":1,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-05-30 00:11:30"}',
            ),
            449 => 
            array (
                'id' => 1950,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":398,"parent_id":397,"title":"Informasi Admin","icon":null,"route":"admin.setting.admin","sequence":9,"active":1,"type":1,"created_at":"2022-08-14 21:11:42","updated_at":"2023-05-30 00:11:30"}',
            ),
            450 => 
            array (
                'id' => 1951,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":438,"parent_id":397,"title":"Halaman Dashboard","icon":null,"route":"admin.setting.dashboard","sequence":10,"active":1,"type":1,"created_at":"2023-05-29 20:03:50","updated_at":"2023-05-30 00:11:30"}',
            ),
            451 => 
            array (
                'id' => 1952,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"Akses Pengguna","icon":"fas fa-user-check","route":null,"sequence":11,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-30 00:11:30"}',
            ),
            452 => 
            array (
                'id' => 1953,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Perizinan","icon":null,"route":"admin.user_access.permission","sequence":12,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-30 00:11:30"}',
            ),
            453 => 
            array (
                'id' => 1954,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Sebagai","icon":null,"route":"admin.user_access.role","sequence":13,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-30 00:11:30"}',
            ),
            454 => 
            array (
                'id' => 1955,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Pengguna","icon":"fas fa-list","route":"admin.user","sequence":14,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-30 00:11:30"}',
            ),
            455 => 
            array (
                'id' => 1956,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":"admin.menu.admin","sequence":15,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-30 00:11:30"}',
            ),
            456 => 
            array (
                'id' => 1957,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":16,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-30 00:11:30"}',
            ),
            457 => 
            array (
                'id' => 1958,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:51:32',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":17,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-05-30 00:11:30"}',
            ),
            458 => 
            array (
                'id' => 1959,
                'user_id' => 1,
                'log_date' => '2023-08-08 23:52:47',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":"202304182058334.png","username":null,"email_verified_at":null,"password":"$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"zsFzeXvGyqwlLYHb5cX98g629gbRjL8lW28VIh43acQ9lpaOxbAsKlti6Rxu","created_at":null,"updated_at":"2023-04-19 17:19:26"}',
            ),
            459 => 
            array (
                'id' => 1960,
                'user_id' => 3,
                'log_date' => '2023-08-08 23:53:14',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/115.0.0.0 Safari\\/537.36 Edg\\/115.0.1901.188"}',
            ),
        ));
        
        
    }
}