<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('company')->delete();
        
        \DB::table('company')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Developer ',
                'primary_user_id' => 1,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2019-10-09 11:54:25',
                'updated_at' => '2020-02-28 10:16:57',
                'crm_employee_email' => 'sales.rep@emerson-enterprises.com',
                'crm_employee_id' => '0a6913ee-0bef-4584-b819-17e8e83b3024',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'arya ',
                'primary_user_id' => 3,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2019-10-09 14:19:37',
                'updated_at' => NULL,
                'crm_employee_email' => NULL,
                'crm_employee_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Paul Lewis',
                'primary_user_id' => 8,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2019-10-14 14:07:27',
                'updated_at' => NULL,
                'crm_employee_email' => NULL,
                'crm_employee_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Test ',
                'primary_user_id' => 13,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2019-10-28 03:36:00',
                'updated_at' => NULL,
                'crm_employee_email' => NULL,
                'crm_employee_id' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'omi ',
                'primary_user_id' => 18,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2019-11-12 08:19:35',
                'updated_at' => '2019-12-05 08:38:53',
                'crm_employee_email' => 'sales.rep@emerson-enterprises.com',
                'crm_employee_id' => '903e24bd-0c3c-4007-8b3e-31677b04f68b',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'jon snow',
                'primary_user_id' => 20,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2019-11-13 08:02:10',
                'updated_at' => NULL,
                'crm_employee_email' => NULL,
                'crm_employee_id' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Paul Lewis',
                'primary_user_id' => 22,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2019-11-13 16:17:00',
                'updated_at' => '2020-03-09 07:25:02',
                'crm_employee_email' => 'sales.rep@emerson-enterprises.com',
                'crm_employee_id' => '824e9f1d-e5fc-4595-b542-5cf4501c5ed3',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'robert ',
                'primary_user_id' => 31,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2020-01-10 12:17:42',
                'updated_at' => NULL,
                'crm_employee_email' => NULL,
                'crm_employee_id' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'geralt ',
                'primary_user_id' => 32,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2020-01-10 12:19:17',
                'updated_at' => NULL,
                'crm_employee_email' => NULL,
                'crm_employee_id' => NULL,
            ),
            9 => 
            array (
                'id' => 13,
                'title' => 'Daniel Noah',
                'primary_user_id' => 36,
                'image_url' => NULL,
                'website' => NULL,
                'description' => NULL,
                'created_at' => '2020-04-09 12:42:14',
                'updated_at' => NULL,
                'crm_employee_email' => NULL,
                'crm_employee_id' => NULL,
            ),
        ));
        
        
    }
}