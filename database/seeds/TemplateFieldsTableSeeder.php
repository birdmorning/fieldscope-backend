<?php

use Illuminate\Database\Seeder;

class TemplateFieldsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('template_fields')->delete();
        
        \DB::table('template_fields')->insert(array (
            0 => 
            array (
                'template_id' => 1,
                'field' => '1',
                'index' => '12',
            ),
            1 => 
            array (
                'template_id' => 1,
                'field' => '10',
                'index' => '22',
            ),
            2 => 
            array (
                'template_id' => 1,
                'field' => '13',
                'index' => '5',
            ),
            3 => 
            array (
                'template_id' => 1,
                'field' => '15',
                'index' => '6',
            ),
            4 => 
            array (
                'template_id' => 1,
                'field' => '16',
                'index' => '36',
            ),
            5 => 
            array (
                'template_id' => 1,
                'field' => '18',
                'index' => '35',
            ),
            6 => 
            array (
                'template_id' => 1,
                'field' => '2',
                'index' => '15',
            ),
            7 => 
            array (
                'template_id' => 1,
                'field' => '3',
                'index' => '10',
            ),
            8 => 
            array (
                'template_id' => 1,
                'field' => '4',
                'index' => '11',
            ),
            9 => 
            array (
                'template_id' => 1,
                'field' => '5',
                'index' => '3',
            ),
            10 => 
            array (
                'template_id' => 1,
                'field' => '8',
                'index' => '19',
            ),
            11 => 
            array (
                'template_id' => 1,
                'field' => '9',
                'index' => '24',
            ),
            12 => 
            array (
                'template_id' => 1,
                'field' => 'address',
                'index' => '7',
            ),
            13 => 
            array (
                'template_id' => 1,
                'field' => 'city',
                'index' => '8',
            ),
            14 => 
            array (
                'template_id' => 1,
                'field' => 'lead_name',
                'index' => '5',
            ),
            15 => 
            array (
                'template_id' => 1,
                'field' => 'lead_type',
                'index' => '0',
            ),
            16 => 
            array (
                'template_id' => 1,
                'field' => 'zip_code',
                'index' => '9',
            ),
        ));
        
        
    }
}