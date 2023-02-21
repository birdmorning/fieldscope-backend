<?php

use Illuminate\Database\Seeder;

class SubscriptionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscription')->delete();
        
        \DB::table('subscription')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'basic',
                'key' => 'plan_a',
                'title' => 'Per month/Paid Monthly',
                'amount' => '14.50',
                'per_user_amount' => 0,
                'description' => 'Per month/Paid Monthly',
                'duration' => '1',
                'duration_unit' => 'month',
                'total_tiers' => 1,
                'total_featured_deals' => 0,
                'created_at' => '2018-10-23 10:05:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'basic',
                'key' => 'plan_b',
                'title' => 'Per month/Paid Annually',
                'amount' => '150.00',
                'per_user_amount' => 2,
                'description' => 'Per month/Paid Annually',
                'duration' => '1',
                'duration_unit' => 'year',
                'total_tiers' => 2,
                'total_featured_deals' => 1,
                'created_at' => '2018-10-23 10:05:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'plus',
                'key' => 'plan_c',
                'title' => 'Per month/Paid Monthly',
                'amount' => '12.50',
                'per_user_amount' => 0,
                'description' => 'Per month/Paid Monthly',
                'duration' => '1',
                'duration_unit' => 'month',
                'total_tiers' => 2,
                'total_featured_deals' => 10,
                'created_at' => '2018-10-23 10:05:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'plus',
                'key' => 'plan_d',
                'title' => 'Per month/Paid Annually',
                'amount' => '120.00',
                'per_user_amount' => 0,
                'description' => 'Per month/Paid Annually',
                'duration' => '1',
                'duration_unit' => 'year',
                'total_tiers' => 5,
                'total_featured_deals' => 10,
                'created_at' => '2018-10-23 10:05:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'free',
                'key' => '14day_free',
                'title' => 'Free Trial',
                'amount' => '0.00',
                'per_user_amount' => 0,
                'description' => '14 day free trial',
                'duration' => '14',
                'duration_unit' => 'day',
                'total_tiers' => 1,
                'total_featured_deals' => 10,
                'created_at' => '2018-10-23 10:05:55',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}