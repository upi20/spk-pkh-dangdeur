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
                'log_date' => '2023-05-29 20:53:07',
                'table_name' => 'users',
                'log_type' => 'edit',
                'data' => '{"id":1,"name":"Isep Lutpi Nur","email":"iseplutpinur7@gmail.com","foto":"202304182058334.png","username":null,"email_verified_at":null,"password":"$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":"TVR7Q7JcDjcSdf2aNqutojP8DRDc0tAqYWbMUnK7llilxZUqZ3XcuC9GKzJv","created_at":null,"updated_at":"2023-04-19 17:19:26"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-05-29 20:53:12',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/113.0.0.0 Safari\\/537.36 Edg\\/113.0.1774.57"}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":437,"parent_id":null,"title":"Penduduk","icon":"fas fa-user-edit","route":"admin.penduduk","sequence":5,"active":1,"type":1,"created_at":"2023-05-29 18:08:18","updated_at":"2023-05-29 18:08:25"}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":6,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-05-29 18:08:25"}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":430,"parent_id":null,"title":"Import","icon":"fas fa-upload","route":null,"sequence":7,"active":1,"type":1,"created_at":"2023-05-16 18:10:19","updated_at":"2023-05-29 18:08:25"}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":436,"parent_id":430,"title":"Kriteria","icon":null,"route":"admin.import.kriteria","sequence":8,"active":1,"type":1,"created_at":"2023-05-29 14:59:27","updated_at":"2023-05-29 18:08:25"}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":435,"parent_id":430,"title":"Penduduk","icon":null,"route":"admin.import.penduduk","sequence":9,"active":1,"type":1,"created_at":"2023-05-29 02:19:06","updated_at":"2023-05-29 19:21:32"}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":10,"active":1,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-05-29 20:03:31"}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":398,"parent_id":397,"title":"Informasi Admin","icon":null,"route":"admin.setting.admin","sequence":11,"active":1,"type":1,"created_at":"2022-08-14 21:11:42","updated_at":"2023-05-29 15:14:23"}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":438,"parent_id":397,"title":"Halaman Dashboard","icon":null,"route":"admin.setting.dashboard","sequence":19,"active":1,"type":1,"created_at":"2023-05-29 20:03:50","updated_at":"2023-05-29 20:03:50"}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"Akses Pengguna","icon":"fas fa-user-check","route":null,"sequence":14,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 18:08:25"}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Perizinan","icon":null,"route":"admin.user_access.permission","sequence":15,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 18:08:25"}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Sebagai","icon":null,"route":"admin.user_access.role","sequence":16,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 18:08:25"}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Pengguna","icon":"fas fa-list","route":"admin.user","sequence":12,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 18:08:25"}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":"admin.menu.admin","sequence":13,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 18:08:25"}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":17,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 18:08:25"}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:11:30',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":18,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-05-29 18:08:25"}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:58:47',
                'table_name' => 'penduduk',
                'log_type' => 'edit',
                'data' => '{"id":539,"nik":"320523017061114","nama":"ADE KHODIJAH","alamat":"KP JATI RT 03 RW 10","status":1,"import_id":6,"created_at":"2023-05-29 20:44:28","updated_at":"2023-05-29 20:44:28"}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:58:53',
                'table_name' => 'penduduk',
                'log_type' => 'edit',
                'data' => '{"id":539,"nik":"320523017061114","nama":"ADE KHODIJAH","alamat":"KP JATI RT 03 RW 10","status":2,"import_id":6,"created_at":"2023-05-29 20:44:28","updated_at":"2023-05-30 00:58:47"}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-05-30 00:58:58',
                'table_name' => 'penduduk',
                'log_type' => 'edit',
                'data' => '{"id":539,"nik":"320523017061114","nama":"ADE KHODIJAH","alamat":"KP JATI RT 03 RW 10","status":1,"import_id":6,"created_at":"2023-05-29 20:44:28","updated_at":"2023-05-30 00:58:53"}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-05-30 01:04:43',
                'table_name' => 'penduduk',
                'log_type' => 'edit',
                'data' => '{"id":544,"nik":"320523016300890","nama":"AI MARLINA","alamat":"KP JATI RW 10 RT 02","status":0,"import_id":6,"created_at":"2023-05-29 20:44:28","updated_at":"2023-05-29 20:44:28"}',
            ),
        ));
        
        
    }
}