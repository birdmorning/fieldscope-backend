<?php

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Customers',
                'type' => 'Route',
                'path' => 'AdminCustomerControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-users',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2019-03-20 14:16:35',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Products',
                'type' => 'Route',
                'path' => 'AdminProductControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-archive',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2019-06-03 16:23:31',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Users',
                'type' => 'Route',
                'path' => 'AdminUser1ControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-users',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4,
                'created_at' => '2019-06-13 14:08:57',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Product Requests',
                'type' => 'Route',
                'path' => 'AdminProductRequestControllerGetIndex',
                'color' => NULL,
                'icon' => 'fa fa-glass',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 5,
                'created_at' => '2019-06-13 15:22:06',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}