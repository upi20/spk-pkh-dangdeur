<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PRoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('p_role_has_permissions')->delete();
        
        \DB::table('p_role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'role_id' => 9,
            ),
            2 => 
            array (
                'permission_id' => 2,
                'role_id' => 10,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 3,
                'role_id' => 9,
            ),
            5 => 
            array (
                'permission_id' => 3,
                'role_id' => 10,
            ),
            6 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 4,
                'role_id' => 9,
            ),
            8 => 
            array (
                'permission_id' => 4,
                'role_id' => 10,
            ),
            9 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 5,
                'role_id' => 9,
            ),
            11 => 
            array (
                'permission_id' => 5,
                'role_id' => 10,
            ),
            12 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 6,
                'role_id' => 9,
            ),
            14 => 
            array (
                'permission_id' => 6,
                'role_id' => 10,
            ),
            15 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 7,
                'role_id' => 9,
            ),
            17 => 
            array (
                'permission_id' => 7,
                'role_id' => 10,
            ),
            18 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 8,
                'role_id' => 9,
            ),
            20 => 
            array (
                'permission_id' => 8,
                'role_id' => 10,
            ),
            21 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 9,
                'role_id' => 9,
            ),
            23 => 
            array (
                'permission_id' => 9,
                'role_id' => 10,
            ),
            24 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 10,
                'role_id' => 9,
            ),
            26 => 
            array (
                'permission_id' => 10,
                'role_id' => 10,
            ),
            27 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 11,
                'role_id' => 9,
            ),
            29 => 
            array (
                'permission_id' => 11,
                'role_id' => 10,
            ),
            30 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 12,
                'role_id' => 9,
            ),
            32 => 
            array (
                'permission_id' => 12,
                'role_id' => 10,
            ),
            33 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 13,
                'role_id' => 9,
            ),
            35 => 
            array (
                'permission_id' => 13,
                'role_id' => 10,
            ),
            36 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 14,
                'role_id' => 9,
            ),
            38 => 
            array (
                'permission_id' => 14,
                'role_id' => 10,
            ),
            39 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 15,
                'role_id' => 9,
            ),
            41 => 
            array (
                'permission_id' => 15,
                'role_id' => 10,
            ),
            42 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 16,
                'role_id' => 9,
            ),
            44 => 
            array (
                'permission_id' => 16,
                'role_id' => 10,
            ),
            45 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 17,
                'role_id' => 9,
            ),
            47 => 
            array (
                'permission_id' => 17,
                'role_id' => 10,
            ),
            48 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            49 => 
            array (
                'permission_id' => 18,
                'role_id' => 9,
            ),
            50 => 
            array (
                'permission_id' => 18,
                'role_id' => 10,
            ),
            51 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 19,
                'role_id' => 9,
            ),
            53 => 
            array (
                'permission_id' => 19,
                'role_id' => 10,
            ),
            54 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            55 => 
            array (
                'permission_id' => 20,
                'role_id' => 9,
            ),
            56 => 
            array (
                'permission_id' => 20,
                'role_id' => 10,
            ),
            57 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            58 => 
            array (
                'permission_id' => 21,
                'role_id' => 9,
            ),
            59 => 
            array (
                'permission_id' => 21,
                'role_id' => 10,
            ),
            60 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 22,
                'role_id' => 9,
            ),
            62 => 
            array (
                'permission_id' => 22,
                'role_id' => 10,
            ),
            63 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            64 => 
            array (
                'permission_id' => 23,
                'role_id' => 9,
            ),
            65 => 
            array (
                'permission_id' => 23,
                'role_id' => 10,
            ),
            66 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 24,
                'role_id' => 9,
            ),
            68 => 
            array (
                'permission_id' => 24,
                'role_id' => 10,
            ),
            69 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            70 => 
            array (
                'permission_id' => 25,
                'role_id' => 9,
            ),
            71 => 
            array (
                'permission_id' => 25,
                'role_id' => 10,
            ),
            72 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 26,
                'role_id' => 9,
            ),
            74 => 
            array (
                'permission_id' => 26,
                'role_id' => 10,
            ),
            75 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 27,
                'role_id' => 9,
            ),
            77 => 
            array (
                'permission_id' => 27,
                'role_id' => 10,
            ),
            78 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            79 => 
            array (
                'permission_id' => 28,
                'role_id' => 9,
            ),
            80 => 
            array (
                'permission_id' => 28,
                'role_id' => 10,
            ),
            81 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 29,
                'role_id' => 9,
            ),
            83 => 
            array (
                'permission_id' => 29,
                'role_id' => 10,
            ),
            84 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 30,
                'role_id' => 9,
            ),
            86 => 
            array (
                'permission_id' => 30,
                'role_id' => 10,
            ),
            87 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 31,
                'role_id' => 9,
            ),
            89 => 
            array (
                'permission_id' => 31,
                'role_id' => 10,
            ),
            90 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 32,
                'role_id' => 9,
            ),
            92 => 
            array (
                'permission_id' => 32,
                'role_id' => 10,
            ),
            93 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 33,
                'role_id' => 9,
            ),
            95 => 
            array (
                'permission_id' => 33,
                'role_id' => 10,
            ),
            96 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 34,
                'role_id' => 9,
            ),
            98 => 
            array (
                'permission_id' => 34,
                'role_id' => 10,
            ),
            99 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 35,
                'role_id' => 9,
            ),
            101 => 
            array (
                'permission_id' => 35,
                'role_id' => 10,
            ),
            102 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            103 => 
            array (
                'permission_id' => 36,
                'role_id' => 9,
            ),
            104 => 
            array (
                'permission_id' => 36,
                'role_id' => 10,
            ),
            105 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 37,
                'role_id' => 9,
            ),
            107 => 
            array (
                'permission_id' => 37,
                'role_id' => 10,
            ),
            108 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 38,
                'role_id' => 9,
            ),
            110 => 
            array (
                'permission_id' => 38,
                'role_id' => 10,
            ),
            111 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 39,
                'role_id' => 9,
            ),
            113 => 
            array (
                'permission_id' => 39,
                'role_id' => 10,
            ),
            114 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 40,
                'role_id' => 9,
            ),
            116 => 
            array (
                'permission_id' => 40,
                'role_id' => 10,
            ),
            117 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            118 => 
            array (
                'permission_id' => 41,
                'role_id' => 9,
            ),
            119 => 
            array (
                'permission_id' => 41,
                'role_id' => 10,
            ),
            120 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 42,
                'role_id' => 9,
            ),
            122 => 
            array (
                'permission_id' => 42,
                'role_id' => 10,
            ),
            123 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 43,
                'role_id' => 9,
            ),
            125 => 
            array (
                'permission_id' => 43,
                'role_id' => 10,
            ),
            126 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 44,
                'role_id' => 9,
            ),
            128 => 
            array (
                'permission_id' => 44,
                'role_id' => 10,
            ),
            129 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 45,
                'role_id' => 9,
            ),
            131 => 
            array (
                'permission_id' => 45,
                'role_id' => 10,
            ),
            132 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            133 => 
            array (
                'permission_id' => 46,
                'role_id' => 9,
            ),
            134 => 
            array (
                'permission_id' => 46,
                'role_id' => 10,
            ),
            135 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 47,
                'role_id' => 9,
            ),
            137 => 
            array (
                'permission_id' => 47,
                'role_id' => 10,
            ),
            138 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            139 => 
            array (
                'permission_id' => 48,
                'role_id' => 9,
            ),
            140 => 
            array (
                'permission_id' => 48,
                'role_id' => 10,
            ),
            141 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            142 => 
            array (
                'permission_id' => 49,
                'role_id' => 9,
            ),
            143 => 
            array (
                'permission_id' => 49,
                'role_id' => 10,
            ),
            144 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            145 => 
            array (
                'permission_id' => 50,
                'role_id' => 9,
            ),
            146 => 
            array (
                'permission_id' => 50,
                'role_id' => 10,
            ),
            147 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            148 => 
            array (
                'permission_id' => 51,
                'role_id' => 9,
            ),
            149 => 
            array (
                'permission_id' => 51,
                'role_id' => 10,
            ),
            150 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            151 => 
            array (
                'permission_id' => 52,
                'role_id' => 9,
            ),
            152 => 
            array (
                'permission_id' => 52,
                'role_id' => 10,
            ),
            153 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            154 => 
            array (
                'permission_id' => 53,
                'role_id' => 9,
            ),
            155 => 
            array (
                'permission_id' => 53,
                'role_id' => 10,
            ),
            156 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            157 => 
            array (
                'permission_id' => 54,
                'role_id' => 9,
            ),
            158 => 
            array (
                'permission_id' => 54,
                'role_id' => 10,
            ),
            159 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            160 => 
            array (
                'permission_id' => 55,
                'role_id' => 9,
            ),
            161 => 
            array (
                'permission_id' => 55,
                'role_id' => 10,
            ),
            162 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            163 => 
            array (
                'permission_id' => 56,
                'role_id' => 9,
            ),
            164 => 
            array (
                'permission_id' => 56,
                'role_id' => 10,
            ),
            165 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            166 => 
            array (
                'permission_id' => 57,
                'role_id' => 9,
            ),
            167 => 
            array (
                'permission_id' => 57,
                'role_id' => 10,
            ),
            168 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            169 => 
            array (
                'permission_id' => 58,
                'role_id' => 9,
            ),
            170 => 
            array (
                'permission_id' => 58,
                'role_id' => 10,
            ),
            171 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            172 => 
            array (
                'permission_id' => 59,
                'role_id' => 9,
            ),
            173 => 
            array (
                'permission_id' => 59,
                'role_id' => 10,
            ),
            174 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            175 => 
            array (
                'permission_id' => 60,
                'role_id' => 9,
            ),
            176 => 
            array (
                'permission_id' => 60,
                'role_id' => 10,
            ),
            177 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            178 => 
            array (
                'permission_id' => 61,
                'role_id' => 9,
            ),
            179 => 
            array (
                'permission_id' => 61,
                'role_id' => 10,
            ),
            180 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            181 => 
            array (
                'permission_id' => 62,
                'role_id' => 9,
            ),
            182 => 
            array (
                'permission_id' => 62,
                'role_id' => 10,
            ),
            183 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            184 => 
            array (
                'permission_id' => 63,
                'role_id' => 9,
            ),
            185 => 
            array (
                'permission_id' => 63,
                'role_id' => 10,
            ),
            186 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            187 => 
            array (
                'permission_id' => 64,
                'role_id' => 9,
            ),
            188 => 
            array (
                'permission_id' => 64,
                'role_id' => 10,
            ),
            189 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            190 => 
            array (
                'permission_id' => 65,
                'role_id' => 9,
            ),
            191 => 
            array (
                'permission_id' => 65,
                'role_id' => 10,
            ),
            192 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            193 => 
            array (
                'permission_id' => 66,
                'role_id' => 9,
            ),
            194 => 
            array (
                'permission_id' => 66,
                'role_id' => 10,
            ),
            195 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            196 => 
            array (
                'permission_id' => 67,
                'role_id' => 9,
            ),
            197 => 
            array (
                'permission_id' => 67,
                'role_id' => 10,
            ),
            198 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            199 => 
            array (
                'permission_id' => 68,
                'role_id' => 9,
            ),
            200 => 
            array (
                'permission_id' => 68,
                'role_id' => 10,
            ),
            201 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            202 => 
            array (
                'permission_id' => 69,
                'role_id' => 9,
            ),
            203 => 
            array (
                'permission_id' => 69,
                'role_id' => 10,
            ),
            204 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            205 => 
            array (
                'permission_id' => 70,
                'role_id' => 9,
            ),
            206 => 
            array (
                'permission_id' => 70,
                'role_id' => 10,
            ),
            207 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            208 => 
            array (
                'permission_id' => 71,
                'role_id' => 9,
            ),
            209 => 
            array (
                'permission_id' => 71,
                'role_id' => 10,
            ),
            210 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            211 => 
            array (
                'permission_id' => 72,
                'role_id' => 9,
            ),
            212 => 
            array (
                'permission_id' => 72,
                'role_id' => 10,
            ),
            213 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            214 => 
            array (
                'permission_id' => 73,
                'role_id' => 9,
            ),
            215 => 
            array (
                'permission_id' => 73,
                'role_id' => 10,
            ),
            216 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            217 => 
            array (
                'permission_id' => 74,
                'role_id' => 9,
            ),
            218 => 
            array (
                'permission_id' => 74,
                'role_id' => 10,
            ),
            219 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            220 => 
            array (
                'permission_id' => 75,
                'role_id' => 9,
            ),
            221 => 
            array (
                'permission_id' => 75,
                'role_id' => 10,
            ),
            222 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            223 => 
            array (
                'permission_id' => 76,
                'role_id' => 9,
            ),
            224 => 
            array (
                'permission_id' => 76,
                'role_id' => 10,
            ),
            225 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            226 => 
            array (
                'permission_id' => 77,
                'role_id' => 9,
            ),
            227 => 
            array (
                'permission_id' => 77,
                'role_id' => 10,
            ),
            228 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            229 => 
            array (
                'permission_id' => 78,
                'role_id' => 9,
            ),
            230 => 
            array (
                'permission_id' => 78,
                'role_id' => 10,
            ),
            231 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            232 => 
            array (
                'permission_id' => 79,
                'role_id' => 9,
            ),
            233 => 
            array (
                'permission_id' => 79,
                'role_id' => 10,
            ),
            234 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            235 => 
            array (
                'permission_id' => 80,
                'role_id' => 9,
            ),
            236 => 
            array (
                'permission_id' => 80,
                'role_id' => 10,
            ),
            237 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            238 => 
            array (
                'permission_id' => 81,
                'role_id' => 9,
            ),
            239 => 
            array (
                'permission_id' => 81,
                'role_id' => 10,
            ),
            240 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            241 => 
            array (
                'permission_id' => 82,
                'role_id' => 9,
            ),
            242 => 
            array (
                'permission_id' => 82,
                'role_id' => 10,
            ),
            243 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            244 => 
            array (
                'permission_id' => 83,
                'role_id' => 9,
            ),
            245 => 
            array (
                'permission_id' => 83,
                'role_id' => 10,
            ),
            246 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            247 => 
            array (
                'permission_id' => 84,
                'role_id' => 9,
            ),
            248 => 
            array (
                'permission_id' => 84,
                'role_id' => 10,
            ),
            249 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            250 => 
            array (
                'permission_id' => 85,
                'role_id' => 9,
            ),
            251 => 
            array (
                'permission_id' => 85,
                'role_id' => 10,
            ),
            252 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            253 => 
            array (
                'permission_id' => 86,
                'role_id' => 9,
            ),
            254 => 
            array (
                'permission_id' => 86,
                'role_id' => 10,
            ),
            255 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            256 => 
            array (
                'permission_id' => 87,
                'role_id' => 9,
            ),
            257 => 
            array (
                'permission_id' => 87,
                'role_id' => 10,
            ),
            258 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            259 => 
            array (
                'permission_id' => 88,
                'role_id' => 9,
            ),
            260 => 
            array (
                'permission_id' => 88,
                'role_id' => 10,
            ),
            261 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            262 => 
            array (
                'permission_id' => 89,
                'role_id' => 9,
            ),
            263 => 
            array (
                'permission_id' => 89,
                'role_id' => 10,
            ),
            264 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            265 => 
            array (
                'permission_id' => 90,
                'role_id' => 9,
            ),
            266 => 
            array (
                'permission_id' => 90,
                'role_id' => 10,
            ),
            267 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            268 => 
            array (
                'permission_id' => 91,
                'role_id' => 9,
            ),
            269 => 
            array (
                'permission_id' => 91,
                'role_id' => 10,
            ),
            270 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            271 => 
            array (
                'permission_id' => 92,
                'role_id' => 9,
            ),
            272 => 
            array (
                'permission_id' => 92,
                'role_id' => 10,
            ),
            273 => 
            array (
                'permission_id' => 93,
                'role_id' => 1,
            ),
            274 => 
            array (
                'permission_id' => 93,
                'role_id' => 9,
            ),
            275 => 
            array (
                'permission_id' => 93,
                'role_id' => 10,
            ),
            276 => 
            array (
                'permission_id' => 94,
                'role_id' => 1,
            ),
            277 => 
            array (
                'permission_id' => 94,
                'role_id' => 9,
            ),
            278 => 
            array (
                'permission_id' => 94,
                'role_id' => 10,
            ),
            279 => 
            array (
                'permission_id' => 95,
                'role_id' => 1,
            ),
            280 => 
            array (
                'permission_id' => 95,
                'role_id' => 9,
            ),
            281 => 
            array (
                'permission_id' => 95,
                'role_id' => 10,
            ),
            282 => 
            array (
                'permission_id' => 96,
                'role_id' => 1,
            ),
            283 => 
            array (
                'permission_id' => 96,
                'role_id' => 9,
            ),
            284 => 
            array (
                'permission_id' => 96,
                'role_id' => 10,
            ),
            285 => 
            array (
                'permission_id' => 97,
                'role_id' => 1,
            ),
            286 => 
            array (
                'permission_id' => 97,
                'role_id' => 9,
            ),
            287 => 
            array (
                'permission_id' => 97,
                'role_id' => 10,
            ),
            288 => 
            array (
                'permission_id' => 98,
                'role_id' => 1,
            ),
            289 => 
            array (
                'permission_id' => 98,
                'role_id' => 9,
            ),
            290 => 
            array (
                'permission_id' => 98,
                'role_id' => 10,
            ),
            291 => 
            array (
                'permission_id' => 99,
                'role_id' => 1,
            ),
            292 => 
            array (
                'permission_id' => 99,
                'role_id' => 9,
            ),
            293 => 
            array (
                'permission_id' => 99,
                'role_id' => 10,
            ),
            294 => 
            array (
                'permission_id' => 100,
                'role_id' => 1,
            ),
            295 => 
            array (
                'permission_id' => 100,
                'role_id' => 9,
            ),
            296 => 
            array (
                'permission_id' => 100,
                'role_id' => 10,
            ),
            297 => 
            array (
                'permission_id' => 101,
                'role_id' => 1,
            ),
            298 => 
            array (
                'permission_id' => 101,
                'role_id' => 9,
            ),
            299 => 
            array (
                'permission_id' => 101,
                'role_id' => 10,
            ),
            300 => 
            array (
                'permission_id' => 102,
                'role_id' => 1,
            ),
            301 => 
            array (
                'permission_id' => 102,
                'role_id' => 9,
            ),
            302 => 
            array (
                'permission_id' => 102,
                'role_id' => 10,
            ),
            303 => 
            array (
                'permission_id' => 103,
                'role_id' => 1,
            ),
            304 => 
            array (
                'permission_id' => 103,
                'role_id' => 9,
            ),
            305 => 
            array (
                'permission_id' => 103,
                'role_id' => 10,
            ),
            306 => 
            array (
                'permission_id' => 104,
                'role_id' => 1,
            ),
            307 => 
            array (
                'permission_id' => 104,
                'role_id' => 9,
            ),
            308 => 
            array (
                'permission_id' => 104,
                'role_id' => 10,
            ),
            309 => 
            array (
                'permission_id' => 105,
                'role_id' => 1,
            ),
            310 => 
            array (
                'permission_id' => 105,
                'role_id' => 9,
            ),
            311 => 
            array (
                'permission_id' => 105,
                'role_id' => 10,
            ),
            312 => 
            array (
                'permission_id' => 106,
                'role_id' => 1,
            ),
            313 => 
            array (
                'permission_id' => 106,
                'role_id' => 9,
            ),
            314 => 
            array (
                'permission_id' => 106,
                'role_id' => 10,
            ),
            315 => 
            array (
                'permission_id' => 107,
                'role_id' => 1,
            ),
            316 => 
            array (
                'permission_id' => 107,
                'role_id' => 9,
            ),
            317 => 
            array (
                'permission_id' => 107,
                'role_id' => 10,
            ),
            318 => 
            array (
                'permission_id' => 108,
                'role_id' => 9,
            ),
            319 => 
            array (
                'permission_id' => 108,
                'role_id' => 10,
            ),
            320 => 
            array (
                'permission_id' => 109,
                'role_id' => 9,
            ),
            321 => 
            array (
                'permission_id' => 109,
                'role_id' => 10,
            ),
            322 => 
            array (
                'permission_id' => 110,
                'role_id' => 9,
            ),
            323 => 
            array (
                'permission_id' => 110,
                'role_id' => 10,
            ),
            324 => 
            array (
                'permission_id' => 111,
                'role_id' => 9,
            ),
            325 => 
            array (
                'permission_id' => 111,
                'role_id' => 10,
            ),
            326 => 
            array (
                'permission_id' => 112,
                'role_id' => 9,
            ),
            327 => 
            array (
                'permission_id' => 112,
                'role_id' => 10,
            ),
            328 => 
            array (
                'permission_id' => 113,
                'role_id' => 9,
            ),
            329 => 
            array (
                'permission_id' => 113,
                'role_id' => 10,
            ),
            330 => 
            array (
                'permission_id' => 114,
                'role_id' => 9,
            ),
            331 => 
            array (
                'permission_id' => 114,
                'role_id' => 10,
            ),
            332 => 
            array (
                'permission_id' => 115,
                'role_id' => 9,
            ),
            333 => 
            array (
                'permission_id' => 115,
                'role_id' => 10,
            ),
            334 => 
            array (
                'permission_id' => 116,
                'role_id' => 9,
            ),
            335 => 
            array (
                'permission_id' => 116,
                'role_id' => 10,
            ),
            336 => 
            array (
                'permission_id' => 117,
                'role_id' => 9,
            ),
            337 => 
            array (
                'permission_id' => 117,
                'role_id' => 10,
            ),
            338 => 
            array (
                'permission_id' => 118,
                'role_id' => 9,
            ),
            339 => 
            array (
                'permission_id' => 118,
                'role_id' => 10,
            ),
            340 => 
            array (
                'permission_id' => 119,
                'role_id' => 9,
            ),
            341 => 
            array (
                'permission_id' => 119,
                'role_id' => 10,
            ),
            342 => 
            array (
                'permission_id' => 120,
                'role_id' => 9,
            ),
            343 => 
            array (
                'permission_id' => 120,
                'role_id' => 10,
            ),
            344 => 
            array (
                'permission_id' => 121,
                'role_id' => 9,
            ),
            345 => 
            array (
                'permission_id' => 121,
                'role_id' => 10,
            ),
            346 => 
            array (
                'permission_id' => 122,
                'role_id' => 9,
            ),
            347 => 
            array (
                'permission_id' => 122,
                'role_id' => 10,
            ),
            348 => 
            array (
                'permission_id' => 123,
                'role_id' => 9,
            ),
            349 => 
            array (
                'permission_id' => 123,
                'role_id' => 10,
            ),
            350 => 
            array (
                'permission_id' => 124,
                'role_id' => 9,
            ),
            351 => 
            array (
                'permission_id' => 124,
                'role_id' => 10,
            ),
            352 => 
            array (
                'permission_id' => 125,
                'role_id' => 9,
            ),
            353 => 
            array (
                'permission_id' => 125,
                'role_id' => 10,
            ),
            354 => 
            array (
                'permission_id' => 126,
                'role_id' => 9,
            ),
            355 => 
            array (
                'permission_id' => 126,
                'role_id' => 10,
            ),
            356 => 
            array (
                'permission_id' => 127,
                'role_id' => 9,
            ),
            357 => 
            array (
                'permission_id' => 127,
                'role_id' => 10,
            ),
            358 => 
            array (
                'permission_id' => 128,
                'role_id' => 9,
            ),
            359 => 
            array (
                'permission_id' => 128,
                'role_id' => 10,
            ),
            360 => 
            array (
                'permission_id' => 129,
                'role_id' => 9,
            ),
            361 => 
            array (
                'permission_id' => 129,
                'role_id' => 10,
            ),
            362 => 
            array (
                'permission_id' => 130,
                'role_id' => 9,
            ),
            363 => 
            array (
                'permission_id' => 130,
                'role_id' => 10,
            ),
            364 => 
            array (
                'permission_id' => 131,
                'role_id' => 9,
            ),
            365 => 
            array (
                'permission_id' => 131,
                'role_id' => 10,
            ),
            366 => 
            array (
                'permission_id' => 132,
                'role_id' => 9,
            ),
            367 => 
            array (
                'permission_id' => 132,
                'role_id' => 10,
            ),
            368 => 
            array (
                'permission_id' => 133,
                'role_id' => 9,
            ),
            369 => 
            array (
                'permission_id' => 133,
                'role_id' => 10,
            ),
            370 => 
            array (
                'permission_id' => 134,
                'role_id' => 9,
            ),
            371 => 
            array (
                'permission_id' => 134,
                'role_id' => 10,
            ),
            372 => 
            array (
                'permission_id' => 135,
                'role_id' => 9,
            ),
            373 => 
            array (
                'permission_id' => 135,
                'role_id' => 10,
            ),
            374 => 
            array (
                'permission_id' => 136,
                'role_id' => 9,
            ),
            375 => 
            array (
                'permission_id' => 136,
                'role_id' => 10,
            ),
            376 => 
            array (
                'permission_id' => 137,
                'role_id' => 9,
            ),
            377 => 
            array (
                'permission_id' => 137,
                'role_id' => 10,
            ),
            378 => 
            array (
                'permission_id' => 138,
                'role_id' => 9,
            ),
            379 => 
            array (
                'permission_id' => 138,
                'role_id' => 10,
            ),
            380 => 
            array (
                'permission_id' => 139,
                'role_id' => 9,
            ),
            381 => 
            array (
                'permission_id' => 139,
                'role_id' => 10,
            ),
            382 => 
            array (
                'permission_id' => 140,
                'role_id' => 9,
            ),
            383 => 
            array (
                'permission_id' => 140,
                'role_id' => 10,
            ),
            384 => 
            array (
                'permission_id' => 141,
                'role_id' => 9,
            ),
            385 => 
            array (
                'permission_id' => 141,
                'role_id' => 10,
            ),
            386 => 
            array (
                'permission_id' => 142,
                'role_id' => 9,
            ),
            387 => 
            array (
                'permission_id' => 142,
                'role_id' => 10,
            ),
            388 => 
            array (
                'permission_id' => 143,
                'role_id' => 9,
            ),
            389 => 
            array (
                'permission_id' => 143,
                'role_id' => 10,
            ),
            390 => 
            array (
                'permission_id' => 144,
                'role_id' => 9,
            ),
            391 => 
            array (
                'permission_id' => 144,
                'role_id' => 10,
            ),
            392 => 
            array (
                'permission_id' => 145,
                'role_id' => 9,
            ),
            393 => 
            array (
                'permission_id' => 145,
                'role_id' => 10,
            ),
            394 => 
            array (
                'permission_id' => 146,
                'role_id' => 9,
            ),
            395 => 
            array (
                'permission_id' => 146,
                'role_id' => 10,
            ),
            396 => 
            array (
                'permission_id' => 147,
                'role_id' => 9,
            ),
            397 => 
            array (
                'permission_id' => 147,
                'role_id' => 10,
            ),
            398 => 
            array (
                'permission_id' => 148,
                'role_id' => 9,
            ),
            399 => 
            array (
                'permission_id' => 148,
                'role_id' => 10,
            ),
            400 => 
            array (
                'permission_id' => 149,
                'role_id' => 9,
            ),
            401 => 
            array (
                'permission_id' => 149,
                'role_id' => 10,
            ),
            402 => 
            array (
                'permission_id' => 150,
                'role_id' => 9,
            ),
            403 => 
            array (
                'permission_id' => 150,
                'role_id' => 10,
            ),
            404 => 
            array (
                'permission_id' => 151,
                'role_id' => 1,
            ),
            405 => 
            array (
                'permission_id' => 151,
                'role_id' => 9,
            ),
            406 => 
            array (
                'permission_id' => 151,
                'role_id' => 10,
            ),
            407 => 
            array (
                'permission_id' => 152,
                'role_id' => 1,
            ),
            408 => 
            array (
                'permission_id' => 152,
                'role_id' => 9,
            ),
            409 => 
            array (
                'permission_id' => 152,
                'role_id' => 10,
            ),
            410 => 
            array (
                'permission_id' => 153,
                'role_id' => 1,
            ),
            411 => 
            array (
                'permission_id' => 153,
                'role_id' => 9,
            ),
            412 => 
            array (
                'permission_id' => 153,
                'role_id' => 10,
            ),
            413 => 
            array (
                'permission_id' => 154,
                'role_id' => 1,
            ),
            414 => 
            array (
                'permission_id' => 154,
                'role_id' => 10,
            ),
            415 => 
            array (
                'permission_id' => 155,
                'role_id' => 10,
            ),
            416 => 
            array (
                'permission_id' => 156,
                'role_id' => 10,
            ),
            417 => 
            array (
                'permission_id' => 157,
                'role_id' => 10,
            ),
            418 => 
            array (
                'permission_id' => 158,
                'role_id' => 10,
            ),
        ));
        
        
    }
}