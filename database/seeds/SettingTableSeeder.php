<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting')->delete();
        
        \DB::table('setting')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'send_email',
                'value' => 'no-reply@retrocube.com',
                'key_type' => 'admin',
                'created_at' => '2018-06-25 16:36:24',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'receive_email',
                'value' => 'no-reply@retrocube.com',
                'key_type' => 'admin',
                'created_at' => '2018-06-25 16:36:24',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'push_notification',
                'value' => '1',
                'key_type' => 'user',
                'created_at' => '2018-09-05 08:58:55',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'email_notification',
                'value' => '1',
                'key_type' => 'user',
                'created_at' => '2018-09-05 08:58:55',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'featured_deal_charges',
                'value' => '60.00',
                'key_type' => 'admin',
                'created_at' => '2018-11-21 16:51:15',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'printer_number',
                'value' => '0',
                'key_type' => 'user',
                'created_at' => '2018-11-21 16:51:15',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'printer_email_address',
                'value' => '',
                'key_type' => 'user',
                'created_at' => '2019-03-14 14:42:36',
            ),
        ));
        
        
    }
}