<?php

use Illuminate\Database\Seeder;

class ApiUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('api_user')->delete();
        
        \DB::table('api_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'api_user',
                'password' => 'e3084f7e404fb3ad1bc637f4ea034627',
                'created_at' => '2018-08-14 23:49:53',
                'updated_at' => '2018-08-14 23:49:53',
            ),
        ));
        
        
    }
}