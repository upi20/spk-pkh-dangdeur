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
                'log_date' => '2023-05-29 14:57:01',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":414,"parent_id":null,"title":"Visi Dan Misi","icon":null,"route":"admin.setting.visi_misi","sequence":54,"active":0,"type":1,"created_at":"2023-01-18 01:51:32","updated_at":"2023-05-24 00:00:39"}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:57:03',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":392,"parent_id":null,"title":"Google Form","icon":"fas fa-user-edit","route":"admin.pendaftaran.gform","sequence":53,"active":0,"type":1,"created_at":"2022-08-08 16:14:54","updated_at":"2023-05-24 00:00:39"}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:57:14',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"User Access","icon":"fas fa-user-check","route":null,"sequence":48,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-24 00:00:38"}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:57:14',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":367,"updated_at":"2023-05-29T07:57:14.000000Z","created_at":"2023-05-29T07:57:14.000000Z","id":292}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:27',
                'table_name' => 'p_menu',
                'log_type' => 'create',
                'data' => '{"sequence":"54","parent_id":null,"active":"1","title":"Kriteria","icon":null,"route":"admin.kriteria","type":"1","updated_at":"2023-05-29T07:59:27.000000Z","created_at":"2023-05-29T07:59:27.000000Z","id":436}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:27',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":436,"updated_at":"2023-05-29T07:59:27.000000Z","created_at":"2023-05-29T07:59:27.000000Z","id":293}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":435,"parent_id":430,"title":"Calon","icon":null,"route":"admin.import.calon","sequence":54,"active":1,"type":1,"created_at":"2023-05-29 02:19:06","updated_at":"2023-05-29 02:38:24"}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":436,"parent_id":null,"title":"Kriteria","icon":null,"route":"admin.kriteria","sequence":54,"active":1,"type":1,"created_at":"2023-05-29 14:59:27","updated_at":"2023-05-29 14:59:27"}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":37,"active":0,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-05-24 00:00:38"}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":398,"parent_id":397,"title":"Informasi Admin","icon":null,"route":"admin.setting.admin","sequence":38,"active":1,"type":1,"created_at":"2022-08-14 21:11:42","updated_at":"2023-05-24 00:00:38"}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":399,"parent_id":397,"title":"Informasi Depan","icon":null,"route":"admin.setting.front","sequence":39,"active":1,"type":1,"created_at":"2022-08-14 21:52:45","updated_at":"2023-05-24 00:00:38"}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":393,"parent_id":null,"title":"Peralatan","icon":"fas fa-tools","route":null,"sequence":40,"active":0,"type":1,"created_at":"2022-08-08 22:41:26","updated_at":"2023-05-24 00:00:38"}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":402,"parent_id":393,"title":"Notifikasi Admin","icon":null,"route":"admin.utility.notif_admin_atas","sequence":41,"active":1,"type":1,"created_at":"2022-08-18 16:42:00","updated_at":"2023-05-24 00:00:38"}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":394,"parent_id":393,"title":"Notifikasi Depan","icon":null,"route":"admin.utility.notif_depan_atas","sequence":42,"active":1,"type":1,"created_at":"2022-08-08 22:41:53","updated_at":"2023-05-24 00:00:38"}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":401,"parent_id":393,"title":"Hari Besar Nasional","icon":null,"route":"admin.utility.hari_besar_nasional","sequence":43,"active":1,"type":1,"created_at":"2022-08-17 21:19:05","updated_at":"2023-05-24 00:00:38"}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Pengguna","icon":"fas fa-list","route":"admin.user","sequence":44,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-24 00:00:38"}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":null,"sequence":45,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-24 00:00:38"}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":405,"parent_id":361,"title":"Admin","icon":null,"route":"admin.menu.admin","sequence":46,"active":1,"type":1,"created_at":"2022-08-20 14:12:45","updated_at":"2023-05-24 00:00:38"}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":406,"parent_id":361,"title":"Depan","icon":null,"route":"admin.menu.frontend","sequence":47,"active":1,"type":1,"created_at":"2022-08-20 14:16:07","updated_at":"2023-05-24 00:00:38"}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"Akses Pengguna","icon":"fas fa-user-check","route":null,"sequence":48,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 14:57:14"}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Permission","icon":null,"route":"admin.user_access.permission","sequence":49,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-24 00:00:38"}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Role","icon":null,"route":"admin.user_access.role","sequence":50,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-24 00:00:39"}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":51,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-24 00:00:39"}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'log_date' => '2023-05-29 14:59:36',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":52,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-05-24 00:00:39"}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:00:38',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":436,"parent_id":430,"title":"Kriteria","icon":null,"route":"admin.kriteria","sequence":38,"active":1,"type":1,"created_at":"2023-05-29 14:59:27","updated_at":"2023-05-29 14:59:36"}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:00:38',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":436,"updated_at":"2023-05-29T08:00:38.000000Z","created_at":"2023-05-29T08:00:38.000000Z","id":294}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:08:59',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C1","nama":"Penghasilan","keterangan":"0 - 3.500.000","updated_at":"2023-05-29T08:08:59.000000Z","created_at":"2023-05-29T08:08:59.000000Z","id":1}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:09:16',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C2","nama":"Aset","keterangan":"0 - 40.000.000","updated_at":"2023-05-29T08:09:16.000000Z","created_at":"2023-05-29T08:09:16.000000Z","id":2}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:09:31',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C3","nama":"Kepemilikan Rumah","keterangan":"0 - 100","updated_at":"2023-05-29T08:09:31.000000Z","created_at":"2023-05-29T08:09:31.000000Z","id":3}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:09:45',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C4","nama":"Kondisi Dinding Rumah","keterangan":"0 - 100","updated_at":"2023-05-29T08:09:45.000000Z","created_at":"2023-05-29T08:09:45.000000Z","id":4}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:10:00',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C5","nama":"Kondisi Lantai Rumah","keterangan":"0 - 100","updated_at":"2023-05-29T08:10:00.000000Z","created_at":"2023-05-29T08:10:00.000000Z","id":5}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:10:18',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"kode":"C6","nama":"Syarat Khusus","keterangan":"0 Tidak, 1 Ada","updated_at":"2023-05-29T08:10:18.000000Z","created_at":"2023-05-29T08:10:18.000000Z","id":6}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:12:53',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":410,"parent_id":null,"title":"Media Dan Informasi","icon":null,"route":null,"sequence":2,"active":0,"type":0,"created_at":"2022-09-15 21:17:53","updated_at":"2023-05-23 20:28:42"}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:12:55',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":418,"parent_id":null,"title":"Halaman Utama","icon":"fas fa-home","route":null,"sequence":3,"active":0,"type":1,"created_at":"2023-03-10 13:04:51","updated_at":"2023-05-23 20:26:59"}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:12:58',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":412,"parent_id":null,"title":"Slider","icon":null,"route":"admin.setting.home_slider","sequence":4,"active":1,"type":1,"created_at":"2023-01-18 00:11:36","updated_at":"2023-05-29 15:12:55"}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:01',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":408,"parent_id":null,"title":"FAQ","icon":null,"route":"admin.kontak.faq","sequence":5,"active":1,"type":1,"created_at":"2022-08-21 08:39:18","updated_at":"2023-05-29 15:12:55"}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:03',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":425,"parent_id":null,"title":"Testimonial","icon":null,"route":"admin.home.testimonial","sequence":6,"active":1,"type":1,"created_at":"2023-04-13 13:06:10","updated_at":"2023-05-29 15:12:55"}',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:06',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":400,"parent_id":null,"title":"Pengaturan Halaman","icon":null,"route":"admin.setting.home","sequence":7,"active":1,"type":1,"created_at":"2022-08-16 14:55:41","updated_at":"2023-05-29 15:12:55"}',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:09',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":423,"parent_id":null,"title":"Pengurus","icon":"fas fa-users","route":"admin.home.pengurus","sequence":8,"active":0,"type":1,"created_at":"2023-03-26 18:32:49","updated_at":"2023-05-29 15:12:55"}',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:11',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":413,"parent_id":null,"title":"Kata Kata","icon":"fas fa-star","route":"admin.home.kata_kata","sequence":9,"active":0,"type":1,"created_at":"2023-01-18 00:18:02","updated_at":"2023-05-29 15:12:55"}',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:14',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":420,"parent_id":null,"title":"Program Pembelajaran","icon":null,"route":"admin.home.program_pembelajaran","sequence":10,"active":0,"type":1,"created_at":"2023-03-24 21:39:21","updated_at":"2023-05-29 15:12:55"}',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:16',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":422,"parent_id":null,"title":"Tentang","icon":"fab fa-slack-hash","route":"admin.setting.about","sequence":11,"active":0,"type":1,"created_at":"2023-03-26 15:04:17","updated_at":"2023-05-23 20:27:54"}',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:18',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":360,"parent_id":null,"title":"Galeri","icon":"fas fa-images","route":"admin.galeri","sequence":12,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-04 21:36:25"}',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:20',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":351,"parent_id":null,"title":"Artikel","icon":"fas fa-file-alt","route":null,"sequence":13,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-23 20:27:11"}',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:22',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":352,"parent_id":null,"title":"Daftar Artikel","icon":null,"route":"admin.artikel.data","sequence":14,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:13:20"}',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:25',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":353,"parent_id":null,"title":"Artikel Kategori","icon":null,"route":"admin.artikel.kategori","sequence":15,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:13:20"}',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:27',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":354,"parent_id":null,"title":"Artikel Tag","icon":null,"route":"admin.artikel.tag","sequence":16,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:13:20"}',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:29',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":421,"parent_id":null,"title":"Banner","icon":"fas fa-image","route":"admin.banner","sequence":17,"active":1,"type":1,"created_at":"2023-03-24 23:53:51","updated_at":"2023-05-29 15:13:20"}',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:32',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":424,"parent_id":null,"title":"Pendaftaran","icon":"fas fa-user-edit","route":"admin.pendaftaran.santri","sequence":18,"active":0,"type":1,"created_at":"2023-03-26 22:33:01","updated_at":"2023-04-19 11:12:31"}',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:34',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":364,"parent_id":null,"title":"Kontak","icon":"fas fa-phone","route":null,"sequence":19,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-23 20:27:24"}',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:36',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":363,"parent_id":null,"title":"Sosial Media","icon":"fas fa-share-alt","route":"admin.social_media","sequence":20,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:13:34"}',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:39',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":409,"parent_id":null,"title":"Daftar Kontak","icon":null,"route":"admin.kontak.list","sequence":21,"active":1,"type":1,"created_at":"2022-08-21 08:40:08","updated_at":"2023-05-29 15:13:34"}',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:40',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":407,"parent_id":null,"title":"Pesan Diterima","icon":null,"route":"admin.kontak.message","sequence":22,"active":1,"type":1,"created_at":"2022-08-21 08:38:20","updated_at":"2023-05-29 15:13:34"}',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:43',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":415,"parent_id":null,"title":"Portfolio","icon":"fas fa-coffee","route":null,"sequence":23,"active":0,"type":1,"created_at":"2023-01-27 22:16:23","updated_at":"2023-05-23 20:28:17"}',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:45',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":416,"parent_id":null,"title":"Kategori Portfolio","icon":null,"route":"admin.portfolio.kategori","sequence":24,"active":1,"type":1,"created_at":"2023-01-27 22:17:21","updated_at":"2023-05-29 15:13:43"}',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:47',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":417,"parent_id":null,"title":"Daftar Portfolio","icon":null,"route":"admin.portfolio","sequence":25,"active":1,"type":1,"created_at":"2023-01-27 22:17:43","updated_at":"2023-05-29 15:13:43"}',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:50',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":419,"parent_id":null,"title":"Marketplace","icon":null,"route":"admin.produk.marketplace","sequence":26,"active":0,"type":1,"created_at":"2023-03-15 14:10:53","updated_at":"2023-05-29 15:13:43"}',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:52',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":426,"parent_id":null,"title":"Pengunjung","icon":"fas fa-desktop","route":"admin.vistor","sequence":27,"active":0,"type":1,"created_at":"2023-04-25 10:52:08","updated_at":"2023-05-23 20:28:03"}',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:55',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":427,"parent_id":null,"title":"Client","icon":"fas fa-th-large","route":"admin.client","sequence":28,"active":0,"type":1,"created_at":"2023-05-04 18:12:41","updated_at":"2023-05-23 20:28:32"}',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:57',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":428,"parent_id":null,"title":"Sistem Pendukung Keputusan","icon":"fas fa-list","route":"admin.spk.saw","sequence":29,"active":1,"type":1,"created_at":"2023-05-13 04:19:56","updated_at":"2023-05-13 04:20:09"}',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:13:59',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":429,"parent_id":null,"title":"Kecamatan","icon":"fas fa-clipboard-list","route":"admin.kecamatan","sequence":30,"active":1,"type":1,"created_at":"2023-05-16 15:06:19","updated_at":"2023-05-16 15:06:29"}',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:11',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":432,"parent_id":null,"title":"Tahapan","icon":"fas fa-edit","route":"admin.tahapan","sequence":31,"active":1,"type":1,"created_at":"2023-05-23 20:26:29","updated_at":"2023-05-23 20:26:48"}',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:11',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":432,"updated_at":"2023-05-29T08:14:11.000000Z","created_at":"2023-05-29T08:14:11.000000Z","id":295}',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:17',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":34,"active":0,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-05-24 00:00:38"}',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:17',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":411,"updated_at":"2023-05-29T08:14:17.000000Z","created_at":"2023-05-29T08:14:17.000000Z","id":296}',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:17',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":411,"updated_at":"2023-05-29T08:14:17.000000Z","created_at":"2023-05-29T08:14:17.000000Z","id":297}',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":432,"parent_id":null,"title":"Kriteria","icon":"fas fa-edit","route":"admin.kriteria","sequence":31,"active":1,"type":1,"created_at":"2023-05-23 20:26:29","updated_at":"2023-05-29 15:14:11"}',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":433,"parent_id":null,"title":"Calon","icon":"fas fa-user","route":"admin.calon","sequence":32,"active":1,"type":1,"created_at":"2023-05-23 21:06:47","updated_at":"2023-05-23 21:07:00"}',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":434,"parent_id":null,"title":"Calon Nilai","icon":"fas fa-user-edit","route":"admin.calon.nilai","sequence":33,"active":1,"type":1,"created_at":"2023-05-24 00:00:09","updated_at":"2023-05-24 00:01:20"}',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":411,"parent_id":null,"title":"Menu Lainnya","icon":null,"route":null,"sequence":34,"active":1,"type":0,"created_at":"2022-09-15 21:18:04","updated_at":"2023-05-29 15:14:17"}',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":430,"parent_id":null,"title":"Import","icon":"fas fa-upload","route":null,"sequence":35,"active":1,"type":1,"created_at":"2023-05-16 18:10:19","updated_at":"2023-05-24 00:00:38"}',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":436,"parent_id":430,"title":"Kriteria","icon":null,"route":"admin.import.kriteria","sequence":38,"active":1,"type":1,"created_at":"2023-05-29 14:59:27","updated_at":"2023-05-29 15:00:38"}',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":431,"parent_id":430,"title":"Kecamatan","icon":null,"route":"admin.import.kecamatan","sequence":36,"active":1,"type":1,"created_at":"2023-05-16 18:10:54","updated_at":"2023-05-24 00:00:38"}',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":435,"parent_id":430,"title":"Calon","icon":null,"route":"admin.import.calon","sequence":37,"active":1,"type":1,"created_at":"2023-05-29 02:19:06","updated_at":"2023-05-29 14:59:36"}',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":39,"active":0,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-05-29 14:59:36"}',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":398,"parent_id":397,"title":"Informasi Admin","icon":null,"route":"admin.setting.admin","sequence":40,"active":1,"type":1,"created_at":"2022-08-14 21:11:42","updated_at":"2023-05-29 14:59:36"}',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":399,"parent_id":397,"title":"Informasi Depan","icon":null,"route":"admin.setting.front","sequence":41,"active":1,"type":1,"created_at":"2022-08-14 21:52:45","updated_at":"2023-05-29 14:59:36"}',
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":393,"parent_id":null,"title":"Peralatan","icon":"fas fa-tools","route":null,"sequence":42,"active":0,"type":1,"created_at":"2022-08-08 22:41:26","updated_at":"2023-05-29 14:59:36"}',
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":402,"parent_id":393,"title":"Notifikasi Admin","icon":null,"route":"admin.utility.notif_admin_atas","sequence":43,"active":1,"type":1,"created_at":"2022-08-18 16:42:00","updated_at":"2023-05-29 14:59:36"}',
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":394,"parent_id":393,"title":"Notifikasi Depan","icon":null,"route":"admin.utility.notif_depan_atas","sequence":44,"active":1,"type":1,"created_at":"2022-08-08 22:41:53","updated_at":"2023-05-29 14:59:36"}',
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":401,"parent_id":393,"title":"Hari Besar Nasional","icon":null,"route":"admin.utility.hari_besar_nasional","sequence":45,"active":1,"type":1,"created_at":"2022-08-17 21:19:05","updated_at":"2023-05-29 14:59:36"}',
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":346,"parent_id":null,"title":"Pengguna","icon":"fas fa-list","route":"admin.user","sequence":46,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 14:59:36"}',
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":null,"sequence":47,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 14:59:36"}',
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":405,"parent_id":361,"title":"Admin","icon":null,"route":"admin.menu.admin","sequence":48,"active":1,"type":1,"created_at":"2022-08-20 14:12:45","updated_at":"2023-05-29 14:59:36"}',
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":406,"parent_id":361,"title":"Depan","icon":null,"route":"admin.menu.frontend","sequence":49,"active":1,"type":1,"created_at":"2022-08-20 14:16:07","updated_at":"2023-05-29 14:59:36"}',
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"Akses Pengguna","icon":"fas fa-user-check","route":null,"sequence":50,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 14:59:36"}',
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Permission","icon":null,"route":"admin.user_access.permission","sequence":51,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 14:59:36"}',
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Role","icon":null,"route":"admin.user_access.role","sequence":52,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 14:59:36"}',
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":373,"parent_id":null,"title":"Profile","icon":"fas fa-user","route":"admin.profile","sequence":53,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 14:59:36"}',
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:23',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":386,"parent_id":null,"title":"Logout","icon":"fas fa-sign-out-alt","route":"logout","sequence":54,"active":1,"type":1,"created_at":"2022-08-05 23:54:09","updated_at":"2023-05-29 14:59:36"}',
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:30',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":431,"parent_id":430,"title":"Kecamatan","icon":null,"route":"admin.import.kecamatan","sequence":8,"active":1,"type":1,"created_at":"2023-05-16 18:10:54","updated_at":"2023-05-29 15:14:23"}',
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:35',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":399,"parent_id":397,"title":"Informasi Depan","icon":null,"route":"admin.setting.front","sequence":12,"active":1,"type":1,"created_at":"2022-08-14 21:52:45","updated_at":"2023-05-29 15:14:23"}',
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:41',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":401,"parent_id":393,"title":"Hari Besar Nasional","icon":null,"route":"admin.utility.hari_besar_nasional","sequence":16,"active":1,"type":1,"created_at":"2022-08-17 21:19:05","updated_at":"2023-05-29 15:14:23"}',
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:46',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":393,"parent_id":null,"title":"Peralatan","icon":"fas fa-tools","route":null,"sequence":13,"active":0,"type":1,"created_at":"2022-08-08 22:41:26","updated_at":"2023-05-29 15:14:23"}',
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:48',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":402,"parent_id":null,"title":"Notifikasi Admin","icon":null,"route":"admin.utility.notif_admin_atas","sequence":14,"active":1,"type":1,"created_at":"2022-08-18 16:42:00","updated_at":"2023-05-29 15:14:46"}',
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:51',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":394,"parent_id":null,"title":"Notifikasi Depan","icon":null,"route":"admin.utility.notif_depan_atas","sequence":15,"active":1,"type":1,"created_at":"2022-08-08 22:41:53","updated_at":"2023-05-29 15:14:46"}',
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:55',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":406,"parent_id":361,"title":"Depan","icon":null,"route":"admin.menu.frontend","sequence":20,"active":1,"type":1,"created_at":"2022-08-20 14:16:07","updated_at":"2023-05-29 15:14:23"}',
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:14:57',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":405,"parent_id":361,"title":"Admin","icon":null,"route":"admin.menu.admin","sequence":19,"active":1,"type":1,"created_at":"2022-08-20 14:12:45","updated_at":"2023-05-29 15:14:23"}',
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:08',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":361,"parent_id":null,"title":"Menu Management","icon":"fas fa-stream","route":null,"sequence":18,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:14:23"}',
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:08',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":361,"updated_at":"2023-05-29T08:15:08.000000Z","created_at":"2023-05-29T08:15:08.000000Z","id":298}',
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:25',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":368,"parent_id":367,"title":"Permission","icon":null,"route":"admin.user_access.permission","sequence":22,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:14:23"}',
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:25',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":368,"updated_at":"2023-05-29T08:15:25.000000Z","created_at":"2023-05-29T08:15:25.000000Z","id":299}',
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:33',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":369,"parent_id":367,"title":"Role","icon":null,"route":"admin.user_access.role","sequence":23,"active":1,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:14:23"}',
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:33',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":369,"updated_at":"2023-05-29T08:15:33.000000Z","created_at":"2023-05-29T08:15:33.000000Z","id":300}',
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:40',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":367,"parent_id":null,"title":"Akses Pengguna","icon":"fas fa-user-check","route":null,"sequence":21,"active":0,"type":1,"created_at":"2022-08-05 23:50:28","updated_at":"2023-05-29 15:14:23"}',
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:40',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":367,"updated_at":"2023-05-29T08:15:40.000000Z","created_at":"2023-05-29T08:15:40.000000Z","id":301}',
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => 1,
                'log_date' => '2023-05-29 15:15:56',
                'table_name' => 'users',
                'log_type' => 'delete',
                'data' => '{"id":4,"name":"Vakrun Nisah","email":"vakrunnisah@mail.com","foto":null,"username":null,"email_verified_at":null,"password":"$2y$10$hfINTC0pQ.zQC\\/xsqwfoBuvF4DhsmPMnv5aoJbNke8u3JI00Tfjc2","active":1,"two_factor_secret":null,"two_factor_recovery_codes":null,"two_factor_confirmed_at":null,"current_team_id":null,"profile_photo_path":null,"remember_token":null,"created_at":"2023-04-13 03:26:15","updated_at":"2023-05-23 20:34:47"}',
            ),
        ));
        
        
    }
}