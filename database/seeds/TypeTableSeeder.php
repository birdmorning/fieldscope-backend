<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type')->delete();
        
        \DB::table('type')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'fc',
                'title' => 'foreclosure',
                'tenant_id' => 0,
                'created_at' => '2018-12-04 11:41:15',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'p',
                'title' => 'probate',
                'tenant_id' => 0,
                'created_at' => '2018-12-14 08:24:34',
                'updated_at' => '2018-12-14 08:24:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'ah',
                'title' => 'affidavit of heirship',
                'tenant_id' => 0,
                'created_at' => '2018-12-14 08:26:36',
                'updated_at' => '2018-12-14 08:26:36',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'lt',
                'title' => 'late tax',
                'tenant_id' => 0,
                'created_at' => '2018-12-14 08:35:04',
                'updated_at' => '2018-12-14 08:35:04',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'code' => NULL,
                'title' => 'abcd',
                'tenant_id' => 30,
                'created_at' => '2019-02-27 05:40:46',
                'updated_at' => '2019-02-27 05:40:46',
                'deleted_at' => '2019-02-27 05:40:46',
            ),
            5 => 
            array (
                'id' => 8,
                'code' => 'P',
                'title' => 'Probate',
                'tenant_id' => 13,
                'created_at' => '2019-02-27 15:17:09',
                'updated_at' => '2019-02-27 15:17:09',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'code' => 'D',
                'title' => 'Divorce',
                'tenant_id' => 13,
                'created_at' => '2019-02-27 15:17:39',
                'updated_at' => '2019-03-04 10:50:46',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'code' => 'F',
                'title' => 'Foreclosure',
                'tenant_id' => 13,
                'created_at' => '2019-02-27 15:20:08',
                'updated_at' => '2019-02-27 15:20:08',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'code' => 'F',
                'title' => 'Foreclosure',
                'tenant_id' => 30,
                'created_at' => '2019-03-01 06:37:14',
                'updated_at' => '2019-03-25 16:05:30',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'code' => 'P',
                'title' => 'Probate',
                'tenant_id' => 30,
                'created_at' => '2019-03-01 06:37:14',
                'updated_at' => '2019-03-25 15:59:18',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'code' => 'AH',
                'title' => 'Affidavit of Heirship',
                'tenant_id' => 30,
                'created_at' => '2019-03-01 06:37:14',
                'updated_at' => '2019-03-25 15:59:56',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'code' => 'LT',
                'title' => 'Late Tax',
                'tenant_id' => 30,
                'created_at' => '2019-03-01 06:37:14',
                'updated_at' => '2019-03-25 16:00:29',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'code' => 'fc',
                'title' => 'foreclosure',
                'tenant_id' => 32,
                'created_at' => '2019-03-15 08:54:55',
                'updated_at' => '2019-03-15 08:54:55',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'code' => 'p',
                'title' => 'probate',
                'tenant_id' => 32,
                'created_at' => '2019-03-15 08:54:55',
                'updated_at' => '2019-03-15 08:54:55',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'code' => 'ah',
                'title' => 'affidavit of heirship',
                'tenant_id' => 32,
                'created_at' => '2019-03-15 08:54:55',
                'updated_at' => '2019-03-15 08:54:55',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'code' => 'lt',
                'title' => 'late tax',
                'tenant_id' => 32,
                'created_at' => '2019-03-15 08:54:55',
                'updated_at' => '2019-03-15 08:54:55',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'code' => 'ST',
                'title' => 'Subsitute of Trustee',
                'tenant_id' => 30,
                'created_at' => '2019-03-22 19:40:19',
                'updated_at' => '2019-03-25 16:01:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}