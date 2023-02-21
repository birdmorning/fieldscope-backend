<?php

use Illuminate\Database\Seeder;

class UserTrainingScriptTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_training_script')->delete();
        
        \DB::table('user_training_script')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tenant_id' => 13,
                'title' => 'Digital Marketing Training 2',
                'description' => 'At the Digital Marketing Institute, we have made it our mission to transform the skills and knowledge of digital professionals on a global scale. There are three core reasons for this.The first is to advance the careers of marketers and sellers, the second is to address the digital skills shortage to ensure businesses have a capable and agile workforce. The final reason is to provide educators with professional certifications that can nurture future generations. We’re as passionate as we are ambitious, and the journey has only just begun',
                'created_at' => '2019-02-07 03:46:17',
                'updated_at' => '2019-03-04 10:53:27',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'tenant_id' => NULL,
                'title' => 'my script',
                'description' => 'script................',
                'created_at' => '2019-02-27 07:28:24',
                'updated_at' => '2019-02-27 07:28:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'tenant_id' => NULL,
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged',
                'created_at' => '2019-02-27 11:24:19',
                'updated_at' => '2019-02-27 11:24:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'tenant_id' => 30,
                'title' => 'Lorem Ipsum',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining unchanged',
                'created_at' => '2019-02-27 11:26:41',
                'updated_at' => '2019-03-04 05:01:53',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'tenant_id' => 13,
                'title' => 'new training',
                'description' => 'abcd',
                'created_at' => '2019-03-06 15:16:16',
                'updated_at' => '2019-03-06 15:16:16',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 9,
                'tenant_id' => 13,
                'title' => 'new training',
                'description' => 'abcd',
                'created_at' => '2019-03-06 15:16:18',
                'updated_at' => '2019-03-06 15:16:18',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 10,
                'tenant_id' => 30,
                'title' => 'Introduction Scripts',
                'description' => 'Hello My name is Michael and I represent a real estate solutions comapny that speciallizes in assisting homeowners facing foreclsoure',
                'created_at' => '2019-03-25 16:21:19',
                'updated_at' => '2019-03-25 16:21:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}