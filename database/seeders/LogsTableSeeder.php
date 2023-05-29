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
        ));
        
        
    }
}