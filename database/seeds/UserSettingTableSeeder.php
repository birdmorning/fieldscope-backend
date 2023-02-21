<?php

use Illuminate\Database\Seeder;

class UserSettingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_setting')->delete();
        
        \DB::table('user_setting')->insert(array (
            0 => 
            array (
                'setting_id' => 3,
                'tenant_id' => 183,
                'value' => '1',
                'created_at' => '2019-07-24 12:14:47',
                'updated_at' => '2019-07-24 12:14:47',
            ),
            1 => 
            array (
                'setting_id' => 4,
                'tenant_id' => 183,
                'value' => '1',
                'created_at' => '2019-07-24 12:14:47',
                'updated_at' => '2019-07-24 12:14:47',
            ),
            2 => 
            array (
                'setting_id' => 6,
                'tenant_id' => 183,
                'value' => '0',
                'created_at' => '2019-07-24 12:14:47',
                'updated_at' => '2019-07-24 12:14:47',
            ),
            3 => 
            array (
                'setting_id' => 7,
                'tenant_id' => 183,
                'value' => '',
                'created_at' => '2019-07-24 12:14:47',
                'updated_at' => '2019-07-24 12:14:47',
            ),
        ));
        
        
    }
}