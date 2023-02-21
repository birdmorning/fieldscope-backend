<?php

use Illuminate\Database\Seeder;

class CompanyGroupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_group')->delete();
        
        \DB::table('company_group')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_id' => 1,
                'title' => 'DevTestInspector',
                'created_at' => '2019-10-09 14:56:20',
                'updated_at' => '2019-10-09 14:56:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'company_id' => 2,
                'title' => 'plumber',
                'created_at' => '2019-10-09 17:22:49',
                'updated_at' => '2019-10-09 17:22:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'company_id' => 2,
                'title' => 'civil engineer',
                'created_at' => '2019-10-09 17:23:01',
                'updated_at' => '2019-10-09 17:23:01',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'company_id' => 2,
                'title' => 'electrician',
                'created_at' => '2019-10-09 17:23:06',
                'updated_at' => '2019-10-09 17:23:06',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'company_id' => 3,
                'title' => 'Sales',
                'created_at' => '2019-10-14 17:07:59',
                'updated_at' => '2019-10-14 17:07:59',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'company_id' => 2,
                'title' => 'fire fighter',
                'created_at' => '2019-10-23 11:28:08',
                'updated_at' => '2019-10-23 11:28:08',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'company_id' => 4,
                'title' => 'Sales Rep',
                'created_at' => '2019-10-28 07:36:39',
                'updated_at' => '2019-10-28 07:36:39',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'company_id' => 2,
                'title' => 'test',
                'created_at' => '2019-11-08 19:45:34',
                'updated_at' => '2019-11-08 19:45:34',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'company_id' => 6,
                'title' => 'artist',
                'created_at' => '2019-11-12 12:28:52',
                'updated_at' => '2019-11-13 11:59:27',
                'deleted_at' => '2019-11-13 11:59:27',
            ),
            9 => 
            array (
                'id' => 10,
                'company_id' => 7,
                'title' => 'artist',
                'created_at' => '2019-11-13 12:08:24',
                'updated_at' => '2019-11-13 12:08:24',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'company_id' => 8,
                'title' => 'Sales Rep',
                'created_at' => '2019-11-13 20:20:24',
                'updated_at' => '2019-11-13 20:20:24',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'company_id' => 6,
                'title' => 'Painter type',
                'created_at' => '2019-11-18 15:31:39',
                'updated_at' => '2019-12-02 14:29:33',
                'deleted_at' => '2019-12-02 14:29:33',
            ),
            12 => 
            array (
                'id' => 13,
                'company_id' => 6,
                'title' => 'p type',
                'created_at' => '2019-11-28 15:10:53',
                'updated_at' => '2019-12-02 14:29:30',
                'deleted_at' => '2019-12-02 14:29:30',
            ),
            13 => 
            array (
                'id' => 14,
                'company_id' => 6,
                'title' => 'new',
                'created_at' => '2019-12-02 14:31:36',
                'updated_at' => '2019-12-05 12:25:24',
                'deleted_at' => '2019-12-05 12:25:24',
            ),
            14 => 
            array (
                'id' => 15,
                'company_id' => 6,
                'title' => 'final',
                'created_at' => '2019-12-05 12:27:06',
                'updated_at' => '2019-12-05 12:27:06',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'company_id' => 10,
                'title' => 'plumber',
                'created_at' => '2020-01-10 16:19:53',
                'updated_at' => '2020-01-10 16:19:53',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'company_id' => 13,
                'title' => 'stripe test',
                'created_at' => '2020-04-09 12:47:15',
                'updated_at' => '2020-04-09 12:47:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}