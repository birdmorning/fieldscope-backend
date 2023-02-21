<?php

use Illuminate\Database\Seeder;

class CrmTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('crm')->delete();
        
        \DB::table('crm')->insert(array (
            0 => 
            array (
                'id' => 1,
                'access_token' => 'f6e5d1ff1b689130778c4ad5a8999784f7e969530010c8fb6ac7f03db3b8619c',
                'expires_at' => '2020-04-02 16:09:44',
                'created_at' => NULL,
                'updated_at' => '2020-03-31 16:09:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}