<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PendudukNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('penduduk_nilai')->delete();
        
        \DB::table('penduduk_nilai')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kriteria_id' => 1,
                'penduduk_id' => 1,
                'nilai' => 3339350.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            1 => 
            array (
                'id' => 2,
                'kriteria_id' => 2,
                'penduduk_id' => 1,
                'nilai' => 40.41,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            2 => 
            array (
                'id' => 3,
                'kriteria_id' => 3,
                'penduduk_id' => 1,
                'nilai' => 15636000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            3 => 
            array (
                'id' => 4,
                'kriteria_id' => 4,
                'penduduk_id' => 1,
                'nilai' => 98.09,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            4 => 
            array (
                'id' => 5,
                'kriteria_id' => 5,
                'penduduk_id' => 1,
                'nilai' => 51.59,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            5 => 
            array (
                'id' => 6,
                'kriteria_id' => 6,
                'penduduk_id' => 1,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            6 => 
            array (
                'id' => 7,
                'kriteria_id' => 1,
                'penduduk_id' => 2,
                'nilai' => 1296750.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            7 => 
            array (
                'id' => 8,
                'kriteria_id' => 2,
                'penduduk_id' => 2,
                'nilai' => 91.38,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            8 => 
            array (
                'id' => 9,
                'kriteria_id' => 3,
                'penduduk_id' => 2,
                'nilai' => 29160000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            9 => 
            array (
                'id' => 10,
                'kriteria_id' => 4,
                'penduduk_id' => 2,
                'nilai' => 96.06,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            10 => 
            array (
                'id' => 11,
                'kriteria_id' => 5,
                'penduduk_id' => 2,
                'nilai' => 70.42,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            11 => 
            array (
                'id' => 12,
                'kriteria_id' => 6,
                'penduduk_id' => 2,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            12 => 
            array (
                'id' => 13,
                'kriteria_id' => 1,
                'penduduk_id' => 3,
                'nilai' => 1457050.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            13 => 
            array (
                'id' => 14,
                'kriteria_id' => 2,
                'penduduk_id' => 3,
                'nilai' => 62.06,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            14 => 
            array (
                'id' => 15,
                'kriteria_id' => 3,
                'penduduk_id' => 3,
                'nilai' => 29988000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            15 => 
            array (
                'id' => 16,
                'kriteria_id' => 4,
                'penduduk_id' => 3,
                'nilai' => 78.58,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            16 => 
            array (
                'id' => 17,
                'kriteria_id' => 5,
                'penduduk_id' => 3,
                'nilai' => 69.65,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            17 => 
            array (
                'id' => 18,
                'kriteria_id' => 6,
                'penduduk_id' => 3,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            18 => 
            array (
                'id' => 19,
                'kriteria_id' => 1,
                'penduduk_id' => 4,
                'nilai' => 1421350.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            19 => 
            array (
                'id' => 20,
                'kriteria_id' => 2,
                'penduduk_id' => 4,
                'nilai' => 88.67,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            20 => 
            array (
                'id' => 21,
                'kriteria_id' => 3,
                'penduduk_id' => 4,
                'nilai' => 38324000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            21 => 
            array (
                'id' => 22,
                'kriteria_id' => 4,
                'penduduk_id' => 4,
                'nilai' => 70.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            22 => 
            array (
                'id' => 23,
                'kriteria_id' => 5,
                'penduduk_id' => 4,
                'nilai' => 44.64,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            23 => 
            array (
                'id' => 24,
                'kriteria_id' => 6,
                'penduduk_id' => 4,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            24 => 
            array (
                'id' => 25,
                'kriteria_id' => 1,
                'penduduk_id' => 5,
                'nilai' => 1455650.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            25 => 
            array (
                'id' => 26,
                'kriteria_id' => 2,
                'penduduk_id' => 5,
                'nilai' => 32.35,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            26 => 
            array (
                'id' => 27,
                'kriteria_id' => 3,
                'penduduk_id' => 5,
                'nilai' => 19500000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            27 => 
            array (
                'id' => 28,
                'kriteria_id' => 4,
                'penduduk_id' => 5,
                'nilai' => 66.05,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            28 => 
            array (
                'id' => 29,
                'kriteria_id' => 5,
                'penduduk_id' => 5,
                'nilai' => 37.3,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            29 => 
            array (
                'id' => 30,
                'kriteria_id' => 6,
                'penduduk_id' => 5,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            30 => 
            array (
                'id' => 31,
                'kriteria_id' => 1,
                'penduduk_id' => 6,
                'nilai' => 3088050.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            31 => 
            array (
                'id' => 32,
                'kriteria_id' => 2,
                'penduduk_id' => 6,
                'nilai' => 57.93,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            32 => 
            array (
                'id' => 33,
                'kriteria_id' => 3,
                'penduduk_id' => 6,
                'nilai' => 17748000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            33 => 
            array (
                'id' => 34,
                'kriteria_id' => 4,
                'penduduk_id' => 6,
                'nilai' => 57.58,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            34 => 
            array (
                'id' => 35,
                'kriteria_id' => 5,
                'penduduk_id' => 6,
                'nilai' => 80.17,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            35 => 
            array (
                'id' => 36,
                'kriteria_id' => 6,
                'penduduk_id' => 6,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            36 => 
            array (
                'id' => 37,
                'kriteria_id' => 1,
                'penduduk_id' => 7,
                'nilai' => 2446500.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            37 => 
            array (
                'id' => 38,
                'kriteria_id' => 2,
                'penduduk_id' => 7,
                'nilai' => 80.91,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            38 => 
            array (
                'id' => 39,
                'kriteria_id' => 3,
                'penduduk_id' => 7,
                'nilai' => 35544000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            39 => 
            array (
                'id' => 40,
                'kriteria_id' => 4,
                'penduduk_id' => 7,
                'nilai' => 36.41,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            40 => 
            array (
                'id' => 41,
                'kriteria_id' => 5,
                'penduduk_id' => 7,
                'nilai' => 80.67,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            41 => 
            array (
                'id' => 42,
                'kriteria_id' => 6,
                'penduduk_id' => 7,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            42 => 
            array (
                'id' => 43,
                'kriteria_id' => 1,
                'penduduk_id' => 8,
                'nilai' => 2038050.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            43 => 
            array (
                'id' => 44,
                'kriteria_id' => 2,
                'penduduk_id' => 8,
                'nilai' => 85.44,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            44 => 
            array (
                'id' => 45,
                'kriteria_id' => 3,
                'penduduk_id' => 8,
                'nilai' => 26380000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            45 => 
            array (
                'id' => 46,
                'kriteria_id' => 4,
                'penduduk_id' => 8,
                'nilai' => 48.73,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            46 => 
            array (
                'id' => 47,
                'kriteria_id' => 5,
                'penduduk_id' => 8,
                'nilai' => 61.22,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            47 => 
            array (
                'id' => 48,
                'kriteria_id' => 6,
                'penduduk_id' => 8,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            48 => 
            array (
                'id' => 49,
                'kriteria_id' => 1,
                'penduduk_id' => 9,
                'nilai' => 3331300.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            49 => 
            array (
                'id' => 50,
                'kriteria_id' => 2,
                'penduduk_id' => 9,
                'nilai' => 29.69,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            50 => 
            array (
                'id' => 51,
                'kriteria_id' => 3,
                'penduduk_id' => 9,
                'nilai' => 16540000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            51 => 
            array (
                'id' => 52,
                'kriteria_id' => 4,
                'penduduk_id' => 9,
                'nilai' => 97.19,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            52 => 
            array (
                'id' => 53,
                'kriteria_id' => 5,
                'penduduk_id' => 9,
                'nilai' => 35.9,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            53 => 
            array (
                'id' => 54,
                'kriteria_id' => 6,
                'penduduk_id' => 9,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            54 => 
            array (
                'id' => 55,
                'kriteria_id' => 1,
                'penduduk_id' => 10,
                'nilai' => 2737350.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            55 => 
            array (
                'id' => 56,
                'kriteria_id' => 2,
                'penduduk_id' => 10,
                'nilai' => 83.87,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            56 => 
            array (
                'id' => 57,
                'kriteria_id' => 3,
                'penduduk_id' => 10,
                'nilai' => 19540000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            57 => 
            array (
                'id' => 58,
                'kriteria_id' => 4,
                'penduduk_id' => 10,
                'nilai' => 95.11,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            58 => 
            array (
                'id' => 59,
                'kriteria_id' => 5,
                'penduduk_id' => 10,
                'nilai' => 52.06,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            59 => 
            array (
                'id' => 60,
                'kriteria_id' => 6,
                'penduduk_id' => 10,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            60 => 
            array (
                'id' => 61,
                'kriteria_id' => 1,
                'penduduk_id' => 11,
                'nilai' => 1331050.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            61 => 
            array (
                'id' => 62,
                'kriteria_id' => 2,
                'penduduk_id' => 11,
                'nilai' => 72.05,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            62 => 
            array (
                'id' => 63,
                'kriteria_id' => 3,
                'penduduk_id' => 11,
                'nilai' => 30092000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            63 => 
            array (
                'id' => 64,
                'kriteria_id' => 4,
                'penduduk_id' => 11,
                'nilai' => 71.48,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            64 => 
            array (
                'id' => 65,
                'kriteria_id' => 5,
                'penduduk_id' => 11,
                'nilai' => 40.67,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            65 => 
            array (
                'id' => 66,
                'kriteria_id' => 6,
                'penduduk_id' => 11,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            66 => 
            array (
                'id' => 67,
                'kriteria_id' => 1,
                'penduduk_id' => 12,
                'nilai' => 1929200.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            67 => 
            array (
                'id' => 68,
                'kriteria_id' => 2,
                'penduduk_id' => 12,
                'nilai' => 49.79,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            68 => 
            array (
                'id' => 69,
                'kriteria_id' => 3,
                'penduduk_id' => 12,
                'nilai' => 34840000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            69 => 
            array (
                'id' => 70,
                'kriteria_id' => 4,
                'penduduk_id' => 12,
                'nilai' => 34.63,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            70 => 
            array (
                'id' => 71,
                'kriteria_id' => 5,
                'penduduk_id' => 12,
                'nilai' => 67.03,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            71 => 
            array (
                'id' => 72,
                'kriteria_id' => 6,
                'penduduk_id' => 12,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            72 => 
            array (
                'id' => 73,
                'kriteria_id' => 1,
                'penduduk_id' => 13,
                'nilai' => 2850400.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            73 => 
            array (
                'id' => 74,
                'kriteria_id' => 2,
                'penduduk_id' => 13,
                'nilai' => 90.37,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            74 => 
            array (
                'id' => 75,
                'kriteria_id' => 3,
                'penduduk_id' => 13,
                'nilai' => 25392000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            75 => 
            array (
                'id' => 76,
                'kriteria_id' => 4,
                'penduduk_id' => 13,
                'nilai' => 39.74,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            76 => 
            array (
                'id' => 77,
                'kriteria_id' => 5,
                'penduduk_id' => 13,
                'nilai' => 53.21,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            77 => 
            array (
                'id' => 78,
                'kriteria_id' => 6,
                'penduduk_id' => 13,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            78 => 
            array (
                'id' => 79,
                'kriteria_id' => 1,
                'penduduk_id' => 14,
                'nilai' => 1025500.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            79 => 
            array (
                'id' => 80,
                'kriteria_id' => 2,
                'penduduk_id' => 14,
                'nilai' => 65.02,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            80 => 
            array (
                'id' => 81,
                'kriteria_id' => 3,
                'penduduk_id' => 14,
                'nilai' => 30476000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            81 => 
            array (
                'id' => 82,
                'kriteria_id' => 4,
                'penduduk_id' => 14,
                'nilai' => 69.31,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            82 => 
            array (
                'id' => 83,
                'kriteria_id' => 5,
                'penduduk_id' => 14,
                'nilai' => 92.28,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            83 => 
            array (
                'id' => 84,
                'kriteria_id' => 6,
                'penduduk_id' => 14,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            84 => 
            array (
                'id' => 85,
                'kriteria_id' => 1,
                'penduduk_id' => 15,
                'nilai' => 2425150.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            85 => 
            array (
                'id' => 86,
                'kriteria_id' => 2,
                'penduduk_id' => 15,
                'nilai' => 59.86,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            86 => 
            array (
                'id' => 87,
                'kriteria_id' => 3,
                'penduduk_id' => 15,
                'nilai' => 39480000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            87 => 
            array (
                'id' => 88,
                'kriteria_id' => 4,
                'penduduk_id' => 15,
                'nilai' => 33.18,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            88 => 
            array (
                'id' => 89,
                'kriteria_id' => 5,
                'penduduk_id' => 15,
                'nilai' => 80.94,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            89 => 
            array (
                'id' => 90,
                'kriteria_id' => 6,
                'penduduk_id' => 15,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            90 => 
            array (
                'id' => 91,
                'kriteria_id' => 1,
                'penduduk_id' => 16,
                'nilai' => 1756300.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            91 => 
            array (
                'id' => 92,
                'kriteria_id' => 2,
                'penduduk_id' => 16,
                'nilai' => 32.07,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            92 => 
            array (
                'id' => 93,
                'kriteria_id' => 3,
                'penduduk_id' => 16,
                'nilai' => 14592000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            93 => 
            array (
                'id' => 94,
                'kriteria_id' => 4,
                'penduduk_id' => 16,
                'nilai' => 39.82,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            94 => 
            array (
                'id' => 95,
                'kriteria_id' => 5,
                'penduduk_id' => 16,
                'nilai' => 34.15,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            95 => 
            array (
                'id' => 96,
                'kriteria_id' => 6,
                'penduduk_id' => 16,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            96 => 
            array (
                'id' => 97,
                'kriteria_id' => 1,
                'penduduk_id' => 17,
                'nilai' => 1404900.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            97 => 
            array (
                'id' => 98,
                'kriteria_id' => 2,
                'penduduk_id' => 17,
                'nilai' => 64.9,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            98 => 
            array (
                'id' => 99,
                'kriteria_id' => 3,
                'penduduk_id' => 17,
                'nilai' => 33284000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            99 => 
            array (
                'id' => 100,
                'kriteria_id' => 4,
                'penduduk_id' => 17,
                'nilai' => 67.38,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            100 => 
            array (
                'id' => 101,
                'kriteria_id' => 5,
                'penduduk_id' => 17,
                'nilai' => 66.37,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            101 => 
            array (
                'id' => 102,
                'kriteria_id' => 6,
                'penduduk_id' => 17,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            102 => 
            array (
                'id' => 103,
                'kriteria_id' => 1,
                'penduduk_id' => 18,
                'nilai' => 2166850.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            103 => 
            array (
                'id' => 104,
                'kriteria_id' => 2,
                'penduduk_id' => 18,
                'nilai' => 51.14,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            104 => 
            array (
                'id' => 105,
                'kriteria_id' => 3,
                'penduduk_id' => 18,
                'nilai' => 29440000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            105 => 
            array (
                'id' => 106,
                'kriteria_id' => 4,
                'penduduk_id' => 18,
                'nilai' => 46.34,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            106 => 
            array (
                'id' => 107,
                'kriteria_id' => 5,
                'penduduk_id' => 18,
                'nilai' => 93.6,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            107 => 
            array (
                'id' => 108,
                'kriteria_id' => 6,
                'penduduk_id' => 18,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            108 => 
            array (
                'id' => 109,
                'kriteria_id' => 1,
                'penduduk_id' => 19,
                'nilai' => 1814050.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            109 => 
            array (
                'id' => 110,
                'kriteria_id' => 2,
                'penduduk_id' => 19,
                'nilai' => 31.79,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            110 => 
            array (
                'id' => 111,
                'kriteria_id' => 3,
                'penduduk_id' => 19,
                'nilai' => 22760000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            111 => 
            array (
                'id' => 112,
                'kriteria_id' => 4,
                'penduduk_id' => 19,
                'nilai' => 88.38,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            112 => 
            array (
                'id' => 113,
                'kriteria_id' => 5,
                'penduduk_id' => 19,
                'nilai' => 68.24,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            113 => 
            array (
                'id' => 114,
                'kriteria_id' => 6,
                'penduduk_id' => 19,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            114 => 
            array (
                'id' => 115,
                'kriteria_id' => 1,
                'penduduk_id' => 20,
                'nilai' => 2051350.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            115 => 
            array (
                'id' => 116,
                'kriteria_id' => 2,
                'penduduk_id' => 20,
                'nilai' => 97.85,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            116 => 
            array (
                'id' => 117,
                'kriteria_id' => 3,
                'penduduk_id' => 20,
                'nilai' => 37900000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            117 => 
            array (
                'id' => 118,
                'kriteria_id' => 4,
                'penduduk_id' => 20,
                'nilai' => 91.4,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            118 => 
            array (
                'id' => 119,
                'kriteria_id' => 5,
                'penduduk_id' => 20,
                'nilai' => 79.76,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            119 => 
            array (
                'id' => 120,
                'kriteria_id' => 6,
                'penduduk_id' => 20,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            120 => 
            array (
                'id' => 121,
                'kriteria_id' => 1,
                'penduduk_id' => 21,
                'nilai' => 2018450.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            121 => 
            array (
                'id' => 122,
                'kriteria_id' => 2,
                'penduduk_id' => 21,
                'nilai' => 28.58,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            122 => 
            array (
                'id' => 123,
                'kriteria_id' => 3,
                'penduduk_id' => 21,
                'nilai' => 38760000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            123 => 
            array (
                'id' => 124,
                'kriteria_id' => 4,
                'penduduk_id' => 21,
                'nilai' => 87.25,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            124 => 
            array (
                'id' => 125,
                'kriteria_id' => 5,
                'penduduk_id' => 21,
                'nilai' => 52.28,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            125 => 
            array (
                'id' => 126,
                'kriteria_id' => 6,
                'penduduk_id' => 21,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            126 => 
            array (
                'id' => 127,
                'kriteria_id' => 1,
                'penduduk_id' => 22,
                'nilai' => 1554700.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            127 => 
            array (
                'id' => 128,
                'kriteria_id' => 2,
                'penduduk_id' => 22,
                'nilai' => 39.24,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            128 => 
            array (
                'id' => 129,
                'kriteria_id' => 3,
                'penduduk_id' => 22,
                'nilai' => 29780000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            129 => 
            array (
                'id' => 130,
                'kriteria_id' => 4,
                'penduduk_id' => 22,
                'nilai' => 28.52,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            130 => 
            array (
                'id' => 131,
                'kriteria_id' => 5,
                'penduduk_id' => 22,
                'nilai' => 62.67,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            131 => 
            array (
                'id' => 132,
                'kriteria_id' => 6,
                'penduduk_id' => 22,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            132 => 
            array (
                'id' => 133,
                'kriteria_id' => 1,
                'penduduk_id' => 23,
                'nilai' => 2804900.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            133 => 
            array (
                'id' => 134,
                'kriteria_id' => 2,
                'penduduk_id' => 23,
                'nilai' => 89.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            134 => 
            array (
                'id' => 135,
                'kriteria_id' => 3,
                'penduduk_id' => 23,
                'nilai' => 37672000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            135 => 
            array (
                'id' => 136,
                'kriteria_id' => 4,
                'penduduk_id' => 23,
                'nilai' => 98.83,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            136 => 
            array (
                'id' => 137,
                'kriteria_id' => 5,
                'penduduk_id' => 23,
                'nilai' => 92.4,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            137 => 
            array (
                'id' => 138,
                'kriteria_id' => 6,
                'penduduk_id' => 23,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            138 => 
            array (
                'id' => 139,
                'kriteria_id' => 1,
                'penduduk_id' => 24,
                'nilai' => 1316350.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            139 => 
            array (
                'id' => 140,
                'kriteria_id' => 2,
                'penduduk_id' => 24,
                'nilai' => 50.38,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            140 => 
            array (
                'id' => 141,
                'kriteria_id' => 3,
                'penduduk_id' => 24,
                'nilai' => 13092000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            141 => 
            array (
                'id' => 142,
                'kriteria_id' => 4,
                'penduduk_id' => 24,
                'nilai' => 58.48,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            142 => 
            array (
                'id' => 143,
                'kriteria_id' => 5,
                'penduduk_id' => 24,
                'nilai' => 62.55,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            143 => 
            array (
                'id' => 144,
                'kriteria_id' => 6,
                'penduduk_id' => 24,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            144 => 
            array (
                'id' => 145,
                'kriteria_id' => 1,
                'penduduk_id' => 25,
                'nilai' => 2420600.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            145 => 
            array (
                'id' => 146,
                'kriteria_id' => 2,
                'penduduk_id' => 25,
                'nilai' => 79.01,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            146 => 
            array (
                'id' => 147,
                'kriteria_id' => 3,
                'penduduk_id' => 25,
                'nilai' => 30352000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            147 => 
            array (
                'id' => 148,
                'kriteria_id' => 4,
                'penduduk_id' => 25,
                'nilai' => 32.37,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            148 => 
            array (
                'id' => 149,
                'kriteria_id' => 5,
                'penduduk_id' => 25,
                'nilai' => 93.85,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            149 => 
            array (
                'id' => 150,
                'kriteria_id' => 6,
                'penduduk_id' => 25,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            150 => 
            array (
                'id' => 151,
                'kriteria_id' => 1,
                'penduduk_id' => 26,
                'nilai' => 2064650.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            151 => 
            array (
                'id' => 152,
                'kriteria_id' => 2,
                'penduduk_id' => 26,
                'nilai' => 85.56,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            152 => 
            array (
                'id' => 153,
                'kriteria_id' => 3,
                'penduduk_id' => 26,
                'nilai' => 23768000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            153 => 
            array (
                'id' => 154,
                'kriteria_id' => 4,
                'penduduk_id' => 26,
                'nilai' => 50.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            154 => 
            array (
                'id' => 155,
                'kriteria_id' => 5,
                'penduduk_id' => 26,
                'nilai' => 80.88,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            155 => 
            array (
                'id' => 156,
                'kriteria_id' => 6,
                'penduduk_id' => 26,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            156 => 
            array (
                'id' => 157,
                'kriteria_id' => 1,
                'penduduk_id' => 27,
                'nilai' => 3074750.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            157 => 
            array (
                'id' => 158,
                'kriteria_id' => 2,
                'penduduk_id' => 27,
                'nilai' => 46.15,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            158 => 
            array (
                'id' => 159,
                'kriteria_id' => 3,
                'penduduk_id' => 27,
                'nilai' => 38812000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            159 => 
            array (
                'id' => 160,
                'kriteria_id' => 4,
                'penduduk_id' => 27,
                'nilai' => 93.11,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            160 => 
            array (
                'id' => 161,
                'kriteria_id' => 5,
                'penduduk_id' => 27,
                'nilai' => 75.47,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            161 => 
            array (
                'id' => 162,
                'kriteria_id' => 6,
                'penduduk_id' => 27,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            162 => 
            array (
                'id' => 163,
                'kriteria_id' => 1,
                'penduduk_id' => 28,
                'nilai' => 2768150.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            163 => 
            array (
                'id' => 164,
                'kriteria_id' => 2,
                'penduduk_id' => 28,
                'nilai' => 69.07,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            164 => 
            array (
                'id' => 165,
                'kriteria_id' => 3,
                'penduduk_id' => 28,
                'nilai' => 17620000.0,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            165 => 
            array (
                'id' => 166,
                'kriteria_id' => 4,
                'penduduk_id' => 28,
                'nilai' => 32.06,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            166 => 
            array (
                'id' => 167,
                'kriteria_id' => 5,
                'penduduk_id' => 28,
                'nilai' => 82.22,
                'created_at' => '2023-05-29 19:52:31',
                'updated_at' => '2023-05-29 19:52:31',
            ),
            167 => 
            array (
                'id' => 168,
                'kriteria_id' => 6,
                'penduduk_id' => 28,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            168 => 
            array (
                'id' => 169,
                'kriteria_id' => 1,
                'penduduk_id' => 29,
                'nilai' => 907550.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            169 => 
            array (
                'id' => 170,
                'kriteria_id' => 2,
                'penduduk_id' => 29,
                'nilai' => 52.38,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            170 => 
            array (
                'id' => 171,
                'kriteria_id' => 3,
                'penduduk_id' => 29,
                'nilai' => 26952000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            171 => 
            array (
                'id' => 172,
                'kriteria_id' => 4,
                'penduduk_id' => 29,
                'nilai' => 47.72,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            172 => 
            array (
                'id' => 173,
                'kriteria_id' => 5,
                'penduduk_id' => 29,
                'nilai' => 34.55,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            173 => 
            array (
                'id' => 174,
                'kriteria_id' => 6,
                'penduduk_id' => 29,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            174 => 
            array (
                'id' => 175,
                'kriteria_id' => 1,
                'penduduk_id' => 30,
                'nilai' => 2420600.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            175 => 
            array (
                'id' => 176,
                'kriteria_id' => 2,
                'penduduk_id' => 30,
                'nilai' => 93.64,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            176 => 
            array (
                'id' => 177,
                'kriteria_id' => 3,
                'penduduk_id' => 30,
                'nilai' => 11416000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            177 => 
            array (
                'id' => 178,
                'kriteria_id' => 4,
                'penduduk_id' => 30,
                'nilai' => 79.82,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            178 => 
            array (
                'id' => 179,
                'kriteria_id' => 5,
                'penduduk_id' => 30,
                'nilai' => 60.23,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            179 => 
            array (
                'id' => 180,
                'kriteria_id' => 6,
                'penduduk_id' => 30,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            180 => 
            array (
                'id' => 181,
                'kriteria_id' => 1,
                'penduduk_id' => 31,
                'nilai' => 1729000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            181 => 
            array (
                'id' => 182,
                'kriteria_id' => 2,
                'penduduk_id' => 31,
                'nilai' => 63.34,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            182 => 
            array (
                'id' => 183,
                'kriteria_id' => 3,
                'penduduk_id' => 31,
                'nilai' => 31720000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            183 => 
            array (
                'id' => 184,
                'kriteria_id' => 4,
                'penduduk_id' => 31,
                'nilai' => 94.11,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            184 => 
            array (
                'id' => 185,
                'kriteria_id' => 5,
                'penduduk_id' => 31,
                'nilai' => 68.95,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            185 => 
            array (
                'id' => 186,
                'kriteria_id' => 6,
                'penduduk_id' => 31,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            186 => 
            array (
                'id' => 187,
                'kriteria_id' => 1,
                'penduduk_id' => 32,
                'nilai' => 2970800.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            187 => 
            array (
                'id' => 188,
                'kriteria_id' => 2,
                'penduduk_id' => 32,
                'nilai' => 76.29,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            188 => 
            array (
                'id' => 189,
                'kriteria_id' => 3,
                'penduduk_id' => 32,
                'nilai' => 12360000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            189 => 
            array (
                'id' => 190,
                'kriteria_id' => 4,
                'penduduk_id' => 32,
                'nilai' => 92.35,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            190 => 
            array (
                'id' => 191,
                'kriteria_id' => 5,
                'penduduk_id' => 32,
                'nilai' => 26.73,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            191 => 
            array (
                'id' => 192,
                'kriteria_id' => 6,
                'penduduk_id' => 32,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            192 => 
            array (
                'id' => 193,
                'kriteria_id' => 1,
                'penduduk_id' => 33,
                'nilai' => 2497600.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            193 => 
            array (
                'id' => 194,
                'kriteria_id' => 2,
                'penduduk_id' => 33,
                'nilai' => 94.46,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            194 => 
            array (
                'id' => 195,
                'kriteria_id' => 3,
                'penduduk_id' => 33,
                'nilai' => 14480000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            195 => 
            array (
                'id' => 196,
                'kriteria_id' => 4,
                'penduduk_id' => 33,
                'nilai' => 72.5,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            196 => 
            array (
                'id' => 197,
                'kriteria_id' => 5,
                'penduduk_id' => 33,
                'nilai' => 81.27,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            197 => 
            array (
                'id' => 198,
                'kriteria_id' => 6,
                'penduduk_id' => 33,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            198 => 
            array (
                'id' => 199,
                'kriteria_id' => 1,
                'penduduk_id' => 34,
                'nilai' => 1705200.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            199 => 
            array (
                'id' => 200,
                'kriteria_id' => 2,
                'penduduk_id' => 34,
                'nilai' => 98.19,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            200 => 
            array (
                'id' => 201,
                'kriteria_id' => 3,
                'penduduk_id' => 34,
                'nilai' => 13796000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            201 => 
            array (
                'id' => 202,
                'kriteria_id' => 4,
                'penduduk_id' => 34,
                'nilai' => 95.99,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            202 => 
            array (
                'id' => 203,
                'kriteria_id' => 5,
                'penduduk_id' => 34,
                'nilai' => 90.99,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            203 => 
            array (
                'id' => 204,
                'kriteria_id' => 6,
                'penduduk_id' => 34,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            204 => 
            array (
                'id' => 205,
                'kriteria_id' => 1,
                'penduduk_id' => 35,
                'nilai' => 2152850.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            205 => 
            array (
                'id' => 206,
                'kriteria_id' => 2,
                'penduduk_id' => 35,
                'nilai' => 86.93,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            206 => 
            array (
                'id' => 207,
                'kriteria_id' => 3,
                'penduduk_id' => 35,
                'nilai' => 11308000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            207 => 
            array (
                'id' => 208,
                'kriteria_id' => 4,
                'penduduk_id' => 35,
                'nilai' => 71.49,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            208 => 
            array (
                'id' => 209,
                'kriteria_id' => 5,
                'penduduk_id' => 35,
                'nilai' => 92.36,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            209 => 
            array (
                'id' => 210,
                'kriteria_id' => 6,
                'penduduk_id' => 35,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            210 => 
            array (
                'id' => 211,
                'kriteria_id' => 1,
                'penduduk_id' => 36,
                'nilai' => 2245950.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            211 => 
            array (
                'id' => 212,
                'kriteria_id' => 2,
                'penduduk_id' => 36,
                'nilai' => 34.57,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            212 => 
            array (
                'id' => 213,
                'kriteria_id' => 3,
                'penduduk_id' => 36,
                'nilai' => 39400000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            213 => 
            array (
                'id' => 214,
                'kriteria_id' => 4,
                'penduduk_id' => 36,
                'nilai' => 37.67,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            214 => 
            array (
                'id' => 215,
                'kriteria_id' => 5,
                'penduduk_id' => 36,
                'nilai' => 92.39,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            215 => 
            array (
                'id' => 216,
                'kriteria_id' => 6,
                'penduduk_id' => 36,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            216 => 
            array (
                'id' => 217,
                'kriteria_id' => 1,
                'penduduk_id' => 37,
                'nilai' => 1146950.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            217 => 
            array (
                'id' => 218,
                'kriteria_id' => 2,
                'penduduk_id' => 37,
                'nilai' => 82.89,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            218 => 
            array (
                'id' => 219,
                'kriteria_id' => 3,
                'penduduk_id' => 37,
                'nilai' => 13968000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            219 => 
            array (
                'id' => 220,
                'kriteria_id' => 4,
                'penduduk_id' => 37,
                'nilai' => 82.2,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            220 => 
            array (
                'id' => 221,
                'kriteria_id' => 5,
                'penduduk_id' => 37,
                'nilai' => 36.63,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            221 => 
            array (
                'id' => 222,
                'kriteria_id' => 6,
                'penduduk_id' => 37,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            222 => 
            array (
                'id' => 223,
                'kriteria_id' => 1,
                'penduduk_id' => 38,
                'nilai' => 2691150.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            223 => 
            array (
                'id' => 224,
                'kriteria_id' => 2,
                'penduduk_id' => 38,
                'nilai' => 26.59,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            224 => 
            array (
                'id' => 225,
                'kriteria_id' => 3,
                'penduduk_id' => 38,
                'nilai' => 25628000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            225 => 
            array (
                'id' => 226,
                'kriteria_id' => 4,
                'penduduk_id' => 38,
                'nilai' => 99.47,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            226 => 
            array (
                'id' => 227,
                'kriteria_id' => 5,
                'penduduk_id' => 38,
                'nilai' => 68.33,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            227 => 
            array (
                'id' => 228,
                'kriteria_id' => 6,
                'penduduk_id' => 38,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            228 => 
            array (
                'id' => 229,
                'kriteria_id' => 1,
                'penduduk_id' => 39,
                'nilai' => 2644950.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            229 => 
            array (
                'id' => 230,
                'kriteria_id' => 2,
                'penduduk_id' => 39,
                'nilai' => 69.79,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            230 => 
            array (
                'id' => 231,
                'kriteria_id' => 3,
                'penduduk_id' => 39,
                'nilai' => 34888000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            231 => 
            array (
                'id' => 232,
                'kriteria_id' => 4,
                'penduduk_id' => 39,
                'nilai' => 68.68,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            232 => 
            array (
                'id' => 233,
                'kriteria_id' => 5,
                'penduduk_id' => 39,
                'nilai' => 83.37,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            233 => 
            array (
                'id' => 234,
                'kriteria_id' => 6,
                'penduduk_id' => 39,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            234 => 
            array (
                'id' => 235,
                'kriteria_id' => 1,
                'penduduk_id' => 40,
                'nilai' => 3074400.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            235 => 
            array (
                'id' => 236,
                'kriteria_id' => 2,
                'penduduk_id' => 40,
                'nilai' => 53.1,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            236 => 
            array (
                'id' => 237,
                'kriteria_id' => 3,
                'penduduk_id' => 40,
                'nilai' => 33724000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            237 => 
            array (
                'id' => 238,
                'kriteria_id' => 4,
                'penduduk_id' => 40,
                'nilai' => 71.13,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            238 => 
            array (
                'id' => 239,
                'kriteria_id' => 5,
                'penduduk_id' => 40,
                'nilai' => 60.41,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            239 => 
            array (
                'id' => 240,
                'kriteria_id' => 6,
                'penduduk_id' => 40,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            240 => 
            array (
                'id' => 241,
                'kriteria_id' => 1,
                'penduduk_id' => 41,
                'nilai' => 2970100.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            241 => 
            array (
                'id' => 242,
                'kriteria_id' => 2,
                'penduduk_id' => 41,
                'nilai' => 65.23,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            242 => 
            array (
                'id' => 243,
                'kriteria_id' => 3,
                'penduduk_id' => 41,
                'nilai' => 27012000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            243 => 
            array (
                'id' => 244,
                'kriteria_id' => 4,
                'penduduk_id' => 41,
                'nilai' => 48.79,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            244 => 
            array (
                'id' => 245,
                'kriteria_id' => 5,
                'penduduk_id' => 41,
                'nilai' => 71.65,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            245 => 
            array (
                'id' => 246,
                'kriteria_id' => 6,
                'penduduk_id' => 41,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            246 => 
            array (
                'id' => 247,
                'kriteria_id' => 1,
                'penduduk_id' => 42,
                'nilai' => 1214500.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            247 => 
            array (
                'id' => 248,
                'kriteria_id' => 2,
                'penduduk_id' => 42,
                'nilai' => 51.35,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            248 => 
            array (
                'id' => 249,
                'kriteria_id' => 3,
                'penduduk_id' => 42,
                'nilai' => 18728000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            249 => 
            array (
                'id' => 250,
                'kriteria_id' => 4,
                'penduduk_id' => 42,
                'nilai' => 82.33,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            250 => 
            array (
                'id' => 251,
                'kriteria_id' => 5,
                'penduduk_id' => 42,
                'nilai' => 77.88,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            251 => 
            array (
                'id' => 252,
                'kriteria_id' => 6,
                'penduduk_id' => 42,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            252 => 
            array (
                'id' => 253,
                'kriteria_id' => 1,
                'penduduk_id' => 43,
                'nilai' => 3306800.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            253 => 
            array (
                'id' => 254,
                'kriteria_id' => 2,
                'penduduk_id' => 43,
                'nilai' => 57.99,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            254 => 
            array (
                'id' => 255,
                'kriteria_id' => 3,
                'penduduk_id' => 43,
                'nilai' => 10488000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            255 => 
            array (
                'id' => 256,
                'kriteria_id' => 4,
                'penduduk_id' => 43,
                'nilai' => 96.94,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            256 => 
            array (
                'id' => 257,
                'kriteria_id' => 5,
                'penduduk_id' => 43,
                'nilai' => 34.78,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            257 => 
            array (
                'id' => 258,
                'kriteria_id' => 6,
                'penduduk_id' => 43,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            258 => 
            array (
                'id' => 259,
                'kriteria_id' => 1,
                'penduduk_id' => 44,
                'nilai' => 1718500.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            259 => 
            array (
                'id' => 260,
                'kriteria_id' => 2,
                'penduduk_id' => 44,
                'nilai' => 58.4,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            260 => 
            array (
                'id' => 261,
                'kriteria_id' => 3,
                'penduduk_id' => 44,
                'nilai' => 20344000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            261 => 
            array (
                'id' => 262,
                'kriteria_id' => 4,
                'penduduk_id' => 44,
                'nilai' => 47.42,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            262 => 
            array (
                'id' => 263,
                'kriteria_id' => 5,
                'penduduk_id' => 44,
                'nilai' => 79.77,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            263 => 
            array (
                'id' => 264,
                'kriteria_id' => 6,
                'penduduk_id' => 44,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            264 => 
            array (
                'id' => 265,
                'kriteria_id' => 1,
                'penduduk_id' => 45,
                'nilai' => 1296750.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            265 => 
            array (
                'id' => 266,
                'kriteria_id' => 2,
                'penduduk_id' => 45,
                'nilai' => 51.67,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            266 => 
            array (
                'id' => 267,
                'kriteria_id' => 3,
                'penduduk_id' => 45,
                'nilai' => 33444000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            267 => 
            array (
                'id' => 268,
                'kriteria_id' => 4,
                'penduduk_id' => 45,
                'nilai' => 79.61,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            268 => 
            array (
                'id' => 269,
                'kriteria_id' => 5,
                'penduduk_id' => 45,
                'nilai' => 94.63,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            269 => 
            array (
                'id' => 270,
                'kriteria_id' => 6,
                'penduduk_id' => 45,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            270 => 
            array (
                'id' => 271,
                'kriteria_id' => 1,
                'penduduk_id' => 46,
                'nilai' => 1535800.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            271 => 
            array (
                'id' => 272,
                'kriteria_id' => 2,
                'penduduk_id' => 46,
                'nilai' => 61.17,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            272 => 
            array (
                'id' => 273,
                'kriteria_id' => 3,
                'penduduk_id' => 46,
                'nilai' => 33964000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            273 => 
            array (
                'id' => 274,
                'kriteria_id' => 4,
                'penduduk_id' => 46,
                'nilai' => 84.69,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            274 => 
            array (
                'id' => 275,
                'kriteria_id' => 5,
                'penduduk_id' => 46,
                'nilai' => 31.92,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            275 => 
            array (
                'id' => 276,
                'kriteria_id' => 6,
                'penduduk_id' => 46,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            276 => 
            array (
                'id' => 277,
                'kriteria_id' => 1,
                'penduduk_id' => 47,
                'nilai' => 2850050.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            277 => 
            array (
                'id' => 278,
                'kriteria_id' => 2,
                'penduduk_id' => 47,
                'nilai' => 87.37,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            278 => 
            array (
                'id' => 279,
                'kriteria_id' => 3,
                'penduduk_id' => 47,
                'nilai' => 36408000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            279 => 
            array (
                'id' => 280,
                'kriteria_id' => 4,
                'penduduk_id' => 47,
                'nilai' => 69.87,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            280 => 
            array (
                'id' => 281,
                'kriteria_id' => 5,
                'penduduk_id' => 47,
                'nilai' => 25.89,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            281 => 
            array (
                'id' => 282,
                'kriteria_id' => 6,
                'penduduk_id' => 47,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            282 => 
            array (
                'id' => 283,
                'kriteria_id' => 1,
                'penduduk_id' => 48,
                'nilai' => 3323950.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            283 => 
            array (
                'id' => 284,
                'kriteria_id' => 2,
                'penduduk_id' => 48,
                'nilai' => 73.75,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            284 => 
            array (
                'id' => 285,
                'kriteria_id' => 3,
                'penduduk_id' => 48,
                'nilai' => 11816000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            285 => 
            array (
                'id' => 286,
                'kriteria_id' => 4,
                'penduduk_id' => 48,
                'nilai' => 50.01,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            286 => 
            array (
                'id' => 287,
                'kriteria_id' => 5,
                'penduduk_id' => 48,
                'nilai' => 69.65,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            287 => 
            array (
                'id' => 288,
                'kriteria_id' => 6,
                'penduduk_id' => 48,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            288 => 
            array (
                'id' => 289,
                'kriteria_id' => 1,
                'penduduk_id' => 49,
                'nilai' => 1312150.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            289 => 
            array (
                'id' => 290,
                'kriteria_id' => 2,
                'penduduk_id' => 49,
                'nilai' => 65.54,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            290 => 
            array (
                'id' => 291,
                'kriteria_id' => 3,
                'penduduk_id' => 49,
                'nilai' => 23768000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            291 => 
            array (
                'id' => 292,
                'kriteria_id' => 4,
                'penduduk_id' => 49,
                'nilai' => 93.15,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            292 => 
            array (
                'id' => 293,
                'kriteria_id' => 5,
                'penduduk_id' => 49,
                'nilai' => 89.6,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            293 => 
            array (
                'id' => 294,
                'kriteria_id' => 6,
                'penduduk_id' => 49,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            294 => 
            array (
                'id' => 295,
                'kriteria_id' => 1,
                'penduduk_id' => 50,
                'nilai' => 1529500.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            295 => 
            array (
                'id' => 296,
                'kriteria_id' => 2,
                'penduduk_id' => 50,
                'nilai' => 46.2,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            296 => 
            array (
                'id' => 297,
                'kriteria_id' => 3,
                'penduduk_id' => 50,
                'nilai' => 39708000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            297 => 
            array (
                'id' => 298,
                'kriteria_id' => 4,
                'penduduk_id' => 50,
                'nilai' => 59.95,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            298 => 
            array (
                'id' => 299,
                'kriteria_id' => 5,
                'penduduk_id' => 50,
                'nilai' => 81.9,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            299 => 
            array (
                'id' => 300,
                'kriteria_id' => 6,
                'penduduk_id' => 50,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            300 => 
            array (
                'id' => 301,
                'kriteria_id' => 1,
                'penduduk_id' => 51,
                'nilai' => 1131550.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            301 => 
            array (
                'id' => 302,
                'kriteria_id' => 2,
                'penduduk_id' => 51,
                'nilai' => 56.05,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            302 => 
            array (
                'id' => 303,
                'kriteria_id' => 3,
                'penduduk_id' => 51,
                'nilai' => 35508000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            303 => 
            array (
                'id' => 304,
                'kriteria_id' => 4,
                'penduduk_id' => 51,
                'nilai' => 93.43,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            304 => 
            array (
                'id' => 305,
                'kriteria_id' => 5,
                'penduduk_id' => 51,
                'nilai' => 62.34,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            305 => 
            array (
                'id' => 306,
                'kriteria_id' => 6,
                'penduduk_id' => 51,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            306 => 
            array (
                'id' => 307,
                'kriteria_id' => 1,
                'penduduk_id' => 52,
                'nilai' => 1594950.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            307 => 
            array (
                'id' => 308,
                'kriteria_id' => 2,
                'penduduk_id' => 52,
                'nilai' => 55.51,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            308 => 
            array (
                'id' => 309,
                'kriteria_id' => 3,
                'penduduk_id' => 52,
                'nilai' => 12008000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            309 => 
            array (
                'id' => 310,
                'kriteria_id' => 4,
                'penduduk_id' => 52,
                'nilai' => 66.08,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            310 => 
            array (
                'id' => 311,
                'kriteria_id' => 5,
                'penduduk_id' => 52,
                'nilai' => 72.14,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            311 => 
            array (
                'id' => 312,
                'kriteria_id' => 6,
                'penduduk_id' => 52,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            312 => 
            array (
                'id' => 313,
                'kriteria_id' => 1,
                'penduduk_id' => 53,
                'nilai' => 2898000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            313 => 
            array (
                'id' => 314,
                'kriteria_id' => 2,
                'penduduk_id' => 53,
                'nilai' => 69.03,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            314 => 
            array (
                'id' => 315,
                'kriteria_id' => 3,
                'penduduk_id' => 53,
                'nilai' => 35796000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            315 => 
            array (
                'id' => 316,
                'kriteria_id' => 4,
                'penduduk_id' => 53,
                'nilai' => 62.42,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            316 => 
            array (
                'id' => 317,
                'kriteria_id' => 5,
                'penduduk_id' => 53,
                'nilai' => 46.69,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            317 => 
            array (
                'id' => 318,
                'kriteria_id' => 6,
                'penduduk_id' => 53,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            318 => 
            array (
                'id' => 319,
                'kriteria_id' => 1,
                'penduduk_id' => 54,
                'nilai' => 2014950.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            319 => 
            array (
                'id' => 320,
                'kriteria_id' => 2,
                'penduduk_id' => 54,
                'nilai' => 91.98,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            320 => 
            array (
                'id' => 321,
                'kriteria_id' => 3,
                'penduduk_id' => 54,
                'nilai' => 22712000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            321 => 
            array (
                'id' => 322,
                'kriteria_id' => 4,
                'penduduk_id' => 54,
                'nilai' => 46.61,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            322 => 
            array (
                'id' => 323,
                'kriteria_id' => 5,
                'penduduk_id' => 54,
                'nilai' => 38.61,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            323 => 
            array (
                'id' => 324,
                'kriteria_id' => 6,
                'penduduk_id' => 54,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            324 => 
            array (
                'id' => 325,
                'kriteria_id' => 1,
                'penduduk_id' => 55,
                'nilai' => 2921450.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            325 => 
            array (
                'id' => 326,
                'kriteria_id' => 2,
                'penduduk_id' => 55,
                'nilai' => 28.55,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            326 => 
            array (
                'id' => 327,
                'kriteria_id' => 3,
                'penduduk_id' => 55,
                'nilai' => 37648000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            327 => 
            array (
                'id' => 328,
                'kriteria_id' => 4,
                'penduduk_id' => 55,
                'nilai' => 64.23,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            328 => 
            array (
                'id' => 329,
                'kriteria_id' => 5,
                'penduduk_id' => 55,
                'nilai' => 50.28,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            329 => 
            array (
                'id' => 330,
                'kriteria_id' => 6,
                'penduduk_id' => 55,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            330 => 
            array (
                'id' => 331,
                'kriteria_id' => 1,
                'penduduk_id' => 56,
                'nilai' => 1361850.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            331 => 
            array (
                'id' => 332,
                'kriteria_id' => 2,
                'penduduk_id' => 56,
                'nilai' => 42.28,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            332 => 
            array (
                'id' => 333,
                'kriteria_id' => 3,
                'penduduk_id' => 56,
                'nilai' => 33664000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            333 => 
            array (
                'id' => 334,
                'kriteria_id' => 4,
                'penduduk_id' => 56,
                'nilai' => 36.39,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            334 => 
            array (
                'id' => 335,
                'kriteria_id' => 5,
                'penduduk_id' => 56,
                'nilai' => 66.59,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            335 => 
            array (
                'id' => 336,
                'kriteria_id' => 6,
                'penduduk_id' => 56,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            336 => 
            array (
                'id' => 337,
                'kriteria_id' => 1,
                'penduduk_id' => 57,
                'nilai' => 2566550.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            337 => 
            array (
                'id' => 338,
                'kriteria_id' => 2,
                'penduduk_id' => 57,
                'nilai' => 83.7,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            338 => 
            array (
                'id' => 339,
                'kriteria_id' => 3,
                'penduduk_id' => 57,
                'nilai' => 34292000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            339 => 
            array (
                'id' => 340,
                'kriteria_id' => 4,
                'penduduk_id' => 57,
                'nilai' => 98.04,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            340 => 
            array (
                'id' => 341,
                'kriteria_id' => 5,
                'penduduk_id' => 57,
                'nilai' => 39.7,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            341 => 
            array (
                'id' => 342,
                'kriteria_id' => 6,
                'penduduk_id' => 57,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            342 => 
            array (
                'id' => 343,
                'kriteria_id' => 1,
                'penduduk_id' => 58,
                'nilai' => 3286850.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            343 => 
            array (
                'id' => 344,
                'kriteria_id' => 2,
                'penduduk_id' => 58,
                'nilai' => 99.43,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            344 => 
            array (
                'id' => 345,
                'kriteria_id' => 3,
                'penduduk_id' => 58,
                'nilai' => 34996000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            345 => 
            array (
                'id' => 346,
                'kriteria_id' => 4,
                'penduduk_id' => 58,
                'nilai' => 55.84,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            346 => 
            array (
                'id' => 347,
                'kriteria_id' => 5,
                'penduduk_id' => 58,
                'nilai' => 80.54,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            347 => 
            array (
                'id' => 348,
                'kriteria_id' => 6,
                'penduduk_id' => 58,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            348 => 
            array (
                'id' => 349,
                'kriteria_id' => 1,
                'penduduk_id' => 59,
                'nilai' => 2012500.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            349 => 
            array (
                'id' => 350,
                'kriteria_id' => 2,
                'penduduk_id' => 59,
                'nilai' => 70.04,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            350 => 
            array (
                'id' => 351,
                'kriteria_id' => 3,
                'penduduk_id' => 59,
                'nilai' => 38192000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            351 => 
            array (
                'id' => 352,
                'kriteria_id' => 4,
                'penduduk_id' => 59,
                'nilai' => 54.06,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            352 => 
            array (
                'id' => 353,
                'kriteria_id' => 5,
                'penduduk_id' => 59,
                'nilai' => 31.24,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            353 => 
            array (
                'id' => 354,
                'kriteria_id' => 6,
                'penduduk_id' => 59,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            354 => 
            array (
                'id' => 355,
                'kriteria_id' => 1,
                'penduduk_id' => 60,
                'nilai' => 2282350.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            355 => 
            array (
                'id' => 356,
                'kriteria_id' => 2,
                'penduduk_id' => 60,
                'nilai' => 67.51,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            356 => 
            array (
                'id' => 357,
                'kriteria_id' => 3,
                'penduduk_id' => 60,
                'nilai' => 23260000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            357 => 
            array (
                'id' => 358,
                'kriteria_id' => 4,
                'penduduk_id' => 60,
                'nilai' => 90.47,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            358 => 
            array (
                'id' => 359,
                'kriteria_id' => 5,
                'penduduk_id' => 60,
                'nilai' => 83.96,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            359 => 
            array (
                'id' => 360,
                'kriteria_id' => 6,
                'penduduk_id' => 60,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            360 => 
            array (
                'id' => 361,
                'kriteria_id' => 1,
                'penduduk_id' => 61,
                'nilai' => 1311800.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            361 => 
            array (
                'id' => 362,
                'kriteria_id' => 2,
                'penduduk_id' => 61,
                'nilai' => 62.96,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            362 => 
            array (
                'id' => 363,
                'kriteria_id' => 3,
                'penduduk_id' => 61,
                'nilai' => 11436000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            363 => 
            array (
                'id' => 364,
                'kriteria_id' => 4,
                'penduduk_id' => 61,
                'nilai' => 53.05,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            364 => 
            array (
                'id' => 365,
                'kriteria_id' => 5,
                'penduduk_id' => 61,
                'nilai' => 56.87,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            365 => 
            array (
                'id' => 366,
                'kriteria_id' => 6,
                'penduduk_id' => 61,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            366 => 
            array (
                'id' => 367,
                'kriteria_id' => 1,
                'penduduk_id' => 62,
                'nilai' => 1584800.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            367 => 
            array (
                'id' => 368,
                'kriteria_id' => 2,
                'penduduk_id' => 62,
                'nilai' => 89.56,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            368 => 
            array (
                'id' => 369,
                'kriteria_id' => 3,
                'penduduk_id' => 62,
                'nilai' => 36488000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            369 => 
            array (
                'id' => 370,
                'kriteria_id' => 4,
                'penduduk_id' => 62,
                'nilai' => 62.21,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            370 => 
            array (
                'id' => 371,
                'kriteria_id' => 5,
                'penduduk_id' => 62,
                'nilai' => 26.56,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            371 => 
            array (
                'id' => 372,
                'kriteria_id' => 6,
                'penduduk_id' => 62,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            372 => 
            array (
                'id' => 373,
                'kriteria_id' => 1,
                'penduduk_id' => 63,
                'nilai' => 1548050.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            373 => 
            array (
                'id' => 374,
                'kriteria_id' => 2,
                'penduduk_id' => 63,
                'nilai' => 34.93,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            374 => 
            array (
                'id' => 375,
                'kriteria_id' => 3,
                'penduduk_id' => 63,
                'nilai' => 12788000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            375 => 
            array (
                'id' => 376,
                'kriteria_id' => 4,
                'penduduk_id' => 63,
                'nilai' => 95.7,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            376 => 
            array (
                'id' => 377,
                'kriteria_id' => 5,
                'penduduk_id' => 63,
                'nilai' => 83.68,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            377 => 
            array (
                'id' => 378,
                'kriteria_id' => 6,
                'penduduk_id' => 63,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            378 => 
            array (
                'id' => 379,
                'kriteria_id' => 1,
                'penduduk_id' => 64,
                'nilai' => 3228400.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            379 => 
            array (
                'id' => 380,
                'kriteria_id' => 2,
                'penduduk_id' => 64,
                'nilai' => 57.11,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            380 => 
            array (
                'id' => 381,
                'kriteria_id' => 3,
                'penduduk_id' => 64,
                'nilai' => 31552000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            381 => 
            array (
                'id' => 382,
                'kriteria_id' => 4,
                'penduduk_id' => 64,
                'nilai' => 64.26,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            382 => 
            array (
                'id' => 383,
                'kriteria_id' => 5,
                'penduduk_id' => 64,
                'nilai' => 45.4,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            383 => 
            array (
                'id' => 384,
                'kriteria_id' => 6,
                'penduduk_id' => 64,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            384 => 
            array (
                'id' => 385,
                'kriteria_id' => 1,
                'penduduk_id' => 65,
                'nilai' => 936950.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            385 => 
            array (
                'id' => 386,
                'kriteria_id' => 2,
                'penduduk_id' => 65,
                'nilai' => 52.04,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            386 => 
            array (
                'id' => 387,
                'kriteria_id' => 3,
                'penduduk_id' => 65,
                'nilai' => 15940000.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            387 => 
            array (
                'id' => 388,
                'kriteria_id' => 4,
                'penduduk_id' => 65,
                'nilai' => 49.77,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            388 => 
            array (
                'id' => 389,
                'kriteria_id' => 5,
                'penduduk_id' => 65,
                'nilai' => 72.7,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            389 => 
            array (
                'id' => 390,
                'kriteria_id' => 6,
                'penduduk_id' => 65,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:32',
                'updated_at' => '2023-05-29 19:52:32',
            ),
            390 => 
            array (
                'id' => 391,
                'kriteria_id' => 1,
                'penduduk_id' => 66,
                'nilai' => 2396800.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            391 => 
            array (
                'id' => 392,
                'kriteria_id' => 2,
                'penduduk_id' => 66,
                'nilai' => 56.78,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            392 => 
            array (
                'id' => 393,
                'kriteria_id' => 3,
                'penduduk_id' => 66,
                'nilai' => 22648000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            393 => 
            array (
                'id' => 394,
                'kriteria_id' => 4,
                'penduduk_id' => 66,
                'nilai' => 46.64,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            394 => 
            array (
                'id' => 395,
                'kriteria_id' => 5,
                'penduduk_id' => 66,
                'nilai' => 89.31,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            395 => 
            array (
                'id' => 396,
                'kriteria_id' => 6,
                'penduduk_id' => 66,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            396 => 
            array (
                'id' => 397,
                'kriteria_id' => 1,
                'penduduk_id' => 67,
                'nilai' => 3433150.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            397 => 
            array (
                'id' => 398,
                'kriteria_id' => 2,
                'penduduk_id' => 67,
                'nilai' => 51.59,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            398 => 
            array (
                'id' => 399,
                'kriteria_id' => 3,
                'penduduk_id' => 67,
                'nilai' => 14632000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            399 => 
            array (
                'id' => 400,
                'kriteria_id' => 4,
                'penduduk_id' => 67,
                'nilai' => 67.01,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            400 => 
            array (
                'id' => 401,
                'kriteria_id' => 5,
                'penduduk_id' => 67,
                'nilai' => 34.99,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            401 => 
            array (
                'id' => 402,
                'kriteria_id' => 6,
                'penduduk_id' => 67,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            402 => 
            array (
                'id' => 403,
                'kriteria_id' => 1,
                'penduduk_id' => 68,
                'nilai' => 3362100.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            403 => 
            array (
                'id' => 404,
                'kriteria_id' => 2,
                'penduduk_id' => 68,
                'nilai' => 70.42,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            404 => 
            array (
                'id' => 405,
                'kriteria_id' => 3,
                'penduduk_id' => 68,
                'nilai' => 25968000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            405 => 
            array (
                'id' => 406,
                'kriteria_id' => 4,
                'penduduk_id' => 68,
                'nilai' => 37.16,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            406 => 
            array (
                'id' => 407,
                'kriteria_id' => 5,
                'penduduk_id' => 68,
                'nilai' => 35.34,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            407 => 
            array (
                'id' => 408,
                'kriteria_id' => 6,
                'penduduk_id' => 68,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            408 => 
            array (
                'id' => 409,
                'kriteria_id' => 1,
                'penduduk_id' => 69,
                'nilai' => 2750300.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            409 => 
            array (
                'id' => 410,
                'kriteria_id' => 2,
                'penduduk_id' => 69,
                'nilai' => 69.65,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            410 => 
            array (
                'id' => 411,
                'kriteria_id' => 3,
                'penduduk_id' => 69,
                'nilai' => 21244000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            411 => 
            array (
                'id' => 412,
                'kriteria_id' => 4,
                'penduduk_id' => 69,
                'nilai' => 42.16,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            412 => 
            array (
                'id' => 413,
                'kriteria_id' => 5,
                'penduduk_id' => 69,
                'nilai' => 73.06,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            413 => 
            array (
                'id' => 414,
                'kriteria_id' => 6,
                'penduduk_id' => 69,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            414 => 
            array (
                'id' => 415,
                'kriteria_id' => 1,
                'penduduk_id' => 70,
                'nilai' => 2450000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            415 => 
            array (
                'id' => 416,
                'kriteria_id' => 2,
                'penduduk_id' => 70,
                'nilai' => 44.64,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            416 => 
            array (
                'id' => 417,
                'kriteria_id' => 3,
                'penduduk_id' => 70,
                'nilai' => 17008000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            417 => 
            array (
                'id' => 418,
                'kriteria_id' => 4,
                'penduduk_id' => 70,
                'nilai' => 33.21,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            418 => 
            array (
                'id' => 419,
                'kriteria_id' => 5,
                'penduduk_id' => 70,
                'nilai' => 57.45,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            419 => 
            array (
                'id' => 420,
                'kriteria_id' => 6,
                'penduduk_id' => 70,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            420 => 
            array (
                'id' => 421,
                'kriteria_id' => 1,
                'penduduk_id' => 71,
                'nilai' => 2311750.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            421 => 
            array (
                'id' => 422,
                'kriteria_id' => 2,
                'penduduk_id' => 71,
                'nilai' => 37.3,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            422 => 
            array (
                'id' => 423,
                'kriteria_id' => 3,
                'penduduk_id' => 71,
                'nilai' => 14264000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            423 => 
            array (
                'id' => 424,
                'kriteria_id' => 4,
                'penduduk_id' => 71,
                'nilai' => 57.86,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            424 => 
            array (
                'id' => 425,
                'kriteria_id' => 5,
                'penduduk_id' => 71,
                'nilai' => 31.91,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            425 => 
            array (
                'id' => 426,
                'kriteria_id' => 6,
                'penduduk_id' => 71,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            426 => 
            array (
                'id' => 427,
                'kriteria_id' => 1,
                'penduduk_id' => 72,
                'nilai' => 2015300.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            427 => 
            array (
                'id' => 428,
                'kriteria_id' => 2,
                'penduduk_id' => 72,
                'nilai' => 80.17,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            428 => 
            array (
                'id' => 429,
                'kriteria_id' => 3,
                'penduduk_id' => 72,
                'nilai' => 10724000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            429 => 
            array (
                'id' => 430,
                'kriteria_id' => 4,
                'penduduk_id' => 72,
                'nilai' => 63.44,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            430 => 
            array (
                'id' => 431,
                'kriteria_id' => 5,
                'penduduk_id' => 72,
                'nilai' => 86.41,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            431 => 
            array (
                'id' => 432,
                'kriteria_id' => 6,
                'penduduk_id' => 72,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            432 => 
            array (
                'id' => 433,
                'kriteria_id' => 1,
                'penduduk_id' => 73,
                'nilai' => 1274350.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            433 => 
            array (
                'id' => 434,
                'kriteria_id' => 2,
                'penduduk_id' => 73,
                'nilai' => 80.67,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            434 => 
            array (
                'id' => 435,
                'kriteria_id' => 3,
                'penduduk_id' => 73,
                'nilai' => 29580000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            435 => 
            array (
                'id' => 436,
                'kriteria_id' => 4,
                'penduduk_id' => 73,
                'nilai' => 73.52,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            436 => 
            array (
                'id' => 437,
                'kriteria_id' => 5,
                'penduduk_id' => 73,
                'nilai' => 78.02,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            437 => 
            array (
                'id' => 438,
                'kriteria_id' => 6,
                'penduduk_id' => 73,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            438 => 
            array (
                'id' => 439,
                'kriteria_id' => 1,
                'penduduk_id' => 74,
                'nilai' => 1705550.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            439 => 
            array (
                'id' => 440,
                'kriteria_id' => 2,
                'penduduk_id' => 74,
                'nilai' => 61.22,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            440 => 
            array (
                'id' => 441,
                'kriteria_id' => 3,
                'penduduk_id' => 74,
                'nilai' => 16988000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            441 => 
            array (
                'id' => 442,
                'kriteria_id' => 4,
                'penduduk_id' => 74,
                'nilai' => 78.43,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            442 => 
            array (
                'id' => 443,
                'kriteria_id' => 5,
                'penduduk_id' => 74,
                'nilai' => 69.05,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            443 => 
            array (
                'id' => 444,
                'kriteria_id' => 6,
                'penduduk_id' => 74,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            444 => 
            array (
                'id' => 445,
                'kriteria_id' => 1,
                'penduduk_id' => 75,
                'nilai' => 3401650.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            445 => 
            array (
                'id' => 446,
                'kriteria_id' => 2,
                'penduduk_id' => 75,
                'nilai' => 35.9,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            446 => 
            array (
                'id' => 447,
                'kriteria_id' => 3,
                'penduduk_id' => 75,
                'nilai' => 35548000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            447 => 
            array (
                'id' => 448,
                'kriteria_id' => 4,
                'penduduk_id' => 75,
                'nilai' => 26.27,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            448 => 
            array (
                'id' => 449,
                'kriteria_id' => 5,
                'penduduk_id' => 75,
                'nilai' => 60.43,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            449 => 
            array (
                'id' => 450,
                'kriteria_id' => 6,
                'penduduk_id' => 75,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            450 => 
            array (
                'id' => 451,
                'kriteria_id' => 1,
                'penduduk_id' => 76,
                'nilai' => 3328850.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            451 => 
            array (
                'id' => 452,
                'kriteria_id' => 2,
                'penduduk_id' => 76,
                'nilai' => 52.06,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            452 => 
            array (
                'id' => 453,
                'kriteria_id' => 3,
                'penduduk_id' => 76,
                'nilai' => 34696000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            453 => 
            array (
                'id' => 454,
                'kriteria_id' => 4,
                'penduduk_id' => 76,
                'nilai' => 37.25,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            454 => 
            array (
                'id' => 455,
                'kriteria_id' => 5,
                'penduduk_id' => 76,
                'nilai' => 97.74,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            455 => 
            array (
                'id' => 456,
                'kriteria_id' => 6,
                'penduduk_id' => 76,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            456 => 
            array (
                'id' => 457,
                'kriteria_id' => 1,
                'penduduk_id' => 77,
                'nilai' => 2501800.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            457 => 
            array (
                'id' => 458,
                'kriteria_id' => 2,
                'penduduk_id' => 77,
                'nilai' => 40.67,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            458 => 
            array (
                'id' => 459,
                'kriteria_id' => 3,
                'penduduk_id' => 77,
                'nilai' => 25872000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            459 => 
            array (
                'id' => 460,
                'kriteria_id' => 4,
                'penduduk_id' => 77,
                'nilai' => 91.84,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            460 => 
            array (
                'id' => 461,
                'kriteria_id' => 5,
                'penduduk_id' => 77,
                'nilai' => 83.46,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            461 => 
            array (
                'id' => 462,
                'kriteria_id' => 6,
                'penduduk_id' => 77,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            462 => 
            array (
                'id' => 463,
                'kriteria_id' => 1,
                'penduduk_id' => 78,
                'nilai' => 1212050.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            463 => 
            array (
                'id' => 464,
                'kriteria_id' => 2,
                'penduduk_id' => 78,
                'nilai' => 67.03,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            464 => 
            array (
                'id' => 465,
                'kriteria_id' => 3,
                'penduduk_id' => 78,
                'nilai' => 14176000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            465 => 
            array (
                'id' => 466,
                'kriteria_id' => 4,
                'penduduk_id' => 78,
                'nilai' => 80.31,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            466 => 
            array (
                'id' => 467,
                'kriteria_id' => 5,
                'penduduk_id' => 78,
                'nilai' => 30.15,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            467 => 
            array (
                'id' => 468,
                'kriteria_id' => 6,
                'penduduk_id' => 78,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            468 => 
            array (
                'id' => 469,
                'kriteria_id' => 1,
                'penduduk_id' => 79,
                'nilai' => 1390900.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            469 => 
            array (
                'id' => 470,
                'kriteria_id' => 2,
                'penduduk_id' => 79,
                'nilai' => 53.21,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            470 => 
            array (
                'id' => 471,
                'kriteria_id' => 3,
                'penduduk_id' => 79,
                'nilai' => 31284000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            471 => 
            array (
                'id' => 472,
                'kriteria_id' => 4,
                'penduduk_id' => 79,
                'nilai' => 77.45,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            472 => 
            array (
                'id' => 473,
                'kriteria_id' => 5,
                'penduduk_id' => 79,
                'nilai' => 57.89,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            473 => 
            array (
                'id' => 474,
                'kriteria_id' => 6,
                'penduduk_id' => 79,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            474 => 
            array (
                'id' => 475,
                'kriteria_id' => 1,
                'penduduk_id' => 80,
                'nilai' => 2425850.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            475 => 
            array (
                'id' => 476,
                'kriteria_id' => 2,
                'penduduk_id' => 80,
                'nilai' => 92.28,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            476 => 
            array (
                'id' => 477,
                'kriteria_id' => 3,
                'penduduk_id' => 80,
                'nilai' => 25488000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            477 => 
            array (
                'id' => 478,
                'kriteria_id' => 4,
                'penduduk_id' => 80,
                'nilai' => 42.83,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            478 => 
            array (
                'id' => 479,
                'kriteria_id' => 5,
                'penduduk_id' => 80,
                'nilai' => 48.21,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            479 => 
            array (
                'id' => 480,
                'kriteria_id' => 6,
                'penduduk_id' => 80,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            480 => 
            array (
                'id' => 481,
                'kriteria_id' => 1,
                'penduduk_id' => 81,
                'nilai' => 1161300.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            481 => 
            array (
                'id' => 482,
                'kriteria_id' => 2,
                'penduduk_id' => 81,
                'nilai' => 80.94,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            482 => 
            array (
                'id' => 483,
                'kriteria_id' => 3,
                'penduduk_id' => 81,
                'nilai' => 12520000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            483 => 
            array (
                'id' => 484,
                'kriteria_id' => 4,
                'penduduk_id' => 81,
                'nilai' => 44.99,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            484 => 
            array (
                'id' => 485,
                'kriteria_id' => 5,
                'penduduk_id' => 81,
                'nilai' => 86.77,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            485 => 
            array (
                'id' => 486,
                'kriteria_id' => 6,
                'penduduk_id' => 81,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            486 => 
            array (
                'id' => 487,
                'kriteria_id' => 1,
                'penduduk_id' => 82,
                'nilai' => 1393700.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            487 => 
            array (
                'id' => 488,
                'kriteria_id' => 2,
                'penduduk_id' => 82,
                'nilai' => 34.15,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            488 => 
            array (
                'id' => 489,
                'kriteria_id' => 3,
                'penduduk_id' => 82,
                'nilai' => 17148000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            489 => 
            array (
                'id' => 490,
                'kriteria_id' => 4,
                'penduduk_id' => 82,
                'nilai' => 51.38,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            490 => 
            array (
                'id' => 491,
                'kriteria_id' => 5,
                'penduduk_id' => 82,
                'nilai' => 41.84,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            491 => 
            array (
                'id' => 492,
                'kriteria_id' => 6,
                'penduduk_id' => 82,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            492 => 
            array (
                'id' => 493,
                'kriteria_id' => 1,
                'penduduk_id' => 83,
                'nilai' => 2358300.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            493 => 
            array (
                'id' => 494,
                'kriteria_id' => 2,
                'penduduk_id' => 83,
                'nilai' => 66.37,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            494 => 
            array (
                'id' => 495,
                'kriteria_id' => 3,
                'penduduk_id' => 83,
                'nilai' => 39088000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            495 => 
            array (
                'id' => 496,
                'kriteria_id' => 4,
                'penduduk_id' => 83,
                'nilai' => 92.53,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            496 => 
            array (
                'id' => 497,
                'kriteria_id' => 5,
                'penduduk_id' => 83,
                'nilai' => 40.47,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            497 => 
            array (
                'id' => 498,
                'kriteria_id' => 6,
                'penduduk_id' => 83,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            498 => 
            array (
                'id' => 499,
                'kriteria_id' => 1,
                'penduduk_id' => 84,
                'nilai' => 1621900.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            499 => 
            array (
                'id' => 500,
                'kriteria_id' => 2,
                'penduduk_id' => 84,
                'nilai' => 93.6,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
        ));
        \DB::table('penduduk_nilai')->insert(array (
            0 => 
            array (
                'id' => 501,
                'kriteria_id' => 3,
                'penduduk_id' => 84,
                'nilai' => 25120000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            1 => 
            array (
                'id' => 502,
                'kriteria_id' => 4,
                'penduduk_id' => 84,
                'nilai' => 73.7,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            2 => 
            array (
                'id' => 503,
                'kriteria_id' => 5,
                'penduduk_id' => 84,
                'nilai' => 78.46,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            3 => 
            array (
                'id' => 504,
                'kriteria_id' => 6,
                'penduduk_id' => 84,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            4 => 
            array (
                'id' => 505,
                'kriteria_id' => 1,
                'penduduk_id' => 85,
                'nilai' => 3093300.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            5 => 
            array (
                'id' => 506,
                'kriteria_id' => 2,
                'penduduk_id' => 85,
                'nilai' => 68.24,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            6 => 
            array (
                'id' => 507,
                'kriteria_id' => 3,
                'penduduk_id' => 85,
                'nilai' => 37720000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            7 => 
            array (
                'id' => 508,
                'kriteria_id' => 4,
                'penduduk_id' => 85,
                'nilai' => 42.57,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            8 => 
            array (
                'id' => 509,
                'kriteria_id' => 5,
                'penduduk_id' => 85,
                'nilai' => 74.14,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            9 => 
            array (
                'id' => 510,
                'kriteria_id' => 6,
                'penduduk_id' => 85,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            10 => 
            array (
                'id' => 511,
                'kriteria_id' => 1,
                'penduduk_id' => 86,
                'nilai' => 3199000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            11 => 
            array (
                'id' => 512,
                'kriteria_id' => 2,
                'penduduk_id' => 86,
                'nilai' => 79.76,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            12 => 
            array (
                'id' => 513,
                'kriteria_id' => 3,
                'penduduk_id' => 86,
                'nilai' => 35640000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            13 => 
            array (
                'id' => 514,
                'kriteria_id' => 4,
                'penduduk_id' => 86,
                'nilai' => 98.98,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            14 => 
            array (
                'id' => 515,
                'kriteria_id' => 5,
                'penduduk_id' => 86,
                'nilai' => 27.15,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            15 => 
            array (
                'id' => 516,
                'kriteria_id' => 6,
                'penduduk_id' => 86,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            16 => 
            array (
                'id' => 517,
                'kriteria_id' => 1,
                'penduduk_id' => 87,
                'nilai' => 3053750.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            17 => 
            array (
                'id' => 518,
                'kriteria_id' => 2,
                'penduduk_id' => 87,
                'nilai' => 52.28,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            18 => 
            array (
                'id' => 519,
                'kriteria_id' => 3,
                'penduduk_id' => 87,
                'nilai' => 26804000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            19 => 
            array (
                'id' => 520,
                'kriteria_id' => 4,
                'penduduk_id' => 87,
                'nilai' => 32.97,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            20 => 
            array (
                'id' => 521,
                'kriteria_id' => 5,
                'penduduk_id' => 87,
                'nilai' => 29.74,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            21 => 
            array (
                'id' => 522,
                'kriteria_id' => 6,
                'penduduk_id' => 87,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            22 => 
            array (
                'id' => 523,
                'kriteria_id' => 1,
                'penduduk_id' => 88,
                'nilai' => 998200.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            23 => 
            array (
                'id' => 524,
                'kriteria_id' => 2,
                'penduduk_id' => 88,
                'nilai' => 62.67,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            24 => 
            array (
                'id' => 525,
                'kriteria_id' => 3,
                'penduduk_id' => 88,
                'nilai' => 24496000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            25 => 
            array (
                'id' => 526,
                'kriteria_id' => 4,
                'penduduk_id' => 88,
                'nilai' => 96.92,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            26 => 
            array (
                'id' => 527,
                'kriteria_id' => 5,
                'penduduk_id' => 88,
                'nilai' => 85.28,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            27 => 
            array (
                'id' => 528,
                'kriteria_id' => 6,
                'penduduk_id' => 88,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            28 => 
            array (
                'id' => 529,
                'kriteria_id' => 1,
                'penduduk_id' => 89,
                'nilai' => 3459050.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            29 => 
            array (
                'id' => 530,
                'kriteria_id' => 2,
                'penduduk_id' => 89,
                'nilai' => 92.4,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            30 => 
            array (
                'id' => 531,
                'kriteria_id' => 3,
                'penduduk_id' => 89,
                'nilai' => 16164000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            31 => 
            array (
                'id' => 532,
                'kriteria_id' => 4,
                'penduduk_id' => 89,
                'nilai' => 34.97,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            32 => 
            array (
                'id' => 533,
                'kriteria_id' => 5,
                'penduduk_id' => 89,
                'nilai' => 45.94,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            33 => 
            array (
                'id' => 534,
                'kriteria_id' => 6,
                'penduduk_id' => 89,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            34 => 
            array (
                'id' => 535,
                'kriteria_id' => 1,
                'penduduk_id' => 90,
                'nilai' => 2046800.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            35 => 
            array (
                'id' => 536,
                'kriteria_id' => 2,
                'penduduk_id' => 90,
                'nilai' => 62.55,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            36 => 
            array (
                'id' => 537,
                'kriteria_id' => 3,
                'penduduk_id' => 90,
                'nilai' => 36632000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            37 => 
            array (
                'id' => 538,
                'kriteria_id' => 4,
                'penduduk_id' => 90,
                'nilai' => 65.48,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            38 => 
            array (
                'id' => 539,
                'kriteria_id' => 5,
                'penduduk_id' => 90,
                'nilai' => 61.87,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            39 => 
            array (
                'id' => 540,
                'kriteria_id' => 6,
                'penduduk_id' => 90,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            40 => 
            array (
                'id' => 541,
                'kriteria_id' => 1,
                'penduduk_id' => 91,
                'nilai' => 1132950.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            41 => 
            array (
                'id' => 542,
                'kriteria_id' => 2,
                'penduduk_id' => 91,
                'nilai' => 93.85,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            42 => 
            array (
                'id' => 543,
                'kriteria_id' => 3,
                'penduduk_id' => 91,
                'nilai' => 16444000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            43 => 
            array (
                'id' => 544,
                'kriteria_id' => 4,
                'penduduk_id' => 91,
                'nilai' => 97.03,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            44 => 
            array (
                'id' => 545,
                'kriteria_id' => 5,
                'penduduk_id' => 91,
                'nilai' => 74.45,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            45 => 
            array (
                'id' => 546,
                'kriteria_id' => 6,
                'penduduk_id' => 91,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            46 => 
            array (
                'id' => 547,
                'kriteria_id' => 1,
                'penduduk_id' => 92,
                'nilai' => 1750000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            47 => 
            array (
                'id' => 548,
                'kriteria_id' => 2,
                'penduduk_id' => 92,
                'nilai' => 80.88,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            48 => 
            array (
                'id' => 549,
                'kriteria_id' => 3,
                'penduduk_id' => 92,
                'nilai' => 19752000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            49 => 
            array (
                'id' => 550,
                'kriteria_id' => 4,
                'penduduk_id' => 92,
                'nilai' => 64.47,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            50 => 
            array (
                'id' => 551,
                'kriteria_id' => 5,
                'penduduk_id' => 92,
                'nilai' => 85.76,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            51 => 
            array (
                'id' => 552,
                'kriteria_id' => 6,
                'penduduk_id' => 92,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            52 => 
            array (
                'id' => 553,
                'kriteria_id' => 1,
                'penduduk_id' => 93,
                'nilai' => 3258850.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            53 => 
            array (
                'id' => 554,
                'kriteria_id' => 2,
                'penduduk_id' => 93,
                'nilai' => 75.47,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            54 => 
            array (
                'id' => 555,
                'kriteria_id' => 3,
                'penduduk_id' => 93,
                'nilai' => 21004000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            55 => 
            array (
                'id' => 556,
                'kriteria_id' => 4,
                'penduduk_id' => 93,
                'nilai' => 32.73,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            56 => 
            array (
                'id' => 557,
                'kriteria_id' => 5,
                'penduduk_id' => 93,
                'nilai' => 95.18,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            57 => 
            array (
                'id' => 558,
                'kriteria_id' => 6,
                'penduduk_id' => 93,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            58 => 
            array (
                'id' => 559,
                'kriteria_id' => 1,
                'penduduk_id' => 94,
                'nilai' => 1122100.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            59 => 
            array (
                'id' => 560,
                'kriteria_id' => 2,
                'penduduk_id' => 94,
                'nilai' => 82.22,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            60 => 
            array (
                'id' => 561,
                'kriteria_id' => 3,
                'penduduk_id' => 94,
                'nilai' => 18616000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            61 => 
            array (
                'id' => 562,
                'kriteria_id' => 4,
                'penduduk_id' => 94,
                'nilai' => 50.34,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            62 => 
            array (
                'id' => 563,
                'kriteria_id' => 5,
                'penduduk_id' => 94,
                'nilai' => 83.19,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            63 => 
            array (
                'id' => 564,
                'kriteria_id' => 6,
                'penduduk_id' => 94,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            64 => 
            array (
                'id' => 565,
                'kriteria_id' => 1,
                'penduduk_id' => 95,
                'nilai' => 1670200.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            65 => 
            array (
                'id' => 566,
                'kriteria_id' => 2,
                'penduduk_id' => 95,
                'nilai' => 34.55,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            66 => 
            array (
                'id' => 567,
                'kriteria_id' => 3,
                'penduduk_id' => 95,
                'nilai' => 27700000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            67 => 
            array (
                'id' => 568,
                'kriteria_id' => 4,
                'penduduk_id' => 95,
                'nilai' => 29.45,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            68 => 
            array (
                'id' => 569,
                'kriteria_id' => 5,
                'penduduk_id' => 95,
                'nilai' => 70.01,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            69 => 
            array (
                'id' => 570,
                'kriteria_id' => 6,
                'penduduk_id' => 95,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            70 => 
            array (
                'id' => 571,
                'kriteria_id' => 1,
                'penduduk_id' => 96,
                'nilai' => 2793700.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            71 => 
            array (
                'id' => 572,
                'kriteria_id' => 2,
                'penduduk_id' => 96,
                'nilai' => 60.23,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            72 => 
            array (
                'id' => 573,
                'kriteria_id' => 3,
                'penduduk_id' => 96,
                'nilai' => 27384000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            73 => 
            array (
                'id' => 574,
                'kriteria_id' => 4,
                'penduduk_id' => 96,
                'nilai' => 73.78,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            74 => 
            array (
                'id' => 575,
                'kriteria_id' => 5,
                'penduduk_id' => 96,
                'nilai' => 34.81,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            75 => 
            array (
                'id' => 576,
                'kriteria_id' => 6,
                'penduduk_id' => 96,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            76 => 
            array (
                'id' => 577,
                'kriteria_id' => 1,
                'penduduk_id' => 97,
                'nilai' => 3293850.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            77 => 
            array (
                'id' => 578,
                'kriteria_id' => 2,
                'penduduk_id' => 97,
                'nilai' => 68.95,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            78 => 
            array (
                'id' => 579,
                'kriteria_id' => 3,
                'penduduk_id' => 97,
                'nilai' => 35124000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            79 => 
            array (
                'id' => 580,
                'kriteria_id' => 4,
                'penduduk_id' => 97,
                'nilai' => 48.29,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            80 => 
            array (
                'id' => 581,
                'kriteria_id' => 5,
                'penduduk_id' => 97,
                'nilai' => 61.19,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            81 => 
            array (
                'id' => 582,
                'kriteria_id' => 6,
                'penduduk_id' => 97,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            82 => 
            array (
                'id' => 583,
                'kriteria_id' => 1,
                'penduduk_id' => 98,
                'nilai' => 3232250.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            83 => 
            array (
                'id' => 584,
                'kriteria_id' => 2,
                'penduduk_id' => 98,
                'nilai' => 26.73,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            84 => 
            array (
                'id' => 585,
                'kriteria_id' => 3,
                'penduduk_id' => 98,
                'nilai' => 24536000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            85 => 
            array (
                'id' => 586,
                'kriteria_id' => 4,
                'penduduk_id' => 98,
                'nilai' => 95.06,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            86 => 
            array (
                'id' => 587,
                'kriteria_id' => 5,
                'penduduk_id' => 98,
                'nilai' => 58.87,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            87 => 
            array (
                'id' => 588,
                'kriteria_id' => 6,
                'penduduk_id' => 98,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            88 => 
            array (
                'id' => 589,
                'kriteria_id' => 1,
                'penduduk_id' => 99,
                'nilai' => 2537500.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            89 => 
            array (
                'id' => 590,
                'kriteria_id' => 2,
                'penduduk_id' => 99,
                'nilai' => 81.27,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            90 => 
            array (
                'id' => 591,
                'kriteria_id' => 3,
                'penduduk_id' => 99,
                'nilai' => 33268000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            91 => 
            array (
                'id' => 592,
                'kriteria_id' => 4,
                'penduduk_id' => 99,
                'nilai' => 60.54,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            92 => 
            array (
                'id' => 593,
                'kriteria_id' => 5,
                'penduduk_id' => 99,
                'nilai' => 54.75,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            93 => 
            array (
                'id' => 594,
                'kriteria_id' => 6,
                'penduduk_id' => 99,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            94 => 
            array (
                'id' => 595,
                'kriteria_id' => 1,
                'penduduk_id' => 100,
                'nilai' => 3359650.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            95 => 
            array (
                'id' => 596,
                'kriteria_id' => 2,
                'penduduk_id' => 100,
                'nilai' => 90.99,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            96 => 
            array (
                'id' => 597,
                'kriteria_id' => 3,
                'penduduk_id' => 100,
                'nilai' => 18868000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            97 => 
            array (
                'id' => 598,
                'kriteria_id' => 4,
                'penduduk_id' => 100,
                'nilai' => 47.68,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            98 => 
            array (
                'id' => 599,
                'kriteria_id' => 5,
                'penduduk_id' => 100,
                'nilai' => 66.93,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            99 => 
            array (
                'id' => 600,
                'kriteria_id' => 6,
                'penduduk_id' => 100,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            100 => 
            array (
                'id' => 601,
                'kriteria_id' => 1,
                'penduduk_id' => 101,
                'nilai' => 2502150.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            101 => 
            array (
                'id' => 602,
                'kriteria_id' => 2,
                'penduduk_id' => 101,
                'nilai' => 92.36,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            102 => 
            array (
                'id' => 603,
                'kriteria_id' => 3,
                'penduduk_id' => 101,
                'nilai' => 12596000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            103 => 
            array (
                'id' => 604,
                'kriteria_id' => 4,
                'penduduk_id' => 101,
                'nilai' => 38.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            104 => 
            array (
                'id' => 605,
                'kriteria_id' => 5,
                'penduduk_id' => 101,
                'nilai' => 46.85,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            105 => 
            array (
                'id' => 606,
                'kriteria_id' => 6,
                'penduduk_id' => 101,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            106 => 
            array (
                'id' => 607,
                'kriteria_id' => 1,
                'penduduk_id' => 102,
                'nilai' => 1318450.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            107 => 
            array (
                'id' => 608,
                'kriteria_id' => 2,
                'penduduk_id' => 102,
                'nilai' => 92.39,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            108 => 
            array (
                'id' => 609,
                'kriteria_id' => 3,
                'penduduk_id' => 102,
                'nilai' => 34424000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            109 => 
            array (
                'id' => 610,
                'kriteria_id' => 4,
                'penduduk_id' => 102,
                'nilai' => 76.21,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            110 => 
            array (
                'id' => 611,
                'kriteria_id' => 5,
                'penduduk_id' => 102,
                'nilai' => 42.58,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            111 => 
            array (
                'id' => 612,
                'kriteria_id' => 6,
                'penduduk_id' => 102,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            112 => 
            array (
                'id' => 613,
                'kriteria_id' => 1,
                'penduduk_id' => 103,
                'nilai' => 2877000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            113 => 
            array (
                'id' => 614,
                'kriteria_id' => 2,
                'penduduk_id' => 103,
                'nilai' => 36.63,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            114 => 
            array (
                'id' => 615,
                'kriteria_id' => 3,
                'penduduk_id' => 103,
                'nilai' => 22648000.0,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            115 => 
            array (
                'id' => 616,
                'kriteria_id' => 4,
                'penduduk_id' => 103,
                'nilai' => 63.91,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            116 => 
            array (
                'id' => 617,
                'kriteria_id' => 5,
                'penduduk_id' => 103,
                'nilai' => 57.35,
                'created_at' => '2023-05-29 19:52:33',
                'updated_at' => '2023-05-29 19:52:33',
            ),
            117 => 
            array (
                'id' => 618,
                'kriteria_id' => 6,
                'penduduk_id' => 103,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            118 => 
            array (
                'id' => 619,
                'kriteria_id' => 1,
                'penduduk_id' => 104,
                'nilai' => 3481450.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            119 => 
            array (
                'id' => 620,
                'kriteria_id' => 2,
                'penduduk_id' => 104,
                'nilai' => 68.33,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            120 => 
            array (
                'id' => 621,
                'kriteria_id' => 3,
                'penduduk_id' => 104,
                'nilai' => 27044000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            121 => 
            array (
                'id' => 622,
                'kriteria_id' => 4,
                'penduduk_id' => 104,
                'nilai' => 38.66,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            122 => 
            array (
                'id' => 623,
                'kriteria_id' => 5,
                'penduduk_id' => 104,
                'nilai' => 41.97,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            123 => 
            array (
                'id' => 624,
                'kriteria_id' => 6,
                'penduduk_id' => 104,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            124 => 
            array (
                'id' => 625,
                'kriteria_id' => 1,
                'penduduk_id' => 105,
                'nilai' => 2403800.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            125 => 
            array (
                'id' => 626,
                'kriteria_id' => 2,
                'penduduk_id' => 105,
                'nilai' => 83.37,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            126 => 
            array (
                'id' => 627,
                'kriteria_id' => 3,
                'penduduk_id' => 105,
                'nilai' => 32352000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            127 => 
            array (
                'id' => 628,
                'kriteria_id' => 4,
                'penduduk_id' => 105,
                'nilai' => 62.17,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            128 => 
            array (
                'id' => 629,
                'kriteria_id' => 5,
                'penduduk_id' => 105,
                'nilai' => 51.16,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            129 => 
            array (
                'id' => 630,
                'kriteria_id' => 6,
                'penduduk_id' => 105,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            130 => 
            array (
                'id' => 631,
                'kriteria_id' => 1,
                'penduduk_id' => 106,
                'nilai' => 2489550.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            131 => 
            array (
                'id' => 632,
                'kriteria_id' => 2,
                'penduduk_id' => 106,
                'nilai' => 60.41,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            132 => 
            array (
                'id' => 633,
                'kriteria_id' => 3,
                'penduduk_id' => 106,
                'nilai' => 37372000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            133 => 
            array (
                'id' => 634,
                'kriteria_id' => 4,
                'penduduk_id' => 106,
                'nilai' => 67.29,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            134 => 
            array (
                'id' => 635,
                'kriteria_id' => 5,
                'penduduk_id' => 106,
                'nilai' => 39.48,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            135 => 
            array (
                'id' => 636,
                'kriteria_id' => 6,
                'penduduk_id' => 106,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            136 => 
            array (
                'id' => 637,
                'kriteria_id' => 1,
                'penduduk_id' => 107,
                'nilai' => 1707650.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            137 => 
            array (
                'id' => 638,
                'kriteria_id' => 2,
                'penduduk_id' => 107,
                'nilai' => 71.65,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            138 => 
            array (
                'id' => 639,
                'kriteria_id' => 3,
                'penduduk_id' => 107,
                'nilai' => 37516000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            139 => 
            array (
                'id' => 640,
                'kriteria_id' => 4,
                'penduduk_id' => 107,
                'nilai' => 37.78,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            140 => 
            array (
                'id' => 641,
                'kriteria_id' => 5,
                'penduduk_id' => 107,
                'nilai' => 40.91,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            141 => 
            array (
                'id' => 642,
                'kriteria_id' => 6,
                'penduduk_id' => 107,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            142 => 
            array (
                'id' => 643,
                'kriteria_id' => 1,
                'penduduk_id' => 108,
                'nilai' => 2881550.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            143 => 
            array (
                'id' => 644,
                'kriteria_id' => 2,
                'penduduk_id' => 108,
                'nilai' => 77.88,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            144 => 
            array (
                'id' => 645,
                'kriteria_id' => 3,
                'penduduk_id' => 108,
                'nilai' => 35504000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            145 => 
            array (
                'id' => 646,
                'kriteria_id' => 4,
                'penduduk_id' => 108,
                'nilai' => 91.19,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            146 => 
            array (
                'id' => 647,
                'kriteria_id' => 5,
                'penduduk_id' => 108,
                'nilai' => 57.95,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            147 => 
            array (
                'id' => 648,
                'kriteria_id' => 6,
                'penduduk_id' => 108,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            148 => 
            array (
                'id' => 649,
                'kriteria_id' => 1,
                'penduduk_id' => 109,
                'nilai' => 3392900.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            149 => 
            array (
                'id' => 650,
                'kriteria_id' => 2,
                'penduduk_id' => 109,
                'nilai' => 34.78,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            150 => 
            array (
                'id' => 651,
                'kriteria_id' => 3,
                'penduduk_id' => 109,
                'nilai' => 34832000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            151 => 
            array (
                'id' => 652,
                'kriteria_id' => 4,
                'penduduk_id' => 109,
                'nilai' => 98.67,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            152 => 
            array (
                'id' => 653,
                'kriteria_id' => 5,
                'penduduk_id' => 109,
                'nilai' => 34.39,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            153 => 
            array (
                'id' => 654,
                'kriteria_id' => 6,
                'penduduk_id' => 109,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            154 => 
            array (
                'id' => 655,
                'kriteria_id' => 1,
                'penduduk_id' => 110,
                'nilai' => 1659700.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            155 => 
            array (
                'id' => 656,
                'kriteria_id' => 2,
                'penduduk_id' => 110,
                'nilai' => 79.77,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            156 => 
            array (
                'id' => 657,
                'kriteria_id' => 3,
                'penduduk_id' => 110,
                'nilai' => 38440000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            157 => 
            array (
                'id' => 658,
                'kriteria_id' => 4,
                'penduduk_id' => 110,
                'nilai' => 90.86,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            158 => 
            array (
                'id' => 659,
                'kriteria_id' => 5,
                'penduduk_id' => 110,
                'nilai' => 80.59,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            159 => 
            array (
                'id' => 660,
                'kriteria_id' => 6,
                'penduduk_id' => 110,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            160 => 
            array (
                'id' => 661,
                'kriteria_id' => 1,
                'penduduk_id' => 111,
                'nilai' => 2786350.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            161 => 
            array (
                'id' => 662,
                'kriteria_id' => 2,
                'penduduk_id' => 111,
                'nilai' => 94.63,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            162 => 
            array (
                'id' => 663,
                'kriteria_id' => 3,
                'penduduk_id' => 111,
                'nilai' => 32784000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            163 => 
            array (
                'id' => 664,
                'kriteria_id' => 4,
                'penduduk_id' => 111,
                'nilai' => 40.26,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            164 => 
            array (
                'id' => 665,
                'kriteria_id' => 5,
                'penduduk_id' => 111,
                'nilai' => 34.99,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            165 => 
            array (
                'id' => 666,
                'kriteria_id' => 6,
                'penduduk_id' => 111,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            166 => 
            array (
                'id' => 667,
                'kriteria_id' => 1,
                'penduduk_id' => 112,
                'nilai' => 2964150.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            167 => 
            array (
                'id' => 668,
                'kriteria_id' => 2,
                'penduduk_id' => 112,
                'nilai' => 31.92,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            168 => 
            array (
                'id' => 669,
                'kriteria_id' => 3,
                'penduduk_id' => 112,
                'nilai' => 30888000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            169 => 
            array (
                'id' => 670,
                'kriteria_id' => 4,
                'penduduk_id' => 112,
                'nilai' => 25.5,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            170 => 
            array (
                'id' => 671,
                'kriteria_id' => 5,
                'penduduk_id' => 112,
                'nilai' => 29.78,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            171 => 
            array (
                'id' => 672,
                'kriteria_id' => 6,
                'penduduk_id' => 112,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            172 => 
            array (
                'id' => 673,
                'kriteria_id' => 1,
                'penduduk_id' => 113,
                'nilai' => 2445450.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            173 => 
            array (
                'id' => 674,
                'kriteria_id' => 2,
                'penduduk_id' => 113,
                'nilai' => 25.89,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            174 => 
            array (
                'id' => 675,
                'kriteria_id' => 3,
                'penduduk_id' => 113,
                'nilai' => 17904000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            175 => 
            array (
                'id' => 676,
                'kriteria_id' => 4,
                'penduduk_id' => 113,
                'nilai' => 43.53,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            176 => 
            array (
                'id' => 677,
                'kriteria_id' => 5,
                'penduduk_id' => 113,
                'nilai' => 27.62,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            177 => 
            array (
                'id' => 678,
                'kriteria_id' => 6,
                'penduduk_id' => 113,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            178 => 
            array (
                'id' => 679,
                'kriteria_id' => 1,
                'penduduk_id' => 114,
                'nilai' => 1750350.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            179 => 
            array (
                'id' => 680,
                'kriteria_id' => 2,
                'penduduk_id' => 114,
                'nilai' => 69.65,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            180 => 
            array (
                'id' => 681,
                'kriteria_id' => 3,
                'penduduk_id' => 114,
                'nilai' => 39176000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            181 => 
            array (
                'id' => 682,
                'kriteria_id' => 4,
                'penduduk_id' => 114,
                'nilai' => 94.3,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            182 => 
            array (
                'id' => 683,
                'kriteria_id' => 5,
                'penduduk_id' => 114,
                'nilai' => 56.97,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            183 => 
            array (
                'id' => 684,
                'kriteria_id' => 6,
                'penduduk_id' => 114,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            184 => 
            array (
                'id' => 685,
                'kriteria_id' => 1,
                'penduduk_id' => 115,
                'nilai' => 3260250.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            185 => 
            array (
                'id' => 686,
                'kriteria_id' => 2,
                'penduduk_id' => 115,
                'nilai' => 89.6,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            186 => 
            array (
                'id' => 687,
                'kriteria_id' => 3,
                'penduduk_id' => 115,
                'nilai' => 20836000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            187 => 
            array (
                'id' => 688,
                'kriteria_id' => 4,
                'penduduk_id' => 115,
                'nilai' => 91.07,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            188 => 
            array (
                'id' => 689,
                'kriteria_id' => 5,
                'penduduk_id' => 115,
                'nilai' => 65.61,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            189 => 
            array (
                'id' => 690,
                'kriteria_id' => 6,
                'penduduk_id' => 115,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            190 => 
            array (
                'id' => 691,
                'kriteria_id' => 1,
                'penduduk_id' => 116,
                'nilai' => 2098250.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            191 => 
            array (
                'id' => 692,
                'kriteria_id' => 2,
                'penduduk_id' => 116,
                'nilai' => 81.9,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            192 => 
            array (
                'id' => 693,
                'kriteria_id' => 3,
                'penduduk_id' => 116,
                'nilai' => 27004000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            193 => 
            array (
                'id' => 694,
                'kriteria_id' => 4,
                'penduduk_id' => 116,
                'nilai' => 80.07,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            194 => 
            array (
                'id' => 695,
                'kriteria_id' => 5,
                'penduduk_id' => 116,
                'nilai' => 66.09,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            195 => 
            array (
                'id' => 696,
                'kriteria_id' => 6,
                'penduduk_id' => 116,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            196 => 
            array (
                'id' => 697,
                'kriteria_id' => 1,
                'penduduk_id' => 117,
                'nilai' => 3270050.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            197 => 
            array (
                'id' => 698,
                'kriteria_id' => 2,
                'penduduk_id' => 117,
                'nilai' => 62.34,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            198 => 
            array (
                'id' => 699,
                'kriteria_id' => 3,
                'penduduk_id' => 117,
                'nilai' => 27820000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            199 => 
            array (
                'id' => 700,
                'kriteria_id' => 4,
                'penduduk_id' => 117,
                'nilai' => 66.34,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            200 => 
            array (
                'id' => 701,
                'kriteria_id' => 5,
                'penduduk_id' => 117,
                'nilai' => 54.08,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            201 => 
            array (
                'id' => 702,
                'kriteria_id' => 6,
                'penduduk_id' => 117,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            202 => 
            array (
                'id' => 703,
                'kriteria_id' => 1,
                'penduduk_id' => 118,
                'nilai' => 2312800.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            203 => 
            array (
                'id' => 704,
                'kriteria_id' => 2,
                'penduduk_id' => 118,
                'nilai' => 72.14,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            204 => 
            array (
                'id' => 705,
                'kriteria_id' => 3,
                'penduduk_id' => 118,
                'nilai' => 17584000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            205 => 
            array (
                'id' => 706,
                'kriteria_id' => 4,
                'penduduk_id' => 118,
                'nilai' => 46.39,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            206 => 
            array (
                'id' => 707,
                'kriteria_id' => 5,
                'penduduk_id' => 118,
                'nilai' => 53.7,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            207 => 
            array (
                'id' => 708,
                'kriteria_id' => 6,
                'penduduk_id' => 118,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            208 => 
            array (
                'id' => 709,
                'kriteria_id' => 1,
                'penduduk_id' => 119,
                'nilai' => 2184700.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            209 => 
            array (
                'id' => 710,
                'kriteria_id' => 2,
                'penduduk_id' => 119,
                'nilai' => 46.69,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            210 => 
            array (
                'id' => 711,
                'kriteria_id' => 3,
                'penduduk_id' => 119,
                'nilai' => 29864000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            211 => 
            array (
                'id' => 712,
                'kriteria_id' => 4,
                'penduduk_id' => 119,
                'nilai' => 61.79,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            212 => 
            array (
                'id' => 713,
                'kriteria_id' => 5,
                'penduduk_id' => 119,
                'nilai' => 34.67,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            213 => 
            array (
                'id' => 714,
                'kriteria_id' => 6,
                'penduduk_id' => 119,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            214 => 
            array (
                'id' => 715,
                'kriteria_id' => 1,
                'penduduk_id' => 120,
                'nilai' => 1631350.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            215 => 
            array (
                'id' => 716,
                'kriteria_id' => 2,
                'penduduk_id' => 120,
                'nilai' => 38.61,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            216 => 
            array (
                'id' => 717,
                'kriteria_id' => 3,
                'penduduk_id' => 120,
                'nilai' => 20000000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            217 => 
            array (
                'id' => 718,
                'kriteria_id' => 4,
                'penduduk_id' => 120,
                'nilai' => 44.93,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            218 => 
            array (
                'id' => 719,
                'kriteria_id' => 5,
                'penduduk_id' => 120,
                'nilai' => 59.39,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            219 => 
            array (
                'id' => 720,
                'kriteria_id' => 6,
                'penduduk_id' => 120,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            220 => 
            array (
                'id' => 721,
                'kriteria_id' => 1,
                'penduduk_id' => 121,
                'nilai' => 2248050.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            221 => 
            array (
                'id' => 722,
                'kriteria_id' => 2,
                'penduduk_id' => 121,
                'nilai' => 50.28,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            222 => 
            array (
                'id' => 723,
                'kriteria_id' => 3,
                'penduduk_id' => 121,
                'nilai' => 38840000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            223 => 
            array (
                'id' => 724,
                'kriteria_id' => 4,
                'penduduk_id' => 121,
                'nilai' => 56.4,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            224 => 
            array (
                'id' => 725,
                'kriteria_id' => 5,
                'penduduk_id' => 121,
                'nilai' => 56.99,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            225 => 
            array (
                'id' => 726,
                'kriteria_id' => 6,
                'penduduk_id' => 121,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            226 => 
            array (
                'id' => 727,
                'kriteria_id' => 1,
                'penduduk_id' => 122,
                'nilai' => 1273650.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            227 => 
            array (
                'id' => 728,
                'kriteria_id' => 2,
                'penduduk_id' => 122,
                'nilai' => 66.59,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            228 => 
            array (
                'id' => 729,
                'kriteria_id' => 3,
                'penduduk_id' => 122,
                'nilai' => 18332000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            229 => 
            array (
                'id' => 730,
                'kriteria_id' => 4,
                'penduduk_id' => 122,
                'nilai' => 76.03,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            230 => 
            array (
                'id' => 731,
                'kriteria_id' => 5,
                'penduduk_id' => 122,
                'nilai' => 30.69,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            231 => 
            array (
                'id' => 732,
                'kriteria_id' => 6,
                'penduduk_id' => 122,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            232 => 
            array (
                'id' => 733,
                'kriteria_id' => 1,
                'penduduk_id' => 123,
                'nilai' => 3431400.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            233 => 
            array (
                'id' => 734,
                'kriteria_id' => 2,
                'penduduk_id' => 123,
                'nilai' => 39.7,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            234 => 
            array (
                'id' => 735,
                'kriteria_id' => 3,
                'penduduk_id' => 123,
                'nilai' => 35836000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            235 => 
            array (
                'id' => 736,
                'kriteria_id' => 4,
                'penduduk_id' => 123,
                'nilai' => 99.98,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            236 => 
            array (
                'id' => 737,
                'kriteria_id' => 5,
                'penduduk_id' => 123,
                'nilai' => 53.09,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            237 => 
            array (
                'id' => 738,
                'kriteria_id' => 6,
                'penduduk_id' => 123,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            238 => 
            array (
                'id' => 739,
                'kriteria_id' => 1,
                'penduduk_id' => 124,
                'nilai' => 1954400.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            239 => 
            array (
                'id' => 740,
                'kriteria_id' => 2,
                'penduduk_id' => 124,
                'nilai' => 80.54,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            240 => 
            array (
                'id' => 741,
                'kriteria_id' => 3,
                'penduduk_id' => 124,
                'nilai' => 21364000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            241 => 
            array (
                'id' => 742,
                'kriteria_id' => 4,
                'penduduk_id' => 124,
                'nilai' => 52.1,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            242 => 
            array (
                'id' => 743,
                'kriteria_id' => 5,
                'penduduk_id' => 124,
                'nilai' => 72.72,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            243 => 
            array (
                'id' => 744,
                'kriteria_id' => 6,
                'penduduk_id' => 124,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            244 => 
            array (
                'id' => 745,
                'kriteria_id' => 1,
                'penduduk_id' => 125,
                'nilai' => 1892100.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            245 => 
            array (
                'id' => 746,
                'kriteria_id' => 2,
                'penduduk_id' => 125,
                'nilai' => 31.24,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            246 => 
            array (
                'id' => 747,
                'kriteria_id' => 3,
                'penduduk_id' => 125,
                'nilai' => 18328000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            247 => 
            array (
                'id' => 748,
                'kriteria_id' => 4,
                'penduduk_id' => 125,
                'nilai' => 80.59,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            248 => 
            array (
                'id' => 749,
                'kriteria_id' => 5,
                'penduduk_id' => 125,
                'nilai' => 33.11,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            249 => 
            array (
                'id' => 750,
                'kriteria_id' => 6,
                'penduduk_id' => 125,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            250 => 
            array (
                'id' => 751,
                'kriteria_id' => 1,
                'penduduk_id' => 126,
                'nilai' => 3166450.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            251 => 
            array (
                'id' => 752,
                'kriteria_id' => 2,
                'penduduk_id' => 126,
                'nilai' => 83.96,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            252 => 
            array (
                'id' => 753,
                'kriteria_id' => 3,
                'penduduk_id' => 126,
                'nilai' => 38008000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            253 => 
            array (
                'id' => 754,
                'kriteria_id' => 4,
                'penduduk_id' => 126,
                'nilai' => 77.52,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            254 => 
            array (
                'id' => 755,
                'kriteria_id' => 5,
                'penduduk_id' => 126,
                'nilai' => 82.3,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            255 => 
            array (
                'id' => 756,
                'kriteria_id' => 6,
                'penduduk_id' => 126,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            256 => 
            array (
                'id' => 757,
                'kriteria_id' => 1,
                'penduduk_id' => 127,
                'nilai' => 1856750.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            257 => 
            array (
                'id' => 758,
                'kriteria_id' => 2,
                'penduduk_id' => 127,
                'nilai' => 56.87,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            258 => 
            array (
                'id' => 759,
                'kriteria_id' => 3,
                'penduduk_id' => 127,
                'nilai' => 36656000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            259 => 
            array (
                'id' => 760,
                'kriteria_id' => 4,
                'penduduk_id' => 127,
                'nilai' => 47.19,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            260 => 
            array (
                'id' => 761,
                'kriteria_id' => 5,
                'penduduk_id' => 127,
                'nilai' => 75.42,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            261 => 
            array (
                'id' => 762,
                'kriteria_id' => 6,
                'penduduk_id' => 127,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            262 => 
            array (
                'id' => 763,
                'kriteria_id' => 1,
                'penduduk_id' => 128,
                'nilai' => 2177350.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            263 => 
            array (
                'id' => 764,
                'kriteria_id' => 2,
                'penduduk_id' => 128,
                'nilai' => 26.56,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            264 => 
            array (
                'id' => 765,
                'kriteria_id' => 3,
                'penduduk_id' => 128,
                'nilai' => 11244000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            265 => 
            array (
                'id' => 766,
                'kriteria_id' => 4,
                'penduduk_id' => 128,
                'nilai' => 30.82,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            266 => 
            array (
                'id' => 767,
                'kriteria_id' => 5,
                'penduduk_id' => 128,
                'nilai' => 66.91,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            267 => 
            array (
                'id' => 768,
                'kriteria_id' => 6,
                'penduduk_id' => 128,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            268 => 
            array (
                'id' => 769,
                'kriteria_id' => 1,
                'penduduk_id' => 129,
                'nilai' => 3349500.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            269 => 
            array (
                'id' => 770,
                'kriteria_id' => 2,
                'penduduk_id' => 129,
                'nilai' => 83.68,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            270 => 
            array (
                'id' => 771,
                'kriteria_id' => 3,
                'penduduk_id' => 129,
                'nilai' => 35716000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            271 => 
            array (
                'id' => 772,
                'kriteria_id' => 4,
                'penduduk_id' => 129,
                'nilai' => 80.06,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            272 => 
            array (
                'id' => 773,
                'kriteria_id' => 5,
                'penduduk_id' => 129,
                'nilai' => 34.65,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            273 => 
            array (
                'id' => 774,
                'kriteria_id' => 6,
                'penduduk_id' => 129,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            274 => 
            array (
                'id' => 775,
                'kriteria_id' => 1,
                'penduduk_id' => 130,
                'nilai' => 2249100.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            275 => 
            array (
                'id' => 776,
                'kriteria_id' => 2,
                'penduduk_id' => 130,
                'nilai' => 45.4,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            276 => 
            array (
                'id' => 777,
                'kriteria_id' => 3,
                'penduduk_id' => 130,
                'nilai' => 12100000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            277 => 
            array (
                'id' => 778,
                'kriteria_id' => 4,
                'penduduk_id' => 130,
                'nilai' => 34.87,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            278 => 
            array (
                'id' => 779,
                'kriteria_id' => 5,
                'penduduk_id' => 130,
                'nilai' => 60.16,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            279 => 
            array (
                'id' => 780,
                'kriteria_id' => 6,
                'penduduk_id' => 130,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            280 => 
            array (
                'id' => 781,
                'kriteria_id' => 1,
                'penduduk_id' => 131,
                'nilai' => 1741950.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            281 => 
            array (
                'id' => 782,
                'kriteria_id' => 2,
                'penduduk_id' => 131,
                'nilai' => 72.7,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            282 => 
            array (
                'id' => 783,
                'kriteria_id' => 3,
                'penduduk_id' => 131,
                'nilai' => 29508000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            283 => 
            array (
                'id' => 784,
                'kriteria_id' => 4,
                'penduduk_id' => 131,
                'nilai' => 31.35,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            284 => 
            array (
                'id' => 785,
                'kriteria_id' => 5,
                'penduduk_id' => 131,
                'nilai' => 33.24,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            285 => 
            array (
                'id' => 786,
                'kriteria_id' => 6,
                'penduduk_id' => 131,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            286 => 
            array (
                'id' => 787,
                'kriteria_id' => 1,
                'penduduk_id' => 132,
                'nilai' => 1632400.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            287 => 
            array (
                'id' => 788,
                'kriteria_id' => 2,
                'penduduk_id' => 132,
                'nilai' => 89.31,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            288 => 
            array (
                'id' => 789,
                'kriteria_id' => 3,
                'penduduk_id' => 132,
                'nilai' => 23644000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            289 => 
            array (
                'id' => 790,
                'kriteria_id' => 4,
                'penduduk_id' => 132,
                'nilai' => 35.06,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            290 => 
            array (
                'id' => 791,
                'kriteria_id' => 5,
                'penduduk_id' => 132,
                'nilai' => 72.29,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            291 => 
            array (
                'id' => 792,
                'kriteria_id' => 6,
                'penduduk_id' => 132,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            292 => 
            array (
                'id' => 793,
                'kriteria_id' => 1,
                'penduduk_id' => 133,
                'nilai' => 2345350.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            293 => 
            array (
                'id' => 794,
                'kriteria_id' => 2,
                'penduduk_id' => 133,
                'nilai' => 34.99,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            294 => 
            array (
                'id' => 795,
                'kriteria_id' => 3,
                'penduduk_id' => 133,
                'nilai' => 27756000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            295 => 
            array (
                'id' => 796,
                'kriteria_id' => 4,
                'penduduk_id' => 133,
                'nilai' => 48.84,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            296 => 
            array (
                'id' => 797,
                'kriteria_id' => 5,
                'penduduk_id' => 133,
                'nilai' => 74.98,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            297 => 
            array (
                'id' => 798,
                'kriteria_id' => 6,
                'penduduk_id' => 133,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            298 => 
            array (
                'id' => 799,
                'kriteria_id' => 1,
                'penduduk_id' => 134,
                'nilai' => 1300600.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            299 => 
            array (
                'id' => 800,
                'kriteria_id' => 2,
                'penduduk_id' => 134,
                'nilai' => 35.34,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            300 => 
            array (
                'id' => 801,
                'kriteria_id' => 3,
                'penduduk_id' => 134,
                'nilai' => 35400000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            301 => 
            array (
                'id' => 802,
                'kriteria_id' => 4,
                'penduduk_id' => 134,
                'nilai' => 99.44,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            302 => 
            array (
                'id' => 803,
                'kriteria_id' => 5,
                'penduduk_id' => 134,
                'nilai' => 53.63,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            303 => 
            array (
                'id' => 804,
                'kriteria_id' => 6,
                'penduduk_id' => 134,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            304 => 
            array (
                'id' => 805,
                'kriteria_id' => 1,
                'penduduk_id' => 135,
                'nilai' => 1475600.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            305 => 
            array (
                'id' => 806,
                'kriteria_id' => 2,
                'penduduk_id' => 135,
                'nilai' => 73.06,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            306 => 
            array (
                'id' => 807,
                'kriteria_id' => 3,
                'penduduk_id' => 135,
                'nilai' => 26628000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            307 => 
            array (
                'id' => 808,
                'kriteria_id' => 4,
                'penduduk_id' => 135,
                'nilai' => 73.54,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            308 => 
            array (
                'id' => 809,
                'kriteria_id' => 5,
                'penduduk_id' => 135,
                'nilai' => 37.7,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            309 => 
            array (
                'id' => 810,
                'kriteria_id' => 6,
                'penduduk_id' => 135,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            310 => 
            array (
                'id' => 811,
                'kriteria_id' => 1,
                'penduduk_id' => 136,
                'nilai' => 1162350.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            311 => 
            array (
                'id' => 812,
                'kriteria_id' => 2,
                'penduduk_id' => 136,
                'nilai' => 57.45,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            312 => 
            array (
                'id' => 813,
                'kriteria_id' => 3,
                'penduduk_id' => 136,
                'nilai' => 29948000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            313 => 
            array (
                'id' => 814,
                'kriteria_id' => 4,
                'penduduk_id' => 136,
                'nilai' => 59.38,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            314 => 
            array (
                'id' => 815,
                'kriteria_id' => 5,
                'penduduk_id' => 136,
                'nilai' => 60.15,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            315 => 
            array (
                'id' => 816,
                'kriteria_id' => 6,
                'penduduk_id' => 136,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            316 => 
            array (
                'id' => 817,
                'kriteria_id' => 1,
                'penduduk_id' => 137,
                'nilai' => 2025100.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            317 => 
            array (
                'id' => 818,
                'kriteria_id' => 2,
                'penduduk_id' => 137,
                'nilai' => 31.91,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            318 => 
            array (
                'id' => 819,
                'kriteria_id' => 3,
                'penduduk_id' => 137,
                'nilai' => 28056000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            319 => 
            array (
                'id' => 820,
                'kriteria_id' => 4,
                'penduduk_id' => 137,
                'nilai' => 79.86,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            320 => 
            array (
                'id' => 821,
                'kriteria_id' => 5,
                'penduduk_id' => 137,
                'nilai' => 90.15,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            321 => 
            array (
                'id' => 822,
                'kriteria_id' => 6,
                'penduduk_id' => 137,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            322 => 
            array (
                'id' => 823,
                'kriteria_id' => 1,
                'penduduk_id' => 138,
                'nilai' => 2220400.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            323 => 
            array (
                'id' => 824,
                'kriteria_id' => 2,
                'penduduk_id' => 138,
                'nilai' => 86.41,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            324 => 
            array (
                'id' => 825,
                'kriteria_id' => 3,
                'penduduk_id' => 138,
                'nilai' => 28268000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            325 => 
            array (
                'id' => 826,
                'kriteria_id' => 4,
                'penduduk_id' => 138,
                'nilai' => 76.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            326 => 
            array (
                'id' => 827,
                'kriteria_id' => 5,
                'penduduk_id' => 138,
                'nilai' => 73.28,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            327 => 
            array (
                'id' => 828,
                'kriteria_id' => 6,
                'penduduk_id' => 138,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            328 => 
            array (
                'id' => 829,
                'kriteria_id' => 1,
                'penduduk_id' => 139,
                'nilai' => 2573200.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            329 => 
            array (
                'id' => 830,
                'kriteria_id' => 2,
                'penduduk_id' => 139,
                'nilai' => 78.02,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            330 => 
            array (
                'id' => 831,
                'kriteria_id' => 3,
                'penduduk_id' => 139,
                'nilai' => 11276000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            331 => 
            array (
                'id' => 832,
                'kriteria_id' => 4,
                'penduduk_id' => 139,
                'nilai' => 90.23,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            332 => 
            array (
                'id' => 833,
                'kriteria_id' => 5,
                'penduduk_id' => 139,
                'nilai' => 92.91,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            333 => 
            array (
                'id' => 834,
                'kriteria_id' => 6,
                'penduduk_id' => 139,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            334 => 
            array (
                'id' => 835,
                'kriteria_id' => 1,
                'penduduk_id' => 140,
                'nilai' => 2745050.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            335 => 
            array (
                'id' => 836,
                'kriteria_id' => 2,
                'penduduk_id' => 140,
                'nilai' => 69.05,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            336 => 
            array (
                'id' => 837,
                'kriteria_id' => 3,
                'penduduk_id' => 140,
                'nilai' => 15152000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            337 => 
            array (
                'id' => 838,
                'kriteria_id' => 4,
                'penduduk_id' => 140,
                'nilai' => 54.13,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            338 => 
            array (
                'id' => 839,
                'kriteria_id' => 5,
                'penduduk_id' => 140,
                'nilai' => 33.34,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            339 => 
            array (
                'id' => 840,
                'kriteria_id' => 6,
                'penduduk_id' => 140,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            340 => 
            array (
                'id' => 841,
                'kriteria_id' => 1,
                'penduduk_id' => 141,
                'nilai' => 919450.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            341 => 
            array (
                'id' => 842,
                'kriteria_id' => 2,
                'penduduk_id' => 141,
                'nilai' => 60.43,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            342 => 
            array (
                'id' => 843,
                'kriteria_id' => 3,
                'penduduk_id' => 141,
                'nilai' => 17544000.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            343 => 
            array (
                'id' => 844,
                'kriteria_id' => 4,
                'penduduk_id' => 141,
                'nilai' => 91.38,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            344 => 
            array (
                'id' => 845,
                'kriteria_id' => 5,
                'penduduk_id' => 141,
                'nilai' => 94.76,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            345 => 
            array (
                'id' => 846,
                'kriteria_id' => 6,
                'penduduk_id' => 141,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            346 => 
            array (
                'id' => 847,
                'kriteria_id' => 1,
                'penduduk_id' => 142,
                'nilai' => 1303750.0,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            347 => 
            array (
                'id' => 848,
                'kriteria_id' => 2,
                'penduduk_id' => 142,
                'nilai' => 97.74,
                'created_at' => '2023-05-29 19:52:34',
                'updated_at' => '2023-05-29 19:52:34',
            ),
            348 => 
            array (
                'id' => 849,
                'kriteria_id' => 3,
                'penduduk_id' => 142,
                'nilai' => 17640000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            349 => 
            array (
                'id' => 850,
                'kriteria_id' => 4,
                'penduduk_id' => 142,
                'nilai' => 30.67,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            350 => 
            array (
                'id' => 851,
                'kriteria_id' => 5,
                'penduduk_id' => 142,
                'nilai' => 99.27,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            351 => 
            array (
                'id' => 852,
                'kriteria_id' => 6,
                'penduduk_id' => 142,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            352 => 
            array (
                'id' => 853,
                'kriteria_id' => 1,
                'penduduk_id' => 143,
                'nilai' => 3214400.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            353 => 
            array (
                'id' => 854,
                'kriteria_id' => 2,
                'penduduk_id' => 143,
                'nilai' => 83.46,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            354 => 
            array (
                'id' => 855,
                'kriteria_id' => 3,
                'penduduk_id' => 143,
                'nilai' => 12484000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            355 => 
            array (
                'id' => 856,
                'kriteria_id' => 4,
                'penduduk_id' => 143,
                'nilai' => 61.27,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            356 => 
            array (
                'id' => 857,
                'kriteria_id' => 5,
                'penduduk_id' => 143,
                'nilai' => 69.81,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            357 => 
            array (
                'id' => 858,
                'kriteria_id' => 6,
                'penduduk_id' => 143,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            358 => 
            array (
                'id' => 859,
                'kriteria_id' => 1,
                'penduduk_id' => 144,
                'nilai' => 2810850.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            359 => 
            array (
                'id' => 860,
                'kriteria_id' => 2,
                'penduduk_id' => 144,
                'nilai' => 30.15,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            360 => 
            array (
                'id' => 861,
                'kriteria_id' => 3,
                'penduduk_id' => 144,
                'nilai' => 19604000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            361 => 
            array (
                'id' => 862,
                'kriteria_id' => 4,
                'penduduk_id' => 144,
                'nilai' => 29.2,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            362 => 
            array (
                'id' => 863,
                'kriteria_id' => 5,
                'penduduk_id' => 144,
                'nilai' => 29.81,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            363 => 
            array (
                'id' => 864,
                'kriteria_id' => 6,
                'penduduk_id' => 144,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            364 => 
            array (
                'id' => 865,
                'kriteria_id' => 1,
                'penduduk_id' => 145,
                'nilai' => 2710750.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            365 => 
            array (
                'id' => 866,
                'kriteria_id' => 2,
                'penduduk_id' => 145,
                'nilai' => 57.89,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            366 => 
            array (
                'id' => 867,
                'kriteria_id' => 3,
                'penduduk_id' => 145,
                'nilai' => 24092000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            367 => 
            array (
                'id' => 868,
                'kriteria_id' => 4,
                'penduduk_id' => 145,
                'nilai' => 86.55,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            368 => 
            array (
                'id' => 869,
                'kriteria_id' => 5,
                'penduduk_id' => 145,
                'nilai' => 50.63,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            369 => 
            array (
                'id' => 870,
                'kriteria_id' => 6,
                'penduduk_id' => 145,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            370 => 
            array (
                'id' => 871,
                'kriteria_id' => 1,
                'penduduk_id' => 146,
                'nilai' => 1499050.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            371 => 
            array (
                'id' => 872,
                'kriteria_id' => 2,
                'penduduk_id' => 146,
                'nilai' => 48.21,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            372 => 
            array (
                'id' => 873,
                'kriteria_id' => 3,
                'penduduk_id' => 146,
                'nilai' => 32724000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            373 => 
            array (
                'id' => 874,
                'kriteria_id' => 4,
                'penduduk_id' => 146,
                'nilai' => 41.8,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            374 => 
            array (
                'id' => 875,
                'kriteria_id' => 5,
                'penduduk_id' => 146,
                'nilai' => 34.29,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            375 => 
            array (
                'id' => 876,
                'kriteria_id' => 6,
                'penduduk_id' => 146,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            376 => 
            array (
                'id' => 877,
                'kriteria_id' => 1,
                'penduduk_id' => 147,
                'nilai' => 1574650.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            377 => 
            array (
                'id' => 878,
                'kriteria_id' => 2,
                'penduduk_id' => 147,
                'nilai' => 86.77,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            378 => 
            array (
                'id' => 879,
                'kriteria_id' => 3,
                'penduduk_id' => 147,
                'nilai' => 29508000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            379 => 
            array (
                'id' => 880,
                'kriteria_id' => 4,
                'penduduk_id' => 147,
                'nilai' => 60.54,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            380 => 
            array (
                'id' => 881,
                'kriteria_id' => 5,
                'penduduk_id' => 147,
                'nilai' => 78.06,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            381 => 
            array (
                'id' => 882,
                'kriteria_id' => 6,
                'penduduk_id' => 147,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            382 => 
            array (
                'id' => 883,
                'kriteria_id' => 1,
                'penduduk_id' => 148,
                'nilai' => 1798300.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            383 => 
            array (
                'id' => 884,
                'kriteria_id' => 2,
                'penduduk_id' => 148,
                'nilai' => 41.84,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            384 => 
            array (
                'id' => 885,
                'kriteria_id' => 3,
                'penduduk_id' => 148,
                'nilai' => 27296000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            385 => 
            array (
                'id' => 886,
                'kriteria_id' => 4,
                'penduduk_id' => 148,
                'nilai' => 51.4,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            386 => 
            array (
                'id' => 887,
                'kriteria_id' => 5,
                'penduduk_id' => 148,
                'nilai' => 61.91,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            387 => 
            array (
                'id' => 888,
                'kriteria_id' => 6,
                'penduduk_id' => 148,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            388 => 
            array (
                'id' => 889,
                'kriteria_id' => 1,
                'penduduk_id' => 149,
                'nilai' => 3238550.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            389 => 
            array (
                'id' => 890,
                'kriteria_id' => 2,
                'penduduk_id' => 149,
                'nilai' => 40.47,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            390 => 
            array (
                'id' => 891,
                'kriteria_id' => 3,
                'penduduk_id' => 149,
                'nilai' => 34512000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            391 => 
            array (
                'id' => 892,
                'kriteria_id' => 4,
                'penduduk_id' => 149,
                'nilai' => 96.65,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            392 => 
            array (
                'id' => 893,
                'kriteria_id' => 5,
                'penduduk_id' => 149,
                'nilai' => 54.86,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            393 => 
            array (
                'id' => 894,
                'kriteria_id' => 6,
                'penduduk_id' => 149,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            394 => 
            array (
                'id' => 895,
                'kriteria_id' => 1,
                'penduduk_id' => 150,
                'nilai' => 2579500.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            395 => 
            array (
                'id' => 896,
                'kriteria_id' => 2,
                'penduduk_id' => 150,
                'nilai' => 78.46,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            396 => 
            array (
                'id' => 897,
                'kriteria_id' => 3,
                'penduduk_id' => 150,
                'nilai' => 33528000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            397 => 
            array (
                'id' => 898,
                'kriteria_id' => 4,
                'penduduk_id' => 150,
                'nilai' => 34.03,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            398 => 
            array (
                'id' => 899,
                'kriteria_id' => 5,
                'penduduk_id' => 150,
                'nilai' => 47.85,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            399 => 
            array (
                'id' => 900,
                'kriteria_id' => 6,
                'penduduk_id' => 150,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            400 => 
            array (
                'id' => 901,
                'kriteria_id' => 1,
                'penduduk_id' => 151,
                'nilai' => 1489950.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            401 => 
            array (
                'id' => 902,
                'kriteria_id' => 2,
                'penduduk_id' => 151,
                'nilai' => 74.14,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            402 => 
            array (
                'id' => 903,
                'kriteria_id' => 3,
                'penduduk_id' => 151,
                'nilai' => 13180000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            403 => 
            array (
                'id' => 904,
                'kriteria_id' => 4,
                'penduduk_id' => 151,
                'nilai' => 72.84,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            404 => 
            array (
                'id' => 905,
                'kriteria_id' => 5,
                'penduduk_id' => 151,
                'nilai' => 68.2,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            405 => 
            array (
                'id' => 906,
                'kriteria_id' => 6,
                'penduduk_id' => 151,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            406 => 
            array (
                'id' => 907,
                'kriteria_id' => 1,
                'penduduk_id' => 152,
                'nilai' => 3464300.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            407 => 
            array (
                'id' => 908,
                'kriteria_id' => 2,
                'penduduk_id' => 152,
                'nilai' => 27.15,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            408 => 
            array (
                'id' => 909,
                'kriteria_id' => 3,
                'penduduk_id' => 152,
                'nilai' => 20976000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            409 => 
            array (
                'id' => 910,
                'kriteria_id' => 4,
                'penduduk_id' => 152,
                'nilai' => 30.9,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            410 => 
            array (
                'id' => 911,
                'kriteria_id' => 5,
                'penduduk_id' => 152,
                'nilai' => 52.73,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            411 => 
            array (
                'id' => 912,
                'kriteria_id' => 6,
                'penduduk_id' => 152,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            412 => 
            array (
                'id' => 913,
                'kriteria_id' => 1,
                'penduduk_id' => 153,
                'nilai' => 1153950.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            413 => 
            array (
                'id' => 914,
                'kriteria_id' => 2,
                'penduduk_id' => 153,
                'nilai' => 29.74,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            414 => 
            array (
                'id' => 915,
                'kriteria_id' => 3,
                'penduduk_id' => 153,
                'nilai' => 31684000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            415 => 
            array (
                'id' => 916,
                'kriteria_id' => 4,
                'penduduk_id' => 153,
                'nilai' => 41.51,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            416 => 
            array (
                'id' => 917,
                'kriteria_id' => 5,
                'penduduk_id' => 153,
                'nilai' => 86.52,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            417 => 
            array (
                'id' => 918,
                'kriteria_id' => 6,
                'penduduk_id' => 153,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            418 => 
            array (
                'id' => 919,
                'kriteria_id' => 1,
                'penduduk_id' => 154,
                'nilai' => 3392200.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            419 => 
            array (
                'id' => 920,
                'kriteria_id' => 2,
                'penduduk_id' => 154,
                'nilai' => 85.28,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            420 => 
            array (
                'id' => 921,
                'kriteria_id' => 3,
                'penduduk_id' => 154,
                'nilai' => 32224000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            421 => 
            array (
                'id' => 922,
                'kriteria_id' => 4,
                'penduduk_id' => 154,
                'nilai' => 27.45,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            422 => 
            array (
                'id' => 923,
                'kriteria_id' => 5,
                'penduduk_id' => 154,
                'nilai' => 66.37,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            423 => 
            array (
                'id' => 924,
                'kriteria_id' => 6,
                'penduduk_id' => 154,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            424 => 
            array (
                'id' => 925,
                'kriteria_id' => 1,
                'penduduk_id' => 155,
                'nilai' => 1223950.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            425 => 
            array (
                'id' => 926,
                'kriteria_id' => 2,
                'penduduk_id' => 155,
                'nilai' => 45.94,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            426 => 
            array (
                'id' => 927,
                'kriteria_id' => 3,
                'penduduk_id' => 155,
                'nilai' => 33148000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            427 => 
            array (
                'id' => 928,
                'kriteria_id' => 4,
                'penduduk_id' => 155,
                'nilai' => 57.02,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            428 => 
            array (
                'id' => 929,
                'kriteria_id' => 5,
                'penduduk_id' => 155,
                'nilai' => 29.08,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            429 => 
            array (
                'id' => 930,
                'kriteria_id' => 6,
                'penduduk_id' => 155,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            430 => 
            array (
                'id' => 931,
                'kriteria_id' => 1,
                'penduduk_id' => 156,
                'nilai' => 2291800.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            431 => 
            array (
                'id' => 932,
                'kriteria_id' => 2,
                'penduduk_id' => 156,
                'nilai' => 61.87,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            432 => 
            array (
                'id' => 933,
                'kriteria_id' => 3,
                'penduduk_id' => 156,
                'nilai' => 38972000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            433 => 
            array (
                'id' => 934,
                'kriteria_id' => 4,
                'penduduk_id' => 156,
                'nilai' => 83.93,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            434 => 
            array (
                'id' => 935,
                'kriteria_id' => 5,
                'penduduk_id' => 156,
                'nilai' => 91.47,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            435 => 
            array (
                'id' => 936,
                'kriteria_id' => 6,
                'penduduk_id' => 156,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            436 => 
            array (
                'id' => 937,
                'kriteria_id' => 1,
                'penduduk_id' => 157,
                'nilai' => 3396050.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            437 => 
            array (
                'id' => 938,
                'kriteria_id' => 2,
                'penduduk_id' => 157,
                'nilai' => 74.45,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            438 => 
            array (
                'id' => 939,
                'kriteria_id' => 3,
                'penduduk_id' => 157,
                'nilai' => 30752000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            439 => 
            array (
                'id' => 940,
                'kriteria_id' => 4,
                'penduduk_id' => 157,
                'nilai' => 34.46,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            440 => 
            array (
                'id' => 941,
                'kriteria_id' => 5,
                'penduduk_id' => 157,
                'nilai' => 45.61,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            441 => 
            array (
                'id' => 942,
                'kriteria_id' => 6,
                'penduduk_id' => 157,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            442 => 
            array (
                'id' => 943,
                'kriteria_id' => 1,
                'penduduk_id' => 158,
                'nilai' => 2256450.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            443 => 
            array (
                'id' => 944,
                'kriteria_id' => 2,
                'penduduk_id' => 158,
                'nilai' => 85.76,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            444 => 
            array (
                'id' => 945,
                'kriteria_id' => 3,
                'penduduk_id' => 158,
                'nilai' => 25088000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            445 => 
            array (
                'id' => 946,
                'kriteria_id' => 4,
                'penduduk_id' => 158,
                'nilai' => 98.09,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            446 => 
            array (
                'id' => 947,
                'kriteria_id' => 5,
                'penduduk_id' => 158,
                'nilai' => 51.59,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            447 => 
            array (
                'id' => 948,
                'kriteria_id' => 6,
                'penduduk_id' => 158,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            448 => 
            array (
                'id' => 949,
                'kriteria_id' => 1,
                'penduduk_id' => 159,
                'nilai' => 1145550.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            449 => 
            array (
                'id' => 950,
                'kriteria_id' => 2,
                'penduduk_id' => 159,
                'nilai' => 95.18,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            450 => 
            array (
                'id' => 951,
                'kriteria_id' => 3,
                'penduduk_id' => 159,
                'nilai' => 27564000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            451 => 
            array (
                'id' => 952,
                'kriteria_id' => 4,
                'penduduk_id' => 159,
                'nilai' => 96.06,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            452 => 
            array (
                'id' => 953,
                'kriteria_id' => 5,
                'penduduk_id' => 159,
                'nilai' => 70.42,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            453 => 
            array (
                'id' => 954,
                'kriteria_id' => 6,
                'penduduk_id' => 159,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            454 => 
            array (
                'id' => 955,
                'kriteria_id' => 1,
                'penduduk_id' => 160,
                'nilai' => 1761900.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            455 => 
            array (
                'id' => 956,
                'kriteria_id' => 2,
                'penduduk_id' => 160,
                'nilai' => 83.19,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            456 => 
            array (
                'id' => 957,
                'kriteria_id' => 3,
                'penduduk_id' => 160,
                'nilai' => 14900000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            457 => 
            array (
                'id' => 958,
                'kriteria_id' => 4,
                'penduduk_id' => 160,
                'nilai' => 78.58,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            458 => 
            array (
                'id' => 959,
                'kriteria_id' => 5,
                'penduduk_id' => 160,
                'nilai' => 69.65,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            459 => 
            array (
                'id' => 960,
                'kriteria_id' => 6,
                'penduduk_id' => 160,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            460 => 
            array (
                'id' => 961,
                'kriteria_id' => 1,
                'penduduk_id' => 161,
                'nilai' => 1030750.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            461 => 
            array (
                'id' => 962,
                'kriteria_id' => 2,
                'penduduk_id' => 161,
                'nilai' => 70.01,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            462 => 
            array (
                'id' => 963,
                'kriteria_id' => 3,
                'penduduk_id' => 161,
                'nilai' => 34044000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            463 => 
            array (
                'id' => 964,
                'kriteria_id' => 4,
                'penduduk_id' => 161,
                'nilai' => 70.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            464 => 
            array (
                'id' => 965,
                'kriteria_id' => 5,
                'penduduk_id' => 161,
                'nilai' => 44.64,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            465 => 
            array (
                'id' => 966,
                'kriteria_id' => 6,
                'penduduk_id' => 161,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            466 => 
            array (
                'id' => 967,
                'kriteria_id' => 1,
                'penduduk_id' => 162,
                'nilai' => 2582300.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            467 => 
            array (
                'id' => 968,
                'kriteria_id' => 2,
                'penduduk_id' => 162,
                'nilai' => 34.81,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            468 => 
            array (
                'id' => 969,
                'kriteria_id' => 3,
                'penduduk_id' => 162,
                'nilai' => 37208000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            469 => 
            array (
                'id' => 970,
                'kriteria_id' => 4,
                'penduduk_id' => 162,
                'nilai' => 66.05,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            470 => 
            array (
                'id' => 971,
                'kriteria_id' => 5,
                'penduduk_id' => 162,
                'nilai' => 37.3,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            471 => 
            array (
                'id' => 972,
                'kriteria_id' => 6,
                'penduduk_id' => 162,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            472 => 
            array (
                'id' => 973,
                'kriteria_id' => 1,
                'penduduk_id' => 163,
                'nilai' => 1690150.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            473 => 
            array (
                'id' => 974,
                'kriteria_id' => 2,
                'penduduk_id' => 163,
                'nilai' => 61.19,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            474 => 
            array (
                'id' => 975,
                'kriteria_id' => 3,
                'penduduk_id' => 163,
                'nilai' => 25624000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            475 => 
            array (
                'id' => 976,
                'kriteria_id' => 4,
                'penduduk_id' => 163,
                'nilai' => 57.58,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            476 => 
            array (
                'id' => 977,
                'kriteria_id' => 5,
                'penduduk_id' => 163,
                'nilai' => 80.17,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            477 => 
            array (
                'id' => 978,
                'kriteria_id' => 6,
                'penduduk_id' => 163,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            478 => 
            array (
                'id' => 979,
                'kriteria_id' => 1,
                'penduduk_id' => 164,
                'nilai' => 3327100.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            479 => 
            array (
                'id' => 980,
                'kriteria_id' => 2,
                'penduduk_id' => 164,
                'nilai' => 58.87,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            480 => 
            array (
                'id' => 981,
                'kriteria_id' => 3,
                'penduduk_id' => 164,
                'nilai' => 28752000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            481 => 
            array (
                'id' => 982,
                'kriteria_id' => 4,
                'penduduk_id' => 164,
                'nilai' => 36.41,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            482 => 
            array (
                'id' => 983,
                'kriteria_id' => 5,
                'penduduk_id' => 164,
                'nilai' => 80.67,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            483 => 
            array (
                'id' => 984,
                'kriteria_id' => 6,
                'penduduk_id' => 164,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            484 => 
            array (
                'id' => 985,
                'kriteria_id' => 1,
                'penduduk_id' => 165,
                'nilai' => 2118900.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            485 => 
            array (
                'id' => 986,
                'kriteria_id' => 2,
                'penduduk_id' => 165,
                'nilai' => 54.75,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            486 => 
            array (
                'id' => 987,
                'kriteria_id' => 3,
                'penduduk_id' => 165,
                'nilai' => 39296000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            487 => 
            array (
                'id' => 988,
                'kriteria_id' => 4,
                'penduduk_id' => 165,
                'nilai' => 48.73,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            488 => 
            array (
                'id' => 989,
                'kriteria_id' => 5,
                'penduduk_id' => 165,
                'nilai' => 61.22,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            489 => 
            array (
                'id' => 990,
                'kriteria_id' => 6,
                'penduduk_id' => 165,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            490 => 
            array (
                'id' => 991,
                'kriteria_id' => 1,
                'penduduk_id' => 166,
                'nilai' => 1668800.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            491 => 
            array (
                'id' => 992,
                'kriteria_id' => 2,
                'penduduk_id' => 166,
                'nilai' => 66.93,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            492 => 
            array (
                'id' => 993,
                'kriteria_id' => 3,
                'penduduk_id' => 166,
                'nilai' => 27716000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            493 => 
            array (
                'id' => 994,
                'kriteria_id' => 4,
                'penduduk_id' => 166,
                'nilai' => 97.19,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            494 => 
            array (
                'id' => 995,
                'kriteria_id' => 5,
                'penduduk_id' => 166,
                'nilai' => 35.9,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            495 => 
            array (
                'id' => 996,
                'kriteria_id' => 6,
                'penduduk_id' => 166,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            496 => 
            array (
                'id' => 997,
                'kriteria_id' => 1,
                'penduduk_id' => 167,
                'nilai' => 1330000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            497 => 
            array (
                'id' => 998,
                'kriteria_id' => 2,
                'penduduk_id' => 167,
                'nilai' => 46.85,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            498 => 
            array (
                'id' => 999,
                'kriteria_id' => 3,
                'penduduk_id' => 167,
                'nilai' => 24552000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            499 => 
            array (
                'id' => 1000,
                'kriteria_id' => 4,
                'penduduk_id' => 167,
                'nilai' => 95.11,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
        ));
        \DB::table('penduduk_nilai')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'kriteria_id' => 5,
                'penduduk_id' => 167,
                'nilai' => 52.06,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            1 => 
            array (
                'id' => 1002,
                'kriteria_id' => 6,
                'penduduk_id' => 167,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            2 => 
            array (
                'id' => 1003,
                'kriteria_id' => 1,
                'penduduk_id' => 168,
                'nilai' => 2667350.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            3 => 
            array (
                'id' => 1004,
                'kriteria_id' => 2,
                'penduduk_id' => 168,
                'nilai' => 42.58,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            4 => 
            array (
                'id' => 1005,
                'kriteria_id' => 3,
                'penduduk_id' => 168,
                'nilai' => 12344000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            5 => 
            array (
                'id' => 1006,
                'kriteria_id' => 4,
                'penduduk_id' => 168,
                'nilai' => 71.48,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            6 => 
            array (
                'id' => 1007,
                'kriteria_id' => 5,
                'penduduk_id' => 168,
                'nilai' => 40.67,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            7 => 
            array (
                'id' => 1008,
                'kriteria_id' => 6,
                'penduduk_id' => 168,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            8 => 
            array (
                'id' => 1009,
                'kriteria_id' => 1,
                'penduduk_id' => 169,
                'nilai' => 2236850.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            9 => 
            array (
                'id' => 1010,
                'kriteria_id' => 2,
                'penduduk_id' => 169,
                'nilai' => 57.35,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            10 => 
            array (
                'id' => 1011,
                'kriteria_id' => 3,
                'penduduk_id' => 169,
                'nilai' => 25496000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            11 => 
            array (
                'id' => 1012,
                'kriteria_id' => 4,
                'penduduk_id' => 169,
                'nilai' => 34.63,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            12 => 
            array (
                'id' => 1013,
                'kriteria_id' => 5,
                'penduduk_id' => 169,
                'nilai' => 67.03,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            13 => 
            array (
                'id' => 1014,
                'kriteria_id' => 6,
                'penduduk_id' => 169,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            14 => 
            array (
                'id' => 1015,
                'kriteria_id' => 1,
                'penduduk_id' => 170,
                'nilai' => 1353100.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            15 => 
            array (
                'id' => 1016,
                'kriteria_id' => 2,
                'penduduk_id' => 170,
                'nilai' => 41.97,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            16 => 
            array (
                'id' => 1017,
                'kriteria_id' => 3,
                'penduduk_id' => 170,
                'nilai' => 29924000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            17 => 
            array (
                'id' => 1018,
                'kriteria_id' => 4,
                'penduduk_id' => 170,
                'nilai' => 39.74,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            18 => 
            array (
                'id' => 1019,
                'kriteria_id' => 5,
                'penduduk_id' => 170,
                'nilai' => 53.21,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            19 => 
            array (
                'id' => 1020,
                'kriteria_id' => 6,
                'penduduk_id' => 170,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            20 => 
            array (
                'id' => 1021,
                'kriteria_id' => 1,
                'penduduk_id' => 171,
                'nilai' => 2175950.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            21 => 
            array (
                'id' => 1022,
                'kriteria_id' => 2,
                'penduduk_id' => 171,
                'nilai' => 51.16,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            22 => 
            array (
                'id' => 1023,
                'kriteria_id' => 3,
                'penduduk_id' => 171,
                'nilai' => 33632000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            23 => 
            array (
                'id' => 1024,
                'kriteria_id' => 4,
                'penduduk_id' => 171,
                'nilai' => 69.31,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            24 => 
            array (
                'id' => 1025,
                'kriteria_id' => 5,
                'penduduk_id' => 171,
                'nilai' => 92.28,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            25 => 
            array (
                'id' => 1026,
                'kriteria_id' => 6,
                'penduduk_id' => 171,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            26 => 
            array (
                'id' => 1027,
                'kriteria_id' => 1,
                'penduduk_id' => 172,
                'nilai' => 2355150.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            27 => 
            array (
                'id' => 1028,
                'kriteria_id' => 2,
                'penduduk_id' => 172,
                'nilai' => 39.48,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            28 => 
            array (
                'id' => 1029,
                'kriteria_id' => 3,
                'penduduk_id' => 172,
                'nilai' => 39216000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            29 => 
            array (
                'id' => 1030,
                'kriteria_id' => 4,
                'penduduk_id' => 172,
                'nilai' => 33.18,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            30 => 
            array (
                'id' => 1031,
                'kriteria_id' => 5,
                'penduduk_id' => 172,
                'nilai' => 80.94,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            31 => 
            array (
                'id' => 1032,
                'kriteria_id' => 6,
                'penduduk_id' => 172,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            32 => 
            array (
                'id' => 1033,
                'kriteria_id' => 1,
                'penduduk_id' => 173,
                'nilai' => 1322300.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            33 => 
            array (
                'id' => 1034,
                'kriteria_id' => 2,
                'penduduk_id' => 173,
                'nilai' => 40.91,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            34 => 
            array (
                'id' => 1035,
                'kriteria_id' => 3,
                'penduduk_id' => 173,
                'nilai' => 28740000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            35 => 
            array (
                'id' => 1036,
                'kriteria_id' => 4,
                'penduduk_id' => 173,
                'nilai' => 39.82,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            36 => 
            array (
                'id' => 1037,
                'kriteria_id' => 5,
                'penduduk_id' => 173,
                'nilai' => 34.15,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            37 => 
            array (
                'id' => 1038,
                'kriteria_id' => 6,
                'penduduk_id' => 173,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            38 => 
            array (
                'id' => 1039,
                'kriteria_id' => 1,
                'penduduk_id' => 174,
                'nilai' => 3191650.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            39 => 
            array (
                'id' => 1040,
                'kriteria_id' => 2,
                'penduduk_id' => 174,
                'nilai' => 57.95,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            40 => 
            array (
                'id' => 1041,
                'kriteria_id' => 3,
                'penduduk_id' => 174,
                'nilai' => 22524000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            41 => 
            array (
                'id' => 1042,
                'kriteria_id' => 4,
                'penduduk_id' => 174,
                'nilai' => 67.38,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            42 => 
            array (
                'id' => 1043,
                'kriteria_id' => 5,
                'penduduk_id' => 174,
                'nilai' => 66.37,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            43 => 
            array (
                'id' => 1044,
                'kriteria_id' => 6,
                'penduduk_id' => 174,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            44 => 
            array (
                'id' => 1045,
                'kriteria_id' => 1,
                'penduduk_id' => 175,
                'nilai' => 3453450.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            45 => 
            array (
                'id' => 1046,
                'kriteria_id' => 2,
                'penduduk_id' => 175,
                'nilai' => 34.39,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            46 => 
            array (
                'id' => 1047,
                'kriteria_id' => 3,
                'penduduk_id' => 175,
                'nilai' => 30276000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            47 => 
            array (
                'id' => 1048,
                'kriteria_id' => 4,
                'penduduk_id' => 175,
                'nilai' => 46.34,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            48 => 
            array (
                'id' => 1049,
                'kriteria_id' => 5,
                'penduduk_id' => 175,
                'nilai' => 93.6,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            49 => 
            array (
                'id' => 1050,
                'kriteria_id' => 6,
                'penduduk_id' => 175,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            50 => 
            array (
                'id' => 1051,
                'kriteria_id' => 1,
                'penduduk_id' => 176,
                'nilai' => 3180100.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            51 => 
            array (
                'id' => 1052,
                'kriteria_id' => 2,
                'penduduk_id' => 176,
                'nilai' => 80.59,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            52 => 
            array (
                'id' => 1053,
                'kriteria_id' => 3,
                'penduduk_id' => 176,
                'nilai' => 29712000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            53 => 
            array (
                'id' => 1054,
                'kriteria_id' => 4,
                'penduduk_id' => 176,
                'nilai' => 88.38,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            54 => 
            array (
                'id' => 1055,
                'kriteria_id' => 5,
                'penduduk_id' => 176,
                'nilai' => 68.24,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            55 => 
            array (
                'id' => 1056,
                'kriteria_id' => 6,
                'penduduk_id' => 176,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            56 => 
            array (
                'id' => 1057,
                'kriteria_id' => 1,
                'penduduk_id' => 177,
                'nilai' => 1409100.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            57 => 
            array (
                'id' => 1058,
                'kriteria_id' => 2,
                'penduduk_id' => 177,
                'nilai' => 34.99,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            58 => 
            array (
                'id' => 1059,
                'kriteria_id' => 3,
                'penduduk_id' => 177,
                'nilai' => 28072000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            59 => 
            array (
                'id' => 1060,
                'kriteria_id' => 4,
                'penduduk_id' => 177,
                'nilai' => 91.4,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            60 => 
            array (
                'id' => 1061,
                'kriteria_id' => 5,
                'penduduk_id' => 177,
                'nilai' => 79.76,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            61 => 
            array (
                'id' => 1062,
                'kriteria_id' => 6,
                'penduduk_id' => 177,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            62 => 
            array (
                'id' => 1063,
                'kriteria_id' => 1,
                'penduduk_id' => 178,
                'nilai' => 892500.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            63 => 
            array (
                'id' => 1064,
                'kriteria_id' => 2,
                'penduduk_id' => 178,
                'nilai' => 29.78,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            64 => 
            array (
                'id' => 1065,
                'kriteria_id' => 3,
                'penduduk_id' => 178,
                'nilai' => 37612000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            65 => 
            array (
                'id' => 1066,
                'kriteria_id' => 4,
                'penduduk_id' => 178,
                'nilai' => 87.25,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            66 => 
            array (
                'id' => 1067,
                'kriteria_id' => 5,
                'penduduk_id' => 178,
                'nilai' => 52.28,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            67 => 
            array (
                'id' => 1068,
                'kriteria_id' => 6,
                'penduduk_id' => 178,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            68 => 
            array (
                'id' => 1069,
                'kriteria_id' => 1,
                'penduduk_id' => 179,
                'nilai' => 1523550.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            69 => 
            array (
                'id' => 1070,
                'kriteria_id' => 2,
                'penduduk_id' => 179,
                'nilai' => 27.62,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            70 => 
            array (
                'id' => 1071,
                'kriteria_id' => 3,
                'penduduk_id' => 179,
                'nilai' => 28952000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            71 => 
            array (
                'id' => 1072,
                'kriteria_id' => 4,
                'penduduk_id' => 179,
                'nilai' => 28.52,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            72 => 
            array (
                'id' => 1073,
                'kriteria_id' => 5,
                'penduduk_id' => 179,
                'nilai' => 62.67,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            73 => 
            array (
                'id' => 1074,
                'kriteria_id' => 6,
                'penduduk_id' => 179,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            74 => 
            array (
                'id' => 1075,
                'kriteria_id' => 1,
                'penduduk_id' => 180,
                'nilai' => 3300500.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            75 => 
            array (
                'id' => 1076,
                'kriteria_id' => 2,
                'penduduk_id' => 180,
                'nilai' => 56.97,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            76 => 
            array (
                'id' => 1077,
                'kriteria_id' => 3,
                'penduduk_id' => 180,
                'nilai' => 15452000.0,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            77 => 
            array (
                'id' => 1078,
                'kriteria_id' => 4,
                'penduduk_id' => 180,
                'nilai' => 98.83,
                'created_at' => '2023-05-29 19:52:35',
                'updated_at' => '2023-05-29 19:52:35',
            ),
            78 => 
            array (
                'id' => 1079,
                'kriteria_id' => 5,
                'penduduk_id' => 180,
                'nilai' => 92.4,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            79 => 
            array (
                'id' => 1080,
                'kriteria_id' => 6,
                'penduduk_id' => 180,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            80 => 
            array (
                'id' => 1081,
                'kriteria_id' => 1,
                'penduduk_id' => 181,
                'nilai' => 3187450.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            81 => 
            array (
                'id' => 1082,
                'kriteria_id' => 2,
                'penduduk_id' => 181,
                'nilai' => 65.61,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            82 => 
            array (
                'id' => 1083,
                'kriteria_id' => 3,
                'penduduk_id' => 181,
                'nilai' => 22524000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            83 => 
            array (
                'id' => 1084,
                'kriteria_id' => 4,
                'penduduk_id' => 181,
                'nilai' => 58.48,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            84 => 
            array (
                'id' => 1085,
                'kriteria_id' => 5,
                'penduduk_id' => 181,
                'nilai' => 62.55,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            85 => 
            array (
                'id' => 1086,
                'kriteria_id' => 6,
                'penduduk_id' => 181,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            86 => 
            array (
                'id' => 1087,
                'kriteria_id' => 1,
                'penduduk_id' => 182,
                'nilai' => 2802450.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            87 => 
            array (
                'id' => 1088,
                'kriteria_id' => 2,
                'penduduk_id' => 182,
                'nilai' => 66.09,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            88 => 
            array (
                'id' => 1089,
                'kriteria_id' => 3,
                'penduduk_id' => 182,
                'nilai' => 27368000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            89 => 
            array (
                'id' => 1090,
                'kriteria_id' => 4,
                'penduduk_id' => 182,
                'nilai' => 32.37,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            90 => 
            array (
                'id' => 1091,
                'kriteria_id' => 5,
                'penduduk_id' => 182,
                'nilai' => 93.85,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            91 => 
            array (
                'id' => 1092,
                'kriteria_id' => 6,
                'penduduk_id' => 182,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            92 => 
            array (
                'id' => 1093,
                'kriteria_id' => 1,
                'penduduk_id' => 183,
                'nilai' => 2321900.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            93 => 
            array (
                'id' => 1094,
                'kriteria_id' => 2,
                'penduduk_id' => 183,
                'nilai' => 54.08,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            94 => 
            array (
                'id' => 1095,
                'kriteria_id' => 3,
                'penduduk_id' => 183,
                'nilai' => 15144000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            95 => 
            array (
                'id' => 1096,
                'kriteria_id' => 4,
                'penduduk_id' => 183,
                'nilai' => 50.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            96 => 
            array (
                'id' => 1097,
                'kriteria_id' => 5,
                'penduduk_id' => 183,
                'nilai' => 80.88,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            97 => 
            array (
                'id' => 1098,
                'kriteria_id' => 6,
                'penduduk_id' => 183,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            98 => 
            array (
                'id' => 1099,
                'kriteria_id' => 1,
                'penduduk_id' => 184,
                'nilai' => 1623650.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            99 => 
            array (
                'id' => 1100,
                'kriteria_id' => 2,
                'penduduk_id' => 184,
                'nilai' => 53.7,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            100 => 
            array (
                'id' => 1101,
                'kriteria_id' => 3,
                'penduduk_id' => 184,
                'nilai' => 34372000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            101 => 
            array (
                'id' => 1102,
                'kriteria_id' => 4,
                'penduduk_id' => 184,
                'nilai' => 93.11,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            102 => 
            array (
                'id' => 1103,
                'kriteria_id' => 5,
                'penduduk_id' => 184,
                'nilai' => 75.47,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            103 => 
            array (
                'id' => 1104,
                'kriteria_id' => 6,
                'penduduk_id' => 184,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            104 => 
            array (
                'id' => 1105,
                'kriteria_id' => 1,
                'penduduk_id' => 185,
                'nilai' => 2162650.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            105 => 
            array (
                'id' => 1106,
                'kriteria_id' => 2,
                'penduduk_id' => 185,
                'nilai' => 34.67,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            106 => 
            array (
                'id' => 1107,
                'kriteria_id' => 3,
                'penduduk_id' => 185,
                'nilai' => 16532000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            107 => 
            array (
                'id' => 1108,
                'kriteria_id' => 4,
                'penduduk_id' => 185,
                'nilai' => 32.06,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            108 => 
            array (
                'id' => 1109,
                'kriteria_id' => 5,
                'penduduk_id' => 185,
                'nilai' => 82.22,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            109 => 
            array (
                'id' => 1110,
                'kriteria_id' => 6,
                'penduduk_id' => 185,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            110 => 
            array (
                'id' => 1111,
                'kriteria_id' => 1,
                'penduduk_id' => 186,
                'nilai' => 1572550.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            111 => 
            array (
                'id' => 1112,
                'kriteria_id' => 2,
                'penduduk_id' => 186,
                'nilai' => 59.39,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            112 => 
            array (
                'id' => 1113,
                'kriteria_id' => 3,
                'penduduk_id' => 186,
                'nilai' => 29176000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            113 => 
            array (
                'id' => 1114,
                'kriteria_id' => 4,
                'penduduk_id' => 186,
                'nilai' => 47.72,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            114 => 
            array (
                'id' => 1115,
                'kriteria_id' => 5,
                'penduduk_id' => 186,
                'nilai' => 34.55,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            115 => 
            array (
                'id' => 1116,
                'kriteria_id' => 6,
                'penduduk_id' => 186,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            116 => 
            array (
                'id' => 1117,
                'kriteria_id' => 1,
                'penduduk_id' => 187,
                'nilai' => 1974000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            117 => 
            array (
                'id' => 1118,
                'kriteria_id' => 2,
                'penduduk_id' => 187,
                'nilai' => 56.99,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            118 => 
            array (
                'id' => 1119,
                'kriteria_id' => 3,
                'penduduk_id' => 187,
                'nilai' => 39972000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            119 => 
            array (
                'id' => 1120,
                'kriteria_id' => 4,
                'penduduk_id' => 187,
                'nilai' => 79.82,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            120 => 
            array (
                'id' => 1121,
                'kriteria_id' => 5,
                'penduduk_id' => 187,
                'nilai' => 60.23,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            121 => 
            array (
                'id' => 1122,
                'kriteria_id' => 6,
                'penduduk_id' => 187,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            122 => 
            array (
                'id' => 1123,
                'kriteria_id' => 1,
                'penduduk_id' => 188,
                'nilai' => 2661050.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            123 => 
            array (
                'id' => 1124,
                'kriteria_id' => 2,
                'penduduk_id' => 188,
                'nilai' => 30.69,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            124 => 
            array (
                'id' => 1125,
                'kriteria_id' => 3,
                'penduduk_id' => 188,
                'nilai' => 18800000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            125 => 
            array (
                'id' => 1126,
                'kriteria_id' => 4,
                'penduduk_id' => 188,
                'nilai' => 94.11,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            126 => 
            array (
                'id' => 1127,
                'kriteria_id' => 5,
                'penduduk_id' => 188,
                'nilai' => 68.95,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            127 => 
            array (
                'id' => 1128,
                'kriteria_id' => 6,
                'penduduk_id' => 188,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            128 => 
            array (
                'id' => 1129,
                'kriteria_id' => 1,
                'penduduk_id' => 189,
                'nilai' => 3499300.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            129 => 
            array (
                'id' => 1130,
                'kriteria_id' => 2,
                'penduduk_id' => 189,
                'nilai' => 53.09,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            130 => 
            array (
                'id' => 1131,
                'kriteria_id' => 3,
                'penduduk_id' => 189,
                'nilai' => 17020000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            131 => 
            array (
                'id' => 1132,
                'kriteria_id' => 4,
                'penduduk_id' => 189,
                'nilai' => 92.35,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            132 => 
            array (
                'id' => 1133,
                'kriteria_id' => 5,
                'penduduk_id' => 189,
                'nilai' => 26.73,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            133 => 
            array (
                'id' => 1134,
                'kriteria_id' => 6,
                'penduduk_id' => 189,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            134 => 
            array (
                'id' => 1135,
                'kriteria_id' => 1,
                'penduduk_id' => 190,
                'nilai' => 1823500.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            135 => 
            array (
                'id' => 1136,
                'kriteria_id' => 2,
                'penduduk_id' => 190,
                'nilai' => 72.72,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            136 => 
            array (
                'id' => 1137,
                'kriteria_id' => 3,
                'penduduk_id' => 190,
                'nilai' => 15472000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            137 => 
            array (
                'id' => 1138,
                'kriteria_id' => 4,
                'penduduk_id' => 190,
                'nilai' => 72.5,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            138 => 
            array (
                'id' => 1139,
                'kriteria_id' => 5,
                'penduduk_id' => 190,
                'nilai' => 81.27,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            139 => 
            array (
                'id' => 1140,
                'kriteria_id' => 6,
                'penduduk_id' => 190,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            140 => 
            array (
                'id' => 1141,
                'kriteria_id' => 1,
                'penduduk_id' => 191,
                'nilai' => 2820650.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            141 => 
            array (
                'id' => 1142,
                'kriteria_id' => 2,
                'penduduk_id' => 191,
                'nilai' => 33.11,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            142 => 
            array (
                'id' => 1143,
                'kriteria_id' => 3,
                'penduduk_id' => 191,
                'nilai' => 30344000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            143 => 
            array (
                'id' => 1144,
                'kriteria_id' => 4,
                'penduduk_id' => 191,
                'nilai' => 95.99,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            144 => 
            array (
                'id' => 1145,
                'kriteria_id' => 5,
                'penduduk_id' => 191,
                'nilai' => 90.99,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            145 => 
            array (
                'id' => 1146,
                'kriteria_id' => 6,
                'penduduk_id' => 191,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            146 => 
            array (
                'id' => 1147,
                'kriteria_id' => 1,
                'penduduk_id' => 192,
                'nilai' => 2713200.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            147 => 
            array (
                'id' => 1148,
                'kriteria_id' => 2,
                'penduduk_id' => 192,
                'nilai' => 82.3,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            148 => 
            array (
                'id' => 1149,
                'kriteria_id' => 3,
                'penduduk_id' => 192,
                'nilai' => 39780000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            149 => 
            array (
                'id' => 1150,
                'kriteria_id' => 4,
                'penduduk_id' => 192,
                'nilai' => 71.49,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            150 => 
            array (
                'id' => 1151,
                'kriteria_id' => 5,
                'penduduk_id' => 192,
                'nilai' => 92.36,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            151 => 
            array (
                'id' => 1152,
                'kriteria_id' => 6,
                'penduduk_id' => 192,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            152 => 
            array (
                'id' => 1153,
                'kriteria_id' => 1,
                'penduduk_id' => 193,
                'nilai' => 1651650.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            153 => 
            array (
                'id' => 1154,
                'kriteria_id' => 2,
                'penduduk_id' => 193,
                'nilai' => 75.42,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            154 => 
            array (
                'id' => 1155,
                'kriteria_id' => 3,
                'penduduk_id' => 193,
                'nilai' => 18012000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            155 => 
            array (
                'id' => 1156,
                'kriteria_id' => 4,
                'penduduk_id' => 193,
                'nilai' => 37.67,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            156 => 
            array (
                'id' => 1157,
                'kriteria_id' => 5,
                'penduduk_id' => 193,
                'nilai' => 92.39,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            157 => 
            array (
                'id' => 1158,
                'kriteria_id' => 6,
                'penduduk_id' => 193,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            158 => 
            array (
                'id' => 1159,
                'kriteria_id' => 1,
                'penduduk_id' => 194,
                'nilai' => 1078700.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            159 => 
            array (
                'id' => 1160,
                'kriteria_id' => 2,
                'penduduk_id' => 194,
                'nilai' => 66.91,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            160 => 
            array (
                'id' => 1161,
                'kriteria_id' => 3,
                'penduduk_id' => 194,
                'nilai' => 35116000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            161 => 
            array (
                'id' => 1162,
                'kriteria_id' => 4,
                'penduduk_id' => 194,
                'nilai' => 82.2,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            162 => 
            array (
                'id' => 1163,
                'kriteria_id' => 5,
                'penduduk_id' => 194,
                'nilai' => 36.63,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            163 => 
            array (
                'id' => 1164,
                'kriteria_id' => 6,
                'penduduk_id' => 194,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            164 => 
            array (
                'id' => 1165,
                'kriteria_id' => 1,
                'penduduk_id' => 195,
                'nilai' => 2802100.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            165 => 
            array (
                'id' => 1166,
                'kriteria_id' => 2,
                'penduduk_id' => 195,
                'nilai' => 34.65,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            166 => 
            array (
                'id' => 1167,
                'kriteria_id' => 3,
                'penduduk_id' => 195,
                'nilai' => 19880000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            167 => 
            array (
                'id' => 1168,
                'kriteria_id' => 4,
                'penduduk_id' => 195,
                'nilai' => 99.47,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            168 => 
            array (
                'id' => 1169,
                'kriteria_id' => 5,
                'penduduk_id' => 195,
                'nilai' => 68.33,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            169 => 
            array (
                'id' => 1170,
                'kriteria_id' => 6,
                'penduduk_id' => 195,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            170 => 
            array (
                'id' => 1171,
                'kriteria_id' => 1,
                'penduduk_id' => 196,
                'nilai' => 1220450.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            171 => 
            array (
                'id' => 1172,
                'kriteria_id' => 2,
                'penduduk_id' => 196,
                'nilai' => 60.16,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            172 => 
            array (
                'id' => 1173,
                'kriteria_id' => 3,
                'penduduk_id' => 196,
                'nilai' => 21408000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            173 => 
            array (
                'id' => 1174,
                'kriteria_id' => 4,
                'penduduk_id' => 196,
                'nilai' => 68.68,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            174 => 
            array (
                'id' => 1175,
                'kriteria_id' => 5,
                'penduduk_id' => 196,
                'nilai' => 83.37,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            175 => 
            array (
                'id' => 1176,
                'kriteria_id' => 6,
                'penduduk_id' => 196,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            176 => 
            array (
                'id' => 1177,
                'kriteria_id' => 1,
                'penduduk_id' => 197,
                'nilai' => 1097250.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            177 => 
            array (
                'id' => 1178,
                'kriteria_id' => 2,
                'penduduk_id' => 197,
                'nilai' => 33.24,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            178 => 
            array (
                'id' => 1179,
                'kriteria_id' => 3,
                'penduduk_id' => 197,
                'nilai' => 31512000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            179 => 
            array (
                'id' => 1180,
                'kriteria_id' => 4,
                'penduduk_id' => 197,
                'nilai' => 71.13,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            180 => 
            array (
                'id' => 1181,
                'kriteria_id' => 5,
                'penduduk_id' => 197,
                'nilai' => 60.41,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            181 => 
            array (
                'id' => 1182,
                'kriteria_id' => 6,
                'penduduk_id' => 197,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            182 => 
            array (
                'id' => 1183,
                'kriteria_id' => 1,
                'penduduk_id' => 198,
                'nilai' => 1227100.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            183 => 
            array (
                'id' => 1184,
                'kriteria_id' => 2,
                'penduduk_id' => 198,
                'nilai' => 72.29,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            184 => 
            array (
                'id' => 1185,
                'kriteria_id' => 3,
                'penduduk_id' => 198,
                'nilai' => 13760000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            185 => 
            array (
                'id' => 1186,
                'kriteria_id' => 4,
                'penduduk_id' => 198,
                'nilai' => 48.79,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            186 => 
            array (
                'id' => 1187,
                'kriteria_id' => 5,
                'penduduk_id' => 198,
                'nilai' => 71.65,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            187 => 
            array (
                'id' => 1188,
                'kriteria_id' => 6,
                'penduduk_id' => 198,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            188 => 
            array (
                'id' => 1189,
                'kriteria_id' => 1,
                'penduduk_id' => 199,
                'nilai' => 1709400.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            189 => 
            array (
                'id' => 1190,
                'kriteria_id' => 2,
                'penduduk_id' => 199,
                'nilai' => 74.98,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            190 => 
            array (
                'id' => 1191,
                'kriteria_id' => 3,
                'penduduk_id' => 199,
                'nilai' => 27860000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            191 => 
            array (
                'id' => 1192,
                'kriteria_id' => 4,
                'penduduk_id' => 199,
                'nilai' => 82.33,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            192 => 
            array (
                'id' => 1193,
                'kriteria_id' => 5,
                'penduduk_id' => 199,
                'nilai' => 77.88,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            193 => 
            array (
                'id' => 1194,
                'kriteria_id' => 6,
                'penduduk_id' => 199,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            194 => 
            array (
                'id' => 1195,
                'kriteria_id' => 1,
                'penduduk_id' => 200,
                'nilai' => 3480400.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            195 => 
            array (
                'id' => 1196,
                'kriteria_id' => 2,
                'penduduk_id' => 200,
                'nilai' => 53.63,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            196 => 
            array (
                'id' => 1197,
                'kriteria_id' => 3,
                'penduduk_id' => 200,
                'nilai' => 38052000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            197 => 
            array (
                'id' => 1198,
                'kriteria_id' => 4,
                'penduduk_id' => 200,
                'nilai' => 96.94,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            198 => 
            array (
                'id' => 1199,
                'kriteria_id' => 5,
                'penduduk_id' => 200,
                'nilai' => 34.78,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            199 => 
            array (
                'id' => 1200,
                'kriteria_id' => 6,
                'penduduk_id' => 200,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            200 => 
            array (
                'id' => 1201,
                'kriteria_id' => 1,
                'penduduk_id' => 201,
                'nilai' => 2573900.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            201 => 
            array (
                'id' => 1202,
                'kriteria_id' => 2,
                'penduduk_id' => 201,
                'nilai' => 37.7,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            202 => 
            array (
                'id' => 1203,
                'kriteria_id' => 3,
                'penduduk_id' => 201,
                'nilai' => 18136000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            203 => 
            array (
                'id' => 1204,
                'kriteria_id' => 4,
                'penduduk_id' => 201,
                'nilai' => 47.42,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            204 => 
            array (
                'id' => 1205,
                'kriteria_id' => 5,
                'penduduk_id' => 201,
                'nilai' => 79.77,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            205 => 
            array (
                'id' => 1206,
                'kriteria_id' => 6,
                'penduduk_id' => 201,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            206 => 
            array (
                'id' => 1207,
                'kriteria_id' => 1,
                'penduduk_id' => 202,
                'nilai' => 2078300.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            207 => 
            array (
                'id' => 1208,
                'kriteria_id' => 2,
                'penduduk_id' => 202,
                'nilai' => 60.15,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            208 => 
            array (
                'id' => 1209,
                'kriteria_id' => 3,
                'penduduk_id' => 202,
                'nilai' => 39236000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            209 => 
            array (
                'id' => 1210,
                'kriteria_id' => 4,
                'penduduk_id' => 202,
                'nilai' => 79.61,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            210 => 
            array (
                'id' => 1211,
                'kriteria_id' => 5,
                'penduduk_id' => 202,
                'nilai' => 94.63,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            211 => 
            array (
                'id' => 1212,
                'kriteria_id' => 6,
                'penduduk_id' => 202,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            212 => 
            array (
                'id' => 1213,
                'kriteria_id' => 1,
                'penduduk_id' => 203,
                'nilai' => 2795100.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            213 => 
            array (
                'id' => 1214,
                'kriteria_id' => 2,
                'penduduk_id' => 203,
                'nilai' => 90.15,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            214 => 
            array (
                'id' => 1215,
                'kriteria_id' => 3,
                'penduduk_id' => 203,
                'nilai' => 31776000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            215 => 
            array (
                'id' => 1216,
                'kriteria_id' => 4,
                'penduduk_id' => 203,
                'nilai' => 84.69,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            216 => 
            array (
                'id' => 1217,
                'kriteria_id' => 5,
                'penduduk_id' => 203,
                'nilai' => 31.92,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            217 => 
            array (
                'id' => 1218,
                'kriteria_id' => 6,
                'penduduk_id' => 203,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            218 => 
            array (
                'id' => 1219,
                'kriteria_id' => 1,
                'penduduk_id' => 204,
                'nilai' => 2660000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            219 => 
            array (
                'id' => 1220,
                'kriteria_id' => 2,
                'penduduk_id' => 204,
                'nilai' => 73.28,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            220 => 
            array (
                'id' => 1221,
                'kriteria_id' => 3,
                'penduduk_id' => 204,
                'nilai' => 31376000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            221 => 
            array (
                'id' => 1222,
                'kriteria_id' => 4,
                'penduduk_id' => 204,
                'nilai' => 69.87,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            222 => 
            array (
                'id' => 1223,
                'kriteria_id' => 5,
                'penduduk_id' => 204,
                'nilai' => 25.89,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            223 => 
            array (
                'id' => 1224,
                'kriteria_id' => 6,
                'penduduk_id' => 204,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            224 => 
            array (
                'id' => 1225,
                'kriteria_id' => 1,
                'penduduk_id' => 205,
                'nilai' => 3158050.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            225 => 
            array (
                'id' => 1226,
                'kriteria_id' => 2,
                'penduduk_id' => 205,
                'nilai' => 92.91,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            226 => 
            array (
                'id' => 1227,
                'kriteria_id' => 3,
                'penduduk_id' => 205,
                'nilai' => 12272000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            227 => 
            array (
                'id' => 1228,
                'kriteria_id' => 4,
                'penduduk_id' => 205,
                'nilai' => 50.01,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            228 => 
            array (
                'id' => 1229,
                'kriteria_id' => 5,
                'penduduk_id' => 205,
                'nilai' => 69.65,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            229 => 
            array (
                'id' => 1230,
                'kriteria_id' => 6,
                'penduduk_id' => 205,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            230 => 
            array (
                'id' => 1231,
                'kriteria_id' => 1,
                'penduduk_id' => 206,
                'nilai' => 1894550.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            231 => 
            array (
                'id' => 1232,
                'kriteria_id' => 2,
                'penduduk_id' => 206,
                'nilai' => 33.34,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            232 => 
            array (
                'id' => 1233,
                'kriteria_id' => 3,
                'penduduk_id' => 206,
                'nilai' => 30548000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            233 => 
            array (
                'id' => 1234,
                'kriteria_id' => 4,
                'penduduk_id' => 206,
                'nilai' => 93.15,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            234 => 
            array (
                'id' => 1235,
                'kriteria_id' => 5,
                'penduduk_id' => 206,
                'nilai' => 89.6,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            235 => 
            array (
                'id' => 1236,
                'kriteria_id' => 6,
                'penduduk_id' => 206,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            236 => 
            array (
                'id' => 1237,
                'kriteria_id' => 1,
                'penduduk_id' => 207,
                'nilai' => 3198300.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            237 => 
            array (
                'id' => 1238,
                'kriteria_id' => 2,
                'penduduk_id' => 207,
                'nilai' => 94.76,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            238 => 
            array (
                'id' => 1239,
                'kriteria_id' => 3,
                'penduduk_id' => 207,
                'nilai' => 10472000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            239 => 
            array (
                'id' => 1240,
                'kriteria_id' => 4,
                'penduduk_id' => 207,
                'nilai' => 59.95,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            240 => 
            array (
                'id' => 1241,
                'kriteria_id' => 5,
                'penduduk_id' => 207,
                'nilai' => 81.9,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            241 => 
            array (
                'id' => 1242,
                'kriteria_id' => 6,
                'penduduk_id' => 207,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            242 => 
            array (
                'id' => 1243,
                'kriteria_id' => 1,
                'penduduk_id' => 208,
                'nilai' => 1073450.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            243 => 
            array (
                'id' => 1244,
                'kriteria_id' => 2,
                'penduduk_id' => 208,
                'nilai' => 99.27,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            244 => 
            array (
                'id' => 1245,
                'kriteria_id' => 3,
                'penduduk_id' => 208,
                'nilai' => 17584000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            245 => 
            array (
                'id' => 1246,
                'kriteria_id' => 4,
                'penduduk_id' => 208,
                'nilai' => 93.43,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            246 => 
            array (
                'id' => 1247,
                'kriteria_id' => 5,
                'penduduk_id' => 208,
                'nilai' => 62.34,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            247 => 
            array (
                'id' => 1248,
                'kriteria_id' => 6,
                'penduduk_id' => 208,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            248 => 
            array (
                'id' => 1249,
                'kriteria_id' => 1,
                'penduduk_id' => 209,
                'nilai' => 2144450.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            249 => 
            array (
                'id' => 1250,
                'kriteria_id' => 2,
                'penduduk_id' => 209,
                'nilai' => 69.81,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            250 => 
            array (
                'id' => 1251,
                'kriteria_id' => 3,
                'penduduk_id' => 209,
                'nilai' => 39136000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            251 => 
            array (
                'id' => 1252,
                'kriteria_id' => 4,
                'penduduk_id' => 209,
                'nilai' => 66.08,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            252 => 
            array (
                'id' => 1253,
                'kriteria_id' => 5,
                'penduduk_id' => 209,
                'nilai' => 72.14,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            253 => 
            array (
                'id' => 1254,
                'kriteria_id' => 6,
                'penduduk_id' => 209,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            254 => 
            array (
                'id' => 1255,
                'kriteria_id' => 1,
                'penduduk_id' => 210,
                'nilai' => 1022000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            255 => 
            array (
                'id' => 1256,
                'kriteria_id' => 2,
                'penduduk_id' => 210,
                'nilai' => 29.81,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            256 => 
            array (
                'id' => 1257,
                'kriteria_id' => 3,
                'penduduk_id' => 210,
                'nilai' => 28812000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            257 => 
            array (
                'id' => 1258,
                'kriteria_id' => 4,
                'penduduk_id' => 210,
                'nilai' => 62.42,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            258 => 
            array (
                'id' => 1259,
                'kriteria_id' => 5,
                'penduduk_id' => 210,
                'nilai' => 46.69,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            259 => 
            array (
                'id' => 1260,
                'kriteria_id' => 6,
                'penduduk_id' => 210,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            260 => 
            array (
                'id' => 1261,
                'kriteria_id' => 1,
                'penduduk_id' => 211,
                'nilai' => 3029250.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            261 => 
            array (
                'id' => 1262,
                'kriteria_id' => 2,
                'penduduk_id' => 211,
                'nilai' => 50.63,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            262 => 
            array (
                'id' => 1263,
                'kriteria_id' => 3,
                'penduduk_id' => 211,
                'nilai' => 17936000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            263 => 
            array (
                'id' => 1264,
                'kriteria_id' => 4,
                'penduduk_id' => 211,
                'nilai' => 46.61,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            264 => 
            array (
                'id' => 1265,
                'kriteria_id' => 5,
                'penduduk_id' => 211,
                'nilai' => 38.61,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            265 => 
            array (
                'id' => 1266,
                'kriteria_id' => 6,
                'penduduk_id' => 211,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            266 => 
            array (
                'id' => 1267,
                'kriteria_id' => 1,
                'penduduk_id' => 212,
                'nilai' => 1463000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            267 => 
            array (
                'id' => 1268,
                'kriteria_id' => 2,
                'penduduk_id' => 212,
                'nilai' => 34.29,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            268 => 
            array (
                'id' => 1269,
                'kriteria_id' => 3,
                'penduduk_id' => 212,
                'nilai' => 22096000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            269 => 
            array (
                'id' => 1270,
                'kriteria_id' => 4,
                'penduduk_id' => 212,
                'nilai' => 64.23,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            270 => 
            array (
                'id' => 1271,
                'kriteria_id' => 5,
                'penduduk_id' => 212,
                'nilai' => 50.28,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            271 => 
            array (
                'id' => 1272,
                'kriteria_id' => 6,
                'penduduk_id' => 212,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            272 => 
            array (
                'id' => 1273,
                'kriteria_id' => 1,
                'penduduk_id' => 213,
                'nilai' => 2118900.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            273 => 
            array (
                'id' => 1274,
                'kriteria_id' => 2,
                'penduduk_id' => 213,
                'nilai' => 78.06,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            274 => 
            array (
                'id' => 1275,
                'kriteria_id' => 3,
                'penduduk_id' => 213,
                'nilai' => 20564000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            275 => 
            array (
                'id' => 1276,
                'kriteria_id' => 4,
                'penduduk_id' => 213,
                'nilai' => 36.39,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            276 => 
            array (
                'id' => 1277,
                'kriteria_id' => 5,
                'penduduk_id' => 213,
                'nilai' => 66.59,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            277 => 
            array (
                'id' => 1278,
                'kriteria_id' => 6,
                'penduduk_id' => 213,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            278 => 
            array (
                'id' => 1279,
                'kriteria_id' => 1,
                'penduduk_id' => 214,
                'nilai' => 1799000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            279 => 
            array (
                'id' => 1280,
                'kriteria_id' => 2,
                'penduduk_id' => 214,
                'nilai' => 61.91,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            280 => 
            array (
                'id' => 1281,
                'kriteria_id' => 3,
                'penduduk_id' => 214,
                'nilai' => 25704000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            281 => 
            array (
                'id' => 1282,
                'kriteria_id' => 4,
                'penduduk_id' => 214,
                'nilai' => 98.04,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            282 => 
            array (
                'id' => 1283,
                'kriteria_id' => 5,
                'penduduk_id' => 214,
                'nilai' => 39.7,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            283 => 
            array (
                'id' => 1284,
                'kriteria_id' => 6,
                'penduduk_id' => 214,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            284 => 
            array (
                'id' => 1285,
                'kriteria_id' => 1,
                'penduduk_id' => 215,
                'nilai' => 3382750.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            285 => 
            array (
                'id' => 1286,
                'kriteria_id' => 2,
                'penduduk_id' => 215,
                'nilai' => 54.86,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            286 => 
            array (
                'id' => 1287,
                'kriteria_id' => 3,
                'penduduk_id' => 215,
                'nilai' => 27792000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            287 => 
            array (
                'id' => 1288,
                'kriteria_id' => 4,
                'penduduk_id' => 215,
                'nilai' => 55.84,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            288 => 
            array (
                'id' => 1289,
                'kriteria_id' => 5,
                'penduduk_id' => 215,
                'nilai' => 80.54,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            289 => 
            array (
                'id' => 1290,
                'kriteria_id' => 6,
                'penduduk_id' => 215,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            290 => 
            array (
                'id' => 1291,
                'kriteria_id' => 1,
                'penduduk_id' => 216,
                'nilai' => 1191050.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            291 => 
            array (
                'id' => 1292,
                'kriteria_id' => 2,
                'penduduk_id' => 216,
                'nilai' => 47.85,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            292 => 
            array (
                'id' => 1293,
                'kriteria_id' => 3,
                'penduduk_id' => 216,
                'nilai' => 11640000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            293 => 
            array (
                'id' => 1294,
                'kriteria_id' => 4,
                'penduduk_id' => 216,
                'nilai' => 54.06,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            294 => 
            array (
                'id' => 1295,
                'kriteria_id' => 5,
                'penduduk_id' => 216,
                'nilai' => 31.24,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            295 => 
            array (
                'id' => 1296,
                'kriteria_id' => 6,
                'penduduk_id' => 216,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            296 => 
            array (
                'id' => 1297,
                'kriteria_id' => 1,
                'penduduk_id' => 217,
                'nilai' => 2549400.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            297 => 
            array (
                'id' => 1298,
                'kriteria_id' => 2,
                'penduduk_id' => 217,
                'nilai' => 68.2,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            298 => 
            array (
                'id' => 1299,
                'kriteria_id' => 3,
                'penduduk_id' => 217,
                'nilai' => 25492000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            299 => 
            array (
                'id' => 1300,
                'kriteria_id' => 4,
                'penduduk_id' => 217,
                'nilai' => 90.47,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            300 => 
            array (
                'id' => 1301,
                'kriteria_id' => 5,
                'penduduk_id' => 217,
                'nilai' => 83.96,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            301 => 
            array (
                'id' => 1302,
                'kriteria_id' => 6,
                'penduduk_id' => 217,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            302 => 
            array (
                'id' => 1303,
                'kriteria_id' => 1,
                'penduduk_id' => 218,
                'nilai' => 1081500.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            303 => 
            array (
                'id' => 1304,
                'kriteria_id' => 2,
                'penduduk_id' => 218,
                'nilai' => 52.73,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            304 => 
            array (
                'id' => 1305,
                'kriteria_id' => 3,
                'penduduk_id' => 218,
                'nilai' => 24228000.0,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            305 => 
            array (
                'id' => 1306,
                'kriteria_id' => 4,
                'penduduk_id' => 218,
                'nilai' => 53.05,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            306 => 
            array (
                'id' => 1307,
                'kriteria_id' => 5,
                'penduduk_id' => 218,
                'nilai' => 56.87,
                'created_at' => '2023-05-29 19:52:36',
                'updated_at' => '2023-05-29 19:52:36',
            ),
            307 => 
            array (
                'id' => 1308,
                'kriteria_id' => 6,
                'penduduk_id' => 218,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            308 => 
            array (
                'id' => 1309,
                'kriteria_id' => 1,
                'penduduk_id' => 219,
                'nilai' => 1452850.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            309 => 
            array (
                'id' => 1310,
                'kriteria_id' => 2,
                'penduduk_id' => 219,
                'nilai' => 86.52,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            310 => 
            array (
                'id' => 1311,
                'kriteria_id' => 3,
                'penduduk_id' => 219,
                'nilai' => 10868000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            311 => 
            array (
                'id' => 1312,
                'kriteria_id' => 4,
                'penduduk_id' => 219,
                'nilai' => 62.21,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            312 => 
            array (
                'id' => 1313,
                'kriteria_id' => 5,
                'penduduk_id' => 219,
                'nilai' => 26.56,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            313 => 
            array (
                'id' => 1314,
                'kriteria_id' => 6,
                'penduduk_id' => 219,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            314 => 
            array (
                'id' => 1315,
                'kriteria_id' => 1,
                'penduduk_id' => 220,
                'nilai' => 960750.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            315 => 
            array (
                'id' => 1316,
                'kriteria_id' => 2,
                'penduduk_id' => 220,
                'nilai' => 66.37,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            316 => 
            array (
                'id' => 1317,
                'kriteria_id' => 3,
                'penduduk_id' => 220,
                'nilai' => 17124000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            317 => 
            array (
                'id' => 1318,
                'kriteria_id' => 4,
                'penduduk_id' => 220,
                'nilai' => 95.7,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            318 => 
            array (
                'id' => 1319,
                'kriteria_id' => 5,
                'penduduk_id' => 220,
                'nilai' => 83.68,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            319 => 
            array (
                'id' => 1320,
                'kriteria_id' => 6,
                'penduduk_id' => 220,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            320 => 
            array (
                'id' => 1321,
                'kriteria_id' => 1,
                'penduduk_id' => 221,
                'nilai' => 1995700.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            321 => 
            array (
                'id' => 1322,
                'kriteria_id' => 2,
                'penduduk_id' => 221,
                'nilai' => 29.08,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            322 => 
            array (
                'id' => 1323,
                'kriteria_id' => 3,
                'penduduk_id' => 221,
                'nilai' => 32676000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            323 => 
            array (
                'id' => 1324,
                'kriteria_id' => 4,
                'penduduk_id' => 221,
                'nilai' => 64.26,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            324 => 
            array (
                'id' => 1325,
                'kriteria_id' => 5,
                'penduduk_id' => 221,
                'nilai' => 45.4,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            325 => 
            array (
                'id' => 1326,
                'kriteria_id' => 6,
                'penduduk_id' => 221,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            326 => 
            array (
                'id' => 1327,
                'kriteria_id' => 1,
                'penduduk_id' => 222,
                'nilai' => 2937550.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            327 => 
            array (
                'id' => 1328,
                'kriteria_id' => 2,
                'penduduk_id' => 222,
                'nilai' => 91.47,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            328 => 
            array (
                'id' => 1329,
                'kriteria_id' => 3,
                'penduduk_id' => 222,
                'nilai' => 28736000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            329 => 
            array (
                'id' => 1330,
                'kriteria_id' => 4,
                'penduduk_id' => 222,
                'nilai' => 49.77,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            330 => 
            array (
                'id' => 1331,
                'kriteria_id' => 5,
                'penduduk_id' => 222,
                'nilai' => 72.7,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            331 => 
            array (
                'id' => 1332,
                'kriteria_id' => 6,
                'penduduk_id' => 222,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            332 => 
            array (
                'id' => 1333,
                'kriteria_id' => 1,
                'penduduk_id' => 223,
                'nilai' => 1206100.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            333 => 
            array (
                'id' => 1334,
                'kriteria_id' => 2,
                'penduduk_id' => 223,
                'nilai' => 45.61,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            334 => 
            array (
                'id' => 1335,
                'kriteria_id' => 3,
                'penduduk_id' => 223,
                'nilai' => 11080000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            335 => 
            array (
                'id' => 1336,
                'kriteria_id' => 4,
                'penduduk_id' => 223,
                'nilai' => 46.64,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            336 => 
            array (
                'id' => 1337,
                'kriteria_id' => 5,
                'penduduk_id' => 223,
                'nilai' => 89.31,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            337 => 
            array (
                'id' => 1338,
                'kriteria_id' => 6,
                'penduduk_id' => 223,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            338 => 
            array (
                'id' => 1339,
                'kriteria_id' => 1,
                'penduduk_id' => 224,
                'nilai' => 1069250.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            339 => 
            array (
                'id' => 1340,
                'kriteria_id' => 2,
                'penduduk_id' => 224,
                'nilai' => 79.54,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            340 => 
            array (
                'id' => 1341,
                'kriteria_id' => 3,
                'penduduk_id' => 224,
                'nilai' => 32984000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            341 => 
            array (
                'id' => 1342,
                'kriteria_id' => 4,
                'penduduk_id' => 224,
                'nilai' => 67.01,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            342 => 
            array (
                'id' => 1343,
                'kriteria_id' => 5,
                'penduduk_id' => 224,
                'nilai' => 34.99,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            343 => 
            array (
                'id' => 1344,
                'kriteria_id' => 6,
                'penduduk_id' => 224,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            344 => 
            array (
                'id' => 1345,
                'kriteria_id' => 1,
                'penduduk_id' => 225,
                'nilai' => 1651650.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            345 => 
            array (
                'id' => 1346,
                'kriteria_id' => 2,
                'penduduk_id' => 225,
                'nilai' => 77.94,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            346 => 
            array (
                'id' => 1347,
                'kriteria_id' => 3,
                'penduduk_id' => 225,
                'nilai' => 18812000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            347 => 
            array (
                'id' => 1348,
                'kriteria_id' => 4,
                'penduduk_id' => 225,
                'nilai' => 37.16,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            348 => 
            array (
                'id' => 1349,
                'kriteria_id' => 5,
                'penduduk_id' => 225,
                'nilai' => 35.34,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            349 => 
            array (
                'id' => 1350,
                'kriteria_id' => 6,
                'penduduk_id' => 225,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            350 => 
            array (
                'id' => 1351,
                'kriteria_id' => 1,
                'penduduk_id' => 226,
                'nilai' => 1929200.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            351 => 
            array (
                'id' => 1352,
                'kriteria_id' => 2,
                'penduduk_id' => 226,
                'nilai' => 90.44,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            352 => 
            array (
                'id' => 1353,
                'kriteria_id' => 3,
                'penduduk_id' => 226,
                'nilai' => 22032000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            353 => 
            array (
                'id' => 1354,
                'kriteria_id' => 4,
                'penduduk_id' => 226,
                'nilai' => 42.16,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            354 => 
            array (
                'id' => 1355,
                'kriteria_id' => 5,
                'penduduk_id' => 226,
                'nilai' => 73.06,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            355 => 
            array (
                'id' => 1356,
                'kriteria_id' => 6,
                'penduduk_id' => 226,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            356 => 
            array (
                'id' => 1357,
                'kriteria_id' => 1,
                'penduduk_id' => 227,
                'nilai' => 3233650.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            357 => 
            array (
                'id' => 1358,
                'kriteria_id' => 2,
                'penduduk_id' => 227,
                'nilai' => 29.69,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            358 => 
            array (
                'id' => 1359,
                'kriteria_id' => 3,
                'penduduk_id' => 227,
                'nilai' => 28332000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            359 => 
            array (
                'id' => 1360,
                'kriteria_id' => 4,
                'penduduk_id' => 227,
                'nilai' => 33.21,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            360 => 
            array (
                'id' => 1361,
                'kriteria_id' => 5,
                'penduduk_id' => 227,
                'nilai' => 57.45,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            361 => 
            array (
                'id' => 1362,
                'kriteria_id' => 6,
                'penduduk_id' => 227,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            362 => 
            array (
                'id' => 1363,
                'kriteria_id' => 1,
                'penduduk_id' => 228,
                'nilai' => 2052050.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            363 => 
            array (
                'id' => 1364,
                'kriteria_id' => 2,
                'penduduk_id' => 228,
                'nilai' => 77.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            364 => 
            array (
                'id' => 1365,
                'kriteria_id' => 3,
                'penduduk_id' => 228,
                'nilai' => 16120000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            365 => 
            array (
                'id' => 1366,
                'kriteria_id' => 4,
                'penduduk_id' => 228,
                'nilai' => 57.86,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            366 => 
            array (
                'id' => 1367,
                'kriteria_id' => 5,
                'penduduk_id' => 228,
                'nilai' => 31.91,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            367 => 
            array (
                'id' => 1368,
                'kriteria_id' => 6,
                'penduduk_id' => 228,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            368 => 
            array (
                'id' => 1369,
                'kriteria_id' => 1,
                'penduduk_id' => 229,
                'nilai' => 2774800.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            369 => 
            array (
                'id' => 1370,
                'kriteria_id' => 2,
                'penduduk_id' => 229,
                'nilai' => 64.6,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            370 => 
            array (
                'id' => 1371,
                'kriteria_id' => 3,
                'penduduk_id' => 229,
                'nilai' => 37148000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            371 => 
            array (
                'id' => 1372,
                'kriteria_id' => 4,
                'penduduk_id' => 229,
                'nilai' => 63.44,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            372 => 
            array (
                'id' => 1373,
                'kriteria_id' => 5,
                'penduduk_id' => 229,
                'nilai' => 86.41,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            373 => 
            array (
                'id' => 1374,
                'kriteria_id' => 6,
                'penduduk_id' => 229,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            374 => 
            array (
                'id' => 1375,
                'kriteria_id' => 1,
                'penduduk_id' => 230,
                'nilai' => 2867550.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            375 => 
            array (
                'id' => 1376,
                'kriteria_id' => 2,
                'penduduk_id' => 230,
                'nilai' => 51.71,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            376 => 
            array (
                'id' => 1377,
                'kriteria_id' => 3,
                'penduduk_id' => 230,
                'nilai' => 35168000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            377 => 
            array (
                'id' => 1378,
                'kriteria_id' => 4,
                'penduduk_id' => 230,
                'nilai' => 73.52,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            378 => 
            array (
                'id' => 1379,
                'kriteria_id' => 5,
                'penduduk_id' => 230,
                'nilai' => 78.02,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            379 => 
            array (
                'id' => 1380,
                'kriteria_id' => 6,
                'penduduk_id' => 230,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            380 => 
            array (
                'id' => 1381,
                'kriteria_id' => 1,
                'penduduk_id' => 231,
                'nilai' => 1189300.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            381 => 
            array (
                'id' => 1382,
                'kriteria_id' => 2,
                'penduduk_id' => 231,
                'nilai' => 26.04,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            382 => 
            array (
                'id' => 1383,
                'kriteria_id' => 3,
                'penduduk_id' => 231,
                'nilai' => 21284000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            383 => 
            array (
                'id' => 1384,
                'kriteria_id' => 4,
                'penduduk_id' => 231,
                'nilai' => 78.43,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            384 => 
            array (
                'id' => 1385,
                'kriteria_id' => 5,
                'penduduk_id' => 231,
                'nilai' => 69.05,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            385 => 
            array (
                'id' => 1386,
                'kriteria_id' => 6,
                'penduduk_id' => 231,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            386 => 
            array (
                'id' => 1387,
                'kriteria_id' => 1,
                'penduduk_id' => 232,
                'nilai' => 1157800.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            387 => 
            array (
                'id' => 1388,
                'kriteria_id' => 2,
                'penduduk_id' => 232,
                'nilai' => 30.88,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            388 => 
            array (
                'id' => 1389,
                'kriteria_id' => 3,
                'penduduk_id' => 232,
                'nilai' => 32948000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            389 => 
            array (
                'id' => 1390,
                'kriteria_id' => 4,
                'penduduk_id' => 232,
                'nilai' => 26.27,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            390 => 
            array (
                'id' => 1391,
                'kriteria_id' => 5,
                'penduduk_id' => 232,
                'nilai' => 60.43,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            391 => 
            array (
                'id' => 1392,
                'kriteria_id' => 6,
                'penduduk_id' => 232,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            392 => 
            array (
                'id' => 1393,
                'kriteria_id' => 1,
                'penduduk_id' => 233,
                'nilai' => 2364600.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            393 => 
            array (
                'id' => 1394,
                'kriteria_id' => 2,
                'penduduk_id' => 233,
                'nilai' => 97.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            394 => 
            array (
                'id' => 1395,
                'kriteria_id' => 3,
                'penduduk_id' => 233,
                'nilai' => 33152000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            395 => 
            array (
                'id' => 1396,
                'kriteria_id' => 4,
                'penduduk_id' => 233,
                'nilai' => 37.25,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            396 => 
            array (
                'id' => 1397,
                'kriteria_id' => 5,
                'penduduk_id' => 233,
                'nilai' => 97.74,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            397 => 
            array (
                'id' => 1398,
                'kriteria_id' => 6,
                'penduduk_id' => 233,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            398 => 
            array (
                'id' => 1399,
                'kriteria_id' => 1,
                'penduduk_id' => 234,
                'nilai' => 2663850.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            399 => 
            array (
                'id' => 1400,
                'kriteria_id' => 2,
                'penduduk_id' => 234,
                'nilai' => 39.03,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            400 => 
            array (
                'id' => 1401,
                'kriteria_id' => 3,
                'penduduk_id' => 234,
                'nilai' => 31484000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            401 => 
            array (
                'id' => 1402,
                'kriteria_id' => 4,
                'penduduk_id' => 234,
                'nilai' => 91.84,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            402 => 
            array (
                'id' => 1403,
                'kriteria_id' => 5,
                'penduduk_id' => 234,
                'nilai' => 83.46,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            403 => 
            array (
                'id' => 1404,
                'kriteria_id' => 6,
                'penduduk_id' => 234,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            404 => 
            array (
                'id' => 1405,
                'kriteria_id' => 1,
                'penduduk_id' => 235,
                'nilai' => 2207450.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            405 => 
            array (
                'id' => 1406,
                'kriteria_id' => 2,
                'penduduk_id' => 235,
                'nilai' => 63.14,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            406 => 
            array (
                'id' => 1407,
                'kriteria_id' => 3,
                'penduduk_id' => 235,
                'nilai' => 26840000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            407 => 
            array (
                'id' => 1408,
                'kriteria_id' => 4,
                'penduduk_id' => 235,
                'nilai' => 80.31,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            408 => 
            array (
                'id' => 1409,
                'kriteria_id' => 5,
                'penduduk_id' => 235,
                'nilai' => 30.15,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            409 => 
            array (
                'id' => 1410,
                'kriteria_id' => 6,
                'penduduk_id' => 235,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            410 => 
            array (
                'id' => 1411,
                'kriteria_id' => 1,
                'penduduk_id' => 236,
                'nilai' => 2517550.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            411 => 
            array (
                'id' => 1412,
                'kriteria_id' => 2,
                'penduduk_id' => 236,
                'nilai' => 55.85,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            412 => 
            array (
                'id' => 1413,
                'kriteria_id' => 3,
                'penduduk_id' => 236,
                'nilai' => 17976000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            413 => 
            array (
                'id' => 1414,
                'kriteria_id' => 4,
                'penduduk_id' => 236,
                'nilai' => 77.45,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            414 => 
            array (
                'id' => 1415,
                'kriteria_id' => 5,
                'penduduk_id' => 236,
                'nilai' => 57.89,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            415 => 
            array (
                'id' => 1416,
                'kriteria_id' => 6,
                'penduduk_id' => 236,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            416 => 
            array (
                'id' => 1417,
                'kriteria_id' => 1,
                'penduduk_id' => 237,
                'nilai' => 1876000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            417 => 
            array (
                'id' => 1418,
                'kriteria_id' => 2,
                'penduduk_id' => 237,
                'nilai' => 58.67,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            418 => 
            array (
                'id' => 1419,
                'kriteria_id' => 3,
                'penduduk_id' => 237,
                'nilai' => 19308000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            419 => 
            array (
                'id' => 1420,
                'kriteria_id' => 4,
                'penduduk_id' => 237,
                'nilai' => 42.83,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            420 => 
            array (
                'id' => 1421,
                'kriteria_id' => 5,
                'penduduk_id' => 237,
                'nilai' => 48.21,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            421 => 
            array (
                'id' => 1422,
                'kriteria_id' => 6,
                'penduduk_id' => 237,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            422 => 
            array (
                'id' => 1423,
                'kriteria_id' => 1,
                'penduduk_id' => 238,
                'nilai' => 1038800.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            423 => 
            array (
                'id' => 1424,
                'kriteria_id' => 2,
                'penduduk_id' => 238,
                'nilai' => 44.56,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            424 => 
            array (
                'id' => 1425,
                'kriteria_id' => 3,
                'penduduk_id' => 238,
                'nilai' => 10796000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            425 => 
            array (
                'id' => 1426,
                'kriteria_id' => 4,
                'penduduk_id' => 238,
                'nilai' => 44.99,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            426 => 
            array (
                'id' => 1427,
                'kriteria_id' => 5,
                'penduduk_id' => 238,
                'nilai' => 86.77,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            427 => 
            array (
                'id' => 1428,
                'kriteria_id' => 6,
                'penduduk_id' => 238,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            428 => 
            array (
                'id' => 1429,
                'kriteria_id' => 1,
                'penduduk_id' => 239,
                'nilai' => 1238650.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            429 => 
            array (
                'id' => 1430,
                'kriteria_id' => 2,
                'penduduk_id' => 239,
                'nilai' => 38.78,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            430 => 
            array (
                'id' => 1431,
                'kriteria_id' => 3,
                'penduduk_id' => 239,
                'nilai' => 37688000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            431 => 
            array (
                'id' => 1432,
                'kriteria_id' => 4,
                'penduduk_id' => 239,
                'nilai' => 51.38,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            432 => 
            array (
                'id' => 1433,
                'kriteria_id' => 5,
                'penduduk_id' => 239,
                'nilai' => 41.84,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            433 => 
            array (
                'id' => 1434,
                'kriteria_id' => 6,
                'penduduk_id' => 239,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            434 => 
            array (
                'id' => 1435,
                'kriteria_id' => 1,
                'penduduk_id' => 240,
                'nilai' => 2642150.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            435 => 
            array (
                'id' => 1436,
                'kriteria_id' => 2,
                'penduduk_id' => 240,
                'nilai' => 43.18,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            436 => 
            array (
                'id' => 1437,
                'kriteria_id' => 3,
                'penduduk_id' => 240,
                'nilai' => 35080000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            437 => 
            array (
                'id' => 1438,
                'kriteria_id' => 4,
                'penduduk_id' => 240,
                'nilai' => 92.53,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            438 => 
            array (
                'id' => 1439,
                'kriteria_id' => 5,
                'penduduk_id' => 240,
                'nilai' => 40.47,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            439 => 
            array (
                'id' => 1440,
                'kriteria_id' => 6,
                'penduduk_id' => 240,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            440 => 
            array (
                'id' => 1441,
                'kriteria_id' => 1,
                'penduduk_id' => 241,
                'nilai' => 3117450.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            441 => 
            array (
                'id' => 1442,
                'kriteria_id' => 2,
                'penduduk_id' => 241,
                'nilai' => 51.25,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            442 => 
            array (
                'id' => 1443,
                'kriteria_id' => 3,
                'penduduk_id' => 241,
                'nilai' => 39484000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            443 => 
            array (
                'id' => 1444,
                'kriteria_id' => 4,
                'penduduk_id' => 241,
                'nilai' => 73.7,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            444 => 
            array (
                'id' => 1445,
                'kriteria_id' => 5,
                'penduduk_id' => 241,
                'nilai' => 78.46,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            445 => 
            array (
                'id' => 1446,
                'kriteria_id' => 6,
                'penduduk_id' => 241,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            446 => 
            array (
                'id' => 1447,
                'kriteria_id' => 1,
                'penduduk_id' => 242,
                'nilai' => 1948100.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            447 => 
            array (
                'id' => 1448,
                'kriteria_id' => 2,
                'penduduk_id' => 242,
                'nilai' => 61.49,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            448 => 
            array (
                'id' => 1449,
                'kriteria_id' => 3,
                'penduduk_id' => 242,
                'nilai' => 10296000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            449 => 
            array (
                'id' => 1450,
                'kriteria_id' => 4,
                'penduduk_id' => 242,
                'nilai' => 42.57,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            450 => 
            array (
                'id' => 1451,
                'kriteria_id' => 5,
                'penduduk_id' => 242,
                'nilai' => 74.14,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            451 => 
            array (
                'id' => 1452,
                'kriteria_id' => 6,
                'penduduk_id' => 242,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            452 => 
            array (
                'id' => 1453,
                'kriteria_id' => 1,
                'penduduk_id' => 243,
                'nilai' => 2518600.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            453 => 
            array (
                'id' => 1454,
                'kriteria_id' => 2,
                'penduduk_id' => 243,
                'nilai' => 30.29,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            454 => 
            array (
                'id' => 1455,
                'kriteria_id' => 3,
                'penduduk_id' => 243,
                'nilai' => 32908000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            455 => 
            array (
                'id' => 1456,
                'kriteria_id' => 4,
                'penduduk_id' => 243,
                'nilai' => 98.98,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            456 => 
            array (
                'id' => 1457,
                'kriteria_id' => 5,
                'penduduk_id' => 243,
                'nilai' => 27.15,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            457 => 
            array (
                'id' => 1458,
                'kriteria_id' => 6,
                'penduduk_id' => 243,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            458 => 
            array (
                'id' => 1459,
                'kriteria_id' => 1,
                'penduduk_id' => 244,
                'nilai' => 3232600.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            459 => 
            array (
                'id' => 1460,
                'kriteria_id' => 2,
                'penduduk_id' => 244,
                'nilai' => 82.64,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            460 => 
            array (
                'id' => 1461,
                'kriteria_id' => 3,
                'penduduk_id' => 244,
                'nilai' => 39872000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            461 => 
            array (
                'id' => 1462,
                'kriteria_id' => 4,
                'penduduk_id' => 244,
                'nilai' => 32.97,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            462 => 
            array (
                'id' => 1463,
                'kriteria_id' => 5,
                'penduduk_id' => 244,
                'nilai' => 29.74,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            463 => 
            array (
                'id' => 1464,
                'kriteria_id' => 6,
                'penduduk_id' => 244,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            464 => 
            array (
                'id' => 1465,
                'kriteria_id' => 1,
                'penduduk_id' => 245,
                'nilai' => 2170700.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            465 => 
            array (
                'id' => 1466,
                'kriteria_id' => 2,
                'penduduk_id' => 245,
                'nilai' => 47.87,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            466 => 
            array (
                'id' => 1467,
                'kriteria_id' => 3,
                'penduduk_id' => 245,
                'nilai' => 25300000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            467 => 
            array (
                'id' => 1468,
                'kriteria_id' => 4,
                'penduduk_id' => 245,
                'nilai' => 96.92,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            468 => 
            array (
                'id' => 1469,
                'kriteria_id' => 5,
                'penduduk_id' => 245,
                'nilai' => 85.28,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            469 => 
            array (
                'id' => 1470,
                'kriteria_id' => 6,
                'penduduk_id' => 245,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            470 => 
            array (
                'id' => 1471,
                'kriteria_id' => 1,
                'penduduk_id' => 246,
                'nilai' => 1776600.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            471 => 
            array (
                'id' => 1472,
                'kriteria_id' => 2,
                'penduduk_id' => 246,
                'nilai' => 40.9,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            472 => 
            array (
                'id' => 1473,
                'kriteria_id' => 3,
                'penduduk_id' => 246,
                'nilai' => 10596000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            473 => 
            array (
                'id' => 1474,
                'kriteria_id' => 4,
                'penduduk_id' => 246,
                'nilai' => 34.97,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            474 => 
            array (
                'id' => 1475,
                'kriteria_id' => 5,
                'penduduk_id' => 246,
                'nilai' => 45.94,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            475 => 
            array (
                'id' => 1476,
                'kriteria_id' => 6,
                'penduduk_id' => 246,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            476 => 
            array (
                'id' => 1477,
                'kriteria_id' => 1,
                'penduduk_id' => 247,
                'nilai' => 3035550.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            477 => 
            array (
                'id' => 1478,
                'kriteria_id' => 2,
                'penduduk_id' => 247,
                'nilai' => 63.41,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            478 => 
            array (
                'id' => 1479,
                'kriteria_id' => 3,
                'penduduk_id' => 247,
                'nilai' => 18940000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            479 => 
            array (
                'id' => 1480,
                'kriteria_id' => 4,
                'penduduk_id' => 247,
                'nilai' => 65.48,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            480 => 
            array (
                'id' => 1481,
                'kriteria_id' => 5,
                'penduduk_id' => 247,
                'nilai' => 61.87,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            481 => 
            array (
                'id' => 1482,
                'kriteria_id' => 6,
                'penduduk_id' => 247,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            482 => 
            array (
                'id' => 1483,
                'kriteria_id' => 1,
                'penduduk_id' => 248,
                'nilai' => 2665950.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            483 => 
            array (
                'id' => 1484,
                'kriteria_id' => 2,
                'penduduk_id' => 248,
                'nilai' => 34.76,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            484 => 
            array (
                'id' => 1485,
                'kriteria_id' => 3,
                'penduduk_id' => 248,
                'nilai' => 26252000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            485 => 
            array (
                'id' => 1486,
                'kriteria_id' => 4,
                'penduduk_id' => 248,
                'nilai' => 97.03,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            486 => 
            array (
                'id' => 1487,
                'kriteria_id' => 5,
                'penduduk_id' => 248,
                'nilai' => 74.45,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            487 => 
            array (
                'id' => 1488,
                'kriteria_id' => 6,
                'penduduk_id' => 248,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            488 => 
            array (
                'id' => 1489,
                'kriteria_id' => 1,
                'penduduk_id' => 249,
                'nilai' => 2320150.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            489 => 
            array (
                'id' => 1490,
                'kriteria_id' => 2,
                'penduduk_id' => 249,
                'nilai' => 76.98,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            490 => 
            array (
                'id' => 1491,
                'kriteria_id' => 3,
                'penduduk_id' => 249,
                'nilai' => 26848000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            491 => 
            array (
                'id' => 1492,
                'kriteria_id' => 4,
                'penduduk_id' => 249,
                'nilai' => 64.47,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            492 => 
            array (
                'id' => 1493,
                'kriteria_id' => 5,
                'penduduk_id' => 249,
                'nilai' => 85.76,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            493 => 
            array (
                'id' => 1494,
                'kriteria_id' => 6,
                'penduduk_id' => 249,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            494 => 
            array (
                'id' => 1495,
                'kriteria_id' => 1,
                'penduduk_id' => 250,
                'nilai' => 1820700.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            495 => 
            array (
                'id' => 1496,
                'kriteria_id' => 2,
                'penduduk_id' => 250,
                'nilai' => 34.86,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            496 => 
            array (
                'id' => 1497,
                'kriteria_id' => 3,
                'penduduk_id' => 250,
                'nilai' => 13412000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            497 => 
            array (
                'id' => 1498,
                'kriteria_id' => 4,
                'penduduk_id' => 250,
                'nilai' => 32.73,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            498 => 
            array (
                'id' => 1499,
                'kriteria_id' => 5,
                'penduduk_id' => 250,
                'nilai' => 95.18,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            499 => 
            array (
                'id' => 1500,
                'kriteria_id' => 6,
                'penduduk_id' => 250,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
        ));
        \DB::table('penduduk_nilai')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'kriteria_id' => 1,
                'penduduk_id' => 251,
                'nilai' => 3314850.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            1 => 
            array (
                'id' => 1502,
                'kriteria_id' => 2,
                'penduduk_id' => 251,
                'nilai' => 36.49,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            2 => 
            array (
                'id' => 1503,
                'kriteria_id' => 3,
                'penduduk_id' => 251,
                'nilai' => 35672000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            3 => 
            array (
                'id' => 1504,
                'kriteria_id' => 4,
                'penduduk_id' => 251,
                'nilai' => 50.34,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            4 => 
            array (
                'id' => 1505,
                'kriteria_id' => 5,
                'penduduk_id' => 251,
                'nilai' => 83.19,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            5 => 
            array (
                'id' => 1506,
                'kriteria_id' => 6,
                'penduduk_id' => 251,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            6 => 
            array (
                'id' => 1507,
                'kriteria_id' => 1,
                'penduduk_id' => 252,
                'nilai' => 2185050.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            7 => 
            array (
                'id' => 1508,
                'kriteria_id' => 2,
                'penduduk_id' => 252,
                'nilai' => 75.1,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            8 => 
            array (
                'id' => 1509,
                'kriteria_id' => 3,
                'penduduk_id' => 252,
                'nilai' => 22756000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            9 => 
            array (
                'id' => 1510,
                'kriteria_id' => 4,
                'penduduk_id' => 252,
                'nilai' => 29.45,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            10 => 
            array (
                'id' => 1511,
                'kriteria_id' => 5,
                'penduduk_id' => 252,
                'nilai' => 70.01,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            11 => 
            array (
                'id' => 1512,
                'kriteria_id' => 6,
                'penduduk_id' => 252,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            12 => 
            array (
                'id' => 1513,
                'kriteria_id' => 1,
                'penduduk_id' => 253,
                'nilai' => 2229850.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            13 => 
            array (
                'id' => 1514,
                'kriteria_id' => 2,
                'penduduk_id' => 253,
                'nilai' => 45.63,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            14 => 
            array (
                'id' => 1515,
                'kriteria_id' => 3,
                'penduduk_id' => 253,
                'nilai' => 25536000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            15 => 
            array (
                'id' => 1516,
                'kriteria_id' => 4,
                'penduduk_id' => 253,
                'nilai' => 73.78,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            16 => 
            array (
                'id' => 1517,
                'kriteria_id' => 5,
                'penduduk_id' => 253,
                'nilai' => 34.81,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            17 => 
            array (
                'id' => 1518,
                'kriteria_id' => 6,
                'penduduk_id' => 253,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            18 => 
            array (
                'id' => 1519,
                'kriteria_id' => 1,
                'penduduk_id' => 254,
                'nilai' => 1799350.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            19 => 
            array (
                'id' => 1520,
                'kriteria_id' => 2,
                'penduduk_id' => 254,
                'nilai' => 75.89,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            20 => 
            array (
                'id' => 1521,
                'kriteria_id' => 3,
                'penduduk_id' => 254,
                'nilai' => 11840000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            21 => 
            array (
                'id' => 1522,
                'kriteria_id' => 4,
                'penduduk_id' => 254,
                'nilai' => 48.29,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            22 => 
            array (
                'id' => 1523,
                'kriteria_id' => 5,
                'penduduk_id' => 254,
                'nilai' => 61.19,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            23 => 
            array (
                'id' => 1524,
                'kriteria_id' => 6,
                'penduduk_id' => 254,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            24 => 
            array (
                'id' => 1525,
                'kriteria_id' => 1,
                'penduduk_id' => 255,
                'nilai' => 3228750.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            25 => 
            array (
                'id' => 1526,
                'kriteria_id' => 2,
                'penduduk_id' => 255,
                'nilai' => 73.37,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            26 => 
            array (
                'id' => 1527,
                'kriteria_id' => 3,
                'penduduk_id' => 255,
                'nilai' => 14292000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            27 => 
            array (
                'id' => 1528,
                'kriteria_id' => 4,
                'penduduk_id' => 255,
                'nilai' => 95.06,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            28 => 
            array (
                'id' => 1529,
                'kriteria_id' => 5,
                'penduduk_id' => 255,
                'nilai' => 58.87,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            29 => 
            array (
                'id' => 1530,
                'kriteria_id' => 6,
                'penduduk_id' => 255,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            30 => 
            array (
                'id' => 1531,
                'kriteria_id' => 1,
                'penduduk_id' => 256,
                'nilai' => 1262100.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            31 => 
            array (
                'id' => 1532,
                'kriteria_id' => 2,
                'penduduk_id' => 256,
                'nilai' => 43.01,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            32 => 
            array (
                'id' => 1533,
                'kriteria_id' => 3,
                'penduduk_id' => 256,
                'nilai' => 35180000.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            33 => 
            array (
                'id' => 1534,
                'kriteria_id' => 4,
                'penduduk_id' => 256,
                'nilai' => 60.54,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            34 => 
            array (
                'id' => 1535,
                'kriteria_id' => 5,
                'penduduk_id' => 256,
                'nilai' => 54.75,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            35 => 
            array (
                'id' => 1536,
                'kriteria_id' => 6,
                'penduduk_id' => 256,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:37',
                'updated_at' => '2023-05-29 19:52:37',
            ),
            36 => 
            array (
                'id' => 1537,
                'kriteria_id' => 1,
                'penduduk_id' => 257,
                'nilai' => 1342250.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            37 => 
            array (
                'id' => 1538,
                'kriteria_id' => 2,
                'penduduk_id' => 257,
                'nilai' => 91.13,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            38 => 
            array (
                'id' => 1539,
                'kriteria_id' => 3,
                'penduduk_id' => 257,
                'nilai' => 29160000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            39 => 
            array (
                'id' => 1540,
                'kriteria_id' => 4,
                'penduduk_id' => 257,
                'nilai' => 47.68,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            40 => 
            array (
                'id' => 1541,
                'kriteria_id' => 5,
                'penduduk_id' => 257,
                'nilai' => 66.93,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            41 => 
            array (
                'id' => 1542,
                'kriteria_id' => 6,
                'penduduk_id' => 257,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            42 => 
            array (
                'id' => 1543,
                'kriteria_id' => 1,
                'penduduk_id' => 258,
                'nilai' => 2926000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            43 => 
            array (
                'id' => 1544,
                'kriteria_id' => 2,
                'penduduk_id' => 258,
                'nilai' => 39.16,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            44 => 
            array (
                'id' => 1545,
                'kriteria_id' => 3,
                'penduduk_id' => 258,
                'nilai' => 31296000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            45 => 
            array (
                'id' => 1546,
                'kriteria_id' => 4,
                'penduduk_id' => 258,
                'nilai' => 38.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            46 => 
            array (
                'id' => 1547,
                'kriteria_id' => 5,
                'penduduk_id' => 258,
                'nilai' => 46.85,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            47 => 
            array (
                'id' => 1548,
                'kriteria_id' => 6,
                'penduduk_id' => 258,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            48 => 
            array (
                'id' => 1549,
                'kriteria_id' => 1,
                'penduduk_id' => 259,
                'nilai' => 2710400.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            49 => 
            array (
                'id' => 1550,
                'kriteria_id' => 2,
                'penduduk_id' => 259,
                'nilai' => 54.32,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            50 => 
            array (
                'id' => 1551,
                'kriteria_id' => 3,
                'penduduk_id' => 259,
                'nilai' => 36212000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            51 => 
            array (
                'id' => 1552,
                'kriteria_id' => 4,
                'penduduk_id' => 259,
                'nilai' => 76.21,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            52 => 
            array (
                'id' => 1553,
                'kriteria_id' => 5,
                'penduduk_id' => 259,
                'nilai' => 42.58,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            53 => 
            array (
                'id' => 1554,
                'kriteria_id' => 6,
                'penduduk_id' => 259,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            54 => 
            array (
                'id' => 1555,
                'kriteria_id' => 1,
                'penduduk_id' => 260,
                'nilai' => 2657550.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            55 => 
            array (
                'id' => 1556,
                'kriteria_id' => 2,
                'penduduk_id' => 260,
                'nilai' => 29.75,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            56 => 
            array (
                'id' => 1557,
                'kriteria_id' => 3,
                'penduduk_id' => 260,
                'nilai' => 19040000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            57 => 
            array (
                'id' => 1558,
                'kriteria_id' => 4,
                'penduduk_id' => 260,
                'nilai' => 63.91,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            58 => 
            array (
                'id' => 1559,
                'kriteria_id' => 5,
                'penduduk_id' => 260,
                'nilai' => 57.35,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            59 => 
            array (
                'id' => 1560,
                'kriteria_id' => 6,
                'penduduk_id' => 260,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            60 => 
            array (
                'id' => 1561,
                'kriteria_id' => 1,
                'penduduk_id' => 261,
                'nilai' => 2195550.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            61 => 
            array (
                'id' => 1562,
                'kriteria_id' => 2,
                'penduduk_id' => 261,
                'nilai' => 77.33,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            62 => 
            array (
                'id' => 1563,
                'kriteria_id' => 3,
                'penduduk_id' => 261,
                'nilai' => 23488000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            63 => 
            array (
                'id' => 1564,
                'kriteria_id' => 4,
                'penduduk_id' => 261,
                'nilai' => 38.66,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            64 => 
            array (
                'id' => 1565,
                'kriteria_id' => 5,
                'penduduk_id' => 261,
                'nilai' => 41.97,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            65 => 
            array (
                'id' => 1566,
                'kriteria_id' => 6,
                'penduduk_id' => 261,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            66 => 
            array (
                'id' => 1567,
                'kriteria_id' => 1,
                'penduduk_id' => 262,
                'nilai' => 2599800.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            67 => 
            array (
                'id' => 1568,
                'kriteria_id' => 2,
                'penduduk_id' => 262,
                'nilai' => 51.48,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            68 => 
            array (
                'id' => 1569,
                'kriteria_id' => 3,
                'penduduk_id' => 262,
                'nilai' => 13264000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            69 => 
            array (
                'id' => 1570,
                'kriteria_id' => 4,
                'penduduk_id' => 262,
                'nilai' => 62.17,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            70 => 
            array (
                'id' => 1571,
                'kriteria_id' => 5,
                'penduduk_id' => 262,
                'nilai' => 51.16,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            71 => 
            array (
                'id' => 1572,
                'kriteria_id' => 6,
                'penduduk_id' => 262,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            72 => 
            array (
                'id' => 1573,
                'kriteria_id' => 1,
                'penduduk_id' => 263,
                'nilai' => 1344350.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            73 => 
            array (
                'id' => 1574,
                'kriteria_id' => 2,
                'penduduk_id' => 263,
                'nilai' => 71.3,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            74 => 
            array (
                'id' => 1575,
                'kriteria_id' => 3,
                'penduduk_id' => 263,
                'nilai' => 39520000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            75 => 
            array (
                'id' => 1576,
                'kriteria_id' => 4,
                'penduduk_id' => 263,
                'nilai' => 67.29,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            76 => 
            array (
                'id' => 1577,
                'kriteria_id' => 5,
                'penduduk_id' => 263,
                'nilai' => 39.48,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            77 => 
            array (
                'id' => 1578,
                'kriteria_id' => 6,
                'penduduk_id' => 263,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            78 => 
            array (
                'id' => 1579,
                'kriteria_id' => 1,
                'penduduk_id' => 264,
                'nilai' => 2975000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            79 => 
            array (
                'id' => 1580,
                'kriteria_id' => 2,
                'penduduk_id' => 264,
                'nilai' => 28.51,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            80 => 
            array (
                'id' => 1581,
                'kriteria_id' => 3,
                'penduduk_id' => 264,
                'nilai' => 28416000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            81 => 
            array (
                'id' => 1582,
                'kriteria_id' => 4,
                'penduduk_id' => 264,
                'nilai' => 37.78,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            82 => 
            array (
                'id' => 1583,
                'kriteria_id' => 5,
                'penduduk_id' => 264,
                'nilai' => 40.91,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            83 => 
            array (
                'id' => 1584,
                'kriteria_id' => 6,
                'penduduk_id' => 264,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            84 => 
            array (
                'id' => 1585,
                'kriteria_id' => 1,
                'penduduk_id' => 265,
                'nilai' => 3451700.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            85 => 
            array (
                'id' => 1586,
                'kriteria_id' => 2,
                'penduduk_id' => 265,
                'nilai' => 44.36,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            86 => 
            array (
                'id' => 1587,
                'kriteria_id' => 3,
                'penduduk_id' => 265,
                'nilai' => 21592000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            87 => 
            array (
                'id' => 1588,
                'kriteria_id' => 4,
                'penduduk_id' => 265,
                'nilai' => 91.19,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            88 => 
            array (
                'id' => 1589,
                'kriteria_id' => 5,
                'penduduk_id' => 265,
                'nilai' => 57.95,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            89 => 
            array (
                'id' => 1590,
                'kriteria_id' => 6,
                'penduduk_id' => 265,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            90 => 
            array (
                'id' => 1591,
                'kriteria_id' => 1,
                'penduduk_id' => 266,
                'nilai' => 3253600.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            91 => 
            array (
                'id' => 1592,
                'kriteria_id' => 2,
                'penduduk_id' => 266,
                'nilai' => 28.08,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            92 => 
            array (
                'id' => 1593,
                'kriteria_id' => 3,
                'penduduk_id' => 266,
                'nilai' => 15520000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            93 => 
            array (
                'id' => 1594,
                'kriteria_id' => 4,
                'penduduk_id' => 266,
                'nilai' => 98.67,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            94 => 
            array (
                'id' => 1595,
                'kriteria_id' => 5,
                'penduduk_id' => 266,
                'nilai' => 34.39,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            95 => 
            array (
                'id' => 1596,
                'kriteria_id' => 6,
                'penduduk_id' => 266,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            96 => 
            array (
                'id' => 1597,
                'kriteria_id' => 1,
                'penduduk_id' => 267,
                'nilai' => 2111200.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            97 => 
            array (
                'id' => 1598,
                'kriteria_id' => 2,
                'penduduk_id' => 267,
                'nilai' => 47.64,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            98 => 
            array (
                'id' => 1599,
                'kriteria_id' => 3,
                'penduduk_id' => 267,
                'nilai' => 31752000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            99 => 
            array (
                'id' => 1600,
                'kriteria_id' => 4,
                'penduduk_id' => 267,
                'nilai' => 90.86,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            100 => 
            array (
                'id' => 1601,
                'kriteria_id' => 5,
                'penduduk_id' => 267,
                'nilai' => 80.59,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            101 => 
            array (
                'id' => 1602,
                'kriteria_id' => 6,
                'penduduk_id' => 267,
                'nilai' => 0.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            102 => 
            array (
                'id' => 1603,
                'kriteria_id' => 1,
                'penduduk_id' => 268,
                'nilai' => 1454950.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            103 => 
            array (
                'id' => 1604,
                'kriteria_id' => 2,
                'penduduk_id' => 268,
                'nilai' => 89.93,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            104 => 
            array (
                'id' => 1605,
                'kriteria_id' => 3,
                'penduduk_id' => 268,
                'nilai' => 37444000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            105 => 
            array (
                'id' => 1606,
                'kriteria_id' => 4,
                'penduduk_id' => 268,
                'nilai' => 40.26,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            106 => 
            array (
                'id' => 1607,
                'kriteria_id' => 5,
                'penduduk_id' => 268,
                'nilai' => 34.99,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            107 => 
            array (
                'id' => 1608,
                'kriteria_id' => 6,
                'penduduk_id' => 268,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            108 => 
            array (
                'id' => 1609,
                'kriteria_id' => 1,
                'penduduk_id' => 269,
                'nilai' => 1469300.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            109 => 
            array (
                'id' => 1610,
                'kriteria_id' => 2,
                'penduduk_id' => 269,
                'nilai' => 78.12,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            110 => 
            array (
                'id' => 1611,
                'kriteria_id' => 3,
                'penduduk_id' => 269,
                'nilai' => 20988000.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            111 => 
            array (
                'id' => 1612,
                'kriteria_id' => 4,
                'penduduk_id' => 269,
                'nilai' => 25.5,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            112 => 
            array (
                'id' => 1613,
                'kriteria_id' => 5,
                'penduduk_id' => 269,
                'nilai' => 29.78,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
            113 => 
            array (
                'id' => 1614,
                'kriteria_id' => 6,
                'penduduk_id' => 269,
                'nilai' => 1.0,
                'created_at' => '2023-05-29 19:52:38',
                'updated_at' => '2023-05-29 19:52:38',
            ),
        ));
        
        
    }
}