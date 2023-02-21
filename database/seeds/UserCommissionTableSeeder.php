<?php

use Illuminate\Database\Seeder;

class UserCommissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_commission')->delete();
        
        \DB::table('user_commission')->insert(array (
            0 => 
            array (
                'id' => 11,
                'tenant_id' => 13,
                'user_id' => 31,
                'lead_id' => 79,
                'target_month' => '2015-08-01',
                'commission' => '9999999.99',
                'commission_event' => 'Special Instance',
                'comments' => 'abcd',
                'created_at' => '2019-02-26 14:14:28',
                'updated_at' => '2019-02-26 14:14:28',
            ),
            1 => 
            array (
                'id' => 12,
                'tenant_id' => 13,
                'user_id' => 31,
                'lead_id' => 102,
                'target_month' => '2015-08-01',
                'commission' => '500.00',
                'commission_event' => 'Property Sold',
                'comments' => NULL,
                'created_at' => '2019-03-01 11:44:31',
                'updated_at' => '2019-03-01 11:44:31',
            ),
            2 => 
            array (
                'id' => 13,
                'tenant_id' => 13,
                'user_id' => 31,
                'lead_id' => 102,
                'target_month' => '2019-01-01',
                'commission' => '500.00',
                'commission_event' => 'Property Sold',
                'comments' => NULL,
                'created_at' => '2019-03-01 12:04:42',
                'updated_at' => '2019-03-01 12:04:42',
            ),
            3 => 
            array (
                'id' => 14,
                'tenant_id' => 30,
                'user_id' => 40,
                'lead_id' => 513,
                'target_month' => '2019-02-01',
                'commission' => '500.00',
                'commission_event' => 'Property Sold',
                'comments' => NULL,
                'created_at' => '2019-03-01 12:10:19',
                'updated_at' => '2019-03-01 12:10:19',
            ),
            4 => 
            array (
                'id' => 15,
                'tenant_id' => 30,
                'user_id' => 41,
                'lead_id' => 513,
                'target_month' => '2015-08-01',
                'commission' => '500.00',
                'commission_event' => 'Apointment',
                'comments' => NULL,
                'created_at' => '2019-03-01 12:10:41',
                'updated_at' => '2019-03-01 12:10:41',
            ),
            5 => 
            array (
                'id' => 17,
                'tenant_id' => 13,
                'user_id' => 32,
                'lead_id' => 101,
                'target_month' => '2019-02-01',
                'commission' => '10000.00',
                'commission_event' => 'Profit',
                'comments' => 'Commission paid',
                'created_at' => '2019-03-04 05:23:51',
                'updated_at' => '2019-03-04 05:23:51',
            ),
            6 => 
            array (
                'id' => 18,
                'tenant_id' => 30,
                'user_id' => 44,
                'lead_id' => 516,
                'target_month' => '2015-08-01',
                'commission' => '23.00',
                'commission_event' => 'Special Instance',
                'comments' => NULL,
                'created_at' => '2019-03-07 10:31:31',
                'updated_at' => '2019-03-07 10:31:31',
            ),
            7 => 
            array (
                'id' => 19,
                'tenant_id' => 30,
                'user_id' => 40,
                'lead_id' => 1893,
                'target_month' => '2015-08-01',
                'commission' => '500.00',
                'commission_event' => 'Property Sold',
                'comments' => NULL,
                'created_at' => '2019-03-25 23:15:08',
                'updated_at' => '2019-03-25 23:15:08',
            ),
            8 => 
            array (
                'id' => 20,
                'tenant_id' => 30,
                'user_id' => 40,
                'lead_id' => 1893,
                'target_month' => '2019-03-01',
                'commission' => '1500.00',
                'commission_event' => 'Profit',
                'comments' => 'cr',
                'created_at' => '2019-03-26 12:34:06',
                'updated_at' => '2019-03-26 12:34:06',
            ),
        ));
        
        
    }
}