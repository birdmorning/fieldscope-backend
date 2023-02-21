<?php

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => 'uploads/1/2019-02/user_placeholder_200x250.jpg',
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$ZJReMY/FA5QWez9bdfs3YerRy1upj27Ss4xcgpVjy3NJvy5tQffAO',
                'id_cms_privileges' => 1,
                'created_at' => '2018-10-03 16:40:03',
                'updated_at' => '2019-02-22 02:28:41',
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Spin Wheel Admin',
                'photo' => 'uploads/1/2019-03/logo.png',
                'email' => 'admin@spinwheel.com',
                'password' => '$2y$10$PlHJaTqOVQMv5F2QPrUUD.v4bK/t0Rz9I59A7T5aBEJ7L2WbLVFqu',
                'id_cms_privileges' => 2,
                'created_at' => '2018-10-03 17:14:43',
                'updated_at' => '2019-03-30 05:54:26',
                'status' => NULL,
            ),
        ));
        
        
    }
}