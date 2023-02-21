<?php

use Illuminate\Database\Seeder;

class UserGroupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_group')->delete();
        
        \DB::table('user_group')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'client admin',
                'created_at' => '2018-08-14 14:49:53',
                'updated_at' => '2018-08-14 14:49:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'inspector',
                'created_at' => '2018-08-14 14:49:53',
                'updated_at' => '2018-08-14 14:49:53',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}