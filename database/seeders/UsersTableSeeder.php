<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Isep Lutpi Nur',
                'email' => 'iseplutpinur7@gmail.com',
                'foto' => '202304182058334.png',
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => 'zsFzeXvGyqwlLYHb5cX98g629gbRjL8lW28VIh43acQ9lpaOxbAsKlti6Rxu',
                'created_at' => NULL,
                'updated_at' => '2023-04-19 17:19:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$GMWOfrxOEMTKNuZMbiZeF.fS1atAZB85gshfhNmWX9aby.3UK27wq',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-30 01:58:35',
                'updated_at' => '2023-05-30 02:12:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tini Patmawati',
                'email' => 'tini@gmail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$KF8D41sytEtn3Qk4xjTx/u1uRSHA7f2Pm4jeaB3lQaHEvRwMjtk5m',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-30 01:58:46',
                'updated_at' => '2023-05-30 01:58:46',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pendamping',
                'email' => 'pendamping@gmail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$CmgL/JZ4VXbaoUuMfmAwr.HU4m2EeMaid75yEDXy18HnA1Ibjph9.',
                'active' => 1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-30 01:59:01',
                'updated_at' => '2023-05-30 01:59:01',
            ),
        ));
        
        
    }
}