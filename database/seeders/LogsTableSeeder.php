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
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'import_penduduk',
                'log_type' => 'create',
                'data' => '{"nama":"Testing","slug":"testing","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":1}',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320520001800099","nama":"IIS KARIMAH","alamat":"KP. CISALAM","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":1}',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":1,"nilai":"3339350","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":1}',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":1,"nilai":"40.41","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":2}',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":1,"nilai":"15636000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":3}',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":1,"nilai":"98.09","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":4}',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":1,"nilai":"51.59","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":5}',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":1,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":6}',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300002","nama":"MAE","alamat":"KP. DANGDEUR RT. 01 RW. 01","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":2}',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":2,"nilai":"1296750","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":7}',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":2,"nilai":"91.38","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":8}',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":2,"nilai":"29160000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":9}',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":2,"nilai":"96.06","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":10}',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":2,"nilai":"70.42","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":11}',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":2,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":12}',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300003","nama":"IMAS KOMALA","alamat":"KP. DANGDEUR RT. 01 RW. 01","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":3}',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":3,"nilai":"1457050","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":13}',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":3,"nilai":"62.06","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":14}',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":3,"nilai":"29988000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":15}',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":3,"nilai":"78.58","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":16}',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":3,"nilai":"69.65","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":17}',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":3,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":18}',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300004","nama":"LELAH","alamat":"KP DANGDEUR RT 01 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":4}',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":4,"nilai":"1421350","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":19}',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":4,"nilai":"88.67","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":20}',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":4,"nilai":"38324000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":21}',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":4,"nilai":"70","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":22}',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":4,"nilai":"44.64","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":23}',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":4,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":24}',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300006","nama":"RANI","alamat":"KP DANGDEUR RT 01 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":5}',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":5,"nilai":"1455650","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":25}',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":5,"nilai":"32.35","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":26}',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":5,"nilai":"19500000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":27}',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":5,"nilai":"66.05","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":28}',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":5,"nilai":"37.3","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":29}',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":5,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":30}',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300007","nama":"NINING","alamat":"KP DANGDEUR RT 01 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":6}',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":6,"nilai":"3088050","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":31}',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":6,"nilai":"57.93","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":32}',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":6,"nilai":"17748000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":33}',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":6,"nilai":"57.58","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":34}',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":6,"nilai":"80.17","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":35}',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":6,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":36}',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300008","nama":"JUJU","alamat":"KP. DANGDEUR RT. 02 RW. 01","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":7}',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":7,"nilai":"2446500","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":37}',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":7,"nilai":"80.91","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":38}',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":7,"nilai":"35544000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":39}',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":7,"nilai":"36.41","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":40}',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":7,"nilai":"80.67","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":41}',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":7,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":42}',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300010","nama":"CIAH","alamat":"KP. DANGDEUR RT. 02 RW. 01","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":8}',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":8,"nilai":"2038050","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":43}',
            ),
            52 => 
            array (
                'id' => 53,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":8,"nilai":"85.44","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":44}',
            ),
            53 => 
            array (
                'id' => 54,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":8,"nilai":"26380000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":45}',
            ),
            54 => 
            array (
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":8,"nilai":"48.73","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":46}',
            ),
            55 => 
            array (
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":8,"nilai":"61.22","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":47}',
            ),
            56 => 
            array (
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":8,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":48}',
            ),
            57 => 
            array (
                'id' => 58,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300011","nama":"TATI","alamat":"KP. DANGDEUR RT. 02 RW. 01","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":9}',
            ),
            58 => 
            array (
                'id' => 59,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":9,"nilai":"3331300","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":49}',
            ),
            59 => 
            array (
                'id' => 60,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":9,"nilai":"29.69","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":50}',
            ),
            60 => 
            array (
                'id' => 61,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":9,"nilai":"16540000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":51}',
            ),
            61 => 
            array (
                'id' => 62,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":9,"nilai":"97.19","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":52}',
            ),
            62 => 
            array (
                'id' => 63,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":9,"nilai":"35.9","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":53}',
            ),
            63 => 
            array (
                'id' => 64,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":9,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":54}',
            ),
            64 => 
            array (
                'id' => 65,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300012","nama":"ENJANG JAMALUDIN","alamat":"KP PASIRMUNCANG RT. 01 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":10}',
            ),
            65 => 
            array (
                'id' => 66,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":10,"nilai":"2737350","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":55}',
            ),
            66 => 
            array (
                'id' => 67,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":10,"nilai":"83.87","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":56}',
            ),
            67 => 
            array (
                'id' => 68,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":10,"nilai":"19540000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":57}',
            ),
            68 => 
            array (
                'id' => 69,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":10,"nilai":"95.11","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":58}',
            ),
            69 => 
            array (
                'id' => 70,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":10,"nilai":"52.06","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":59}',
            ),
            70 => 
            array (
                'id' => 71,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":10,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":60}',
            ),
            71 => 
            array (
                'id' => 72,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300014","nama":"LANI HERNAWATI","alamat":"KP PASIRMUNCANG RT. 01 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":11}',
            ),
            72 => 
            array (
                'id' => 73,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":11,"nilai":"1331050","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":61}',
            ),
            73 => 
            array (
                'id' => 74,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":11,"nilai":"72.05","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":62}',
            ),
            74 => 
            array (
                'id' => 75,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":11,"nilai":"30092000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":63}',
            ),
            75 => 
            array (
                'id' => 76,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":11,"nilai":"71.48","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":64}',
            ),
            76 => 
            array (
                'id' => 77,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":11,"nilai":"40.67","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":65}',
            ),
            77 => 
            array (
                'id' => 78,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":11,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":66}',
            ),
            78 => 
            array (
                'id' => 79,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300015","nama":"SITI NURJANAH","alamat":"KP PASIRMUNCANG RT. 01 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":12}',
            ),
            79 => 
            array (
                'id' => 80,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":12,"nilai":"1929200","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":67}',
            ),
            80 => 
            array (
                'id' => 81,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":12,"nilai":"49.79","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":68}',
            ),
            81 => 
            array (
                'id' => 82,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":12,"nilai":"34840000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":69}',
            ),
            82 => 
            array (
                'id' => 83,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":12,"nilai":"34.63","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":70}',
            ),
            83 => 
            array (
                'id' => 84,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":12,"nilai":"67.03","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":71}',
            ),
            84 => 
            array (
                'id' => 85,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":12,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":72}',
            ),
            85 => 
            array (
                'id' => 86,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300016","nama":"HANA REHANA","alamat":"KP PASIRMUNCANG RT. 01 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":13}',
            ),
            86 => 
            array (
                'id' => 87,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":13,"nilai":"2850400","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":73}',
            ),
            87 => 
            array (
                'id' => 88,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":13,"nilai":"90.37","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":74}',
            ),
            88 => 
            array (
                'id' => 89,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":13,"nilai":"25392000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":75}',
            ),
            89 => 
            array (
                'id' => 90,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":13,"nilai":"39.74","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":76}',
            ),
            90 => 
            array (
                'id' => 91,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":13,"nilai":"53.21","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":77}',
            ),
            91 => 
            array (
                'id' => 92,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":13,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":78}',
            ),
            92 => 
            array (
                'id' => 93,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300017","nama":"ELA NURLAELA","alamat":"KP PASIR MUNCANG RT 01 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":14}',
            ),
            93 => 
            array (
                'id' => 94,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":14,"nilai":"1025500","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":79}',
            ),
            94 => 
            array (
                'id' => 95,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":14,"nilai":"65.02","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":80}',
            ),
            95 => 
            array (
                'id' => 96,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":14,"nilai":"30476000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":81}',
            ),
            96 => 
            array (
                'id' => 97,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":14,"nilai":"69.31","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":82}',
            ),
            97 => 
            array (
                'id' => 98,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":14,"nilai":"92.28","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":83}',
            ),
            98 => 
            array (
                'id' => 99,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":14,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":84}',
            ),
            99 => 
            array (
                'id' => 100,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300018","nama":"EMPOL SITI HULAELAH","alamat":"KP PASIR MUNCANG RT 01 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":15}',
            ),
            100 => 
            array (
                'id' => 101,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":15,"nilai":"2425150","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":85}',
            ),
            101 => 
            array (
                'id' => 102,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":15,"nilai":"59.86","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":86}',
            ),
            102 => 
            array (
                'id' => 103,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":15,"nilai":"39480000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":87}',
            ),
            103 => 
            array (
                'id' => 104,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":15,"nilai":"33.18","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":88}',
            ),
            104 => 
            array (
                'id' => 105,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":15,"nilai":"80.94","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":89}',
            ),
            105 => 
            array (
                'id' => 106,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":15,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":90}',
            ),
            106 => 
            array (
                'id' => 107,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300019","nama":"NENENG PIPIH SARIPAH","alamat":"KP PASIR MUNCANG RT 01 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":16}',
            ),
            107 => 
            array (
                'id' => 108,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":16,"nilai":"1756300","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":91}',
            ),
            108 => 
            array (
                'id' => 109,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":16,"nilai":"32.07","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":92}',
            ),
            109 => 
            array (
                'id' => 110,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":16,"nilai":"14592000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":93}',
            ),
            110 => 
            array (
                'id' => 111,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":16,"nilai":"39.82","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":94}',
            ),
            111 => 
            array (
                'id' => 112,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":16,"nilai":"34.15","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":95}',
            ),
            112 => 
            array (
                'id' => 113,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":16,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":96}',
            ),
            113 => 
            array (
                'id' => 114,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300023","nama":"IPAH","alamat":"KP PASIRMUNCANG RT. 02 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":17}',
            ),
            114 => 
            array (
                'id' => 115,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":17,"nilai":"1404900","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":97}',
            ),
            115 => 
            array (
                'id' => 116,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":17,"nilai":"64.9","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":98}',
            ),
            116 => 
            array (
                'id' => 117,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":17,"nilai":"33284000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":99}',
            ),
            117 => 
            array (
                'id' => 118,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":17,"nilai":"67.38","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":100}',
            ),
            118 => 
            array (
                'id' => 119,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":17,"nilai":"66.37","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":101}',
            ),
            119 => 
            array (
                'id' => 120,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":17,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":102}',
            ),
            120 => 
            array (
                'id' => 121,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300026","nama":"LILIS","alamat":"KP PASIR MUNCANG RT 02 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":18}',
            ),
            121 => 
            array (
                'id' => 122,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":18,"nilai":"2166850","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":103}',
            ),
            122 => 
            array (
                'id' => 123,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":18,"nilai":"51.14","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":104}',
            ),
            123 => 
            array (
                'id' => 124,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":18,"nilai":"29440000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":105}',
            ),
            124 => 
            array (
                'id' => 125,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":18,"nilai":"46.34","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":106}',
            ),
            125 => 
            array (
                'id' => 126,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":18,"nilai":"93.6","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":107}',
            ),
            126 => 
            array (
                'id' => 127,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":18,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":108}',
            ),
            127 => 
            array (
                'id' => 128,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300027","nama":"HALIAH","alamat":"KP PASIR MUNCANG RT 02 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":19}',
            ),
            128 => 
            array (
                'id' => 129,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":19,"nilai":"1814050","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":109}',
            ),
            129 => 
            array (
                'id' => 130,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":19,"nilai":"31.79","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":110}',
            ),
            130 => 
            array (
                'id' => 131,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":19,"nilai":"22760000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":111}',
            ),
            131 => 
            array (
                'id' => 132,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":19,"nilai":"88.38","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":112}',
            ),
            132 => 
            array (
                'id' => 133,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":19,"nilai":"68.24","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":113}',
            ),
            133 => 
            array (
                'id' => 134,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":19,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":114}',
            ),
            134 => 
            array (
                'id' => 135,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300030","nama":"IIS","alamat":"KP. PATROL RT. 03 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":20}',
            ),
            135 => 
            array (
                'id' => 136,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":20,"nilai":"2051350","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":115}',
            ),
            136 => 
            array (
                'id' => 137,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":20,"nilai":"97.85","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":116}',
            ),
            137 => 
            array (
                'id' => 138,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":20,"nilai":"37900000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":117}',
            ),
            138 => 
            array (
                'id' => 139,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":20,"nilai":"91.4","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":118}',
            ),
            139 => 
            array (
                'id' => 140,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":20,"nilai":"79.76","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":119}',
            ),
            140 => 
            array (
                'id' => 141,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":20,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":120}',
            ),
            141 => 
            array (
                'id' => 142,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300033","nama":"IYAM MARYANI","alamat":"KP PATROL RT 03 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":21}',
            ),
            142 => 
            array (
                'id' => 143,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":21,"nilai":"2018450","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":121}',
            ),
            143 => 
            array (
                'id' => 144,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":21,"nilai":"28.58","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":122}',
            ),
            144 => 
            array (
                'id' => 145,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":21,"nilai":"38760000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":123}',
            ),
            145 => 
            array (
                'id' => 146,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":21,"nilai":"87.25","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":124}',
            ),
            146 => 
            array (
                'id' => 147,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":21,"nilai":"52.28","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":125}',
            ),
            147 => 
            array (
                'id' => 148,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":21,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":126}',
            ),
            148 => 
            array (
                'id' => 149,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300034","nama":"EUTIK","alamat":"KP. PATROL RT. 04 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":22}',
            ),
            149 => 
            array (
                'id' => 150,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":22,"nilai":"1554700","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":127}',
            ),
            150 => 
            array (
                'id' => 151,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":22,"nilai":"39.24","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":128}',
            ),
            151 => 
            array (
                'id' => 152,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":22,"nilai":"29780000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":129}',
            ),
            152 => 
            array (
                'id' => 153,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":22,"nilai":"28.52","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":130}',
            ),
            153 => 
            array (
                'id' => 154,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":22,"nilai":"62.67","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":131}',
            ),
            154 => 
            array (
                'id' => 155,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":22,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":132}',
            ),
            155 => 
            array (
                'id' => 156,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300035","nama":"ELIN","alamat":"KP. PATROL RT. 04 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":23}',
            ),
            156 => 
            array (
                'id' => 157,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":23,"nilai":"2804900","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":133}',
            ),
            157 => 
            array (
                'id' => 158,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":23,"nilai":"89","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":134}',
            ),
            158 => 
            array (
                'id' => 159,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":23,"nilai":"37672000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":135}',
            ),
            159 => 
            array (
                'id' => 160,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":23,"nilai":"98.83","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":136}',
            ),
            160 => 
            array (
                'id' => 161,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":23,"nilai":"92.4","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":137}',
            ),
            161 => 
            array (
                'id' => 162,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":23,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":138}',
            ),
            162 => 
            array (
                'id' => 163,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300036","nama":"IMAS MASRIAH","alamat":"KP. PATROL RT. 04 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":24}',
            ),
            163 => 
            array (
                'id' => 164,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":24,"nilai":"1316350","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":139}',
            ),
            164 => 
            array (
                'id' => 165,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":24,"nilai":"50.38","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":140}',
            ),
            165 => 
            array (
                'id' => 166,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":24,"nilai":"13092000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":141}',
            ),
            166 => 
            array (
                'id' => 167,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":24,"nilai":"58.48","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":142}',
            ),
            167 => 
            array (
                'id' => 168,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":24,"nilai":"62.55","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":143}',
            ),
            168 => 
            array (
                'id' => 169,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":24,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":144}',
            ),
            169 => 
            array (
                'id' => 170,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300038","nama":"ONEH","alamat":"KP PATROL","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":25}',
            ),
            170 => 
            array (
                'id' => 171,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":25,"nilai":"2420600","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":145}',
            ),
            171 => 
            array (
                'id' => 172,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":25,"nilai":"79.01","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":146}',
            ),
            172 => 
            array (
                'id' => 173,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":25,"nilai":"30352000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":147}',
            ),
            173 => 
            array (
                'id' => 174,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":25,"nilai":"32.37","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":148}',
            ),
            174 => 
            array (
                'id' => 175,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":25,"nilai":"93.85","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":149}',
            ),
            175 => 
            array (
                'id' => 176,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":25,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":150}',
            ),
            176 => 
            array (
                'id' => 177,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300043","nama":"NENI","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":26}',
            ),
            177 => 
            array (
                'id' => 178,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":26,"nilai":"2064650","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":151}',
            ),
            178 => 
            array (
                'id' => 179,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":26,"nilai":"85.56","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":152}',
            ),
            179 => 
            array (
                'id' => 180,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":26,"nilai":"23768000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":153}',
            ),
            180 => 
            array (
                'id' => 181,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":26,"nilai":"50","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":154}',
            ),
            181 => 
            array (
                'id' => 182,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":26,"nilai":"80.88","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":155}',
            ),
            182 => 
            array (
                'id' => 183,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":26,"nilai":"1","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":156}',
            ),
            183 => 
            array (
                'id' => 184,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300045","nama":"DEDEH","alamat":"KP. JATI RT 03\\/03","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":27}',
            ),
            184 => 
            array (
                'id' => 185,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":27,"nilai":"3074750","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":157}',
            ),
            185 => 
            array (
                'id' => 186,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":27,"nilai":"46.15","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":158}',
            ),
            186 => 
            array (
                'id' => 187,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":27,"nilai":"38812000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":159}',
            ),
            187 => 
            array (
                'id' => 188,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":27,"nilai":"93.11","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":160}',
            ),
            188 => 
            array (
                'id' => 189,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":27,"nilai":"75.47","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":161}',
            ),
            189 => 
            array (
                'id' => 190,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":27,"nilai":"0","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":162}',
            ),
            190 => 
            array (
                'id' => 191,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300046","nama":"SITI JULAEHA","alamat":"KP. JATI RT 03\\/03","import_id":1,"updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":28}',
            ),
            191 => 
            array (
                'id' => 192,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":28,"nilai":"2768150","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":163}',
            ),
            192 => 
            array (
                'id' => 193,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":28,"nilai":"69.07","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":164}',
            ),
            193 => 
            array (
                'id' => 194,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":28,"nilai":"17620000","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":165}',
            ),
            194 => 
            array (
                'id' => 195,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:31',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":28,"nilai":"32.06","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":166}',
            ),
            195 => 
            array (
                'id' => 196,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":28,"nilai":"82.22","updated_at":"2023-05-29T12:52:31.000000Z","created_at":"2023-05-29T12:52:31.000000Z","id":167}',
            ),
            196 => 
            array (
                'id' => 197,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":28,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":168}',
            ),
            197 => 
            array (
                'id' => 198,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300049","nama":"IDA","alamat":"KP. JATI RT 03\\/03","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":29}',
            ),
            198 => 
            array (
                'id' => 199,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":29,"nilai":"907550","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":169}',
            ),
            199 => 
            array (
                'id' => 200,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":29,"nilai":"52.38","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":170}',
            ),
            200 => 
            array (
                'id' => 201,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":29,"nilai":"26952000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":171}',
            ),
            201 => 
            array (
                'id' => 202,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":29,"nilai":"47.72","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":172}',
            ),
            202 => 
            array (
                'id' => 203,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":29,"nilai":"34.55","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":173}',
            ),
            203 => 
            array (
                'id' => 204,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":29,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":174}',
            ),
            204 => 
            array (
                'id' => 205,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300050","nama":"PUROH","alamat":"KP. JATI RT 04\\/03","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":30}',
            ),
            205 => 
            array (
                'id' => 206,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":30,"nilai":"2420600","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":175}',
            ),
            206 => 
            array (
                'id' => 207,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":30,"nilai":"93.64","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":176}',
            ),
            207 => 
            array (
                'id' => 208,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":30,"nilai":"11416000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":177}',
            ),
            208 => 
            array (
                'id' => 209,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":30,"nilai":"79.82","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":178}',
            ),
            209 => 
            array (
                'id' => 210,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":30,"nilai":"60.23","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":179}',
            ),
            210 => 
            array (
                'id' => 211,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":30,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":180}',
            ),
            211 => 
            array (
                'id' => 212,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300052","nama":"SUMARNI","alamat":"KP. JATI RT 04\\/03","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":31}',
            ),
            212 => 
            array (
                'id' => 213,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":31,"nilai":"1729000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":181}',
            ),
            213 => 
            array (
                'id' => 214,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":31,"nilai":"63.34","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":182}',
            ),
            214 => 
            array (
                'id' => 215,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":31,"nilai":"31720000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":183}',
            ),
            215 => 
            array (
                'id' => 216,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":31,"nilai":"94.11","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":184}',
            ),
            216 => 
            array (
                'id' => 217,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":31,"nilai":"68.95","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":185}',
            ),
            217 => 
            array (
                'id' => 218,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":31,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":186}',
            ),
            218 => 
            array (
                'id' => 219,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300054","nama":"YUYUM","alamat":"KP. SARPEUNDEUY RT. 01 RW. 04","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":32}',
            ),
            219 => 
            array (
                'id' => 220,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":32,"nilai":"2970800","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":187}',
            ),
            220 => 
            array (
                'id' => 221,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":32,"nilai":"76.29","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":188}',
            ),
            221 => 
            array (
                'id' => 222,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":32,"nilai":"12360000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":189}',
            ),
            222 => 
            array (
                'id' => 223,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":32,"nilai":"92.35","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":190}',
            ),
            223 => 
            array (
                'id' => 224,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":32,"nilai":"26.73","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":191}',
            ),
            224 => 
            array (
                'id' => 225,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":32,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":192}',
            ),
            225 => 
            array (
                'id' => 226,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300056","nama":"YAYAT HIDAYAT","alamat":"KP. SARPEUNDEUY RT. 03 RW. 04","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":33}',
            ),
            226 => 
            array (
                'id' => 227,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":33,"nilai":"2497600","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":193}',
            ),
            227 => 
            array (
                'id' => 228,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":33,"nilai":"94.46","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":194}',
            ),
            228 => 
            array (
                'id' => 229,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":33,"nilai":"14480000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":195}',
            ),
            229 => 
            array (
                'id' => 230,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":33,"nilai":"72.5","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":196}',
            ),
            230 => 
            array (
                'id' => 231,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":33,"nilai":"81.27","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":197}',
            ),
            231 => 
            array (
                'id' => 232,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":33,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":198}',
            ),
            232 => 
            array (
                'id' => 233,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300057","nama":"SOPAH","alamat":"KP. SARPEUNDEUY RT. 03 RW. 04","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":34}',
            ),
            233 => 
            array (
                'id' => 234,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":34,"nilai":"1705200","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":199}',
            ),
            234 => 
            array (
                'id' => 235,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":34,"nilai":"98.19","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":200}',
            ),
            235 => 
            array (
                'id' => 236,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":34,"nilai":"13796000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":201}',
            ),
            236 => 
            array (
                'id' => 237,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":34,"nilai":"95.99","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":202}',
            ),
            237 => 
            array (
                'id' => 238,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":34,"nilai":"90.99","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":203}',
            ),
            238 => 
            array (
                'id' => 239,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":34,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":204}',
            ),
            239 => 
            array (
                'id' => 240,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300058","nama":"MARNI","alamat":"KP. BOJONGGEDE RT. 03 RW. 08","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":35}',
            ),
            240 => 
            array (
                'id' => 241,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":35,"nilai":"2152850","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":205}',
            ),
            241 => 
            array (
                'id' => 242,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":35,"nilai":"86.93","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":206}',
            ),
            242 => 
            array (
                'id' => 243,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":35,"nilai":"11308000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":207}',
            ),
            243 => 
            array (
                'id' => 244,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":35,"nilai":"71.49","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":208}',
            ),
            244 => 
            array (
                'id' => 245,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":35,"nilai":"92.36","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":209}',
            ),
            245 => 
            array (
                'id' => 246,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":35,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":210}',
            ),
            246 => 
            array (
                'id' => 247,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300059","nama":"IMAS SITI NURJANAH","alamat":"KP. SARPEUNDEUY RT. 05 RW. 04","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":36}',
            ),
            247 => 
            array (
                'id' => 248,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":36,"nilai":"2245950","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":211}',
            ),
            248 => 
            array (
                'id' => 249,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":36,"nilai":"34.57","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":212}',
            ),
            249 => 
            array (
                'id' => 250,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":36,"nilai":"39400000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":213}',
            ),
            250 => 
            array (
                'id' => 251,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":36,"nilai":"37.67","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":214}',
            ),
            251 => 
            array (
                'id' => 252,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":36,"nilai":"92.39","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":215}',
            ),
            252 => 
            array (
                'id' => 253,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":36,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":216}',
            ),
            253 => 
            array (
                'id' => 254,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300061","nama":"YATI","alamat":"KP. SARPEUNDEUY RT. 05 RW. 04","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":37}',
            ),
            254 => 
            array (
                'id' => 255,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":37,"nilai":"1146950","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":217}',
            ),
            255 => 
            array (
                'id' => 256,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":37,"nilai":"82.89","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":218}',
            ),
            256 => 
            array (
                'id' => 257,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":37,"nilai":"13968000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":219}',
            ),
            257 => 
            array (
                'id' => 258,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":37,"nilai":"82.2","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":220}',
            ),
            258 => 
            array (
                'id' => 259,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":37,"nilai":"36.63","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":221}',
            ),
            259 => 
            array (
                'id' => 260,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":37,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":222}',
            ),
            260 => 
            array (
                'id' => 261,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300063","nama":"ULIA","alamat":"KP. BOJONG GEDE RT 01\\/05","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":38}',
            ),
            261 => 
            array (
                'id' => 262,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":38,"nilai":"2691150","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":223}',
            ),
            262 => 
            array (
                'id' => 263,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":38,"nilai":"26.59","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":224}',
            ),
            263 => 
            array (
                'id' => 264,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":38,"nilai":"25628000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":225}',
            ),
            264 => 
            array (
                'id' => 265,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":38,"nilai":"99.47","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":226}',
            ),
            265 => 
            array (
                'id' => 266,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":38,"nilai":"68.33","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":227}',
            ),
            266 => 
            array (
                'id' => 267,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":38,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":228}',
            ),
            267 => 
            array (
                'id' => 268,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300064","nama":"AI ROHAENI","alamat":"KP. BOJONG GEDE RT 01\\/05","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":39}',
            ),
            268 => 
            array (
                'id' => 269,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":39,"nilai":"2644950","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":229}',
            ),
            269 => 
            array (
                'id' => 270,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":39,"nilai":"69.79","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":230}',
            ),
            270 => 
            array (
                'id' => 271,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":39,"nilai":"34888000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":231}',
            ),
            271 => 
            array (
                'id' => 272,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":39,"nilai":"68.68","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":232}',
            ),
            272 => 
            array (
                'id' => 273,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":39,"nilai":"83.37","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":233}',
            ),
            273 => 
            array (
                'id' => 274,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":39,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":234}',
            ),
            274 => 
            array (
                'id' => 275,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300065","nama":"LENI MARLINA","alamat":"KP. BOJONG GEDE RT 02\\/05","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":40}',
            ),
            275 => 
            array (
                'id' => 276,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":40,"nilai":"3074400","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":235}',
            ),
            276 => 
            array (
                'id' => 277,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":40,"nilai":"53.1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":236}',
            ),
            277 => 
            array (
                'id' => 278,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":40,"nilai":"33724000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":237}',
            ),
            278 => 
            array (
                'id' => 279,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":40,"nilai":"71.13","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":238}',
            ),
            279 => 
            array (
                'id' => 280,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":40,"nilai":"60.41","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":239}',
            ),
            280 => 
            array (
                'id' => 281,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":40,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":240}',
            ),
            281 => 
            array (
                'id' => 282,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300066","nama":"ATIKAH","alamat":"KP. BOJONG GEDE RT 02\\/05","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":41}',
            ),
            282 => 
            array (
                'id' => 283,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":41,"nilai":"2970100","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":241}',
            ),
            283 => 
            array (
                'id' => 284,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":41,"nilai":"65.23","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":242}',
            ),
            284 => 
            array (
                'id' => 285,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":41,"nilai":"27012000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":243}',
            ),
            285 => 
            array (
                'id' => 286,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":41,"nilai":"48.79","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":244}',
            ),
            286 => 
            array (
                'id' => 287,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":41,"nilai":"71.65","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":245}',
            ),
            287 => 
            array (
                'id' => 288,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":41,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":246}',
            ),
            288 => 
            array (
                'id' => 289,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300067","nama":"NENENG AMINAH","alamat":"KP. BOJONG GEDE RT 02\\/05","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":42}',
            ),
            289 => 
            array (
                'id' => 290,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":42,"nilai":"1214500","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":247}',
            ),
            290 => 
            array (
                'id' => 291,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":42,"nilai":"51.35","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":248}',
            ),
            291 => 
            array (
                'id' => 292,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":42,"nilai":"18728000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":249}',
            ),
            292 => 
            array (
                'id' => 293,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":42,"nilai":"82.33","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":250}',
            ),
            293 => 
            array (
                'id' => 294,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":42,"nilai":"77.88","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":251}',
            ),
            294 => 
            array (
                'id' => 295,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":42,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":252}',
            ),
            295 => 
            array (
                'id' => 296,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300068","nama":"KOKOM","alamat":"KP. BOJONG GEDE RT 03\\/05","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":43}',
            ),
            296 => 
            array (
                'id' => 297,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":43,"nilai":"3306800","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":253}',
            ),
            297 => 
            array (
                'id' => 298,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":43,"nilai":"57.99","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":254}',
            ),
            298 => 
            array (
                'id' => 299,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":43,"nilai":"10488000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":255}',
            ),
            299 => 
            array (
                'id' => 300,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":43,"nilai":"96.94","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":256}',
            ),
            300 => 
            array (
                'id' => 301,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":43,"nilai":"34.78","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":257}',
            ),
            301 => 
            array (
                'id' => 302,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":43,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":258}',
            ),
            302 => 
            array (
                'id' => 303,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300069","nama":"ROKAYAH","alamat":"KP. CISALAM RT 01\\/06","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":44}',
            ),
            303 => 
            array (
                'id' => 304,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":44,"nilai":"1718500","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":259}',
            ),
            304 => 
            array (
                'id' => 305,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":44,"nilai":"58.4","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":260}',
            ),
            305 => 
            array (
                'id' => 306,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":44,"nilai":"20344000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":261}',
            ),
            306 => 
            array (
                'id' => 307,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":44,"nilai":"47.42","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":262}',
            ),
            307 => 
            array (
                'id' => 308,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":44,"nilai":"79.77","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":263}',
            ),
            308 => 
            array (
                'id' => 309,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":44,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":264}',
            ),
            309 => 
            array (
                'id' => 310,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300071","nama":"YUYU","alamat":"KP. CISALAM RT 02\\/06","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":45}',
            ),
            310 => 
            array (
                'id' => 311,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":45,"nilai":"1296750","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":265}',
            ),
            311 => 
            array (
                'id' => 312,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":45,"nilai":"51.67","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":266}',
            ),
            312 => 
            array (
                'id' => 313,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":45,"nilai":"33444000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":267}',
            ),
            313 => 
            array (
                'id' => 314,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":45,"nilai":"79.61","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":268}',
            ),
            314 => 
            array (
                'id' => 315,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":45,"nilai":"94.63","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":269}',
            ),
            315 => 
            array (
                'id' => 316,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":45,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":270}',
            ),
            316 => 
            array (
                'id' => 317,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300074","nama":"IHAT SOLIHAT","alamat":"KP. CISALAM RT 02\\/06","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":46}',
            ),
            317 => 
            array (
                'id' => 318,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":46,"nilai":"1535800","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":271}',
            ),
            318 => 
            array (
                'id' => 319,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":46,"nilai":"61.17","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":272}',
            ),
            319 => 
            array (
                'id' => 320,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":46,"nilai":"33964000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":273}',
            ),
            320 => 
            array (
                'id' => 321,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":46,"nilai":"84.69","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":274}',
            ),
            321 => 
            array (
                'id' => 322,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":46,"nilai":"31.92","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":275}',
            ),
            322 => 
            array (
                'id' => 323,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":46,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":276}',
            ),
            323 => 
            array (
                'id' => 324,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300075","nama":"YAYA PARIDAH","alamat":"KP. CISALAM RT 02\\/06","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":47}',
            ),
            324 => 
            array (
                'id' => 325,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":47,"nilai":"2850050","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":277}',
            ),
            325 => 
            array (
                'id' => 326,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":47,"nilai":"87.37","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":278}',
            ),
            326 => 
            array (
                'id' => 327,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":47,"nilai":"36408000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":279}',
            ),
            327 => 
            array (
                'id' => 328,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":47,"nilai":"69.87","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":280}',
            ),
            328 => 
            array (
                'id' => 329,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":47,"nilai":"25.89","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":281}',
            ),
            329 => 
            array (
                'id' => 330,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":47,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":282}',
            ),
            330 => 
            array (
                'id' => 331,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300076","nama":"DUDUNG EYE","alamat":"KP. CISALAM RT 02\\/06","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":48}',
            ),
            331 => 
            array (
                'id' => 332,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":48,"nilai":"3323950","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":283}',
            ),
            332 => 
            array (
                'id' => 333,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":48,"nilai":"73.75","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":284}',
            ),
            333 => 
            array (
                'id' => 334,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":48,"nilai":"11816000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":285}',
            ),
            334 => 
            array (
                'id' => 335,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":48,"nilai":"50.01","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":286}',
            ),
            335 => 
            array (
                'id' => 336,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":48,"nilai":"69.65","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":287}',
            ),
            336 => 
            array (
                'id' => 337,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":48,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":288}',
            ),
            337 => 
            array (
                'id' => 338,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300077","nama":"ENUR","alamat":"KP. CISALAM RT 02\\/06","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":49}',
            ),
            338 => 
            array (
                'id' => 339,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":49,"nilai":"1312150","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":289}',
            ),
            339 => 
            array (
                'id' => 340,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":49,"nilai":"65.54","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":290}',
            ),
            340 => 
            array (
                'id' => 341,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":49,"nilai":"23768000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":291}',
            ),
            341 => 
            array (
                'id' => 342,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":49,"nilai":"93.15","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":292}',
            ),
            342 => 
            array (
                'id' => 343,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":49,"nilai":"89.6","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":293}',
            ),
            343 => 
            array (
                'id' => 344,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":49,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":294}',
            ),
            344 => 
            array (
                'id' => 345,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300079","nama":"EROS ROSITA","alamat":"KP. CISALAM RT 02\\/06","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":50}',
            ),
            345 => 
            array (
                'id' => 346,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":50,"nilai":"1529500","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":295}',
            ),
            346 => 
            array (
                'id' => 347,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":50,"nilai":"46.2","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":296}',
            ),
            347 => 
            array (
                'id' => 348,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":50,"nilai":"39708000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":297}',
            ),
            348 => 
            array (
                'id' => 349,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":50,"nilai":"59.95","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":298}',
            ),
            349 => 
            array (
                'id' => 350,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":50,"nilai":"81.9","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":299}',
            ),
            350 => 
            array (
                'id' => 351,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":50,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":300}',
            ),
            351 => 
            array (
                'id' => 352,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300080","nama":"IMAS MAEMUNAH","alamat":"KP. CISALAM RT 02\\/06","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":51}',
            ),
            352 => 
            array (
                'id' => 353,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":51,"nilai":"1131550","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":301}',
            ),
            353 => 
            array (
                'id' => 354,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":51,"nilai":"56.05","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":302}',
            ),
            354 => 
            array (
                'id' => 355,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":51,"nilai":"35508000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":303}',
            ),
            355 => 
            array (
                'id' => 356,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":51,"nilai":"93.43","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":304}',
            ),
            356 => 
            array (
                'id' => 357,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":51,"nilai":"62.34","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":305}',
            ),
            357 => 
            array (
                'id' => 358,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":51,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":306}',
            ),
            358 => 
            array (
                'id' => 359,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300082","nama":"ALIS","alamat":"KP. GEGERLOA RT. 01 RW. 07","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":52}',
            ),
            359 => 
            array (
                'id' => 360,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":52,"nilai":"1594950","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":307}',
            ),
            360 => 
            array (
                'id' => 361,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":52,"nilai":"55.51","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":308}',
            ),
            361 => 
            array (
                'id' => 362,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":52,"nilai":"12008000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":309}',
            ),
            362 => 
            array (
                'id' => 363,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":52,"nilai":"66.08","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":310}',
            ),
            363 => 
            array (
                'id' => 364,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":52,"nilai":"72.14","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":311}',
            ),
            364 => 
            array (
                'id' => 365,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":52,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":312}',
            ),
            365 => 
            array (
                'id' => 366,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300083","nama":"EUTIK","alamat":"KP. PASIR MUNCANG RT. 02 RW. 07","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":53}',
            ),
            366 => 
            array (
                'id' => 367,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":53,"nilai":"2898000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":313}',
            ),
            367 => 
            array (
                'id' => 368,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":53,"nilai":"69.03","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":314}',
            ),
            368 => 
            array (
                'id' => 369,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":53,"nilai":"35796000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":315}',
            ),
            369 => 
            array (
                'id' => 370,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":53,"nilai":"62.42","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":316}',
            ),
            370 => 
            array (
                'id' => 371,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":53,"nilai":"46.69","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":317}',
            ),
            371 => 
            array (
                'id' => 372,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":53,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":318}',
            ),
            372 => 
            array (
                'id' => 373,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300085","nama":"AI MARDIAH","alamat":"KP. PASIR MUNCANG RT. 02 RW. 07","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":54}',
            ),
            373 => 
            array (
                'id' => 374,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":54,"nilai":"2014950","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":319}',
            ),
            374 => 
            array (
                'id' => 375,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":54,"nilai":"91.98","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":320}',
            ),
            375 => 
            array (
                'id' => 376,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":54,"nilai":"22712000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":321}',
            ),
            376 => 
            array (
                'id' => 377,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":54,"nilai":"46.61","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":322}',
            ),
            377 => 
            array (
                'id' => 378,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":54,"nilai":"38.61","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":323}',
            ),
            378 => 
            array (
                'id' => 379,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":54,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":324}',
            ),
            379 => 
            array (
                'id' => 380,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300086","nama":"ROMI AISYAH","alamat":"KP. PASIR MUNCANG RT. 02 RW. 07","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":55}',
            ),
            380 => 
            array (
                'id' => 381,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":55,"nilai":"2921450","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":325}',
            ),
            381 => 
            array (
                'id' => 382,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":55,"nilai":"28.55","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":326}',
            ),
            382 => 
            array (
                'id' => 383,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":55,"nilai":"37648000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":327}',
            ),
            383 => 
            array (
                'id' => 384,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":55,"nilai":"64.23","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":328}',
            ),
            384 => 
            array (
                'id' => 385,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":55,"nilai":"50.28","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":329}',
            ),
            385 => 
            array (
                'id' => 386,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":55,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":330}',
            ),
            386 => 
            array (
                'id' => 387,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300088","nama":"NURLELAH","alamat":"KP. BOJONG GEDE RT 01\\/08","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":56}',
            ),
            387 => 
            array (
                'id' => 388,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":56,"nilai":"1361850","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":331}',
            ),
            388 => 
            array (
                'id' => 389,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":56,"nilai":"42.28","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":332}',
            ),
            389 => 
            array (
                'id' => 390,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":56,"nilai":"33664000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":333}',
            ),
            390 => 
            array (
                'id' => 391,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":56,"nilai":"36.39","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":334}',
            ),
            391 => 
            array (
                'id' => 392,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":56,"nilai":"66.59","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":335}',
            ),
            392 => 
            array (
                'id' => 393,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":56,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":336}',
            ),
            393 => 
            array (
                'id' => 394,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300090","nama":"NURYATI","alamat":"KP. BOJONG GEDE RT 01\\/08","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":57}',
            ),
            394 => 
            array (
                'id' => 395,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":57,"nilai":"2566550","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":337}',
            ),
            395 => 
            array (
                'id' => 396,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":57,"nilai":"83.7","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":338}',
            ),
            396 => 
            array (
                'id' => 397,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":57,"nilai":"34292000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":339}',
            ),
            397 => 
            array (
                'id' => 398,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":57,"nilai":"98.04","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":340}',
            ),
            398 => 
            array (
                'id' => 399,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":57,"nilai":"39.7","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":341}',
            ),
            399 => 
            array (
                'id' => 400,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":57,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":342}',
            ),
            400 => 
            array (
                'id' => 401,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300091","nama":"CICAH JULIANTI","alamat":"KP. BOJONG GEDE RT 02\\/08","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":58}',
            ),
            401 => 
            array (
                'id' => 402,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":58,"nilai":"3286850","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":343}',
            ),
            402 => 
            array (
                'id' => 403,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":58,"nilai":"99.43","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":344}',
            ),
            403 => 
            array (
                'id' => 404,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":58,"nilai":"34996000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":345}',
            ),
            404 => 
            array (
                'id' => 405,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":58,"nilai":"55.84","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":346}',
            ),
            405 => 
            array (
                'id' => 406,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":58,"nilai":"80.54","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":347}',
            ),
            406 => 
            array (
                'id' => 407,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":58,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":348}',
            ),
            407 => 
            array (
                'id' => 408,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300094","nama":"NINING YUNINGSIH","alamat":"KP. BOJONG GEDE RT 03\\/08","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":59}',
            ),
            408 => 
            array (
                'id' => 409,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":59,"nilai":"2012500","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":349}',
            ),
            409 => 
            array (
                'id' => 410,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":59,"nilai":"70.04","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":350}',
            ),
            410 => 
            array (
                'id' => 411,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":59,"nilai":"38192000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":351}',
            ),
            411 => 
            array (
                'id' => 412,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":59,"nilai":"54.06","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":352}',
            ),
            412 => 
            array (
                'id' => 413,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":59,"nilai":"31.24","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":353}',
            ),
            413 => 
            array (
                'id' => 414,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":59,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":354}',
            ),
            414 => 
            array (
                'id' => 415,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300097","nama":"YIYIT","alamat":"KP. BOJONG GEDE RT 03\\/08","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":60}',
            ),
            415 => 
            array (
                'id' => 416,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":60,"nilai":"2282350","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":355}',
            ),
            416 => 
            array (
                'id' => 417,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":60,"nilai":"67.51","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":356}',
            ),
            417 => 
            array (
                'id' => 418,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":60,"nilai":"23260000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":357}',
            ),
            418 => 
            array (
                'id' => 419,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":60,"nilai":"90.47","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":358}',
            ),
            419 => 
            array (
                'id' => 420,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":60,"nilai":"83.96","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":359}',
            ),
            420 => 
            array (
                'id' => 421,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":60,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":360}',
            ),
            421 => 
            array (
                'id' => 422,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300100","nama":"IJANG ABDULAH SAHRONI","alamat":"KP. BOJONG GEDE RT 03\\/08","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":61}',
            ),
            422 => 
            array (
                'id' => 423,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":61,"nilai":"1311800","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":361}',
            ),
            423 => 
            array (
                'id' => 424,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":61,"nilai":"62.96","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":362}',
            ),
            424 => 
            array (
                'id' => 425,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":61,"nilai":"11436000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":363}',
            ),
            425 => 
            array (
                'id' => 426,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":61,"nilai":"53.05","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":364}',
            ),
            426 => 
            array (
                'id' => 427,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":61,"nilai":"56.87","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":365}',
            ),
            427 => 
            array (
                'id' => 428,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":61,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":366}',
            ),
            428 => 
            array (
                'id' => 429,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001300147","nama":"WIWI","alamat":"KP. SARPEUNDEUY RT. 02 RW. 04","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":62}',
            ),
            429 => 
            array (
                'id' => 430,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":62,"nilai":"1584800","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":367}',
            ),
            430 => 
            array (
                'id' => 431,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":62,"nilai":"89.56","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":368}',
            ),
            431 => 
            array (
                'id' => 432,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":62,"nilai":"36488000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":369}',
            ),
            432 => 
            array (
                'id' => 433,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":62,"nilai":"62.21","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":370}',
            ),
            433 => 
            array (
                'id' => 434,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":62,"nilai":"26.56","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":371}',
            ),
            434 => 
            array (
                'id' => 435,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":62,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":372}',
            ),
            435 => 
            array (
                'id' => 436,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001380055","nama":"ELIS LISNAWATI","alamat":"SARIPEUNDEUY RT 04\\/04","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":63}',
            ),
            436 => 
            array (
                'id' => 437,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":63,"nilai":"1548050","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":373}',
            ),
            437 => 
            array (
                'id' => 438,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":63,"nilai":"34.93","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":374}',
            ),
            438 => 
            array (
                'id' => 439,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":63,"nilai":"12788000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":375}',
            ),
            439 => 
            array (
                'id' => 440,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":63,"nilai":"95.7","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":376}',
            ),
            440 => 
            array (
                'id' => 441,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":63,"nilai":"83.68","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":377}',
            ),
            441 => 
            array (
                'id' => 442,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":63,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":378}',
            ),
            442 => 
            array (
                'id' => 443,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523001380089","nama":"ILAH","alamat":"DUSUN BATUKARUT RT 02 RW 02 DESA DANGDEUR KEC BANYURESMI","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":64}',
            ),
            443 => 
            array (
                'id' => 444,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":64,"nilai":"3228400","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":379}',
            ),
            444 => 
            array (
                'id' => 445,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":64,"nilai":"57.11","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":380}',
            ),
            445 => 
            array (
                'id' => 446,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":64,"nilai":"31552000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":381}',
            ),
            446 => 
            array (
                'id' => 447,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":64,"nilai":"64.26","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":382}',
            ),
            447 => 
            array (
                'id' => 448,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":64,"nilai":"45.4","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":383}',
            ),
            448 => 
            array (
                'id' => 449,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":64,"nilai":"0","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":384}',
            ),
            449 => 
            array (
                'id' => 450,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016011995","nama":"LILIS K","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":65}',
            ),
            450 => 
            array (
                'id' => 451,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":65,"nilai":"936950","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":385}',
            ),
            451 => 
            array (
                'id' => 452,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":65,"nilai":"52.04","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":386}',
            ),
            452 => 
            array (
                'id' => 453,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":65,"nilai":"15940000","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":387}',
            ),
            453 => 
            array (
                'id' => 454,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":65,"nilai":"49.77","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":388}',
            ),
            454 => 
            array (
                'id' => 455,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:32',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":65,"nilai":"72.7","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":389}',
            ),
            455 => 
            array (
                'id' => 456,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":65,"nilai":"1","updated_at":"2023-05-29T12:52:32.000000Z","created_at":"2023-05-29T12:52:32.000000Z","id":390}',
            ),
            456 => 
            array (
                'id' => 457,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016012953","nama":"MAS AAM","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":66}',
            ),
            457 => 
            array (
                'id' => 458,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":66,"nilai":"2396800","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":391}',
            ),
            458 => 
            array (
                'id' => 459,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":66,"nilai":"56.78","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":392}',
            ),
            459 => 
            array (
                'id' => 460,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":66,"nilai":"22648000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":393}',
            ),
            460 => 
            array (
                'id' => 461,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":66,"nilai":"46.64","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":394}',
            ),
            461 => 
            array (
                'id' => 462,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":66,"nilai":"89.31","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":395}',
            ),
            462 => 
            array (
                'id' => 463,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":66,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":396}',
            ),
            463 => 
            array (
                'id' => 464,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016013739","nama":"UJANG HIDAYAT","alamat":"KP. BATU KARUT RT.02 RW. 02","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":67}',
            ),
            464 => 
            array (
                'id' => 465,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":67,"nilai":"3433150","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":397}',
            ),
            465 => 
            array (
                'id' => 466,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":67,"nilai":"51.59","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":398}',
            ),
            466 => 
            array (
                'id' => 467,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":67,"nilai":"14632000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":399}',
            ),
            467 => 
            array (
                'id' => 468,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":67,"nilai":"67.01","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":400}',
            ),
            468 => 
            array (
                'id' => 469,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":67,"nilai":"34.99","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":401}',
            ),
            469 => 
            array (
                'id' => 470,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":67,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":402}',
            ),
            470 => 
            array (
                'id' => 471,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016013743","nama":"ENTI NURHAETI","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":68}',
            ),
            471 => 
            array (
                'id' => 472,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":68,"nilai":"3362100","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":403}',
            ),
            472 => 
            array (
                'id' => 473,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":68,"nilai":"70.42","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":404}',
            ),
            473 => 
            array (
                'id' => 474,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":68,"nilai":"25968000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":405}',
            ),
            474 => 
            array (
                'id' => 475,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":68,"nilai":"37.16","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":406}',
            ),
            475 => 
            array (
                'id' => 476,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":68,"nilai":"35.34","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":407}',
            ),
            476 => 
            array (
                'id' => 477,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":68,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":408}',
            ),
            477 => 
            array (
                'id' => 478,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016013744","nama":"MIMIN ASMINAH","alamat":"KP JATI RT 02 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":69}',
            ),
            478 => 
            array (
                'id' => 479,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":69,"nilai":"2750300","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":409}',
            ),
            479 => 
            array (
                'id' => 480,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":69,"nilai":"69.65","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":410}',
            ),
            480 => 
            array (
                'id' => 481,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":69,"nilai":"21244000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":411}',
            ),
            481 => 
            array (
                'id' => 482,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":69,"nilai":"42.16","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":412}',
            ),
            482 => 
            array (
                'id' => 483,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":69,"nilai":"73.06","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":413}',
            ),
            483 => 
            array (
                'id' => 484,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":69,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":414}',
            ),
            484 => 
            array (
                'id' => 485,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016015217","nama":"YANTI SITI PATIMAH","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":70}',
            ),
            485 => 
            array (
                'id' => 486,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":70,"nilai":"2450000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":415}',
            ),
            486 => 
            array (
                'id' => 487,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":70,"nilai":"44.64","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":416}',
            ),
            487 => 
            array (
                'id' => 488,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":70,"nilai":"17008000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":417}',
            ),
            488 => 
            array (
                'id' => 489,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":70,"nilai":"33.21","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":418}',
            ),
            489 => 
            array (
                'id' => 490,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":70,"nilai":"57.45","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":419}',
            ),
            490 => 
            array (
                'id' => 491,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":70,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":420}',
            ),
            491 => 
            array (
                'id' => 492,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016015803","nama":"IMAS NIA","alamat":"KP JATI RT 02 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":71}',
            ),
            492 => 
            array (
                'id' => 493,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":71,"nilai":"2311750","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":421}',
            ),
            493 => 
            array (
                'id' => 494,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":71,"nilai":"37.3","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":422}',
            ),
            494 => 
            array (
                'id' => 495,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":71,"nilai":"14264000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":423}',
            ),
            495 => 
            array (
                'id' => 496,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":71,"nilai":"57.86","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":424}',
            ),
            496 => 
            array (
                'id' => 497,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":71,"nilai":"31.91","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":425}',
            ),
            497 => 
            array (
                'id' => 498,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":71,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":426}',
            ),
            498 => 
            array (
                'id' => 499,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016017381","nama":"MARPU AH","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":72}',
            ),
            499 => 
            array (
                'id' => 500,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":72,"nilai":"2015300","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":427}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 501,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":72,"nilai":"80.17","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":428}',
            ),
            1 => 
            array (
                'id' => 502,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":72,"nilai":"10724000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":429}',
            ),
            2 => 
            array (
                'id' => 503,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":72,"nilai":"63.44","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":430}',
            ),
            3 => 
            array (
                'id' => 504,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":72,"nilai":"86.41","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":431}',
            ),
            4 => 
            array (
                'id' => 505,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":72,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":432}',
            ),
            5 => 
            array (
                'id' => 506,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016018086","nama":"KARYATI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":73}',
            ),
            6 => 
            array (
                'id' => 507,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":73,"nilai":"1274350","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":433}',
            ),
            7 => 
            array (
                'id' => 508,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":73,"nilai":"80.67","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":434}',
            ),
            8 => 
            array (
                'id' => 509,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":73,"nilai":"29580000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":435}',
            ),
            9 => 
            array (
                'id' => 510,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":73,"nilai":"73.52","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":436}',
            ),
            10 => 
            array (
                'id' => 511,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":73,"nilai":"78.02","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":437}',
            ),
            11 => 
            array (
                'id' => 512,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":73,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":438}',
            ),
            12 => 
            array (
                'id' => 513,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016018087","nama":"WATI","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":74}',
            ),
            13 => 
            array (
                'id' => 514,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":74,"nilai":"1705550","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":439}',
            ),
            14 => 
            array (
                'id' => 515,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":74,"nilai":"61.22","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":440}',
            ),
            15 => 
            array (
                'id' => 516,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":74,"nilai":"16988000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":441}',
            ),
            16 => 
            array (
                'id' => 517,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":74,"nilai":"78.43","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":442}',
            ),
            17 => 
            array (
                'id' => 518,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":74,"nilai":"69.05","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":443}',
            ),
            18 => 
            array (
                'id' => 519,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":74,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":444}',
            ),
            19 => 
            array (
                'id' => 520,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016019912","nama":"SA\'ADAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":75}',
            ),
            20 => 
            array (
                'id' => 521,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":75,"nilai":"3401650","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":445}',
            ),
            21 => 
            array (
                'id' => 522,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":75,"nilai":"35.9","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":446}',
            ),
            22 => 
            array (
                'id' => 523,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":75,"nilai":"35548000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":447}',
            ),
            23 => 
            array (
                'id' => 524,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":75,"nilai":"26.27","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":448}',
            ),
            24 => 
            array (
                'id' => 525,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":75,"nilai":"60.43","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":449}',
            ),
            25 => 
            array (
                'id' => 526,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":75,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":450}',
            ),
            26 => 
            array (
                'id' => 527,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016021893","nama":"PUPUN","alamat":"KP PASIRMUNCANG RT 01 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":76}',
            ),
            27 => 
            array (
                'id' => 528,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":76,"nilai":"3328850","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":451}',
            ),
            28 => 
            array (
                'id' => 529,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":76,"nilai":"52.06","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":452}',
            ),
            29 => 
            array (
                'id' => 530,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":76,"nilai":"34696000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":453}',
            ),
            30 => 
            array (
                'id' => 531,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":76,"nilai":"37.25","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":454}',
            ),
            31 => 
            array (
                'id' => 532,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":76,"nilai":"97.74","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":455}',
            ),
            32 => 
            array (
                'id' => 533,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":76,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":456}',
            ),
            33 => 
            array (
                'id' => 534,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016021894","nama":"SITI SAIBAH","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":77}',
            ),
            34 => 
            array (
                'id' => 535,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":77,"nilai":"2501800","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":457}',
            ),
            35 => 
            array (
                'id' => 536,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":77,"nilai":"40.67","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":458}',
            ),
            36 => 
            array (
                'id' => 537,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":77,"nilai":"25872000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":459}',
            ),
            37 => 
            array (
                'id' => 538,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":77,"nilai":"91.84","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":460}',
            ),
            38 => 
            array (
                'id' => 539,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":77,"nilai":"83.46","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":461}',
            ),
            39 => 
            array (
                'id' => 540,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":77,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":462}',
            ),
            40 => 
            array (
                'id' => 541,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016023545","nama":"AI ATIKAH","alamat":"KP PASIR MUNCANG RT 01 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":78}',
            ),
            41 => 
            array (
                'id' => 542,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":78,"nilai":"1212050","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":463}',
            ),
            42 => 
            array (
                'id' => 543,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":78,"nilai":"67.03","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":464}',
            ),
            43 => 
            array (
                'id' => 544,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":78,"nilai":"14176000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":465}',
            ),
            44 => 
            array (
                'id' => 545,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":78,"nilai":"80.31","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":466}',
            ),
            45 => 
            array (
                'id' => 546,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":78,"nilai":"30.15","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":467}',
            ),
            46 => 
            array (
                'id' => 547,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":78,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":468}',
            ),
            47 => 
            array (
                'id' => 548,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016024802","nama":"SUSI DIANA","alamat":"KP DANGDEUR RT 02 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":79}',
            ),
            48 => 
            array (
                'id' => 549,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":79,"nilai":"1390900","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":469}',
            ),
            49 => 
            array (
                'id' => 550,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":79,"nilai":"53.21","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":470}',
            ),
            50 => 
            array (
                'id' => 551,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":79,"nilai":"31284000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":471}',
            ),
            51 => 
            array (
                'id' => 552,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":79,"nilai":"77.45","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":472}',
            ),
            52 => 
            array (
                'id' => 553,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":79,"nilai":"57.89","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":473}',
            ),
            53 => 
            array (
                'id' => 554,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":79,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":474}',
            ),
            54 => 
            array (
                'id' => 555,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016024803","nama":"APON","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":80}',
            ),
            55 => 
            array (
                'id' => 556,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":80,"nilai":"2425850","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":475}',
            ),
            56 => 
            array (
                'id' => 557,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":80,"nilai":"92.28","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":476}',
            ),
            57 => 
            array (
                'id' => 558,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":80,"nilai":"25488000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":477}',
            ),
            58 => 
            array (
                'id' => 559,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":80,"nilai":"42.83","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":478}',
            ),
            59 => 
            array (
                'id' => 560,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":80,"nilai":"48.21","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":479}',
            ),
            60 => 
            array (
                'id' => 561,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":80,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":480}',
            ),
            61 => 
            array (
                'id' => 562,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016026000","nama":"SAHID","alamat":"KP. PASIR MUNCANG RT 001\\/RW 002","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":81}',
            ),
            62 => 
            array (
                'id' => 563,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":81,"nilai":"1161300","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":481}',
            ),
            63 => 
            array (
                'id' => 564,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":81,"nilai":"80.94","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":482}',
            ),
            64 => 
            array (
                'id' => 565,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":81,"nilai":"12520000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":483}',
            ),
            65 => 
            array (
                'id' => 566,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":81,"nilai":"44.99","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":484}',
            ),
            66 => 
            array (
                'id' => 567,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":81,"nilai":"86.77","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":485}',
            ),
            67 => 
            array (
                'id' => 568,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":81,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":486}',
            ),
            68 => 
            array (
                'id' => 569,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016026001","nama":"TINI","alamat":"KP PATROL RT 02 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":82}',
            ),
            69 => 
            array (
                'id' => 570,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":82,"nilai":"1393700","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":487}',
            ),
            70 => 
            array (
                'id' => 571,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":82,"nilai":"34.15","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":488}',
            ),
            71 => 
            array (
                'id' => 572,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":82,"nilai":"17148000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":489}',
            ),
            72 => 
            array (
                'id' => 573,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":82,"nilai":"51.38","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":490}',
            ),
            73 => 
            array (
                'id' => 574,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":82,"nilai":"41.84","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":491}',
            ),
            74 => 
            array (
                'id' => 575,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":82,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":492}',
            ),
            75 => 
            array (
                'id' => 576,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016026002","nama":"FATMAWATI","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":83}',
            ),
            76 => 
            array (
                'id' => 577,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":83,"nilai":"2358300","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":493}',
            ),
            77 => 
            array (
                'id' => 578,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":83,"nilai":"66.37","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":494}',
            ),
            78 => 
            array (
                'id' => 579,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":83,"nilai":"39088000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":495}',
            ),
            79 => 
            array (
                'id' => 580,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":83,"nilai":"92.53","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":496}',
            ),
            80 => 
            array (
                'id' => 581,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":83,"nilai":"40.47","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":497}',
            ),
            81 => 
            array (
                'id' => 582,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":83,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":498}',
            ),
            82 => 
            array (
                'id' => 583,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050701","nama":"ENUNG HOIROH","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":84}',
            ),
            83 => 
            array (
                'id' => 584,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":84,"nilai":"1621900","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":499}',
            ),
            84 => 
            array (
                'id' => 585,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":84,"nilai":"93.6","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":500}',
            ),
            85 => 
            array (
                'id' => 586,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":84,"nilai":"25120000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":501}',
            ),
            86 => 
            array (
                'id' => 587,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":84,"nilai":"73.7","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":502}',
            ),
            87 => 
            array (
                'id' => 588,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":84,"nilai":"78.46","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":503}',
            ),
            88 => 
            array (
                'id' => 589,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":84,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":504}',
            ),
            89 => 
            array (
                'id' => 590,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050703","nama":"EUIS LATIPAH","alamat":"KP CISALAM RW 06 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":85}',
            ),
            90 => 
            array (
                'id' => 591,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":85,"nilai":"3093300","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":505}',
            ),
            91 => 
            array (
                'id' => 592,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":85,"nilai":"68.24","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":506}',
            ),
            92 => 
            array (
                'id' => 593,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":85,"nilai":"37720000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":507}',
            ),
            93 => 
            array (
                'id' => 594,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":85,"nilai":"42.57","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":508}',
            ),
            94 => 
            array (
                'id' => 595,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":85,"nilai":"74.14","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":509}',
            ),
            95 => 
            array (
                'id' => 596,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":85,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":510}',
            ),
            96 => 
            array (
                'id' => 597,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050705","nama":"OBAY SOBARIAH","alamat":"KP PATROL RT 01 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":86}',
            ),
            97 => 
            array (
                'id' => 598,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":86,"nilai":"3199000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":511}',
            ),
            98 => 
            array (
                'id' => 599,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":86,"nilai":"79.76","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":512}',
            ),
            99 => 
            array (
                'id' => 600,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":86,"nilai":"35640000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":513}',
            ),
            100 => 
            array (
                'id' => 601,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":86,"nilai":"98.98","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":514}',
            ),
            101 => 
            array (
                'id' => 602,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":86,"nilai":"27.15","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":515}',
            ),
            102 => 
            array (
                'id' => 603,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":86,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":516}',
            ),
            103 => 
            array (
                'id' => 604,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050706","nama":"EULIS HARYANTI","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":87}',
            ),
            104 => 
            array (
                'id' => 605,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":87,"nilai":"3053750","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":517}',
            ),
            105 => 
            array (
                'id' => 606,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":87,"nilai":"52.28","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":518}',
            ),
            106 => 
            array (
                'id' => 607,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":87,"nilai":"26804000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":519}',
            ),
            107 => 
            array (
                'id' => 608,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":87,"nilai":"32.97","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":520}',
            ),
            108 => 
            array (
                'id' => 609,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":87,"nilai":"29.74","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":521}',
            ),
            109 => 
            array (
                'id' => 610,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":87,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":522}',
            ),
            110 => 
            array (
                'id' => 611,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016050710","nama":"ETI","alamat":"KP SARPEUNDEUY RT 003 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":88}',
            ),
            111 => 
            array (
                'id' => 612,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":88,"nilai":"998200","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":523}',
            ),
            112 => 
            array (
                'id' => 613,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":88,"nilai":"62.67","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":524}',
            ),
            113 => 
            array (
                'id' => 614,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":88,"nilai":"24496000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":525}',
            ),
            114 => 
            array (
                'id' => 615,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":88,"nilai":"96.92","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":526}',
            ),
            115 => 
            array (
                'id' => 616,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":88,"nilai":"85.28","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":527}',
            ),
            116 => 
            array (
                'id' => 617,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":88,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":528}',
            ),
            117 => 
            array (
                'id' => 618,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300800","nama":"NANA RUSMANA","alamat":"KP DANGDEUR RW 01 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":89}',
            ),
            118 => 
            array (
                'id' => 619,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":89,"nilai":"3459050","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":529}',
            ),
            119 => 
            array (
                'id' => 620,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":89,"nilai":"92.4","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":530}',
            ),
            120 => 
            array (
                'id' => 621,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":89,"nilai":"16164000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":531}',
            ),
            121 => 
            array (
                'id' => 622,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":89,"nilai":"34.97","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":532}',
            ),
            122 => 
            array (
                'id' => 623,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":89,"nilai":"45.94","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":533}',
            ),
            123 => 
            array (
                'id' => 624,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":89,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":534}',
            ),
            124 => 
            array (
                'id' => 625,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300801","nama":"TUTI","alamat":"KP DANGDEUR RT 01 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":90}',
            ),
            125 => 
            array (
                'id' => 626,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":90,"nilai":"2046800","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":535}',
            ),
            126 => 
            array (
                'id' => 627,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":90,"nilai":"62.55","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":536}',
            ),
            127 => 
            array (
                'id' => 628,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":90,"nilai":"36632000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":537}',
            ),
            128 => 
            array (
                'id' => 629,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":90,"nilai":"65.48","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":538}',
            ),
            129 => 
            array (
                'id' => 630,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":90,"nilai":"61.87","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":539}',
            ),
            130 => 
            array (
                'id' => 631,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":90,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":540}',
            ),
            131 => 
            array (
                'id' => 632,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300803","nama":"IIK NURHIKMAH","alamat":"KP DANGDEUR RT 02 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":91}',
            ),
            132 => 
            array (
                'id' => 633,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":91,"nilai":"1132950","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":541}',
            ),
            133 => 
            array (
                'id' => 634,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":91,"nilai":"93.85","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":542}',
            ),
            134 => 
            array (
                'id' => 635,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":91,"nilai":"16444000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":543}',
            ),
            135 => 
            array (
                'id' => 636,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":91,"nilai":"97.03","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":544}',
            ),
            136 => 
            array (
                'id' => 637,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":91,"nilai":"74.45","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":545}',
            ),
            137 => 
            array (
                'id' => 638,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":91,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":546}',
            ),
            138 => 
            array (
                'id' => 639,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300805","nama":"IKAH","alamat":"KP PASIRMUNCANG RT 01 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":92}',
            ),
            139 => 
            array (
                'id' => 640,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":92,"nilai":"1750000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":547}',
            ),
            140 => 
            array (
                'id' => 641,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":92,"nilai":"80.88","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":548}',
            ),
            141 => 
            array (
                'id' => 642,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":92,"nilai":"19752000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":549}',
            ),
            142 => 
            array (
                'id' => 643,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":92,"nilai":"64.47","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":550}',
            ),
            143 => 
            array (
                'id' => 644,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":92,"nilai":"85.76","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":551}',
            ),
            144 => 
            array (
                'id' => 645,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":92,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":552}',
            ),
            145 => 
            array (
                'id' => 646,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300807","nama":"SUMI KULSUM","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":93}',
            ),
            146 => 
            array (
                'id' => 647,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":93,"nilai":"3258850","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":553}',
            ),
            147 => 
            array (
                'id' => 648,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":93,"nilai":"75.47","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":554}',
            ),
            148 => 
            array (
                'id' => 649,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":93,"nilai":"21004000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":555}',
            ),
            149 => 
            array (
                'id' => 650,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":93,"nilai":"32.73","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":556}',
            ),
            150 => 
            array (
                'id' => 651,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":93,"nilai":"95.18","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":557}',
            ),
            151 => 
            array (
                'id' => 652,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":93,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":558}',
            ),
            152 => 
            array (
                'id' => 653,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300809","nama":"SITI MAESAROH","alamat":"KP JATI RT 03 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":94}',
            ),
            153 => 
            array (
                'id' => 654,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":94,"nilai":"1122100","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":559}',
            ),
            154 => 
            array (
                'id' => 655,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":94,"nilai":"82.22","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":560}',
            ),
            155 => 
            array (
                'id' => 656,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":94,"nilai":"18616000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":561}',
            ),
            156 => 
            array (
                'id' => 657,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":94,"nilai":"50.34","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":562}',
            ),
            157 => 
            array (
                'id' => 658,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":94,"nilai":"83.19","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":563}',
            ),
            158 => 
            array (
                'id' => 659,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":94,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":564}',
            ),
            159 => 
            array (
                'id' => 660,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300810","nama":"PUPU MARPUAH","alamat":"KP JATI RT 03 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":95}',
            ),
            160 => 
            array (
                'id' => 661,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":95,"nilai":"1670200","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":565}',
            ),
            161 => 
            array (
                'id' => 662,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":95,"nilai":"34.55","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":566}',
            ),
            162 => 
            array (
                'id' => 663,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":95,"nilai":"27700000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":567}',
            ),
            163 => 
            array (
                'id' => 664,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":95,"nilai":"29.45","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":568}',
            ),
            164 => 
            array (
                'id' => 665,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":95,"nilai":"70.01","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":569}',
            ),
            165 => 
            array (
                'id' => 666,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":95,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":570}',
            ),
            166 => 
            array (
                'id' => 667,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300813","nama":"ESAH","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":96}',
            ),
            167 => 
            array (
                'id' => 668,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":96,"nilai":"2793700","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":571}',
            ),
            168 => 
            array (
                'id' => 669,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":96,"nilai":"60.23","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":572}',
            ),
            169 => 
            array (
                'id' => 670,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":96,"nilai":"27384000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":573}',
            ),
            170 => 
            array (
                'id' => 671,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":96,"nilai":"73.78","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":574}',
            ),
            171 => 
            array (
                'id' => 672,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":96,"nilai":"34.81","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":575}',
            ),
            172 => 
            array (
                'id' => 673,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":96,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":576}',
            ),
            173 => 
            array (
                'id' => 674,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300814","nama":"YOYOH ROKAYAH","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":97}',
            ),
            174 => 
            array (
                'id' => 675,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":97,"nilai":"3293850","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":577}',
            ),
            175 => 
            array (
                'id' => 676,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":97,"nilai":"68.95","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":578}',
            ),
            176 => 
            array (
                'id' => 677,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":97,"nilai":"35124000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":579}',
            ),
            177 => 
            array (
                'id' => 678,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":97,"nilai":"48.29","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":580}',
            ),
            178 => 
            array (
                'id' => 679,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":97,"nilai":"61.19","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":581}',
            ),
            179 => 
            array (
                'id' => 680,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":97,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":582}',
            ),
            180 => 
            array (
                'id' => 681,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300815","nama":"ETI","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":98}',
            ),
            181 => 
            array (
                'id' => 682,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":98,"nilai":"3232250","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":583}',
            ),
            182 => 
            array (
                'id' => 683,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":98,"nilai":"26.73","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":584}',
            ),
            183 => 
            array (
                'id' => 684,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":98,"nilai":"24536000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":585}',
            ),
            184 => 
            array (
                'id' => 685,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":98,"nilai":"95.06","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":586}',
            ),
            185 => 
            array (
                'id' => 686,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":98,"nilai":"58.87","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":587}',
            ),
            186 => 
            array (
                'id' => 687,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":98,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":588}',
            ),
            187 => 
            array (
                'id' => 688,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300818","nama":"DEDE","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":99}',
            ),
            188 => 
            array (
                'id' => 689,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":99,"nilai":"2537500","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":589}',
            ),
            189 => 
            array (
                'id' => 690,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":99,"nilai":"81.27","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":590}',
            ),
            190 => 
            array (
                'id' => 691,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":99,"nilai":"33268000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":591}',
            ),
            191 => 
            array (
                'id' => 692,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":99,"nilai":"60.54","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":592}',
            ),
            192 => 
            array (
                'id' => 693,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":99,"nilai":"54.75","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":593}',
            ),
            193 => 
            array (
                'id' => 694,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":99,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":594}',
            ),
            194 => 
            array (
                'id' => 695,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300819","nama":"LINA","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":100}',
            ),
            195 => 
            array (
                'id' => 696,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":100,"nilai":"3359650","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":595}',
            ),
            196 => 
            array (
                'id' => 697,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":100,"nilai":"90.99","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":596}',
            ),
            197 => 
            array (
                'id' => 698,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":100,"nilai":"18868000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":597}',
            ),
            198 => 
            array (
                'id' => 699,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":100,"nilai":"47.68","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":598}',
            ),
            199 => 
            array (
                'id' => 700,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":100,"nilai":"66.93","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":599}',
            ),
            200 => 
            array (
                'id' => 701,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":100,"nilai":"0","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":600}',
            ),
            201 => 
            array (
                'id' => 702,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300822","nama":"DEWI MARDIANA","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":101}',
            ),
            202 => 
            array (
                'id' => 703,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":101,"nilai":"2502150","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":601}',
            ),
            203 => 
            array (
                'id' => 704,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":101,"nilai":"92.36","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":602}',
            ),
            204 => 
            array (
                'id' => 705,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":101,"nilai":"12596000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":603}',
            ),
            205 => 
            array (
                'id' => 706,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":101,"nilai":"38","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":604}',
            ),
            206 => 
            array (
                'id' => 707,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":101,"nilai":"46.85","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":605}',
            ),
            207 => 
            array (
                'id' => 708,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":101,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":606}',
            ),
            208 => 
            array (
                'id' => 709,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300823","nama":"GEUGEU","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":102}',
            ),
            209 => 
            array (
                'id' => 710,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":102,"nilai":"1318450","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":607}',
            ),
            210 => 
            array (
                'id' => 711,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":102,"nilai":"92.39","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":608}',
            ),
            211 => 
            array (
                'id' => 712,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":102,"nilai":"34424000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":609}',
            ),
            212 => 
            array (
                'id' => 713,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":102,"nilai":"76.21","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":610}',
            ),
            213 => 
            array (
                'id' => 714,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":102,"nilai":"42.58","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":611}',
            ),
            214 => 
            array (
                'id' => 715,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":102,"nilai":"1","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":612}',
            ),
            215 => 
            array (
                'id' => 716,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300826","nama":"MARWATI","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":103}',
            ),
            216 => 
            array (
                'id' => 717,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":103,"nilai":"2877000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":613}',
            ),
            217 => 
            array (
                'id' => 718,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":103,"nilai":"36.63","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":614}',
            ),
            218 => 
            array (
                'id' => 719,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":103,"nilai":"22648000","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":615}',
            ),
            219 => 
            array (
                'id' => 720,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":103,"nilai":"63.91","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":616}',
            ),
            220 => 
            array (
                'id' => 721,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:33',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":103,"nilai":"57.35","updated_at":"2023-05-29T12:52:33.000000Z","created_at":"2023-05-29T12:52:33.000000Z","id":617}',
            ),
            221 => 
            array (
                'id' => 722,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":103,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":618}',
            ),
            222 => 
            array (
                'id' => 723,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300827","nama":"NURYANI","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":104}',
            ),
            223 => 
            array (
                'id' => 724,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":104,"nilai":"3481450","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":619}',
            ),
            224 => 
            array (
                'id' => 725,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":104,"nilai":"68.33","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":620}',
            ),
            225 => 
            array (
                'id' => 726,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":104,"nilai":"27044000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":621}',
            ),
            226 => 
            array (
                'id' => 727,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":104,"nilai":"38.66","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":622}',
            ),
            227 => 
            array (
                'id' => 728,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":104,"nilai":"41.97","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":623}',
            ),
            228 => 
            array (
                'id' => 729,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":104,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":624}',
            ),
            229 => 
            array (
                'id' => 730,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300829","nama":"BADRIAH","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":105}',
            ),
            230 => 
            array (
                'id' => 731,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":105,"nilai":"2403800","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":625}',
            ),
            231 => 
            array (
                'id' => 732,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":105,"nilai":"83.37","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":626}',
            ),
            232 => 
            array (
                'id' => 733,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":105,"nilai":"32352000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":627}',
            ),
            233 => 
            array (
                'id' => 734,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":105,"nilai":"62.17","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":628}',
            ),
            234 => 
            array (
                'id' => 735,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":105,"nilai":"51.16","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":629}',
            ),
            235 => 
            array (
                'id' => 736,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":105,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":630}',
            ),
            236 => 
            array (
                'id' => 737,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300832","nama":"UAY WARLIYAH","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":106}',
            ),
            237 => 
            array (
                'id' => 738,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":106,"nilai":"2489550","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":631}',
            ),
            238 => 
            array (
                'id' => 739,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":106,"nilai":"60.41","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":632}',
            ),
            239 => 
            array (
                'id' => 740,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":106,"nilai":"37372000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":633}',
            ),
            240 => 
            array (
                'id' => 741,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":106,"nilai":"67.29","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":634}',
            ),
            241 => 
            array (
                'id' => 742,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":106,"nilai":"39.48","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":635}',
            ),
            242 => 
            array (
                'id' => 743,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":106,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":636}',
            ),
            243 => 
            array (
                'id' => 744,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300834","nama":"ERAT","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":107}',
            ),
            244 => 
            array (
                'id' => 745,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":107,"nilai":"1707650","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":637}',
            ),
            245 => 
            array (
                'id' => 746,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":107,"nilai":"71.65","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":638}',
            ),
            246 => 
            array (
                'id' => 747,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":107,"nilai":"37516000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":639}',
            ),
            247 => 
            array (
                'id' => 748,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":107,"nilai":"37.78","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":640}',
            ),
            248 => 
            array (
                'id' => 749,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":107,"nilai":"40.91","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":641}',
            ),
            249 => 
            array (
                'id' => 750,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":107,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":642}',
            ),
            250 => 
            array (
                'id' => 751,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300835","nama":"ROHAYANI","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":108}',
            ),
            251 => 
            array (
                'id' => 752,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":108,"nilai":"2881550","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":643}',
            ),
            252 => 
            array (
                'id' => 753,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":108,"nilai":"77.88","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":644}',
            ),
            253 => 
            array (
                'id' => 754,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":108,"nilai":"35504000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":645}',
            ),
            254 => 
            array (
                'id' => 755,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":108,"nilai":"91.19","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":646}',
            ),
            255 => 
            array (
                'id' => 756,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":108,"nilai":"57.95","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":647}',
            ),
            256 => 
            array (
                'id' => 757,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":108,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":648}',
            ),
            257 => 
            array (
                'id' => 758,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300836","nama":"EEN","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":109}',
            ),
            258 => 
            array (
                'id' => 759,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":109,"nilai":"3392900","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":649}',
            ),
            259 => 
            array (
                'id' => 760,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":109,"nilai":"34.78","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":650}',
            ),
            260 => 
            array (
                'id' => 761,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":109,"nilai":"34832000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":651}',
            ),
            261 => 
            array (
                'id' => 762,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":109,"nilai":"98.67","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":652}',
            ),
            262 => 
            array (
                'id' => 763,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":109,"nilai":"34.39","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":653}',
            ),
            263 => 
            array (
                'id' => 764,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":109,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":654}',
            ),
            264 => 
            array (
                'id' => 765,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300838","nama":"NENDI","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":110}',
            ),
            265 => 
            array (
                'id' => 766,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":110,"nilai":"1659700","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":655}',
            ),
            266 => 
            array (
                'id' => 767,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":110,"nilai":"79.77","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":656}',
            ),
            267 => 
            array (
                'id' => 768,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":110,"nilai":"38440000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":657}',
            ),
            268 => 
            array (
                'id' => 769,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":110,"nilai":"90.86","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":658}',
            ),
            269 => 
            array (
                'id' => 770,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":110,"nilai":"80.59","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":659}',
            ),
            270 => 
            array (
                'id' => 771,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":110,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":660}',
            ),
            271 => 
            array (
                'id' => 772,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300839","nama":"ENCENG","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":111}',
            ),
            272 => 
            array (
                'id' => 773,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":111,"nilai":"2786350","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":661}',
            ),
            273 => 
            array (
                'id' => 774,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":111,"nilai":"94.63","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":662}',
            ),
            274 => 
            array (
                'id' => 775,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":111,"nilai":"32784000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":663}',
            ),
            275 => 
            array (
                'id' => 776,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":111,"nilai":"40.26","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":664}',
            ),
            276 => 
            array (
                'id' => 777,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":111,"nilai":"34.99","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":665}',
            ),
            277 => 
            array (
                'id' => 778,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":111,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":666}',
            ),
            278 => 
            array (
                'id' => 779,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300841","nama":"LISNAWATI","alamat":"KP BOJONG GEDE RT 03 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":112}',
            ),
            279 => 
            array (
                'id' => 780,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":112,"nilai":"2964150","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":667}',
            ),
            280 => 
            array (
                'id' => 781,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":112,"nilai":"31.92","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":668}',
            ),
            281 => 
            array (
                'id' => 782,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":112,"nilai":"30888000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":669}',
            ),
            282 => 
            array (
                'id' => 783,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":112,"nilai":"25.5","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":670}',
            ),
            283 => 
            array (
                'id' => 784,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":112,"nilai":"29.78","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":671}',
            ),
            284 => 
            array (
                'id' => 785,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":112,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":672}',
            ),
            285 => 
            array (
                'id' => 786,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300842","nama":"SITI JUBAEDAH","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":113}',
            ),
            286 => 
            array (
                'id' => 787,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":113,"nilai":"2445450","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":673}',
            ),
            287 => 
            array (
                'id' => 788,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":113,"nilai":"25.89","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":674}',
            ),
            288 => 
            array (
                'id' => 789,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":113,"nilai":"17904000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":675}',
            ),
            289 => 
            array (
                'id' => 790,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":113,"nilai":"43.53","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":676}',
            ),
            290 => 
            array (
                'id' => 791,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":113,"nilai":"27.62","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":677}',
            ),
            291 => 
            array (
                'id' => 792,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":113,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":678}',
            ),
            292 => 
            array (
                'id' => 793,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300845","nama":"SITI ROHAYATI","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":114}',
            ),
            293 => 
            array (
                'id' => 794,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":114,"nilai":"1750350","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":679}',
            ),
            294 => 
            array (
                'id' => 795,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":114,"nilai":"69.65","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":680}',
            ),
            295 => 
            array (
                'id' => 796,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":114,"nilai":"39176000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":681}',
            ),
            296 => 
            array (
                'id' => 797,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":114,"nilai":"94.3","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":682}',
            ),
            297 => 
            array (
                'id' => 798,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":114,"nilai":"56.97","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":683}',
            ),
            298 => 
            array (
                'id' => 799,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":114,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":684}',
            ),
            299 => 
            array (
                'id' => 800,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300846","nama":"NURAENI","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":115}',
            ),
            300 => 
            array (
                'id' => 801,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":115,"nilai":"3260250","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":685}',
            ),
            301 => 
            array (
                'id' => 802,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":115,"nilai":"89.6","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":686}',
            ),
            302 => 
            array (
                'id' => 803,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":115,"nilai":"20836000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":687}',
            ),
            303 => 
            array (
                'id' => 804,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":115,"nilai":"91.07","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":688}',
            ),
            304 => 
            array (
                'id' => 805,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":115,"nilai":"65.61","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":689}',
            ),
            305 => 
            array (
                'id' => 806,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":115,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":690}',
            ),
            306 => 
            array (
                'id' => 807,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300850","nama":"AI ROSTINI","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":116}',
            ),
            307 => 
            array (
                'id' => 808,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":116,"nilai":"2098250","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":691}',
            ),
            308 => 
            array (
                'id' => 809,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":116,"nilai":"81.9","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":692}',
            ),
            309 => 
            array (
                'id' => 810,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":116,"nilai":"27004000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":693}',
            ),
            310 => 
            array (
                'id' => 811,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":116,"nilai":"80.07","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":694}',
            ),
            311 => 
            array (
                'id' => 812,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":116,"nilai":"66.09","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":695}',
            ),
            312 => 
            array (
                'id' => 813,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":116,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":696}',
            ),
            313 => 
            array (
                'id' => 814,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300852","nama":"SITI MARYAM","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":117}',
            ),
            314 => 
            array (
                'id' => 815,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":117,"nilai":"3270050","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":697}',
            ),
            315 => 
            array (
                'id' => 816,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":117,"nilai":"62.34","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":698}',
            ),
            316 => 
            array (
                'id' => 817,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":117,"nilai":"27820000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":699}',
            ),
            317 => 
            array (
                'id' => 818,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":117,"nilai":"66.34","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":700}',
            ),
            318 => 
            array (
                'id' => 819,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":117,"nilai":"54.08","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":701}',
            ),
            319 => 
            array (
                'id' => 820,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":117,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":702}',
            ),
            320 => 
            array (
                'id' => 821,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300853","nama":"DEWI KODARIAH","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":118}',
            ),
            321 => 
            array (
                'id' => 822,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":118,"nilai":"2312800","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":703}',
            ),
            322 => 
            array (
                'id' => 823,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":118,"nilai":"72.14","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":704}',
            ),
            323 => 
            array (
                'id' => 824,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":118,"nilai":"17584000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":705}',
            ),
            324 => 
            array (
                'id' => 825,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":118,"nilai":"46.39","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":706}',
            ),
            325 => 
            array (
                'id' => 826,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":118,"nilai":"53.7","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":707}',
            ),
            326 => 
            array (
                'id' => 827,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":118,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":708}',
            ),
            327 => 
            array (
                'id' => 828,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300854","nama":"EULIS ROHIMAH","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":119}',
            ),
            328 => 
            array (
                'id' => 829,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":119,"nilai":"2184700","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":709}',
            ),
            329 => 
            array (
                'id' => 830,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":119,"nilai":"46.69","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":710}',
            ),
            330 => 
            array (
                'id' => 831,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":119,"nilai":"29864000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":711}',
            ),
            331 => 
            array (
                'id' => 832,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":119,"nilai":"61.79","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":712}',
            ),
            332 => 
            array (
                'id' => 833,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":119,"nilai":"34.67","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":713}',
            ),
            333 => 
            array (
                'id' => 834,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":119,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":714}',
            ),
            334 => 
            array (
                'id' => 835,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300855","nama":"MIMIN","alamat":"KP CISALAM RW 06 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":120}',
            ),
            335 => 
            array (
                'id' => 836,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":120,"nilai":"1631350","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":715}',
            ),
            336 => 
            array (
                'id' => 837,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":120,"nilai":"38.61","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":716}',
            ),
            337 => 
            array (
                'id' => 838,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":120,"nilai":"20000000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":717}',
            ),
            338 => 
            array (
                'id' => 839,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":120,"nilai":"44.93","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":718}',
            ),
            339 => 
            array (
                'id' => 840,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":120,"nilai":"59.39","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":719}',
            ),
            340 => 
            array (
                'id' => 841,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":120,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":720}',
            ),
            341 => 
            array (
                'id' => 842,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300856","nama":"DEDE SUPRIATNA","alamat":"KP GEGERLOA RT 01 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":121}',
            ),
            342 => 
            array (
                'id' => 843,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":121,"nilai":"2248050","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":721}',
            ),
            343 => 
            array (
                'id' => 844,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":121,"nilai":"50.28","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":722}',
            ),
            344 => 
            array (
                'id' => 845,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":121,"nilai":"38840000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":723}',
            ),
            345 => 
            array (
                'id' => 846,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":121,"nilai":"56.4","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":724}',
            ),
            346 => 
            array (
                'id' => 847,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":121,"nilai":"56.99","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":725}',
            ),
            347 => 
            array (
                'id' => 848,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":121,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":726}',
            ),
            348 => 
            array (
                'id' => 849,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300857","nama":"ENOK","alamat":"KP GEGERLOA RT 01 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":122}',
            ),
            349 => 
            array (
                'id' => 850,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":122,"nilai":"1273650","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":727}',
            ),
            350 => 
            array (
                'id' => 851,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":122,"nilai":"66.59","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":728}',
            ),
            351 => 
            array (
                'id' => 852,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":122,"nilai":"18332000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":729}',
            ),
            352 => 
            array (
                'id' => 853,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":122,"nilai":"76.03","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":730}',
            ),
            353 => 
            array (
                'id' => 854,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":122,"nilai":"30.69","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":731}',
            ),
            354 => 
            array (
                'id' => 855,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":122,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":732}',
            ),
            355 => 
            array (
                'id' => 856,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300858","nama":"HERLINA","alamat":"KP PASIRMUNCANG RT 02 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":123}',
            ),
            356 => 
            array (
                'id' => 857,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":123,"nilai":"3431400","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":733}',
            ),
            357 => 
            array (
                'id' => 858,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":123,"nilai":"39.7","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":734}',
            ),
            358 => 
            array (
                'id' => 859,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":123,"nilai":"35836000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":735}',
            ),
            359 => 
            array (
                'id' => 860,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":123,"nilai":"99.98","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":736}',
            ),
            360 => 
            array (
                'id' => 861,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":123,"nilai":"53.09","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":737}',
            ),
            361 => 
            array (
                'id' => 862,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":123,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":738}',
            ),
            362 => 
            array (
                'id' => 863,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300859","nama":"YANI HARYANI","alamat":"KP PASIRMUNCANG RT 02 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":124}',
            ),
            363 => 
            array (
                'id' => 864,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":124,"nilai":"1954400","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":739}',
            ),
            364 => 
            array (
                'id' => 865,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":124,"nilai":"80.54","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":740}',
            ),
            365 => 
            array (
                'id' => 866,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":124,"nilai":"21364000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":741}',
            ),
            366 => 
            array (
                'id' => 867,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":124,"nilai":"52.1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":742}',
            ),
            367 => 
            array (
                'id' => 868,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":124,"nilai":"72.72","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":743}',
            ),
            368 => 
            array (
                'id' => 869,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":124,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":744}',
            ),
            369 => 
            array (
                'id' => 870,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300861","nama":"NUNUNG RUHAITIN","alamat":"KP PASIRMUNCANG RT 02 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":125}',
            ),
            370 => 
            array (
                'id' => 871,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":125,"nilai":"1892100","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":745}',
            ),
            371 => 
            array (
                'id' => 872,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":125,"nilai":"31.24","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":746}',
            ),
            372 => 
            array (
                'id' => 873,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":125,"nilai":"18328000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":747}',
            ),
            373 => 
            array (
                'id' => 874,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":125,"nilai":"80.59","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":748}',
            ),
            374 => 
            array (
                'id' => 875,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":125,"nilai":"33.11","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":749}',
            ),
            375 => 
            array (
                'id' => 876,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":125,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":750}',
            ),
            376 => 
            array (
                'id' => 877,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300865","nama":"MIMIN","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":126}',
            ),
            377 => 
            array (
                'id' => 878,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":126,"nilai":"3166450","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":751}',
            ),
            378 => 
            array (
                'id' => 879,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":126,"nilai":"83.96","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":752}',
            ),
            379 => 
            array (
                'id' => 880,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":126,"nilai":"38008000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":753}',
            ),
            380 => 
            array (
                'id' => 881,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":126,"nilai":"77.52","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":754}',
            ),
            381 => 
            array (
                'id' => 882,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":126,"nilai":"82.3","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":755}',
            ),
            382 => 
            array (
                'id' => 883,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":126,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":756}',
            ),
            383 => 
            array (
                'id' => 884,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300867","nama":"TUKIYAH","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":127}',
            ),
            384 => 
            array (
                'id' => 885,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":127,"nilai":"1856750","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":757}',
            ),
            385 => 
            array (
                'id' => 886,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":127,"nilai":"56.87","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":758}',
            ),
            386 => 
            array (
                'id' => 887,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":127,"nilai":"36656000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":759}',
            ),
            387 => 
            array (
                'id' => 888,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":127,"nilai":"47.19","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":760}',
            ),
            388 => 
            array (
                'id' => 889,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":127,"nilai":"75.42","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":761}',
            ),
            389 => 
            array (
                'id' => 890,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":127,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":762}',
            ),
            390 => 
            array (
                'id' => 891,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300869","nama":"HASANAH","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":128}',
            ),
            391 => 
            array (
                'id' => 892,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":128,"nilai":"2177350","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":763}',
            ),
            392 => 
            array (
                'id' => 893,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":128,"nilai":"26.56","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":764}',
            ),
            393 => 
            array (
                'id' => 894,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":128,"nilai":"11244000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":765}',
            ),
            394 => 
            array (
                'id' => 895,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":128,"nilai":"30.82","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":766}',
            ),
            395 => 
            array (
                'id' => 896,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":128,"nilai":"66.91","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":767}',
            ),
            396 => 
            array (
                'id' => 897,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":128,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":768}',
            ),
            397 => 
            array (
                'id' => 898,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300871","nama":"IMAS WAWAT","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":129}',
            ),
            398 => 
            array (
                'id' => 899,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":129,"nilai":"3349500","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":769}',
            ),
            399 => 
            array (
                'id' => 900,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":129,"nilai":"83.68","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":770}',
            ),
            400 => 
            array (
                'id' => 901,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":129,"nilai":"35716000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":771}',
            ),
            401 => 
            array (
                'id' => 902,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":129,"nilai":"80.06","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":772}',
            ),
            402 => 
            array (
                'id' => 903,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":129,"nilai":"34.65","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":773}',
            ),
            403 => 
            array (
                'id' => 904,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":129,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":774}',
            ),
            404 => 
            array (
                'id' => 905,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300872","nama":"IDAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":130}',
            ),
            405 => 
            array (
                'id' => 906,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":130,"nilai":"2249100","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":775}',
            ),
            406 => 
            array (
                'id' => 907,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":130,"nilai":"45.4","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":776}',
            ),
            407 => 
            array (
                'id' => 908,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":130,"nilai":"12100000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":777}',
            ),
            408 => 
            array (
                'id' => 909,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":130,"nilai":"34.87","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":778}',
            ),
            409 => 
            array (
                'id' => 910,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":130,"nilai":"60.16","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":779}',
            ),
            410 => 
            array (
                'id' => 911,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":130,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":780}',
            ),
            411 => 
            array (
                'id' => 912,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300873","nama":"ETI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":131}',
            ),
            412 => 
            array (
                'id' => 913,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":131,"nilai":"1741950","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":781}',
            ),
            413 => 
            array (
                'id' => 914,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":131,"nilai":"72.7","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":782}',
            ),
            414 => 
            array (
                'id' => 915,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":131,"nilai":"29508000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":783}',
            ),
            415 => 
            array (
                'id' => 916,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":131,"nilai":"31.35","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":784}',
            ),
            416 => 
            array (
                'id' => 917,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":131,"nilai":"33.24","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":785}',
            ),
            417 => 
            array (
                'id' => 918,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":131,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":786}',
            ),
            418 => 
            array (
                'id' => 919,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300874","nama":"TITI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":132}',
            ),
            419 => 
            array (
                'id' => 920,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":132,"nilai":"1632400","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":787}',
            ),
            420 => 
            array (
                'id' => 921,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":132,"nilai":"89.31","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":788}',
            ),
            421 => 
            array (
                'id' => 922,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":132,"nilai":"23644000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":789}',
            ),
            422 => 
            array (
                'id' => 923,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":132,"nilai":"35.06","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":790}',
            ),
            423 => 
            array (
                'id' => 924,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":132,"nilai":"72.29","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":791}',
            ),
            424 => 
            array (
                'id' => 925,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":132,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":792}',
            ),
            425 => 
            array (
                'id' => 926,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300876","nama":"HENI HANDAYANI","alamat":"KP PATROL RT 02 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":133}',
            ),
            426 => 
            array (
                'id' => 927,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":133,"nilai":"2345350","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":793}',
            ),
            427 => 
            array (
                'id' => 928,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":133,"nilai":"34.99","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":794}',
            ),
            428 => 
            array (
                'id' => 929,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":133,"nilai":"27756000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":795}',
            ),
            429 => 
            array (
                'id' => 930,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":133,"nilai":"48.84","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":796}',
            ),
            430 => 
            array (
                'id' => 931,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":133,"nilai":"74.98","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":797}',
            ),
            431 => 
            array (
                'id' => 932,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":133,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":798}',
            ),
            432 => 
            array (
                'id' => 933,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300877","nama":"ROHANAH","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":134}',
            ),
            433 => 
            array (
                'id' => 934,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":134,"nilai":"1300600","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":799}',
            ),
            434 => 
            array (
                'id' => 935,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":134,"nilai":"35.34","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":800}',
            ),
            435 => 
            array (
                'id' => 936,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":134,"nilai":"35400000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":801}',
            ),
            436 => 
            array (
                'id' => 937,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":134,"nilai":"99.44","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":802}',
            ),
            437 => 
            array (
                'id' => 938,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":134,"nilai":"53.63","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":803}',
            ),
            438 => 
            array (
                'id' => 939,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":134,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":804}',
            ),
            439 => 
            array (
                'id' => 940,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300878","nama":"KARMASIH","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":135}',
            ),
            440 => 
            array (
                'id' => 941,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":135,"nilai":"1475600","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":805}',
            ),
            441 => 
            array (
                'id' => 942,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":135,"nilai":"73.06","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":806}',
            ),
            442 => 
            array (
                'id' => 943,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":135,"nilai":"26628000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":807}',
            ),
            443 => 
            array (
                'id' => 944,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":135,"nilai":"73.54","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":808}',
            ),
            444 => 
            array (
                'id' => 945,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":135,"nilai":"37.7","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":809}',
            ),
            445 => 
            array (
                'id' => 946,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":135,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":810}',
            ),
            446 => 
            array (
                'id' => 947,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300879","nama":"TIAH","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":136}',
            ),
            447 => 
            array (
                'id' => 948,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":136,"nilai":"1162350","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":811}',
            ),
            448 => 
            array (
                'id' => 949,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":136,"nilai":"57.45","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":812}',
            ),
            449 => 
            array (
                'id' => 950,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":136,"nilai":"29948000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":813}',
            ),
            450 => 
            array (
                'id' => 951,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":136,"nilai":"59.38","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":814}',
            ),
            451 => 
            array (
                'id' => 952,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":136,"nilai":"60.15","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":815}',
            ),
            452 => 
            array (
                'id' => 953,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":136,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":816}',
            ),
            453 => 
            array (
                'id' => 954,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300880","nama":"LILIS LISWANTI","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":137}',
            ),
            454 => 
            array (
                'id' => 955,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":137,"nilai":"2025100","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":817}',
            ),
            455 => 
            array (
                'id' => 956,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":137,"nilai":"31.91","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":818}',
            ),
            456 => 
            array (
                'id' => 957,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":137,"nilai":"28056000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":819}',
            ),
            457 => 
            array (
                'id' => 958,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":137,"nilai":"79.86","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":820}',
            ),
            458 => 
            array (
                'id' => 959,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":137,"nilai":"90.15","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":821}',
            ),
            459 => 
            array (
                'id' => 960,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":137,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":822}',
            ),
            460 => 
            array (
                'id' => 961,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300881","nama":"WATI","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":138}',
            ),
            461 => 
            array (
                'id' => 962,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":138,"nilai":"2220400","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":823}',
            ),
            462 => 
            array (
                'id' => 963,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":138,"nilai":"86.41","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":824}',
            ),
            463 => 
            array (
                'id' => 964,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":138,"nilai":"28268000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":825}',
            ),
            464 => 
            array (
                'id' => 965,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":138,"nilai":"76","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":826}',
            ),
            465 => 
            array (
                'id' => 966,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":138,"nilai":"73.28","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":827}',
            ),
            466 => 
            array (
                'id' => 967,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":138,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":828}',
            ),
            467 => 
            array (
                'id' => 968,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300883","nama":"ANI LESTARI","alamat":"KP JATI RW 10 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":139}',
            ),
            468 => 
            array (
                'id' => 969,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":139,"nilai":"2573200","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":829}',
            ),
            469 => 
            array (
                'id' => 970,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":139,"nilai":"78.02","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":830}',
            ),
            470 => 
            array (
                'id' => 971,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":139,"nilai":"11276000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":831}',
            ),
            471 => 
            array (
                'id' => 972,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":139,"nilai":"90.23","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":832}',
            ),
            472 => 
            array (
                'id' => 973,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":139,"nilai":"92.91","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":833}',
            ),
            473 => 
            array (
                'id' => 974,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":139,"nilai":"0","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":834}',
            ),
            474 => 
            array (
                'id' => 975,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300884","nama":"WIWIN WINARTI","alamat":"KP JATI RW 10 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":140}',
            ),
            475 => 
            array (
                'id' => 976,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":140,"nilai":"2745050","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":835}',
            ),
            476 => 
            array (
                'id' => 977,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":140,"nilai":"69.05","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":836}',
            ),
            477 => 
            array (
                'id' => 978,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":140,"nilai":"15152000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":837}',
            ),
            478 => 
            array (
                'id' => 979,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":140,"nilai":"54.13","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":838}',
            ),
            479 => 
            array (
                'id' => 980,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":140,"nilai":"33.34","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":839}',
            ),
            480 => 
            array (
                'id' => 981,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":140,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":840}',
            ),
            481 => 
            array (
                'id' => 982,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300885","nama":"YOYOH ROBAYAH","alamat":"KP JATI RW 10 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":141}',
            ),
            482 => 
            array (
                'id' => 983,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":141,"nilai":"919450","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":841}',
            ),
            483 => 
            array (
                'id' => 984,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":141,"nilai":"60.43","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":842}',
            ),
            484 => 
            array (
                'id' => 985,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":141,"nilai":"17544000","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":843}',
            ),
            485 => 
            array (
                'id' => 986,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":141,"nilai":"91.38","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":844}',
            ),
            486 => 
            array (
                'id' => 987,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":141,"nilai":"94.76","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":845}',
            ),
            487 => 
            array (
                'id' => 988,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":141,"nilai":"1","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":846}',
            ),
            488 => 
            array (
                'id' => 989,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300887","nama":"HANI NURHANIFAH","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":142}',
            ),
            489 => 
            array (
                'id' => 990,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:34',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":142,"nilai":"1303750","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":847}',
            ),
            490 => 
            array (
                'id' => 991,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":142,"nilai":"97.74","updated_at":"2023-05-29T12:52:34.000000Z","created_at":"2023-05-29T12:52:34.000000Z","id":848}',
            ),
            491 => 
            array (
                'id' => 992,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":142,"nilai":"17640000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":849}',
            ),
            492 => 
            array (
                'id' => 993,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":142,"nilai":"30.67","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":850}',
            ),
            493 => 
            array (
                'id' => 994,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":142,"nilai":"99.27","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":851}',
            ),
            494 => 
            array (
                'id' => 995,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":142,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":852}',
            ),
            495 => 
            array (
                'id' => 996,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300888","nama":"AI MARPUAH","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":143}',
            ),
            496 => 
            array (
                'id' => 997,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":143,"nilai":"3214400","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":853}',
            ),
            497 => 
            array (
                'id' => 998,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":143,"nilai":"83.46","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":854}',
            ),
            498 => 
            array (
                'id' => 999,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":143,"nilai":"12484000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":855}',
            ),
            499 => 
            array (
                'id' => 1000,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":143,"nilai":"61.27","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":856}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":143,"nilai":"69.81","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":857}',
            ),
            1 => 
            array (
                'id' => 1002,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":143,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":858}',
            ),
            2 => 
            array (
                'id' => 1003,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300889","nama":"JUA","alamat":"JKP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":144}',
            ),
            3 => 
            array (
                'id' => 1004,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":144,"nilai":"2810850","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":859}',
            ),
            4 => 
            array (
                'id' => 1005,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":144,"nilai":"30.15","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":860}',
            ),
            5 => 
            array (
                'id' => 1006,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":144,"nilai":"19604000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":861}',
            ),
            6 => 
            array (
                'id' => 1007,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":144,"nilai":"29.2","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":862}',
            ),
            7 => 
            array (
                'id' => 1008,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":144,"nilai":"29.81","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":863}',
            ),
            8 => 
            array (
                'id' => 1009,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":144,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":864}',
            ),
            9 => 
            array (
                'id' => 1010,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300890","nama":"AI MARLINA","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":145}',
            ),
            10 => 
            array (
                'id' => 1011,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":145,"nilai":"2710750","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":865}',
            ),
            11 => 
            array (
                'id' => 1012,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":145,"nilai":"57.89","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":866}',
            ),
            12 => 
            array (
                'id' => 1013,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":145,"nilai":"24092000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":867}',
            ),
            13 => 
            array (
                'id' => 1014,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":145,"nilai":"86.55","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":868}',
            ),
            14 => 
            array (
                'id' => 1015,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":145,"nilai":"50.63","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":869}',
            ),
            15 => 
            array (
                'id' => 1016,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":145,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":870}',
            ),
            16 => 
            array (
                'id' => 1017,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300891","nama":"SITI AMINAH","alamat":"KP JATI RT 03 RW 10","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":146}',
            ),
            17 => 
            array (
                'id' => 1018,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":146,"nilai":"1499050","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":871}',
            ),
            18 => 
            array (
                'id' => 1019,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":146,"nilai":"48.21","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":872}',
            ),
            19 => 
            array (
                'id' => 1020,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":146,"nilai":"32724000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":873}',
            ),
            20 => 
            array (
                'id' => 1021,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":146,"nilai":"41.8","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":874}',
            ),
            21 => 
            array (
                'id' => 1022,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":146,"nilai":"34.29","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":875}',
            ),
            22 => 
            array (
                'id' => 1023,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":146,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":876}',
            ),
            23 => 
            array (
                'id' => 1024,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300892","nama":"AISYAH","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":147}',
            ),
            24 => 
            array (
                'id' => 1025,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":147,"nilai":"1574650","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":877}',
            ),
            25 => 
            array (
                'id' => 1026,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":147,"nilai":"86.77","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":878}',
            ),
            26 => 
            array (
                'id' => 1027,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":147,"nilai":"29508000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":879}',
            ),
            27 => 
            array (
                'id' => 1028,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":147,"nilai":"60.54","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":880}',
            ),
            28 => 
            array (
                'id' => 1029,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":147,"nilai":"78.06","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":881}',
            ),
            29 => 
            array (
                'id' => 1030,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":147,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":882}',
            ),
            30 => 
            array (
                'id' => 1031,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300894","nama":"ENI MARLENI","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":148}',
            ),
            31 => 
            array (
                'id' => 1032,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":148,"nilai":"1798300","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":883}',
            ),
            32 => 
            array (
                'id' => 1033,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":148,"nilai":"41.84","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":884}',
            ),
            33 => 
            array (
                'id' => 1034,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":148,"nilai":"27296000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":885}',
            ),
            34 => 
            array (
                'id' => 1035,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":148,"nilai":"51.4","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":886}',
            ),
            35 => 
            array (
                'id' => 1036,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":148,"nilai":"61.91","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":887}',
            ),
            36 => 
            array (
                'id' => 1037,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":148,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":888}',
            ),
            37 => 
            array (
                'id' => 1038,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300895","nama":"EPON","alamat":"K SARPEUNDEUY RW 11 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":149}',
            ),
            38 => 
            array (
                'id' => 1039,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":149,"nilai":"3238550","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":889}',
            ),
            39 => 
            array (
                'id' => 1040,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":149,"nilai":"40.47","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":890}',
            ),
            40 => 
            array (
                'id' => 1041,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":149,"nilai":"34512000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":891}',
            ),
            41 => 
            array (
                'id' => 1042,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":149,"nilai":"96.65","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":892}',
            ),
            42 => 
            array (
                'id' => 1043,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":149,"nilai":"54.86","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":893}',
            ),
            43 => 
            array (
                'id' => 1044,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":149,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":894}',
            ),
            44 => 
            array (
                'id' => 1045,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300898","nama":"EET","alamat":"KP SARPEUNDEUY RT 003 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":150}',
            ),
            45 => 
            array (
                'id' => 1046,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":150,"nilai":"2579500","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":895}',
            ),
            46 => 
            array (
                'id' => 1047,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":150,"nilai":"78.46","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":896}',
            ),
            47 => 
            array (
                'id' => 1048,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":150,"nilai":"33528000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":897}',
            ),
            48 => 
            array (
                'id' => 1049,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":150,"nilai":"34.03","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":898}',
            ),
            49 => 
            array (
                'id' => 1050,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":150,"nilai":"47.85","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":899}',
            ),
            50 => 
            array (
                'id' => 1051,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":150,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":900}',
            ),
            51 => 
            array (
                'id' => 1052,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523016300899","nama":"IRNA ALIFAH","alamat":"KP SARPEUNDEUY RT 003 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":151}',
            ),
            52 => 
            array (
                'id' => 1053,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":151,"nilai":"1489950","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":901}',
            ),
            53 => 
            array (
                'id' => 1054,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":151,"nilai":"74.14","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":902}',
            ),
            54 => 
            array (
                'id' => 1055,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":151,"nilai":"13180000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":903}',
            ),
            55 => 
            array (
                'id' => 1056,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":151,"nilai":"72.84","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":904}',
            ),
            56 => 
            array (
                'id' => 1057,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":151,"nilai":"68.2","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":905}',
            ),
            57 => 
            array (
                'id' => 1058,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":151,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":906}',
            ),
            58 => 
            array (
                'id' => 1059,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060756","nama":"NENG SANTIA","alamat":"KP. BOJONG GEDE RT 02 \\/ RW 08","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":152}',
            ),
            59 => 
            array (
                'id' => 1060,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":152,"nilai":"3464300","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":907}',
            ),
            60 => 
            array (
                'id' => 1061,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":152,"nilai":"27.15","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":908}',
            ),
            61 => 
            array (
                'id' => 1062,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":152,"nilai":"20976000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":909}',
            ),
            62 => 
            array (
                'id' => 1063,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":152,"nilai":"30.9","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":910}',
            ),
            63 => 
            array (
                'id' => 1064,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":152,"nilai":"52.73","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":911}',
            ),
            64 => 
            array (
                'id' => 1065,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":152,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":912}',
            ),
            65 => 
            array (
                'id' => 1066,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060960","nama":"DEVITA","alamat":"KP DANGDEUR RT 01 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":153}',
            ),
            66 => 
            array (
                'id' => 1067,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":153,"nilai":"1153950","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":913}',
            ),
            67 => 
            array (
                'id' => 1068,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":153,"nilai":"29.74","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":914}',
            ),
            68 => 
            array (
                'id' => 1069,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":153,"nilai":"31684000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":915}',
            ),
            69 => 
            array (
                'id' => 1070,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":153,"nilai":"41.51","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":916}',
            ),
            70 => 
            array (
                'id' => 1071,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":153,"nilai":"86.52","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":917}',
            ),
            71 => 
            array (
                'id' => 1072,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":153,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":918}',
            ),
            72 => 
            array (
                'id' => 1073,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060961","nama":"YATI","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":154}',
            ),
            73 => 
            array (
                'id' => 1074,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":154,"nilai":"3392200","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":919}',
            ),
            74 => 
            array (
                'id' => 1075,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":154,"nilai":"85.28","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":920}',
            ),
            75 => 
            array (
                'id' => 1076,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":154,"nilai":"32224000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":921}',
            ),
            76 => 
            array (
                'id' => 1077,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":154,"nilai":"27.45","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":922}',
            ),
            77 => 
            array (
                'id' => 1078,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":154,"nilai":"66.37","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":923}',
            ),
            78 => 
            array (
                'id' => 1079,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":154,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":924}',
            ),
            79 => 
            array (
                'id' => 1080,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060966","nama":"ASEP TAJUDIN","alamat":"KP DANGDEUR RT 01 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":155}',
            ),
            80 => 
            array (
                'id' => 1081,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":155,"nilai":"1223950","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":925}',
            ),
            81 => 
            array (
                'id' => 1082,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":155,"nilai":"45.94","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":926}',
            ),
            82 => 
            array (
                'id' => 1083,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":155,"nilai":"33148000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":927}',
            ),
            83 => 
            array (
                'id' => 1084,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":155,"nilai":"57.02","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":928}',
            ),
            84 => 
            array (
                'id' => 1085,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":155,"nilai":"29.08","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":929}',
            ),
            85 => 
            array (
                'id' => 1086,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":155,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":930}',
            ),
            86 => 
            array (
                'id' => 1087,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060967","nama":"SINTA SITI FATIMAH","alamat":"KP DANGDEUR RT 01 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":156}',
            ),
            87 => 
            array (
                'id' => 1088,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":156,"nilai":"2291800","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":931}',
            ),
            88 => 
            array (
                'id' => 1089,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":156,"nilai":"61.87","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":932}',
            ),
            89 => 
            array (
                'id' => 1090,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":156,"nilai":"38972000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":933}',
            ),
            90 => 
            array (
                'id' => 1091,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":156,"nilai":"83.93","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":934}',
            ),
            91 => 
            array (
                'id' => 1092,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":156,"nilai":"91.47","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":935}',
            ),
            92 => 
            array (
                'id' => 1093,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":156,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":936}',
            ),
            93 => 
            array (
                'id' => 1094,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060974","nama":"NUNUNG AMINAH","alamat":"KP PASIRMUNCANG RT 01 RW 02","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":157}',
            ),
            94 => 
            array (
                'id' => 1095,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":157,"nilai":"3396050","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":937}',
            ),
            95 => 
            array (
                'id' => 1096,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":157,"nilai":"74.45","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":938}',
            ),
            96 => 
            array (
                'id' => 1097,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":157,"nilai":"30752000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":939}',
            ),
            97 => 
            array (
                'id' => 1098,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":157,"nilai":"34.46","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":940}',
            ),
            98 => 
            array (
                'id' => 1099,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":157,"nilai":"45.61","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":941}',
            ),
            99 => 
            array (
                'id' => 1100,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":157,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":942}',
            ),
            100 => 
            array (
                'id' => 1101,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060981","nama":"AMINAH","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":158}',
            ),
            101 => 
            array (
                'id' => 1102,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":158,"nilai":"2256450","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":943}',
            ),
            102 => 
            array (
                'id' => 1103,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":158,"nilai":"85.76","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":944}',
            ),
            103 => 
            array (
                'id' => 1104,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":158,"nilai":"25088000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":945}',
            ),
            104 => 
            array (
                'id' => 1105,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":158,"nilai":"98.09","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":946}',
            ),
            105 => 
            array (
                'id' => 1106,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":158,"nilai":"51.59","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":947}',
            ),
            106 => 
            array (
                'id' => 1107,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":158,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":948}',
            ),
            107 => 
            array (
                'id' => 1108,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060985","nama":"MASITOH","alamat":"KP JATI RT 02 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":159}',
            ),
            108 => 
            array (
                'id' => 1109,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":159,"nilai":"1145550","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":949}',
            ),
            109 => 
            array (
                'id' => 1110,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":159,"nilai":"95.18","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":950}',
            ),
            110 => 
            array (
                'id' => 1111,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":159,"nilai":"27564000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":951}',
            ),
            111 => 
            array (
                'id' => 1112,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":159,"nilai":"96.06","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":952}',
            ),
            112 => 
            array (
                'id' => 1113,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":159,"nilai":"70.42","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":953}',
            ),
            113 => 
            array (
                'id' => 1114,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":159,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":954}',
            ),
            114 => 
            array (
                'id' => 1115,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060986","nama":"PATONAH","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":160}',
            ),
            115 => 
            array (
                'id' => 1116,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":160,"nilai":"1761900","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":955}',
            ),
            116 => 
            array (
                'id' => 1117,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":160,"nilai":"83.19","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":956}',
            ),
            117 => 
            array (
                'id' => 1118,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":160,"nilai":"14900000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":957}',
            ),
            118 => 
            array (
                'id' => 1119,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":160,"nilai":"78.58","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":958}',
            ),
            119 => 
            array (
                'id' => 1120,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":160,"nilai":"69.65","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":959}',
            ),
            120 => 
            array (
                'id' => 1121,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":160,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":960}',
            ),
            121 => 
            array (
                'id' => 1122,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060988","nama":"IIS ISMAYANTINI","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":161}',
            ),
            122 => 
            array (
                'id' => 1123,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":161,"nilai":"1030750","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":961}',
            ),
            123 => 
            array (
                'id' => 1124,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":161,"nilai":"70.01","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":962}',
            ),
            124 => 
            array (
                'id' => 1125,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":161,"nilai":"34044000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":963}',
            ),
            125 => 
            array (
                'id' => 1126,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":161,"nilai":"70","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":964}',
            ),
            126 => 
            array (
                'id' => 1127,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":161,"nilai":"44.64","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":965}',
            ),
            127 => 
            array (
                'id' => 1128,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":161,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":966}',
            ),
            128 => 
            array (
                'id' => 1129,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060989","nama":"DEDE NANI","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":162}',
            ),
            129 => 
            array (
                'id' => 1130,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":162,"nilai":"2582300","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":967}',
            ),
            130 => 
            array (
                'id' => 1131,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":162,"nilai":"34.81","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":968}',
            ),
            131 => 
            array (
                'id' => 1132,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":162,"nilai":"37208000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":969}',
            ),
            132 => 
            array (
                'id' => 1133,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":162,"nilai":"66.05","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":970}',
            ),
            133 => 
            array (
                'id' => 1134,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":162,"nilai":"37.3","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":971}',
            ),
            134 => 
            array (
                'id' => 1135,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":162,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":972}',
            ),
            135 => 
            array (
                'id' => 1136,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060990","nama":"DEDE ENI","alamat":"KP JATI RT 02 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":163}',
            ),
            136 => 
            array (
                'id' => 1137,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":163,"nilai":"1690150","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":973}',
            ),
            137 => 
            array (
                'id' => 1138,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":163,"nilai":"61.19","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":974}',
            ),
            138 => 
            array (
                'id' => 1139,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":163,"nilai":"25624000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":975}',
            ),
            139 => 
            array (
                'id' => 1140,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":163,"nilai":"57.58","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":976}',
            ),
            140 => 
            array (
                'id' => 1141,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":163,"nilai":"80.17","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":977}',
            ),
            141 => 
            array (
                'id' => 1142,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":163,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":978}',
            ),
            142 => 
            array (
                'id' => 1143,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060991","nama":"ADE ROHANAH","alamat":"KP JATI RT 02 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":164}',
            ),
            143 => 
            array (
                'id' => 1144,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":164,"nilai":"3327100","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":979}',
            ),
            144 => 
            array (
                'id' => 1145,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":164,"nilai":"58.87","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":980}',
            ),
            145 => 
            array (
                'id' => 1146,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":164,"nilai":"28752000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":981}',
            ),
            146 => 
            array (
                'id' => 1147,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":164,"nilai":"36.41","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":982}',
            ),
            147 => 
            array (
                'id' => 1148,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":164,"nilai":"80.67","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":983}',
            ),
            148 => 
            array (
                'id' => 1149,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":164,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":984}',
            ),
            149 => 
            array (
                'id' => 1150,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060992","nama":"YETI","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":165}',
            ),
            150 => 
            array (
                'id' => 1151,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":165,"nilai":"2118900","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":985}',
            ),
            151 => 
            array (
                'id' => 1152,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":165,"nilai":"54.75","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":986}',
            ),
            152 => 
            array (
                'id' => 1153,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":165,"nilai":"39296000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":987}',
            ),
            153 => 
            array (
                'id' => 1154,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":165,"nilai":"48.73","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":988}',
            ),
            154 => 
            array (
                'id' => 1155,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":165,"nilai":"61.22","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":989}',
            ),
            155 => 
            array (
                'id' => 1156,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":165,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":990}',
            ),
            156 => 
            array (
                'id' => 1157,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017060997","nama":"ENCUM","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":166}',
            ),
            157 => 
            array (
                'id' => 1158,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":166,"nilai":"1668800","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":991}',
            ),
            158 => 
            array (
                'id' => 1159,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":166,"nilai":"66.93","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":992}',
            ),
            159 => 
            array (
                'id' => 1160,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":166,"nilai":"27716000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":993}',
            ),
            160 => 
            array (
                'id' => 1161,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":166,"nilai":"97.19","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":994}',
            ),
            161 => 
            array (
                'id' => 1162,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":166,"nilai":"35.9","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":995}',
            ),
            162 => 
            array (
                'id' => 1163,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":166,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":996}',
            ),
            163 => 
            array (
                'id' => 1164,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061000","nama":"ROHANI","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":167}',
            ),
            164 => 
            array (
                'id' => 1165,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":167,"nilai":"1330000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":997}',
            ),
            165 => 
            array (
                'id' => 1166,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":167,"nilai":"46.85","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":998}',
            ),
            166 => 
            array (
                'id' => 1167,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":167,"nilai":"24552000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":999}',
            ),
            167 => 
            array (
                'id' => 1168,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":167,"nilai":"95.11","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1000}',
            ),
            168 => 
            array (
                'id' => 1169,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":167,"nilai":"52.06","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1001}',
            ),
            169 => 
            array (
                'id' => 1170,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":167,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1002}',
            ),
            170 => 
            array (
                'id' => 1171,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061002","nama":"YENI PADILAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":168}',
            ),
            171 => 
            array (
                'id' => 1172,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":168,"nilai":"2667350","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1003}',
            ),
            172 => 
            array (
                'id' => 1173,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":168,"nilai":"42.58","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1004}',
            ),
            173 => 
            array (
                'id' => 1174,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":168,"nilai":"12344000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1005}',
            ),
            174 => 
            array (
                'id' => 1175,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":168,"nilai":"71.48","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1006}',
            ),
            175 => 
            array (
                'id' => 1176,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":168,"nilai":"40.67","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1007}',
            ),
            176 => 
            array (
                'id' => 1177,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":168,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1008}',
            ),
            177 => 
            array (
                'id' => 1178,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061003","nama":"NANI SUMARNI","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":169}',
            ),
            178 => 
            array (
                'id' => 1179,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":169,"nilai":"2236850","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1009}',
            ),
            179 => 
            array (
                'id' => 1180,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":169,"nilai":"57.35","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1010}',
            ),
            180 => 
            array (
                'id' => 1181,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":169,"nilai":"25496000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1011}',
            ),
            181 => 
            array (
                'id' => 1182,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":169,"nilai":"34.63","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1012}',
            ),
            182 => 
            array (
                'id' => 1183,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":169,"nilai":"67.03","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1013}',
            ),
            183 => 
            array (
                'id' => 1184,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":169,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1014}',
            ),
            184 => 
            array (
                'id' => 1185,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061004","nama":"SITI KHOLISOH","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":170}',
            ),
            185 => 
            array (
                'id' => 1186,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":170,"nilai":"1353100","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1015}',
            ),
            186 => 
            array (
                'id' => 1187,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":170,"nilai":"41.97","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1016}',
            ),
            187 => 
            array (
                'id' => 1188,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":170,"nilai":"29924000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1017}',
            ),
            188 => 
            array (
                'id' => 1189,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":170,"nilai":"39.74","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1018}',
            ),
            189 => 
            array (
                'id' => 1190,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":170,"nilai":"53.21","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1019}',
            ),
            190 => 
            array (
                'id' => 1191,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":170,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1020}',
            ),
            191 => 
            array (
                'id' => 1192,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061005","nama":"BADRIAH","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":171}',
            ),
            192 => 
            array (
                'id' => 1193,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":171,"nilai":"2175950","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1021}',
            ),
            193 => 
            array (
                'id' => 1194,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":171,"nilai":"51.16","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1022}',
            ),
            194 => 
            array (
                'id' => 1195,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":171,"nilai":"33632000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1023}',
            ),
            195 => 
            array (
                'id' => 1196,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":171,"nilai":"69.31","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1024}',
            ),
            196 => 
            array (
                'id' => 1197,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":171,"nilai":"92.28","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1025}',
            ),
            197 => 
            array (
                'id' => 1198,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":171,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1026}',
            ),
            198 => 
            array (
                'id' => 1199,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061007","nama":"EMPONG KOMARIAH","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":172}',
            ),
            199 => 
            array (
                'id' => 1200,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":172,"nilai":"2355150","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1027}',
            ),
            200 => 
            array (
                'id' => 1201,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":172,"nilai":"39.48","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1028}',
            ),
            201 => 
            array (
                'id' => 1202,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":172,"nilai":"39216000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1029}',
            ),
            202 => 
            array (
                'id' => 1203,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":172,"nilai":"33.18","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1030}',
            ),
            203 => 
            array (
                'id' => 1204,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":172,"nilai":"80.94","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1031}',
            ),
            204 => 
            array (
                'id' => 1205,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":172,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1032}',
            ),
            205 => 
            array (
                'id' => 1206,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061010","nama":"IING SOLIHIN","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":173}',
            ),
            206 => 
            array (
                'id' => 1207,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":173,"nilai":"1322300","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1033}',
            ),
            207 => 
            array (
                'id' => 1208,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":173,"nilai":"40.91","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1034}',
            ),
            208 => 
            array (
                'id' => 1209,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":173,"nilai":"28740000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1035}',
            ),
            209 => 
            array (
                'id' => 1210,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":173,"nilai":"39.82","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1036}',
            ),
            210 => 
            array (
                'id' => 1211,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":173,"nilai":"34.15","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1037}',
            ),
            211 => 
            array (
                'id' => 1212,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":173,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1038}',
            ),
            212 => 
            array (
                'id' => 1213,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061012","nama":"NEPI NISPIATI","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":174}',
            ),
            213 => 
            array (
                'id' => 1214,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":174,"nilai":"3191650","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1039}',
            ),
            214 => 
            array (
                'id' => 1215,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":174,"nilai":"57.95","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1040}',
            ),
            215 => 
            array (
                'id' => 1216,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":174,"nilai":"22524000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1041}',
            ),
            216 => 
            array (
                'id' => 1217,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":174,"nilai":"67.38","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1042}',
            ),
            217 => 
            array (
                'id' => 1218,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":174,"nilai":"66.37","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1043}',
            ),
            218 => 
            array (
                'id' => 1219,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":174,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1044}',
            ),
            219 => 
            array (
                'id' => 1220,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061021","nama":"ETI SUMIATI","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":175}',
            ),
            220 => 
            array (
                'id' => 1221,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":175,"nilai":"3453450","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1045}',
            ),
            221 => 
            array (
                'id' => 1222,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":175,"nilai":"34.39","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1046}',
            ),
            222 => 
            array (
                'id' => 1223,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":175,"nilai":"30276000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1047}',
            ),
            223 => 
            array (
                'id' => 1224,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":175,"nilai":"46.34","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1048}',
            ),
            224 => 
            array (
                'id' => 1225,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":175,"nilai":"93.6","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1049}',
            ),
            225 => 
            array (
                'id' => 1226,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":175,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1050}',
            ),
            226 => 
            array (
                'id' => 1227,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061025","nama":"DETI","alamat":"KP. SARPEUNDEUY RT 002 \\/ RW 011","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":176}',
            ),
            227 => 
            array (
                'id' => 1228,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":176,"nilai":"3180100","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1051}',
            ),
            228 => 
            array (
                'id' => 1229,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":176,"nilai":"80.59","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1052}',
            ),
            229 => 
            array (
                'id' => 1230,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":176,"nilai":"29712000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1053}',
            ),
            230 => 
            array (
                'id' => 1231,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":176,"nilai":"88.38","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1054}',
            ),
            231 => 
            array (
                'id' => 1232,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":176,"nilai":"68.24","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1055}',
            ),
            232 => 
            array (
                'id' => 1233,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":176,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1056}',
            ),
            233 => 
            array (
                'id' => 1234,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061026","nama":"YANTI RUSTINI","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":177}',
            ),
            234 => 
            array (
                'id' => 1235,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":177,"nilai":"1409100","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1057}',
            ),
            235 => 
            array (
                'id' => 1236,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":177,"nilai":"34.99","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1058}',
            ),
            236 => 
            array (
                'id' => 1237,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":177,"nilai":"28072000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1059}',
            ),
            237 => 
            array (
                'id' => 1238,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":177,"nilai":"91.4","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1060}',
            ),
            238 => 
            array (
                'id' => 1239,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":177,"nilai":"79.76","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1061}',
            ),
            239 => 
            array (
                'id' => 1240,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":177,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1062}',
            ),
            240 => 
            array (
                'id' => 1241,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061029","nama":"SITI FATIMAH","alamat":"KP CISALAM RW 06 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":178}',
            ),
            241 => 
            array (
                'id' => 1242,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":178,"nilai":"892500","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1063}',
            ),
            242 => 
            array (
                'id' => 1243,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":178,"nilai":"29.78","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1064}',
            ),
            243 => 
            array (
                'id' => 1244,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":178,"nilai":"37612000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1065}',
            ),
            244 => 
            array (
                'id' => 1245,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":178,"nilai":"87.25","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1066}',
            ),
            245 => 
            array (
                'id' => 1246,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":178,"nilai":"52.28","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1067}',
            ),
            246 => 
            array (
                'id' => 1247,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":178,"nilai":"0","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1068}',
            ),
            247 => 
            array (
                'id' => 1248,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061032","nama":"WATI","alamat":"KP CISALAM RW 06 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":179}',
            ),
            248 => 
            array (
                'id' => 1249,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":179,"nilai":"1523550","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1069}',
            ),
            249 => 
            array (
                'id' => 1250,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":179,"nilai":"27.62","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1070}',
            ),
            250 => 
            array (
                'id' => 1251,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":179,"nilai":"28952000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1071}',
            ),
            251 => 
            array (
                'id' => 1252,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":179,"nilai":"28.52","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1072}',
            ),
            252 => 
            array (
                'id' => 1253,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":179,"nilai":"62.67","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1073}',
            ),
            253 => 
            array (
                'id' => 1254,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":179,"nilai":"1","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1074}',
            ),
            254 => 
            array (
                'id' => 1255,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061033","nama":"CACIH SUMINAR","alamat":"KP CISALAM RW 06 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":180}',
            ),
            255 => 
            array (
                'id' => 1256,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":180,"nilai":"3300500","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1075}',
            ),
            256 => 
            array (
                'id' => 1257,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":180,"nilai":"56.97","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1076}',
            ),
            257 => 
            array (
                'id' => 1258,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":180,"nilai":"15452000","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1077}',
            ),
            258 => 
            array (
                'id' => 1259,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:35',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":180,"nilai":"98.83","updated_at":"2023-05-29T12:52:35.000000Z","created_at":"2023-05-29T12:52:35.000000Z","id":1078}',
            ),
            259 => 
            array (
                'id' => 1260,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":180,"nilai":"92.4","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1079}',
            ),
            260 => 
            array (
                'id' => 1261,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":180,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1080}',
            ),
            261 => 
            array (
                'id' => 1262,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061037","nama":"ROKAYAH","alamat":"KP GEGERLOA RT 01 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":181}',
            ),
            262 => 
            array (
                'id' => 1263,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":181,"nilai":"3187450","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1081}',
            ),
            263 => 
            array (
                'id' => 1264,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":181,"nilai":"65.61","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1082}',
            ),
            264 => 
            array (
                'id' => 1265,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":181,"nilai":"22524000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1083}',
            ),
            265 => 
            array (
                'id' => 1266,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":181,"nilai":"58.48","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1084}',
            ),
            266 => 
            array (
                'id' => 1267,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":181,"nilai":"62.55","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1085}',
            ),
            267 => 
            array (
                'id' => 1268,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":181,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1086}',
            ),
            268 => 
            array (
                'id' => 1269,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061038","nama":"MIMIH","alamat":"KP GEGERLOA RT 01 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":182}',
            ),
            269 => 
            array (
                'id' => 1270,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":182,"nilai":"2802450","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1087}',
            ),
            270 => 
            array (
                'id' => 1271,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":182,"nilai":"66.09","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1088}',
            ),
            271 => 
            array (
                'id' => 1272,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":182,"nilai":"27368000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1089}',
            ),
            272 => 
            array (
                'id' => 1273,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":182,"nilai":"32.37","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1090}',
            ),
            273 => 
            array (
                'id' => 1274,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":182,"nilai":"93.85","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1091}',
            ),
            274 => 
            array (
                'id' => 1275,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":182,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1092}',
            ),
            275 => 
            array (
                'id' => 1276,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061040","nama":"TINI","alamat":"KP GEGERLOA RT 01 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":183}',
            ),
            276 => 
            array (
                'id' => 1277,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":183,"nilai":"2321900","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1093}',
            ),
            277 => 
            array (
                'id' => 1278,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":183,"nilai":"54.08","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1094}',
            ),
            278 => 
            array (
                'id' => 1279,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":183,"nilai":"15144000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1095}',
            ),
            279 => 
            array (
                'id' => 1280,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":183,"nilai":"50","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1096}',
            ),
            280 => 
            array (
                'id' => 1281,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":183,"nilai":"80.88","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1097}',
            ),
            281 => 
            array (
                'id' => 1282,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":183,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1098}',
            ),
            282 => 
            array (
                'id' => 1283,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061045","nama":"ATING","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":184}',
            ),
            283 => 
            array (
                'id' => 1284,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":184,"nilai":"1623650","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1099}',
            ),
            284 => 
            array (
                'id' => 1285,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":184,"nilai":"53.7","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1100}',
            ),
            285 => 
            array (
                'id' => 1286,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":184,"nilai":"34372000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1101}',
            ),
            286 => 
            array (
                'id' => 1287,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":184,"nilai":"93.11","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1102}',
            ),
            287 => 
            array (
                'id' => 1288,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":184,"nilai":"75.47","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1103}',
            ),
            288 => 
            array (
                'id' => 1289,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":184,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1104}',
            ),
            289 => 
            array (
                'id' => 1290,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061049","nama":"MAS IKOH","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":185}',
            ),
            290 => 
            array (
                'id' => 1291,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":185,"nilai":"2162650","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1105}',
            ),
            291 => 
            array (
                'id' => 1292,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":185,"nilai":"34.67","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1106}',
            ),
            292 => 
            array (
                'id' => 1293,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":185,"nilai":"16532000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1107}',
            ),
            293 => 
            array (
                'id' => 1294,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":185,"nilai":"32.06","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1108}',
            ),
            294 => 
            array (
                'id' => 1295,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":185,"nilai":"82.22","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1109}',
            ),
            295 => 
            array (
                'id' => 1296,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":185,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1110}',
            ),
            296 => 
            array (
                'id' => 1297,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061050","nama":"ENOH","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":186}',
            ),
            297 => 
            array (
                'id' => 1298,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":186,"nilai":"1572550","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1111}',
            ),
            298 => 
            array (
                'id' => 1299,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":186,"nilai":"59.39","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1112}',
            ),
            299 => 
            array (
                'id' => 1300,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":186,"nilai":"29176000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1113}',
            ),
            300 => 
            array (
                'id' => 1301,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":186,"nilai":"47.72","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1114}',
            ),
            301 => 
            array (
                'id' => 1302,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":186,"nilai":"34.55","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1115}',
            ),
            302 => 
            array (
                'id' => 1303,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":186,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1116}',
            ),
            303 => 
            array (
                'id' => 1304,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061053","nama":"ISAH","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":187}',
            ),
            304 => 
            array (
                'id' => 1305,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":187,"nilai":"1974000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1117}',
            ),
            305 => 
            array (
                'id' => 1306,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":187,"nilai":"56.99","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1118}',
            ),
            306 => 
            array (
                'id' => 1307,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":187,"nilai":"39972000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1119}',
            ),
            307 => 
            array (
                'id' => 1308,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":187,"nilai":"79.82","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1120}',
            ),
            308 => 
            array (
                'id' => 1309,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":187,"nilai":"60.23","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1121}',
            ),
            309 => 
            array (
                'id' => 1310,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":187,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1122}',
            ),
            310 => 
            array (
                'id' => 1311,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061054","nama":"RENI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":188}',
            ),
            311 => 
            array (
                'id' => 1312,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":188,"nilai":"2661050","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1123}',
            ),
            312 => 
            array (
                'id' => 1313,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":188,"nilai":"30.69","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1124}',
            ),
            313 => 
            array (
                'id' => 1314,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":188,"nilai":"18800000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1125}',
            ),
            314 => 
            array (
                'id' => 1315,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":188,"nilai":"94.11","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1126}',
            ),
            315 => 
            array (
                'id' => 1316,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":188,"nilai":"68.95","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1127}',
            ),
            316 => 
            array (
                'id' => 1317,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":188,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1128}',
            ),
            317 => 
            array (
                'id' => 1318,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061055","nama":"EMIN","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":189}',
            ),
            318 => 
            array (
                'id' => 1319,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":189,"nilai":"3499300","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1129}',
            ),
            319 => 
            array (
                'id' => 1320,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":189,"nilai":"53.09","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1130}',
            ),
            320 => 
            array (
                'id' => 1321,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":189,"nilai":"17020000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1131}',
            ),
            321 => 
            array (
                'id' => 1322,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":189,"nilai":"92.35","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1132}',
            ),
            322 => 
            array (
                'id' => 1323,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":189,"nilai":"26.73","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1133}',
            ),
            323 => 
            array (
                'id' => 1324,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":189,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1134}',
            ),
            324 => 
            array (
                'id' => 1325,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061057","nama":"FATIMAH","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":190}',
            ),
            325 => 
            array (
                'id' => 1326,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":190,"nilai":"1823500","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1135}',
            ),
            326 => 
            array (
                'id' => 1327,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":190,"nilai":"72.72","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1136}',
            ),
            327 => 
            array (
                'id' => 1328,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":190,"nilai":"15472000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1137}',
            ),
            328 => 
            array (
                'id' => 1329,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":190,"nilai":"72.5","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1138}',
            ),
            329 => 
            array (
                'id' => 1330,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":190,"nilai":"81.27","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1139}',
            ),
            330 => 
            array (
                'id' => 1331,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":190,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1140}',
            ),
            331 => 
            array (
                'id' => 1332,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061063","nama":"NUR HASANAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":191}',
            ),
            332 => 
            array (
                'id' => 1333,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":191,"nilai":"2820650","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1141}',
            ),
            333 => 
            array (
                'id' => 1334,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":191,"nilai":"33.11","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1142}',
            ),
            334 => 
            array (
                'id' => 1335,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":191,"nilai":"30344000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1143}',
            ),
            335 => 
            array (
                'id' => 1336,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":191,"nilai":"95.99","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1144}',
            ),
            336 => 
            array (
                'id' => 1337,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":191,"nilai":"90.99","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1145}',
            ),
            337 => 
            array (
                'id' => 1338,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":191,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1146}',
            ),
            338 => 
            array (
                'id' => 1339,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061064","nama":"NENI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":192}',
            ),
            339 => 
            array (
                'id' => 1340,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":192,"nilai":"2713200","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1147}',
            ),
            340 => 
            array (
                'id' => 1341,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":192,"nilai":"82.3","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1148}',
            ),
            341 => 
            array (
                'id' => 1342,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":192,"nilai":"39780000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1149}',
            ),
            342 => 
            array (
                'id' => 1343,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":192,"nilai":"71.49","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1150}',
            ),
            343 => 
            array (
                'id' => 1344,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":192,"nilai":"92.36","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1151}',
            ),
            344 => 
            array (
                'id' => 1345,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":192,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1152}',
            ),
            345 => 
            array (
                'id' => 1346,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061065","nama":"ROMLAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":193}',
            ),
            346 => 
            array (
                'id' => 1347,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":193,"nilai":"1651650","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1153}',
            ),
            347 => 
            array (
                'id' => 1348,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":193,"nilai":"75.42","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1154}',
            ),
            348 => 
            array (
                'id' => 1349,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":193,"nilai":"18012000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1155}',
            ),
            349 => 
            array (
                'id' => 1350,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":193,"nilai":"37.67","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1156}',
            ),
            350 => 
            array (
                'id' => 1351,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":193,"nilai":"92.39","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1157}',
            ),
            351 => 
            array (
                'id' => 1352,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":193,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1158}',
            ),
            352 => 
            array (
                'id' => 1353,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061066","nama":"YANTI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":194}',
            ),
            353 => 
            array (
                'id' => 1354,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":194,"nilai":"1078700","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1159}',
            ),
            354 => 
            array (
                'id' => 1355,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":194,"nilai":"66.91","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1160}',
            ),
            355 => 
            array (
                'id' => 1356,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":194,"nilai":"35116000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1161}',
            ),
            356 => 
            array (
                'id' => 1357,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":194,"nilai":"82.2","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1162}',
            ),
            357 => 
            array (
                'id' => 1358,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":194,"nilai":"36.63","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1163}',
            ),
            358 => 
            array (
                'id' => 1359,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":194,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1164}',
            ),
            359 => 
            array (
                'id' => 1360,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061074","nama":"DEDEH KODARIAH","alamat":"KP PATROL RT 01 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":195}',
            ),
            360 => 
            array (
                'id' => 1361,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":195,"nilai":"2802100","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1165}',
            ),
            361 => 
            array (
                'id' => 1362,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":195,"nilai":"34.65","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1166}',
            ),
            362 => 
            array (
                'id' => 1363,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":195,"nilai":"19880000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1167}',
            ),
            363 => 
            array (
                'id' => 1364,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":195,"nilai":"99.47","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1168}',
            ),
            364 => 
            array (
                'id' => 1365,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":195,"nilai":"68.33","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1169}',
            ),
            365 => 
            array (
                'id' => 1366,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":195,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1170}',
            ),
            366 => 
            array (
                'id' => 1367,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061075","nama":"POPON","alamat":"KP PATROL RT 01 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":196}',
            ),
            367 => 
            array (
                'id' => 1368,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":196,"nilai":"1220450","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1171}',
            ),
            368 => 
            array (
                'id' => 1369,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":196,"nilai":"60.16","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1172}',
            ),
            369 => 
            array (
                'id' => 1370,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":196,"nilai":"21408000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1173}',
            ),
            370 => 
            array (
                'id' => 1371,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":196,"nilai":"68.68","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1174}',
            ),
            371 => 
            array (
                'id' => 1372,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":196,"nilai":"83.37","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1175}',
            ),
            372 => 
            array (
                'id' => 1373,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":196,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1176}',
            ),
            373 => 
            array (
                'id' => 1374,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061078","nama":"YATI","alamat":"KP PATROL RT 01 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":197}',
            ),
            374 => 
            array (
                'id' => 1375,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":197,"nilai":"1097250","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1177}',
            ),
            375 => 
            array (
                'id' => 1376,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":197,"nilai":"33.24","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1178}',
            ),
            376 => 
            array (
                'id' => 1377,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":197,"nilai":"31512000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1179}',
            ),
            377 => 
            array (
                'id' => 1378,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":197,"nilai":"71.13","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1180}',
            ),
            378 => 
            array (
                'id' => 1379,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":197,"nilai":"60.41","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1181}',
            ),
            379 => 
            array (
                'id' => 1380,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":197,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1182}',
            ),
            380 => 
            array (
                'id' => 1381,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061080","nama":"SUSUM","alamat":"KP PATROL RT 01 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":198}',
            ),
            381 => 
            array (
                'id' => 1382,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":198,"nilai":"1227100","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1183}',
            ),
            382 => 
            array (
                'id' => 1383,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":198,"nilai":"72.29","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1184}',
            ),
            383 => 
            array (
                'id' => 1384,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":198,"nilai":"13760000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1185}',
            ),
            384 => 
            array (
                'id' => 1385,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":198,"nilai":"48.79","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1186}',
            ),
            385 => 
            array (
                'id' => 1386,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":198,"nilai":"71.65","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1187}',
            ),
            386 => 
            array (
                'id' => 1387,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":198,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1188}',
            ),
            387 => 
            array (
                'id' => 1388,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061081","nama":"IBAH","alamat":"KP PATROL RT 01 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":199}',
            ),
            388 => 
            array (
                'id' => 1389,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":199,"nilai":"1709400","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1189}',
            ),
            389 => 
            array (
                'id' => 1390,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":199,"nilai":"74.98","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1190}',
            ),
            390 => 
            array (
                'id' => 1391,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":199,"nilai":"27860000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1191}',
            ),
            391 => 
            array (
                'id' => 1392,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":199,"nilai":"82.33","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1192}',
            ),
            392 => 
            array (
                'id' => 1393,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":199,"nilai":"77.88","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1193}',
            ),
            393 => 
            array (
                'id' => 1394,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":199,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1194}',
            ),
            394 => 
            array (
                'id' => 1395,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061089","nama":"TITI","alamat":"KP PASIR MUNCANG RT 02 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":200}',
            ),
            395 => 
            array (
                'id' => 1396,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":200,"nilai":"3480400","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1195}',
            ),
            396 => 
            array (
                'id' => 1397,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":200,"nilai":"53.63","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1196}',
            ),
            397 => 
            array (
                'id' => 1398,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":200,"nilai":"38052000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1197}',
            ),
            398 => 
            array (
                'id' => 1399,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":200,"nilai":"96.94","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1198}',
            ),
            399 => 
            array (
                'id' => 1400,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":200,"nilai":"34.78","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1199}',
            ),
            400 => 
            array (
                'id' => 1401,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":200,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1200}',
            ),
            401 => 
            array (
                'id' => 1402,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061090","nama":"ENIS","alamat":"KP PATROL RT 02 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":201}',
            ),
            402 => 
            array (
                'id' => 1403,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":201,"nilai":"2573900","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1201}',
            ),
            403 => 
            array (
                'id' => 1404,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":201,"nilai":"37.7","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1202}',
            ),
            404 => 
            array (
                'id' => 1405,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":201,"nilai":"18136000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1203}',
            ),
            405 => 
            array (
                'id' => 1406,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":201,"nilai":"47.42","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1204}',
            ),
            406 => 
            array (
                'id' => 1407,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":201,"nilai":"79.77","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1205}',
            ),
            407 => 
            array (
                'id' => 1408,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":201,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1206}',
            ),
            408 => 
            array (
                'id' => 1409,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061094","nama":"SA\'ADAH","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":202}',
            ),
            409 => 
            array (
                'id' => 1410,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":202,"nilai":"2078300","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1207}',
            ),
            410 => 
            array (
                'id' => 1411,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":202,"nilai":"60.15","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1208}',
            ),
            411 => 
            array (
                'id' => 1412,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":202,"nilai":"39236000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1209}',
            ),
            412 => 
            array (
                'id' => 1413,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":202,"nilai":"79.61","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1210}',
            ),
            413 => 
            array (
                'id' => 1414,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":202,"nilai":"94.63","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1211}',
            ),
            414 => 
            array (
                'id' => 1415,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":202,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1212}',
            ),
            415 => 
            array (
                'id' => 1416,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061096","nama":"MUNI\'AH","alamat":"KP JATI RW 10 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":203}',
            ),
            416 => 
            array (
                'id' => 1417,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":203,"nilai":"2795100","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1213}',
            ),
            417 => 
            array (
                'id' => 1418,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":203,"nilai":"90.15","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1214}',
            ),
            418 => 
            array (
                'id' => 1419,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":203,"nilai":"31776000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1215}',
            ),
            419 => 
            array (
                'id' => 1420,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":203,"nilai":"84.69","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1216}',
            ),
            420 => 
            array (
                'id' => 1421,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":203,"nilai":"31.92","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1217}',
            ),
            421 => 
            array (
                'id' => 1422,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":203,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1218}',
            ),
            422 => 
            array (
                'id' => 1423,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061100","nama":"ROHANAH","alamat":"KP JATI RW 10 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":204}',
            ),
            423 => 
            array (
                'id' => 1424,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":204,"nilai":"2660000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1219}',
            ),
            424 => 
            array (
                'id' => 1425,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":204,"nilai":"73.28","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1220}',
            ),
            425 => 
            array (
                'id' => 1426,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":204,"nilai":"31376000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1221}',
            ),
            426 => 
            array (
                'id' => 1427,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":204,"nilai":"69.87","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1222}',
            ),
            427 => 
            array (
                'id' => 1428,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":204,"nilai":"25.89","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1223}',
            ),
            428 => 
            array (
                'id' => 1429,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":204,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1224}',
            ),
            429 => 
            array (
                'id' => 1430,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061104","nama":"ADE WATIN","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":205}',
            ),
            430 => 
            array (
                'id' => 1431,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":205,"nilai":"3158050","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1225}',
            ),
            431 => 
            array (
                'id' => 1432,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":205,"nilai":"92.91","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1226}',
            ),
            432 => 
            array (
                'id' => 1433,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":205,"nilai":"12272000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1227}',
            ),
            433 => 
            array (
                'id' => 1434,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":205,"nilai":"50.01","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1228}',
            ),
            434 => 
            array (
                'id' => 1435,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":205,"nilai":"69.65","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1229}',
            ),
            435 => 
            array (
                'id' => 1436,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":205,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1230}',
            ),
            436 => 
            array (
                'id' => 1437,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061107","nama":"TATI RAHMAWATI","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":206}',
            ),
            437 => 
            array (
                'id' => 1438,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":206,"nilai":"1894550","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1231}',
            ),
            438 => 
            array (
                'id' => 1439,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":206,"nilai":"33.34","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1232}',
            ),
            439 => 
            array (
                'id' => 1440,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":206,"nilai":"30548000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1233}',
            ),
            440 => 
            array (
                'id' => 1441,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":206,"nilai":"93.15","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1234}',
            ),
            441 => 
            array (
                'id' => 1442,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":206,"nilai":"89.6","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1235}',
            ),
            442 => 
            array (
                'id' => 1443,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":206,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1236}',
            ),
            443 => 
            array (
                'id' => 1444,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061108","nama":"JUMA","alamat":"KP JATI RT 03 RW 10","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":207}',
            ),
            444 => 
            array (
                'id' => 1445,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":207,"nilai":"3198300","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1237}',
            ),
            445 => 
            array (
                'id' => 1446,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":207,"nilai":"94.76","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1238}',
            ),
            446 => 
            array (
                'id' => 1447,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":207,"nilai":"10472000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1239}',
            ),
            447 => 
            array (
                'id' => 1448,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":207,"nilai":"59.95","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1240}',
            ),
            448 => 
            array (
                'id' => 1449,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":207,"nilai":"81.9","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1241}',
            ),
            449 => 
            array (
                'id' => 1450,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":207,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1242}',
            ),
            450 => 
            array (
                'id' => 1451,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061113","nama":"HAJAR","alamat":"KP JATI RT 03 RW 10","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":208}',
            ),
            451 => 
            array (
                'id' => 1452,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":208,"nilai":"1073450","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1243}',
            ),
            452 => 
            array (
                'id' => 1453,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":208,"nilai":"99.27","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1244}',
            ),
            453 => 
            array (
                'id' => 1454,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":208,"nilai":"17584000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1245}',
            ),
            454 => 
            array (
                'id' => 1455,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":208,"nilai":"93.43","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1246}',
            ),
            455 => 
            array (
                'id' => 1456,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":208,"nilai":"62.34","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1247}',
            ),
            456 => 
            array (
                'id' => 1457,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":208,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1248}',
            ),
            457 => 
            array (
                'id' => 1458,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061114","nama":"ADE KHODIJAH","alamat":"KP JATI RT 03 RW 10","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":209}',
            ),
            458 => 
            array (
                'id' => 1459,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":209,"nilai":"2144450","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1249}',
            ),
            459 => 
            array (
                'id' => 1460,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":209,"nilai":"69.81","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1250}',
            ),
            460 => 
            array (
                'id' => 1461,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":209,"nilai":"39136000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1251}',
            ),
            461 => 
            array (
                'id' => 1462,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":209,"nilai":"66.08","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1252}',
            ),
            462 => 
            array (
                'id' => 1463,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":209,"nilai":"72.14","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1253}',
            ),
            463 => 
            array (
                'id' => 1464,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":209,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1254}',
            ),
            464 => 
            array (
                'id' => 1465,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061115","nama":"SITI AMINAH","alamat":"KP JATI RT 02 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":210}',
            ),
            465 => 
            array (
                'id' => 1466,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":210,"nilai":"1022000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1255}',
            ),
            466 => 
            array (
                'id' => 1467,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":210,"nilai":"29.81","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1256}',
            ),
            467 => 
            array (
                'id' => 1468,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":210,"nilai":"28812000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1257}',
            ),
            468 => 
            array (
                'id' => 1469,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":210,"nilai":"62.42","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1258}',
            ),
            469 => 
            array (
                'id' => 1470,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":210,"nilai":"46.69","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1259}',
            ),
            470 => 
            array (
                'id' => 1471,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":210,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1260}',
            ),
            471 => 
            array (
                'id' => 1472,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061116","nama":"ECIN","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":211}',
            ),
            472 => 
            array (
                'id' => 1473,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":211,"nilai":"3029250","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1261}',
            ),
            473 => 
            array (
                'id' => 1474,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":211,"nilai":"50.63","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1262}',
            ),
            474 => 
            array (
                'id' => 1475,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":211,"nilai":"17936000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1263}',
            ),
            475 => 
            array (
                'id' => 1476,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":211,"nilai":"46.61","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1264}',
            ),
            476 => 
            array (
                'id' => 1477,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":211,"nilai":"38.61","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1265}',
            ),
            477 => 
            array (
                'id' => 1478,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":211,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1266}',
            ),
            478 => 
            array (
                'id' => 1479,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061117","nama":"EUIS SUSILAWATI","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":212}',
            ),
            479 => 
            array (
                'id' => 1480,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":212,"nilai":"1463000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1267}',
            ),
            480 => 
            array (
                'id' => 1481,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":212,"nilai":"34.29","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1268}',
            ),
            481 => 
            array (
                'id' => 1482,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":212,"nilai":"22096000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1269}',
            ),
            482 => 
            array (
                'id' => 1483,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":212,"nilai":"64.23","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1270}',
            ),
            483 => 
            array (
                'id' => 1484,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":212,"nilai":"50.28","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1271}',
            ),
            484 => 
            array (
                'id' => 1485,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":212,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1272}',
            ),
            485 => 
            array (
                'id' => 1486,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061120","nama":"TITI","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":213}',
            ),
            486 => 
            array (
                'id' => 1487,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":213,"nilai":"2118900","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1273}',
            ),
            487 => 
            array (
                'id' => 1488,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":213,"nilai":"78.06","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1274}',
            ),
            488 => 
            array (
                'id' => 1489,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":213,"nilai":"20564000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1275}',
            ),
            489 => 
            array (
                'id' => 1490,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":213,"nilai":"36.39","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1276}',
            ),
            490 => 
            array (
                'id' => 1491,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":213,"nilai":"66.59","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1277}',
            ),
            491 => 
            array (
                'id' => 1492,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":213,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1278}',
            ),
            492 => 
            array (
                'id' => 1493,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061122","nama":"YAYAN","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":214}',
            ),
            493 => 
            array (
                'id' => 1494,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":214,"nilai":"1799000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1279}',
            ),
            494 => 
            array (
                'id' => 1495,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":214,"nilai":"61.91","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1280}',
            ),
            495 => 
            array (
                'id' => 1496,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":214,"nilai":"25704000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1281}',
            ),
            496 => 
            array (
                'id' => 1497,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":214,"nilai":"98.04","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1282}',
            ),
            497 => 
            array (
                'id' => 1498,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":214,"nilai":"39.7","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1283}',
            ),
            498 => 
            array (
                'id' => 1499,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":214,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1284}',
            ),
            499 => 
            array (
                'id' => 1500,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061126","nama":"LIA","alamat":"KP SARPEUNDEUY RW 11 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":215}',
            ),
        ));
        \DB::table('logs')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":215,"nilai":"3382750","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1285}',
            ),
            1 => 
            array (
                'id' => 1502,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":215,"nilai":"54.86","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1286}',
            ),
            2 => 
            array (
                'id' => 1503,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":215,"nilai":"27792000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1287}',
            ),
            3 => 
            array (
                'id' => 1504,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":215,"nilai":"55.84","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1288}',
            ),
            4 => 
            array (
                'id' => 1505,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":215,"nilai":"80.54","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1289}',
            ),
            5 => 
            array (
                'id' => 1506,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":215,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1290}',
            ),
            6 => 
            array (
                'id' => 1507,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523017061129","nama":"OYOH","alamat":"KP SARPEUNDEUY RT 003 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":216}',
            ),
            7 => 
            array (
                'id' => 1508,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":216,"nilai":"1191050","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1291}',
            ),
            8 => 
            array (
                'id' => 1509,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":216,"nilai":"47.85","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1292}',
            ),
            9 => 
            array (
                'id' => 1510,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":216,"nilai":"11640000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1293}',
            ),
            10 => 
            array (
                'id' => 1511,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":216,"nilai":"54.06","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1294}',
            ),
            11 => 
            array (
                'id' => 1512,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":216,"nilai":"31.24","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1295}',
            ),
            12 => 
            array (
                'id' => 1513,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":216,"nilai":"0","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1296}',
            ),
            13 => 
            array (
                'id' => 1514,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523019000004","nama":"MUTIAH","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":217}',
            ),
            14 => 
            array (
                'id' => 1515,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":217,"nilai":"2549400","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1297}',
            ),
            15 => 
            array (
                'id' => 1516,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":217,"nilai":"68.2","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1298}',
            ),
            16 => 
            array (
                'id' => 1517,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":217,"nilai":"25492000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1299}',
            ),
            17 => 
            array (
                'id' => 1518,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":217,"nilai":"90.47","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1300}',
            ),
            18 => 
            array (
                'id' => 1519,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":217,"nilai":"83.96","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1301}',
            ),
            19 => 
            array (
                'id' => 1520,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":217,"nilai":"1","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1302}',
            ),
            20 => 
            array (
                'id' => 1521,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523019000047","nama":"LILIS","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":218}',
            ),
            21 => 
            array (
                'id' => 1522,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":218,"nilai":"1081500","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1303}',
            ),
            22 => 
            array (
                'id' => 1523,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":218,"nilai":"52.73","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1304}',
            ),
            23 => 
            array (
                'id' => 1524,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":218,"nilai":"24228000","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1305}',
            ),
            24 => 
            array (
                'id' => 1525,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:36',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":218,"nilai":"53.05","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1306}',
            ),
            25 => 
            array (
                'id' => 1526,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":218,"nilai":"56.87","updated_at":"2023-05-29T12:52:36.000000Z","created_at":"2023-05-29T12:52:36.000000Z","id":1307}',
            ),
            26 => 
            array (
                'id' => 1527,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":218,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1308}',
            ),
            27 => 
            array (
                'id' => 1528,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523019000048","nama":"IHIN","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":219}',
            ),
            28 => 
            array (
                'id' => 1529,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":219,"nilai":"1452850","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1309}',
            ),
            29 => 
            array (
                'id' => 1530,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":219,"nilai":"86.52","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1310}',
            ),
            30 => 
            array (
                'id' => 1531,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":219,"nilai":"10868000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1311}',
            ),
            31 => 
            array (
                'id' => 1532,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":219,"nilai":"62.21","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1312}',
            ),
            32 => 
            array (
                'id' => 1533,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":219,"nilai":"26.56","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1313}',
            ),
            33 => 
            array (
                'id' => 1534,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":219,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1314}',
            ),
            34 => 
            array (
                'id' => 1535,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523019000049","nama":"ANIH","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":220}',
            ),
            35 => 
            array (
                'id' => 1536,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":220,"nilai":"960750","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1315}',
            ),
            36 => 
            array (
                'id' => 1537,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":220,"nilai":"66.37","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1316}',
            ),
            37 => 
            array (
                'id' => 1538,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":220,"nilai":"17124000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1317}',
            ),
            38 => 
            array (
                'id' => 1539,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":220,"nilai":"95.7","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1318}',
            ),
            39 => 
            array (
                'id' => 1540,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":220,"nilai":"83.68","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1319}',
            ),
            40 => 
            array (
                'id' => 1541,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":220,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1320}',
            ),
            41 => 
            array (
                'id' => 1542,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000002","nama":"ROSMAWATI","alamat":"KP PATROL RT 01 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":221}',
            ),
            42 => 
            array (
                'id' => 1543,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":221,"nilai":"1995700","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1321}',
            ),
            43 => 
            array (
                'id' => 1544,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":221,"nilai":"29.08","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1322}',
            ),
            44 => 
            array (
                'id' => 1545,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":221,"nilai":"32676000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1323}',
            ),
            45 => 
            array (
                'id' => 1546,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":221,"nilai":"64.26","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1324}',
            ),
            46 => 
            array (
                'id' => 1547,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":221,"nilai":"45.4","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1325}',
            ),
            47 => 
            array (
                'id' => 1548,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":221,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1326}',
            ),
            48 => 
            array (
                'id' => 1549,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000049","nama":"EULIS MARDIAH","alamat":"KP PATROL RT 01 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":222}',
            ),
            49 => 
            array (
                'id' => 1550,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":222,"nilai":"2937550","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1327}',
            ),
            50 => 
            array (
                'id' => 1551,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":222,"nilai":"91.47","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1328}',
            ),
            51 => 
            array (
                'id' => 1552,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":222,"nilai":"28736000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1329}',
            ),
            52 => 
            array (
                'id' => 1553,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":222,"nilai":"49.77","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1330}',
            ),
            53 => 
            array (
                'id' => 1554,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":222,"nilai":"72.7","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1331}',
            ),
            54 => 
            array (
                'id' => 1555,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":222,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1332}',
            ),
            55 => 
            array (
                'id' => 1556,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000058","nama":"SUHAENAH","alamat":"KP BOJONGGEDE RT 02 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":223}',
            ),
            56 => 
            array (
                'id' => 1557,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":223,"nilai":"1206100","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1333}',
            ),
            57 => 
            array (
                'id' => 1558,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":223,"nilai":"45.61","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1334}',
            ),
            58 => 
            array (
                'id' => 1559,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":223,"nilai":"11080000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1335}',
            ),
            59 => 
            array (
                'id' => 1560,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":223,"nilai":"46.64","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1336}',
            ),
            60 => 
            array (
                'id' => 1561,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":223,"nilai":"89.31","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1337}',
            ),
            61 => 
            array (
                'id' => 1562,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":223,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1338}',
            ),
            62 => 
            array (
                'id' => 1563,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000059","nama":"SUMARNI","alamat":"KP BOJONG GEDE RT 01 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":224}',
            ),
            63 => 
            array (
                'id' => 1564,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":224,"nilai":"1069250","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1339}',
            ),
            64 => 
            array (
                'id' => 1565,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":224,"nilai":"79.54","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1340}',
            ),
            65 => 
            array (
                'id' => 1566,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":224,"nilai":"32984000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1341}',
            ),
            66 => 
            array (
                'id' => 1567,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":224,"nilai":"67.01","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1342}',
            ),
            67 => 
            array (
                'id' => 1568,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":224,"nilai":"34.99","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1343}',
            ),
            68 => 
            array (
                'id' => 1569,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":224,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1344}',
            ),
            69 => 
            array (
                'id' => 1570,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000089","nama":"ANISAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":225}',
            ),
            70 => 
            array (
                'id' => 1571,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":225,"nilai":"1651650","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1345}',
            ),
            71 => 
            array (
                'id' => 1572,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":225,"nilai":"77.94","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1346}',
            ),
            72 => 
            array (
                'id' => 1573,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":225,"nilai":"18812000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1347}',
            ),
            73 => 
            array (
                'id' => 1574,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":225,"nilai":"37.16","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1348}',
            ),
            74 => 
            array (
                'id' => 1575,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":225,"nilai":"35.34","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1349}',
            ),
            75 => 
            array (
                'id' => 1576,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":225,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1350}',
            ),
            76 => 
            array (
                'id' => 1577,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000114","nama":"SUSANTI","alamat":"KP SARPEUNDEUY RT 001 RW 011","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":226}',
            ),
            77 => 
            array (
                'id' => 1578,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":226,"nilai":"1929200","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1351}',
            ),
            78 => 
            array (
                'id' => 1579,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":226,"nilai":"90.44","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1352}',
            ),
            79 => 
            array (
                'id' => 1580,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":226,"nilai":"22032000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1353}',
            ),
            80 => 
            array (
                'id' => 1581,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":226,"nilai":"42.16","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1354}',
            ),
            81 => 
            array (
                'id' => 1582,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":226,"nilai":"73.06","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1355}',
            ),
            82 => 
            array (
                'id' => 1583,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":226,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1356}',
            ),
            83 => 
            array (
                'id' => 1584,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000159","nama":"WIWIN","alamat":"KP PATROL RT 02 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":227}',
            ),
            84 => 
            array (
                'id' => 1585,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":227,"nilai":"3233650","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1357}',
            ),
            85 => 
            array (
                'id' => 1586,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":227,"nilai":"29.69","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1358}',
            ),
            86 => 
            array (
                'id' => 1587,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":227,"nilai":"28332000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1359}',
            ),
            87 => 
            array (
                'id' => 1588,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":227,"nilai":"33.21","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1360}',
            ),
            88 => 
            array (
                'id' => 1589,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":227,"nilai":"57.45","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1361}',
            ),
            89 => 
            array (
                'id' => 1590,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":227,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1362}',
            ),
            90 => 
            array (
                'id' => 1591,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000169","nama":"YAYA","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":228}',
            ),
            91 => 
            array (
                'id' => 1592,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":228,"nilai":"2052050","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1363}',
            ),
            92 => 
            array (
                'id' => 1593,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":228,"nilai":"77","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1364}',
            ),
            93 => 
            array (
                'id' => 1594,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":228,"nilai":"16120000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1365}',
            ),
            94 => 
            array (
                'id' => 1595,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":228,"nilai":"57.86","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1366}',
            ),
            95 => 
            array (
                'id' => 1596,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":228,"nilai":"31.91","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1367}',
            ),
            96 => 
            array (
                'id' => 1597,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":228,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1368}',
            ),
            97 => 
            array (
                'id' => 1598,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000172","nama":"IMAS MINTARSIH","alamat":"KP CISALAM RW 06 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":229}',
            ),
            98 => 
            array (
                'id' => 1599,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":229,"nilai":"2774800","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1369}',
            ),
            99 => 
            array (
                'id' => 1600,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":229,"nilai":"64.6","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1370}',
            ),
            100 => 
            array (
                'id' => 1601,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":229,"nilai":"37148000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1371}',
            ),
            101 => 
            array (
                'id' => 1602,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":229,"nilai":"63.44","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1372}',
            ),
            102 => 
            array (
                'id' => 1603,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":229,"nilai":"86.41","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1373}',
            ),
            103 => 
            array (
                'id' => 1604,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":229,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1374}',
            ),
            104 => 
            array (
                'id' => 1605,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000176","nama":"ENUNG","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":230}',
            ),
            105 => 
            array (
                'id' => 1606,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":230,"nilai":"2867550","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1375}',
            ),
            106 => 
            array (
                'id' => 1607,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":230,"nilai":"51.71","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1376}',
            ),
            107 => 
            array (
                'id' => 1608,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":230,"nilai":"35168000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1377}',
            ),
            108 => 
            array (
                'id' => 1609,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":230,"nilai":"73.52","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1378}',
            ),
            109 => 
            array (
                'id' => 1610,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":230,"nilai":"78.02","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1379}',
            ),
            110 => 
            array (
                'id' => 1611,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":230,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1380}',
            ),
            111 => 
            array (
                'id' => 1612,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000185","nama":"YANTI SUGIANTI","alamat":"KP GEGERLOA RT 01 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":231}',
            ),
            112 => 
            array (
                'id' => 1613,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":231,"nilai":"1189300","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1381}',
            ),
            113 => 
            array (
                'id' => 1614,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":231,"nilai":"26.04","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1382}',
            ),
            114 => 
            array (
                'id' => 1615,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":231,"nilai":"21284000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1383}',
            ),
            115 => 
            array (
                'id' => 1616,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":231,"nilai":"78.43","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1384}',
            ),
            116 => 
            array (
                'id' => 1617,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":231,"nilai":"69.05","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1385}',
            ),
            117 => 
            array (
                'id' => 1618,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":231,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1386}',
            ),
            118 => 
            array (
                'id' => 1619,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000202","nama":"PIANAH","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":232}',
            ),
            119 => 
            array (
                'id' => 1620,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":232,"nilai":"1157800","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1387}',
            ),
            120 => 
            array (
                'id' => 1621,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":232,"nilai":"30.88","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1388}',
            ),
            121 => 
            array (
                'id' => 1622,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":232,"nilai":"32948000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1389}',
            ),
            122 => 
            array (
                'id' => 1623,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":232,"nilai":"26.27","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1390}',
            ),
            123 => 
            array (
                'id' => 1624,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":232,"nilai":"60.43","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1391}',
            ),
            124 => 
            array (
                'id' => 1625,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":232,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1392}',
            ),
            125 => 
            array (
                'id' => 1626,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000216","nama":"SITI MASITOH","alamat":"KP JATI RT 03 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":233}',
            ),
            126 => 
            array (
                'id' => 1627,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":233,"nilai":"2364600","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1393}',
            ),
            127 => 
            array (
                'id' => 1628,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":233,"nilai":"97","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1394}',
            ),
            128 => 
            array (
                'id' => 1629,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":233,"nilai":"33152000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1395}',
            ),
            129 => 
            array (
                'id' => 1630,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":233,"nilai":"37.25","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1396}',
            ),
            130 => 
            array (
                'id' => 1631,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":233,"nilai":"97.74","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1397}',
            ),
            131 => 
            array (
                'id' => 1632,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":233,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1398}',
            ),
            132 => 
            array (
                'id' => 1633,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000223","nama":"SOPIAH","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":234}',
            ),
            133 => 
            array (
                'id' => 1634,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":234,"nilai":"2663850","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1399}',
            ),
            134 => 
            array (
                'id' => 1635,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":234,"nilai":"39.03","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1400}',
            ),
            135 => 
            array (
                'id' => 1636,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":234,"nilai":"31484000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1401}',
            ),
            136 => 
            array (
                'id' => 1637,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":234,"nilai":"91.84","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1402}',
            ),
            137 => 
            array (
                'id' => 1638,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":234,"nilai":"83.46","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1403}',
            ),
            138 => 
            array (
                'id' => 1639,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":234,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1404}',
            ),
            139 => 
            array (
                'id' => 1640,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000224","nama":"AYIN","alamat":"KP CISALAM RW 06 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":235}',
            ),
            140 => 
            array (
                'id' => 1641,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":235,"nilai":"2207450","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1405}',
            ),
            141 => 
            array (
                'id' => 1642,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":235,"nilai":"63.14","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1406}',
            ),
            142 => 
            array (
                'id' => 1643,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":235,"nilai":"26840000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1407}',
            ),
            143 => 
            array (
                'id' => 1644,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":235,"nilai":"80.31","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1408}',
            ),
            144 => 
            array (
                'id' => 1645,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":235,"nilai":"30.15","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1409}',
            ),
            145 => 
            array (
                'id' => 1646,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":235,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1410}',
            ),
            146 => 
            array (
                'id' => 1647,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000250","nama":"DEDEH JUARIAH","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":236}',
            ),
            147 => 
            array (
                'id' => 1648,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":236,"nilai":"2517550","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1411}',
            ),
            148 => 
            array (
                'id' => 1649,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":236,"nilai":"55.85","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1412}',
            ),
            149 => 
            array (
                'id' => 1650,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":236,"nilai":"17976000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1413}',
            ),
            150 => 
            array (
                'id' => 1651,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":236,"nilai":"77.45","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1414}',
            ),
            151 => 
            array (
                'id' => 1652,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":236,"nilai":"57.89","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1415}',
            ),
            152 => 
            array (
                'id' => 1653,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":236,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1416}',
            ),
            153 => 
            array (
                'id' => 1654,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000251","nama":"DEDE SOLIHAH","alamat":"KP SARPEUNDEUY RT 01 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":237}',
            ),
            154 => 
            array (
                'id' => 1655,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":237,"nilai":"1876000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1417}',
            ),
            155 => 
            array (
                'id' => 1656,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":237,"nilai":"58.67","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1418}',
            ),
            156 => 
            array (
                'id' => 1657,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":237,"nilai":"19308000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1419}',
            ),
            157 => 
            array (
                'id' => 1658,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":237,"nilai":"42.83","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1420}',
            ),
            158 => 
            array (
                'id' => 1659,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":237,"nilai":"48.21","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1421}',
            ),
            159 => 
            array (
                'id' => 1660,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":237,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1422}',
            ),
            160 => 
            array (
                'id' => 1661,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000253","nama":"NENA","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":238}',
            ),
            161 => 
            array (
                'id' => 1662,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":238,"nilai":"1038800","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1423}',
            ),
            162 => 
            array (
                'id' => 1663,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":238,"nilai":"44.56","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1424}',
            ),
            163 => 
            array (
                'id' => 1664,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":238,"nilai":"10796000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1425}',
            ),
            164 => 
            array (
                'id' => 1665,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":238,"nilai":"44.99","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1426}',
            ),
            165 => 
            array (
                'id' => 1666,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":238,"nilai":"86.77","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1427}',
            ),
            166 => 
            array (
                'id' => 1667,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":238,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1428}',
            ),
            167 => 
            array (
                'id' => 1668,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000264","nama":"IPAH HANIPAH","alamat":"KP JATI RT 03 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":239}',
            ),
            168 => 
            array (
                'id' => 1669,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":239,"nilai":"1238650","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1429}',
            ),
            169 => 
            array (
                'id' => 1670,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":239,"nilai":"38.78","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1430}',
            ),
            170 => 
            array (
                'id' => 1671,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":239,"nilai":"37688000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1431}',
            ),
            171 => 
            array (
                'id' => 1672,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":239,"nilai":"51.38","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1432}',
            ),
            172 => 
            array (
                'id' => 1673,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":239,"nilai":"41.84","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1433}',
            ),
            173 => 
            array (
                'id' => 1674,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":239,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1434}',
            ),
            174 => 
            array (
                'id' => 1675,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000287","nama":"YANI","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":240}',
            ),
            175 => 
            array (
                'id' => 1676,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":240,"nilai":"2642150","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1435}',
            ),
            176 => 
            array (
                'id' => 1677,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":240,"nilai":"43.18","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1436}',
            ),
            177 => 
            array (
                'id' => 1678,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":240,"nilai":"35080000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1437}',
            ),
            178 => 
            array (
                'id' => 1679,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":240,"nilai":"92.53","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1438}',
            ),
            179 => 
            array (
                'id' => 1680,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":240,"nilai":"40.47","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1439}',
            ),
            180 => 
            array (
                'id' => 1681,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":240,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1440}',
            ),
            181 => 
            array (
                'id' => 1682,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000291","nama":"TATI","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":241}',
            ),
            182 => 
            array (
                'id' => 1683,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":241,"nilai":"3117450","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1441}',
            ),
            183 => 
            array (
                'id' => 1684,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":241,"nilai":"51.25","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1442}',
            ),
            184 => 
            array (
                'id' => 1685,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":241,"nilai":"39484000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1443}',
            ),
            185 => 
            array (
                'id' => 1686,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":241,"nilai":"73.7","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1444}',
            ),
            186 => 
            array (
                'id' => 1687,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":241,"nilai":"78.46","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1445}',
            ),
            187 => 
            array (
                'id' => 1688,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":241,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1446}',
            ),
            188 => 
            array (
                'id' => 1689,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000301","nama":"SANTI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":242}',
            ),
            189 => 
            array (
                'id' => 1690,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":242,"nilai":"1948100","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1447}',
            ),
            190 => 
            array (
                'id' => 1691,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":242,"nilai":"61.49","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1448}',
            ),
            191 => 
            array (
                'id' => 1692,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":242,"nilai":"10296000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1449}',
            ),
            192 => 
            array (
                'id' => 1693,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":242,"nilai":"42.57","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1450}',
            ),
            193 => 
            array (
                'id' => 1694,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":242,"nilai":"74.14","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1451}',
            ),
            194 => 
            array (
                'id' => 1695,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":242,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1452}',
            ),
            195 => 
            array (
                'id' => 1696,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020000306","nama":"YULI APRILIANTI","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":243}',
            ),
            196 => 
            array (
                'id' => 1697,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":243,"nilai":"2518600","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1453}',
            ),
            197 => 
            array (
                'id' => 1698,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":243,"nilai":"30.29","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1454}',
            ),
            198 => 
            array (
                'id' => 1699,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":243,"nilai":"32908000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1455}',
            ),
            199 => 
            array (
                'id' => 1700,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":243,"nilai":"98.98","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1456}',
            ),
            200 => 
            array (
                'id' => 1701,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":243,"nilai":"27.15","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1457}',
            ),
            201 => 
            array (
                'id' => 1702,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":243,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1458}',
            ),
            202 => 
            array (
                'id' => 1703,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980107","nama":"ETI MULYANI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":244}',
            ),
            203 => 
            array (
                'id' => 1704,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":244,"nilai":"3232600","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1459}',
            ),
            204 => 
            array (
                'id' => 1705,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":244,"nilai":"82.64","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1460}',
            ),
            205 => 
            array (
                'id' => 1706,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":244,"nilai":"39872000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1461}',
            ),
            206 => 
            array (
                'id' => 1707,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":244,"nilai":"32.97","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1462}',
            ),
            207 => 
            array (
                'id' => 1708,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":244,"nilai":"29.74","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1463}',
            ),
            208 => 
            array (
                'id' => 1709,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":244,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1464}',
            ),
            209 => 
            array (
                'id' => 1710,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980164","nama":"SITI MARYAM","alamat":"KP JATI RW 10 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":245}',
            ),
            210 => 
            array (
                'id' => 1711,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":245,"nilai":"2170700","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1465}',
            ),
            211 => 
            array (
                'id' => 1712,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":245,"nilai":"47.87","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1466}',
            ),
            212 => 
            array (
                'id' => 1713,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":245,"nilai":"25300000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1467}',
            ),
            213 => 
            array (
                'id' => 1714,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":245,"nilai":"96.92","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1468}',
            ),
            214 => 
            array (
                'id' => 1715,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":245,"nilai":"85.28","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1469}',
            ),
            215 => 
            array (
                'id' => 1716,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":245,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1470}',
            ),
            216 => 
            array (
                'id' => 1717,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980201","nama":"SITI INAYAH","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":246}',
            ),
            217 => 
            array (
                'id' => 1718,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":246,"nilai":"1776600","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1471}',
            ),
            218 => 
            array (
                'id' => 1719,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":246,"nilai":"40.9","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1472}',
            ),
            219 => 
            array (
                'id' => 1720,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":246,"nilai":"10596000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1473}',
            ),
            220 => 
            array (
                'id' => 1721,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":246,"nilai":"34.97","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1474}',
            ),
            221 => 
            array (
                'id' => 1722,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":246,"nilai":"45.94","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1475}',
            ),
            222 => 
            array (
                'id' => 1723,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":246,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1476}',
            ),
            223 => 
            array (
                'id' => 1724,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980208","nama":"ETI KUSMIATI","alamat":"KP DANGDEUR RT 01 RW 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":247}',
            ),
            224 => 
            array (
                'id' => 1725,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":247,"nilai":"3035550","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1477}',
            ),
            225 => 
            array (
                'id' => 1726,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":247,"nilai":"63.41","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1478}',
            ),
            226 => 
            array (
                'id' => 1727,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":247,"nilai":"18940000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1479}',
            ),
            227 => 
            array (
                'id' => 1728,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":247,"nilai":"65.48","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1480}',
            ),
            228 => 
            array (
                'id' => 1729,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":247,"nilai":"61.87","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1481}',
            ),
            229 => 
            array (
                'id' => 1730,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":247,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1482}',
            ),
            230 => 
            array (
                'id' => 1731,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980236","nama":"SITI MARSITI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":248}',
            ),
            231 => 
            array (
                'id' => 1732,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":248,"nilai":"2665950","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1483}',
            ),
            232 => 
            array (
                'id' => 1733,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":248,"nilai":"34.76","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1484}',
            ),
            233 => 
            array (
                'id' => 1734,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":248,"nilai":"26252000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1485}',
            ),
            234 => 
            array (
                'id' => 1735,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":248,"nilai":"97.03","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1486}',
            ),
            235 => 
            array (
                'id' => 1736,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":248,"nilai":"74.45","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1487}',
            ),
            236 => 
            array (
                'id' => 1737,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":248,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1488}',
            ),
            237 => 
            array (
                'id' => 1738,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980244","nama":"SITI AMINAH","alamat":"KP BOJONG GEDE RW 05 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":249}',
            ),
            238 => 
            array (
                'id' => 1739,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":249,"nilai":"2320150","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1489}',
            ),
            239 => 
            array (
                'id' => 1740,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":249,"nilai":"76.98","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1490}',
            ),
            240 => 
            array (
                'id' => 1741,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":249,"nilai":"26848000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1491}',
            ),
            241 => 
            array (
                'id' => 1742,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":249,"nilai":"64.47","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1492}',
            ),
            242 => 
            array (
                'id' => 1743,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":249,"nilai":"85.76","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1493}',
            ),
            243 => 
            array (
                'id' => 1744,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":249,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1494}',
            ),
            244 => 
            array (
                'id' => 1745,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980271","nama":"PANJI SUGIRI","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":250}',
            ),
            245 => 
            array (
                'id' => 1746,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":250,"nilai":"1820700","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1495}',
            ),
            246 => 
            array (
                'id' => 1747,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":250,"nilai":"34.86","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1496}',
            ),
            247 => 
            array (
                'id' => 1748,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":250,"nilai":"13412000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1497}',
            ),
            248 => 
            array (
                'id' => 1749,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":250,"nilai":"32.73","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1498}',
            ),
            249 => 
            array (
                'id' => 1750,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":250,"nilai":"95.18","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1499}',
            ),
            250 => 
            array (
                'id' => 1751,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":250,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1500}',
            ),
            251 => 
            array (
                'id' => 1752,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980276","nama":"DEDE SITI NURJANAH","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":251}',
            ),
            252 => 
            array (
                'id' => 1753,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":251,"nilai":"3314850","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1501}',
            ),
            253 => 
            array (
                'id' => 1754,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":251,"nilai":"36.49","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1502}',
            ),
            254 => 
            array (
                'id' => 1755,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":251,"nilai":"35672000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1503}',
            ),
            255 => 
            array (
                'id' => 1756,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":251,"nilai":"50.34","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1504}',
            ),
            256 => 
            array (
                'id' => 1757,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":251,"nilai":"83.19","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1505}',
            ),
            257 => 
            array (
                'id' => 1758,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":251,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1506}',
            ),
            258 => 
            array (
                'id' => 1759,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980295","nama":"SUGIANTO","alamat":"KP GEGERLOA RT 02 RW 07","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":252}',
            ),
            259 => 
            array (
                'id' => 1760,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":252,"nilai":"2185050","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1507}',
            ),
            260 => 
            array (
                'id' => 1761,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":252,"nilai":"75.1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1508}',
            ),
            261 => 
            array (
                'id' => 1762,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":252,"nilai":"22756000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1509}',
            ),
            262 => 
            array (
                'id' => 1763,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":252,"nilai":"29.45","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1510}',
            ),
            263 => 
            array (
                'id' => 1764,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":252,"nilai":"70.01","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1511}',
            ),
            264 => 
            array (
                'id' => 1765,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":252,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1512}',
            ),
            265 => 
            array (
                'id' => 1766,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980305","nama":"RUSMIATI","alamat":"KP JATI RW 10 RT 01","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":253}',
            ),
            266 => 
            array (
                'id' => 1767,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":253,"nilai":"2229850","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1513}',
            ),
            267 => 
            array (
                'id' => 1768,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":253,"nilai":"45.63","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1514}',
            ),
            268 => 
            array (
                'id' => 1769,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":253,"nilai":"25536000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1515}',
            ),
            269 => 
            array (
                'id' => 1770,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":253,"nilai":"73.78","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1516}',
            ),
            270 => 
            array (
                'id' => 1771,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":253,"nilai":"34.81","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1517}',
            ),
            271 => 
            array (
                'id' => 1772,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":253,"nilai":"1","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1518}',
            ),
            272 => 
            array (
                'id' => 1773,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980306","nama":"SITI MASUROH","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":254}',
            ),
            273 => 
            array (
                'id' => 1774,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":254,"nilai":"1799350","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1519}',
            ),
            274 => 
            array (
                'id' => 1775,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":254,"nilai":"75.89","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1520}',
            ),
            275 => 
            array (
                'id' => 1776,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":254,"nilai":"11840000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1521}',
            ),
            276 => 
            array (
                'id' => 1777,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":254,"nilai":"48.29","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1522}',
            ),
            277 => 
            array (
                'id' => 1778,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":254,"nilai":"61.19","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1523}',
            ),
            278 => 
            array (
                'id' => 1779,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":254,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1524}',
            ),
            279 => 
            array (
                'id' => 1780,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980331","nama":"SITI MARYATI","alamat":"KP JATI RT 01 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":255}',
            ),
            280 => 
            array (
                'id' => 1781,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":255,"nilai":"3228750","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1525}',
            ),
            281 => 
            array (
                'id' => 1782,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":255,"nilai":"73.37","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1526}',
            ),
            282 => 
            array (
                'id' => 1783,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":255,"nilai":"14292000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1527}',
            ),
            283 => 
            array (
                'id' => 1784,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":255,"nilai":"95.06","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1528}',
            ),
            284 => 
            array (
                'id' => 1785,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":255,"nilai":"58.87","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1529}',
            ),
            285 => 
            array (
                'id' => 1786,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":255,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1530}',
            ),
            286 => 
            array (
                'id' => 1787,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980338","nama":"NURLELA","alamat":"KP JATI RT 03 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":256}',
            ),
            287 => 
            array (
                'id' => 1788,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":256,"nilai":"1262100","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1531}',
            ),
            288 => 
            array (
                'id' => 1789,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":256,"nilai":"43.01","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1532}',
            ),
            289 => 
            array (
                'id' => 1790,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":256,"nilai":"35180000","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1533}',
            ),
            290 => 
            array (
                'id' => 1791,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":256,"nilai":"60.54","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1534}',
            ),
            291 => 
            array (
                'id' => 1792,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":256,"nilai":"54.75","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1535}',
            ),
            292 => 
            array (
                'id' => 1793,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":256,"nilai":"0","updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":1536}',
            ),
            293 => 
            array (
                'id' => 1794,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:37',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980382","nama":"SANTI SUSANTI","alamat":"KP PATROL RT 02 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:37.000000Z","created_at":"2023-05-29T12:52:37.000000Z","id":257}',
            ),
            294 => 
            array (
                'id' => 1795,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":257,"nilai":"1342250","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1537}',
            ),
            295 => 
            array (
                'id' => 1796,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":257,"nilai":"91.13","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1538}',
            ),
            296 => 
            array (
                'id' => 1797,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":257,"nilai":"29160000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1539}',
            ),
            297 => 
            array (
                'id' => 1798,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":257,"nilai":"47.68","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1540}',
            ),
            298 => 
            array (
                'id' => 1799,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":257,"nilai":"66.93","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1541}',
            ),
            299 => 
            array (
                'id' => 1800,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":257,"nilai":"1","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1542}',
            ),
            300 => 
            array (
                'id' => 1801,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980445","nama":"WIDA WIDIA","alamat":"KP SARPEUNDEUY RT 03 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":258}',
            ),
            301 => 
            array (
                'id' => 1802,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":258,"nilai":"2926000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1543}',
            ),
            302 => 
            array (
                'id' => 1803,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":258,"nilai":"39.16","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1544}',
            ),
            303 => 
            array (
                'id' => 1804,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":258,"nilai":"31296000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1545}',
            ),
            304 => 
            array (
                'id' => 1805,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":258,"nilai":"38","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1546}',
            ),
            305 => 
            array (
                'id' => 1806,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":258,"nilai":"46.85","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1547}',
            ),
            306 => 
            array (
                'id' => 1807,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":258,"nilai":"0","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1548}',
            ),
            307 => 
            array (
                'id' => 1808,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980448","nama":"HABSAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":259}',
            ),
            308 => 
            array (
                'id' => 1809,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":259,"nilai":"2710400","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1549}',
            ),
            309 => 
            array (
                'id' => 1810,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":259,"nilai":"54.32","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1550}',
            ),
            310 => 
            array (
                'id' => 1811,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":259,"nilai":"36212000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1551}',
            ),
            311 => 
            array (
                'id' => 1812,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":259,"nilai":"76.21","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1552}',
            ),
            312 => 
            array (
                'id' => 1813,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":259,"nilai":"42.58","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1553}',
            ),
            313 => 
            array (
                'id' => 1814,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":259,"nilai":"1","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1554}',
            ),
            314 => 
            array (
                'id' => 1815,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980471","nama":"SITI SUHAENAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":260}',
            ),
            315 => 
            array (
                'id' => 1816,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":260,"nilai":"2657550","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1555}',
            ),
            316 => 
            array (
                'id' => 1817,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":260,"nilai":"29.75","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1556}',
            ),
            317 => 
            array (
                'id' => 1818,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":260,"nilai":"19040000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1557}',
            ),
            318 => 
            array (
                'id' => 1819,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":260,"nilai":"63.91","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1558}',
            ),
            319 => 
            array (
                'id' => 1820,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":260,"nilai":"57.35","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1559}',
            ),
            320 => 
            array (
                'id' => 1821,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":260,"nilai":"0","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1560}',
            ),
            321 => 
            array (
                'id' => 1822,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980480","nama":"CUCU SUMIATI","alamat":"KP PATROL RT 03 RW 09","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":261}',
            ),
            322 => 
            array (
                'id' => 1823,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":261,"nilai":"2195550","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1561}',
            ),
            323 => 
            array (
                'id' => 1824,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":261,"nilai":"77.33","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1562}',
            ),
            324 => 
            array (
                'id' => 1825,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":261,"nilai":"23488000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1563}',
            ),
            325 => 
            array (
                'id' => 1826,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":261,"nilai":"38.66","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1564}',
            ),
            326 => 
            array (
                'id' => 1827,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":261,"nilai":"41.97","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1565}',
            ),
            327 => 
            array (
                'id' => 1828,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":261,"nilai":"1","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1566}',
            ),
            328 => 
            array (
                'id' => 1829,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980486","nama":"ENUNG HAYATI","alamat":"KP BOJONG GEDE RT 02 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":262}',
            ),
            329 => 
            array (
                'id' => 1830,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":262,"nilai":"2599800","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1567}',
            ),
            330 => 
            array (
                'id' => 1831,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":262,"nilai":"51.48","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1568}',
            ),
            331 => 
            array (
                'id' => 1832,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":262,"nilai":"13264000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1569}',
            ),
            332 => 
            array (
                'id' => 1833,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":262,"nilai":"62.17","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1570}',
            ),
            333 => 
            array (
                'id' => 1834,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":262,"nilai":"51.16","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1571}',
            ),
            334 => 
            array (
                'id' => 1835,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":262,"nilai":"1","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1572}',
            ),
            335 => 
            array (
                'id' => 1836,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980493","nama":"NENI ANGGRAENI","alamat":"KP JATI RT 02 RW 03","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":263}',
            ),
            336 => 
            array (
                'id' => 1837,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":263,"nilai":"1344350","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1573}',
            ),
            337 => 
            array (
                'id' => 1838,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":263,"nilai":"71.3","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1574}',
            ),
            338 => 
            array (
                'id' => 1839,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":263,"nilai":"39520000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1575}',
            ),
            339 => 
            array (
                'id' => 1840,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":263,"nilai":"67.29","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1576}',
            ),
            340 => 
            array (
                'id' => 1841,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":263,"nilai":"39.48","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1577}',
            ),
            341 => 
            array (
                'id' => 1842,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":263,"nilai":"0","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1578}',
            ),
            342 => 
            array (
                'id' => 1843,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980506","nama":"DEDE MASRIPAH","alamat":"KP SARPEUNDEUY RT 02 RW 04","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":264}',
            ),
            343 => 
            array (
                'id' => 1844,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":264,"nilai":"2975000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1579}',
            ),
            344 => 
            array (
                'id' => 1845,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":264,"nilai":"28.51","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1580}',
            ),
            345 => 
            array (
                'id' => 1846,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":264,"nilai":"28416000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1581}',
            ),
            346 => 
            array (
                'id' => 1847,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":264,"nilai":"37.78","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1582}',
            ),
            347 => 
            array (
                'id' => 1848,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":264,"nilai":"40.91","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1583}',
            ),
            348 => 
            array (
                'id' => 1849,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":264,"nilai":"0","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1584}',
            ),
            349 => 
            array (
                'id' => 1850,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980521","nama":"AI NAPISAH","alamat":"KP BOJONGGEDE RT 03 RW 05","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":265}',
            ),
            350 => 
            array (
                'id' => 1851,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":265,"nilai":"3451700","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1585}',
            ),
            351 => 
            array (
                'id' => 1852,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":265,"nilai":"44.36","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1586}',
            ),
            352 => 
            array (
                'id' => 1853,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":265,"nilai":"21592000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1587}',
            ),
            353 => 
            array (
                'id' => 1854,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":265,"nilai":"91.19","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1588}',
            ),
            354 => 
            array (
                'id' => 1855,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":265,"nilai":"57.95","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1589}',
            ),
            355 => 
            array (
                'id' => 1856,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":265,"nilai":"1","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1590}',
            ),
            356 => 
            array (
                'id' => 1857,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980524","nama":"ANI NURHAYATI","alamat":"KP BOJONG GEDE RT 03 RW 08","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":266}',
            ),
            357 => 
            array (
                'id' => 1858,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":266,"nilai":"3253600","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1591}',
            ),
            358 => 
            array (
                'id' => 1859,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":266,"nilai":"28.08","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1592}',
            ),
            359 => 
            array (
                'id' => 1860,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":266,"nilai":"15520000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1593}',
            ),
            360 => 
            array (
                'id' => 1861,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":266,"nilai":"98.67","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1594}',
            ),
            361 => 
            array (
                'id' => 1862,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":266,"nilai":"34.39","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1595}',
            ),
            362 => 
            array (
                'id' => 1863,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":266,"nilai":"1","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1596}',
            ),
            363 => 
            array (
                'id' => 1864,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980529","nama":"MARLINA","alamat":"KP JATI RW 10 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":267}',
            ),
            364 => 
            array (
                'id' => 1865,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":267,"nilai":"2111200","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1597}',
            ),
            365 => 
            array (
                'id' => 1866,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":267,"nilai":"47.64","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1598}',
            ),
            366 => 
            array (
                'id' => 1867,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":267,"nilai":"31752000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1599}',
            ),
            367 => 
            array (
                'id' => 1868,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":267,"nilai":"90.86","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1600}',
            ),
            368 => 
            array (
                'id' => 1869,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":267,"nilai":"80.59","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1601}',
            ),
            369 => 
            array (
                'id' => 1870,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":267,"nilai":"0","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1602}',
            ),
            370 => 
            array (
                'id' => 1871,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523020980541","nama":"ANISA","alamat":"KP CISALAM RW 06 RT 02","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":268}',
            ),
            371 => 
            array (
                'id' => 1872,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":268,"nilai":"1454950","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1603}',
            ),
            372 => 
            array (
                'id' => 1873,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":268,"nilai":"89.93","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1604}',
            ),
            373 => 
            array (
                'id' => 1874,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":268,"nilai":"37444000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1605}',
            ),
            374 => 
            array (
                'id' => 1875,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":268,"nilai":"40.26","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1606}',
            ),
            375 => 
            array (
                'id' => 1876,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":268,"nilai":"34.99","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1607}',
            ),
            376 => 
            array (
                'id' => 1877,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":268,"nilai":"1","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1608}',
            ),
            377 => 
            array (
                'id' => 1878,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk',
                'log_type' => 'create',
                'data' => '{"nik":"320523021000064","nama":"RANI FITRI HANDAYANI","alamat":"KP JATI RT 02 RW 10","import_id":1,"updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":269}',
            ),
            378 => 
            array (
                'id' => 1879,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":1,"penduduk_id":269,"nilai":"1469300","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1609}',
            ),
            379 => 
            array (
                'id' => 1880,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":2,"penduduk_id":269,"nilai":"78.12","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1610}',
            ),
            380 => 
            array (
                'id' => 1881,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":3,"penduduk_id":269,"nilai":"20988000","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1611}',
            ),
            381 => 
            array (
                'id' => 1882,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":4,"penduduk_id":269,"nilai":"25.5","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1612}',
            ),
            382 => 
            array (
                'id' => 1883,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":5,"penduduk_id":269,"nilai":"29.78","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1613}',
            ),
            383 => 
            array (
                'id' => 1884,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'penduduk_nilai',
                'log_type' => 'create',
                'data' => '{"kriteria_id":6,"penduduk_id":269,"nilai":"1","updated_at":"2023-05-29T12:52:38.000000Z","created_at":"2023-05-29T12:52:38.000000Z","id":1614}',
            ),
            384 => 
            array (
                'id' => 1885,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:52:38',
                'table_name' => 'import_penduduk',
                'log_type' => 'edit',
                'data' => '{"nama":"Testing","slug":"testing","updated_at":"2023-05-29 19:52:31","created_at":"2023-05-29 19:52:31","id":1}',
            ),
            385 => 
            array (
                'id' => 1886,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:53:26',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":434,"parent_id":null,"title":"Calon Nilai","icon":"fas fa-user-edit","route":"admin.calon.nilai","sequence":4,"active":1,"type":1,"created_at":"2023-05-24 00:00:09","updated_at":"2023-05-29 15:14:23"}',
            ),
            386 => 
            array (
                'id' => 1887,
                'user_id' => 1,
                'log_date' => '2023-05-29 19:53:31',
                'table_name' => 'p_menu',
                'log_type' => 'delete',
                'data' => '{"id":433,"parent_id":null,"title":"Calon","icon":"fas fa-user","route":"admin.calon","sequence":3,"active":1,"type":1,"created_at":"2023-05-23 21:06:47","updated_at":"2023-05-29 15:14:23"}',
            ),
            387 => 
            array (
                'id' => 1888,
                'user_id' => 1,
                'log_date' => '2023-05-29 20:03:16',
                'table_name' => 'setting_activities',
                'log_type' => 'create',
            'data' => '{"key":"dashboard.html","value":"<p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom:0in;text-align:center;\\r\\nline-height:150%\\"><b><span style=\'font-size:12.0pt;line-height:150%;font-family:\\r\\n\\"Times New Roman\\",serif\'>&nbsp;<span lang=\\"EN-US\\">SISTEM PENDUKUNG KEPUTUSAN UNTUK REKOMENDASI PENERIMA BANTUAN SOSIAL\\r\\nMENGGUNAKAN METODE FUZZY MAMDANI DAN SUGENO STUDI KASUS<p><\\/p><\\/span><\\/span><\\/b><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom:0in;text-align:center;\\r\\nline-height:150%\\"><b><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;\\r\\nfont-family:\\"Times New Roman\\",serif\'>KELUARGA HARAPAN (PKH) DESA DANGDEUR\\r\\nBANYURESMI KABUPATEN GARUT<p><\\/p><\\/span><\\/b><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom:0in;text-align:center;\\r\\nline-height:150%\\"><b><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;\\r\\nfont-family:\\"Times New Roman\\",serif\'>&nbsp;<\\/span><\\/b><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom:0in;text-align:center;\\r\\nline-height:150%\\"><b><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;font-family:\\"Times New Roman\\",serif\'>SKRIPSI<p><\\/p><\\/span><\\/b><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom:0in;text-align:center;\\r\\nline-height:150%\\"><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;\\r\\nfont-family:\\"Times New Roman\\",serif;mso-bidi-font-weight:bold\'>Disusun sebagai\\r\\nsalah satu syarat untuk memperoleh Gelar Sarjana Teknik pada <p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom:0in;text-align:center;\\r\\nline-height:150%\\"><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;\\r\\nfont-family:\\"Times New Roman\\",serif;mso-bidi-font-weight:bold\'>Program Studi\\r\\nTeknik Informatika Universitas Sangga Buana&nbsp;\\r\\nYPKP <p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" style=\\"line-height:150%;tab-stops:148.85pt center 198.4pt left 205.55pt 306.75pt\\"><b><span lang=\\"EN-US\\" style=\'font-size:12.0pt;\\r\\nline-height:150%;font-family:\\"Times New Roman\\",serif;color:black;mso-themecolor:\\r\\ntext1\'>&nbsp;<\\/span><\\/b><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align:center;line-height:150%\\"><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;font-family:\\"Times New Roman\\",serif;\\r\\ncolor:black;mso-themecolor:text1;mso-no-proof:yes\'><shapetype id=\\"_x0000_t75\\" coordsize=\\"21600,21600\\" o:spt=\\"75\\" o:preferrelative=\\"t\\" path=\\"m@4@5l@4@11@9@11@9@5xe\\" filled=\\"f\\" stroked=\\"f\\">\\r\\n <stroke joinstyle=\\"miter\\">\\r\\n <formulas>\\r\\n  <f eqn=\\"if lineDrawn pixelLineWidth 0\\">\\r\\n  <f eqn=\\"sum @0 1 0\\">\\r\\n  <f eqn=\\"sum 0 0 @1\\">\\r\\n  <f eqn=\\"prod @2 1 2\\">\\r\\n  <f eqn=\\"prod @3 21600 pixelWidth\\">\\r\\n  <f eqn=\\"prod @3 21600 pixelHeight\\">\\r\\n  <f eqn=\\"sum @0 0 1\\">\\r\\n  <f eqn=\\"prod @6 1 2\\">\\r\\n  <f eqn=\\"prod @7 21600 pixelWidth\\">\\r\\n  <f eqn=\\"sum @8 21600 0\\">\\r\\n  <f eqn=\\"prod @7 21600 pixelHeight\\">\\r\\n  <f eqn=\\"sum @10 21600 0\\">\\r\\n <\\/f><\\/f><\\/f><\\/f><\\/f><\\/f><\\/f><\\/f><\\/f><\\/f><\\/f><\\/f><\\/formulas>\\r\\n <path o:extrusionok=\\"f\\" gradientshapeok=\\"t\\" o:connecttype=\\"rect\\">\\r\\n <lock v:ext=\\"edit\\" aspectratio=\\"t\\">\\r\\n<\\/lock><\\/path><\\/stroke><\\/shapetype><shape id=\\"Picture_x0020_2\\" o:spid=\\"_x0000_i1025\\" type=\\"#_x0000_t75\\" style=\\"width:129pt;height:115.5pt;visibility:visible;mso-wrap-style:square\\">\\r\\n <imagedata src=\\"file:\\/\\/\\/C:\\/Users\\/upi\\/AppData\\/Local\\/Temp\\/msohtmlclip1\\/01\\/clip_image001.png\\" o:title=\\"\\">\\r\\n <lock v:ext=\\"edit\\" aspectratio=\\"f\\">\\r\\n<\\/lock><\\/imagedata><\\/shape><\\/span><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;\\r\\nfont-family:\\"Times New Roman\\",serif;color:black;mso-themecolor:text1\'><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align:center;line-height:150%\\"><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;font-family:\\"Times New Roman\\",serif;\\r\\ncolor:black;mso-themecolor:text1\'>&nbsp;<\\/span><img data-bs-filename=\\"Logo ypkp.png\\" style=\\"width: 124px;\\" src=\\"\\/assets\\/dashboard\\/16853653960.png\\"><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align:center;line-height:150%\\"><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;font-family:\\"Times New Roman\\",serif;\\r\\ncolor:black;mso-themecolor:text1\'>&nbsp;<\\/span><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align:center;line-height:150%\\"><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;font-family:\\"Times New Roman\\",serif;\\r\\ncolor:black;mso-themecolor:text1;mso-bidi-font-weight:bold\'>Nama : Tini\\r\\nPatmawati <p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align:center;line-height:150%\\"><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;font-family:\\"Times New Roman\\",serif;\\r\\ncolor:black;mso-themecolor:text1;mso-bidi-font-weight:bold\'>NPM : 2113191131<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align:center;line-height:150%\\"><span lang=\\"EN-US\\" style=\'font-size:12.0pt;line-height:150%;font-family:\\"Times New Roman\\",serif;\\r\\ncolor:black;mso-themecolor:text1;mso-bidi-font-weight:bold\'>Pembimbing : Slamet\\r\\nRisnanto, ST., M.Kom<p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align:center;line-height:150%\\"><b><span lang=\\"EN-US\\" style=\'font-size:12.0pt;\\r\\nline-height:150%;font-family:\\"Times New Roman\\",serif;color:black;mso-themecolor:\\r\\ntext1\'><br>\\r\\nPROGRAM STUDI TEKNIK INFORMATIKA <\\/span><\\/b><span lang=\\"EN-US\\" style=\'font-size:\\r\\n12.0pt;line-height:150%;font-family:\\"Times New Roman\\",serif;color:black;\\r\\nmso-themecolor:text1;mso-bidi-font-weight:bold\'><p><\\/p><\\/span><\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"margin-bottom:0in;text-align:center;\\r\\nline-height:150%\\">\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\"MsoNormal\\" align=\\"center\\" style=\\"text-align:center;line-height:150%\\"><b><span lang=\\"EN-US\\" style=\'font-size:12.0pt;\\r\\nline-height:150%;font-family:\\"Times New Roman\\",serif;color:black;mso-themecolor:\\r\\ntext1\'>FAKULTAS TEKNIK<br>\\r\\nUNIVERSITAS SANGGA BUANA YPKP BANDUNG<br>\\r\\n2023<p><\\/p><\\/span><\\/b><\\/p><\\/p>\\n","updated_at":"2023-05-29T13:03:16.000000Z","created_at":"2023-05-29T13:03:16.000000Z","id":1}',
            ),
            388 => 
            array (
                'id' => 1889,
                'user_id' => 1,
                'log_date' => '2023-05-29 20:03:31',
                'table_name' => 'p_menu',
                'log_type' => 'edit',
                'data' => '{"id":397,"parent_id":null,"title":"Pengaturan","icon":"fas fa-wrench","route":null,"sequence":10,"active":0,"type":1,"created_at":"2022-08-14 21:10:57","updated_at":"2023-05-29 15:14:23"}',
            ),
            389 => 
            array (
                'id' => 1890,
                'user_id' => 1,
                'log_date' => '2023-05-29 20:03:31',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":397,"updated_at":"2023-05-29T13:03:31.000000Z","created_at":"2023-05-29T13:03:31.000000Z","id":304}',
            ),
            390 => 
            array (
                'id' => 1891,
                'user_id' => 1,
                'log_date' => '2023-05-29 20:03:31',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":9,"menu_id":397,"updated_at":"2023-05-29T13:03:31.000000Z","created_at":"2023-05-29T13:03:31.000000Z","id":305}',
            ),
            391 => 
            array (
                'id' => 1892,
                'user_id' => 1,
                'log_date' => '2023-05-29 20:03:50',
                'table_name' => 'p_menu',
                'log_type' => 'create',
                'data' => '{"sequence":"19","parent_id":"397","active":"1","title":"Halaman Dashboard","icon":null,"route":"admin.setting.dashboard","type":"1","updated_at":"2023-05-29T13:03:50.000000Z","created_at":"2023-05-29T13:03:50.000000Z","id":438}',
            ),
            392 => 
            array (
                'id' => 1893,
                'user_id' => 1,
                'log_date' => '2023-05-29 20:03:50',
                'table_name' => 'p_role_has_menu',
                'log_type' => 'create',
                'data' => '{"role_id":1,"menu_id":438,"updated_at":"2023-05-29T13:03:50.000000Z","created_at":"2023-05-29T13:03:50.000000Z","id":306}',
            ),
        ));
        
        
    }
}