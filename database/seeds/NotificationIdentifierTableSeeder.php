<?php

use Illuminate\Database\Seeder;

class NotificationIdentifierTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification_identifier')->delete();
        
        \DB::table('notification_identifier')->insert(array (
            0 => 
            array (
                'id' => 1,
                'identifier' => 'project_assigned',
                'notification_type' => 'none',
                'send_type' => 'target',
                'title' => '$project->name',
                'message' => '$user->first_name $user->last_name assigned you a project.',
                'created_at' => '2019-08-03 04:43:54',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}