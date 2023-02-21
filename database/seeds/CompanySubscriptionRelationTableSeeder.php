<?php

use Illuminate\Database\Seeder;

class CompanySubscriptionRelationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company_subscription_relation')->delete();
        
        \DB::table('company_subscription_relation')->insert(array (
            0 => 
            array (
                'company_id' => 1,
                'subscription_id' => '3',
                'subscription_expiry_date' => '2020-04-09',
                'total_allowed_tiers' => 2,
                'total_user_featured_deals' => NULL,
                'created_at' => '2019-10-09 11:54:25',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'company_id' => 2,
                'subscription_id' => '3',
                'subscription_expiry_date' => '2019-11-09',
                'total_allowed_tiers' => 5,
                'total_user_featured_deals' => NULL,
                'created_at' => '2019-10-09 14:19:37',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'company_id' => 3,
                'subscription_id' => '1',
                'subscription_expiry_date' => '2019-11-14',
                'total_allowed_tiers' => 1,
                'total_user_featured_deals' => NULL,
                'created_at' => '2019-10-14 14:07:28',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'company_id' => 4,
                'subscription_id' => '1',
                'subscription_expiry_date' => '2019-11-28',
                'total_allowed_tiers' => 1,
                'total_user_featured_deals' => NULL,
                'created_at' => '2019-10-28 03:36:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'company_id' => 5,
                'subscription_id' => '3',
                'subscription_expiry_date' => '2019-12-08',
                'total_allowed_tiers' => 5,
                'total_user_featured_deals' => NULL,
                'created_at' => '2019-11-08 12:30:08',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'company_id' => 6,
                'subscription_id' => '3',
                'subscription_expiry_date' => '2019-12-12',
                'total_allowed_tiers' => 5,
                'total_user_featured_deals' => NULL,
                'created_at' => '2019-11-12 08:19:35',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'company_id' => 7,
                'subscription_id' => '3',
                'subscription_expiry_date' => '2019-12-13',
                'total_allowed_tiers' => 5,
                'total_user_featured_deals' => NULL,
                'created_at' => '2019-11-13 08:02:11',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'company_id' => 8,
                'subscription_id' => '1',
                'subscription_expiry_date' => '2019-12-13',
                'total_allowed_tiers' => 1,
                'total_user_featured_deals' => NULL,
                'created_at' => '2019-11-13 16:17:00',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'company_id' => 9,
                'subscription_id' => '3',
                'subscription_expiry_date' => '2020-02-10',
                'total_allowed_tiers' => 5,
                'total_user_featured_deals' => NULL,
                'created_at' => '2020-01-10 12:17:42',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'company_id' => 10,
                'subscription_id' => '3',
                'subscription_expiry_date' => '2020-02-10',
                'total_allowed_tiers' => 5,
                'total_user_featured_deals' => NULL,
                'created_at' => '2020-01-10 12:19:17',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'company_id' => 13,
                'subscription_id' => '2',
                'subscription_expiry_date' => '2021-04-14',
                'total_allowed_tiers' => 2,
                'total_user_featured_deals' => NULL,
                'created_at' => '2020-04-09 12:42:14',
                'updated_at' => '2020-04-14 15:18:53',
            ),
        ));
        
        
    }
}