<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Lorem ipsum',
                'description' => 'Nunc pharetra scelerisque risus. Cras convallis euismod magna varius congue. Nam sed diam purus. Vestibulum placerat nulla in sem imperdiet, congue fringilla augue varius.',
                'status' => 1,
                'created_at' => '2019-03-26 04:07:48',
                'updated_at' => '2019-03-30 06:12:24',
                'deleted_at' => NULL,
                'content_type' => 'html',
                'content' => '<h1>Lorem ipsum dolor sit amet consectetuer adipiscing 
elit</h1>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing 
elit. Aenean commodo ligula eget dolor. Aenean massa 
<strong>strong</strong>. Cum sociis natoque penatibus 
et magnis dis parturient montes, nascetur ridiculus 
mus. Donec quam felis, ultricies nec, pellentesque 
eu, pretium quis, sem. Nulla consequat massa quis 
enim. Donec pede justo, fringilla vel, aliquet nec, 
vulputate eget, arcu. In enim justo, rhoncus ut, 
imperdiet a, venenatis vitae, justo. Nullam dictum 
felis eu pede <a class="external ext" href="/">link</a> 
mollis pretium. Integer tincidunt. Cras dapibus. 
Vivamus elementum semper nisi. Aenean vulputate 
eleifend tellus. Aenean leo ligula, porttitor eu, 
consequat vitae, eleifend ac, enim. Aliquam lorem ante, 
dapibus in, viverra quis, feugiat a, tellus. Phasellus 
viverra nulla ut metus varius laoreet. Quisque rutrum. 
Aenean imperdiet. Etiam ultricies nisi vel augue. 
Curabitur ullamcorper ultricies nisi.</p>',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Reserved',
                'description' => 'Nunc pharetra scelerisque risus. Cras convallis euismod magna varius congue. Nam sed diam purus. Vestibulum placerat nulla in sem imperdiet, congue fringilla augue varius.',
                'status' => 1,
                'created_at' => '2019-03-26 04:08:18',
                'updated_at' => '2019-03-26 04:39:50',
                'deleted_at' => '2019-03-30 05:51:46',
                'content_type' => 'video',
                'content' => 'https://www.youtube.com/watch?v=-MaDHw4ii30',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Test',
                'description' => 'VIDEO',
                'status' => 0,
                'created_at' => '2019-03-26 13:43:02',
                'updated_at' => '2019-03-30 07:10:53',
                'deleted_at' => NULL,
                'content_type' => 'video',
                'content' => 'https://www.youtube.com/watch?v=s7RmUKm9PCA',
            ),
        ));
        
        
    }
}