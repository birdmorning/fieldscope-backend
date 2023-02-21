<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin')->delete();
        
        \DB::table('admin')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin_group_id' => 1,
                'first_name' => 'Adminisstrator',
                'last_name' => '',
                'email' => 'admin@admin.com',
                'password' => 'ff7d279c14ee6dc77d7d8f3bb1b48f14',
                'remember_token' => NULL,
                'is_active' => 1,
                'last_login_at' => '2018-07-06 20:21:02',
                'forgot_password_hash' => '',
                'forgot_password_hash_created_at' => NULL,
                'remember_login_token' => '',
                'remember_login_token_created_at' => NULL,
                'created_at' => '2018-07-06 15:21:02',
                'updated_at' => '2018-07-06 15:21:02',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}