<?php

use Illuminate\Database\Seeder;

class CmsStatisticComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistic_components')->delete();
        
        \DB::table('cms_statistic_components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_statistics' => 1,
                'componentID' => '1c63ba2a4315abf53a86098c5aa74c4e',
                'component_name' => 'smallbox',
                'area_name' => 'area1',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Total Customers","icon":"person","color":"bg-green","link":"admin\\/customer","sql":"SELECT COUNT(id) FROM customer"}',
                'created_at' => '2019-03-27 14:01:23',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}