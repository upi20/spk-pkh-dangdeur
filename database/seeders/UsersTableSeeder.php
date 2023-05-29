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
                'id' => '1',
                'name' => 'Isep Lutpi Nur',
                'email' => 'iseplutpinur7@gmail.com',
                'foto' => '202304182058334.png',
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$n3MdfR0wImKMgwM6WnOH6.7vZQAdIQcv7gt1jWI47C.wKN3LwXx2O',
                'active' => '1',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => 'TVR7Q7JcDjcSdf2aNqutojP8DRDc0tAqYWbMUnK7llilxZUqZ3XcuC9GKzJv',
                'created_at' => NULL,
                'updated_at' => '2023-04-19 17:19:26',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Tini Patmawati',
                'email' => 'tini@gmail.com',
                'foto' => NULL,
                'username' => NULL,
                'email_verified_at' => NULL,
                'password' => '$2y$10$4F68rugg4mCD0gzWGFiQoevboHnad9/OMLGvf215COfiCfPNAEXYS',
                'active' => '1',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-29 20:54:05',
                'updated_at' => '2023-05-29 20:54:05',
            ),
        ));
        
        
    }
}