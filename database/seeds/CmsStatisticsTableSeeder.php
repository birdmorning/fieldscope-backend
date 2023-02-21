<?php

use Illuminate\Database\Seeder;

class CmsStatisticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistics')->delete();
        
        \DB::table('cms_statistics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Total Customers',
                'slug' => 'total-customers',
                'created_at' => '2019-03-27 14:00:52',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}