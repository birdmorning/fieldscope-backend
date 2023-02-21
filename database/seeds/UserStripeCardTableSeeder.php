<?php

use Illuminate\Database\Seeder;

class UserStripeCardTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_stripe_card')->delete();
        
        
        
    }
}