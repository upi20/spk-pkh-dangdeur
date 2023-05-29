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
                'id' => '1',
                'user_id' => '1',
                'log_date' => '2023-05-29 20:53:45',
                'table_name' => '',
                'log_type' => 'login',
            'data' => '{"ip":"103.147.8.43","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/113.0.0.0 Safari\\/537.36 Edg\\/113.0.1774.57"}',
            ),
            1 => 
            array (
                'id' => '2',
                'user_id' => '1',
                'log_date' => '2023-05-29 20:54:05',
                'table_name' => 'users',
                'log_type' => 'create',
                'data' => '{"name":"Tini Patmawati","email":"tini@gmail.com","active":"1","updated_at":"2023-05-29T13:54:05.000000Z","created_at":"2023-05-29T13:54:05.000000Z","id":2,"profile_photo_url":"https:\\/\\/ui-avatars.com\\/api\\/?name=T+P&color=7F9CF5&background=EBF4FF"}',
            ),
        ));
        
        
    }
}