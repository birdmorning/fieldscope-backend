<?php

use Illuminate\Database\Seeder;

class CmsEmailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_email_templates')->delete();
        
        \DB::table('cms_email_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Email Template Forgot Password Backend',
                'slug' => 'forgot_password_backend',
                'subject' => NULL,
                'content' => '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>',
                'description' => '[password]',
                'from_name' => 'System',
                'from_email' => 'system@crudbooster.com',
                'cc_email' => NULL,
                'created_at' => '2018-10-03 16:40:04',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Registration',
                'slug' => 'registration',
                'subject' => 'Registration',
                'content' => '<p>Hi [first_name],</p><p>Your account has been created successfully. Below its your login credentials.</p><p>Email: [email]</p><p>Password: [password]</p><p><br></p><p>Regards,</p><p>BSL Admin</p>',
                'description' => '[first_name][email][password]',
                'from_name' => 'BSL',
                'from_email' => 'no-reply@bsl.com',
                'cc_email' => NULL,
                'created_at' => '2019-01-04 10:37:54',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}