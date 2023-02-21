<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectMediaTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_media_tag', function(Blueprint $table)
		{
			$table->integer('target_id')->unsigned();
			$table->string('target_type', 10)->default('media')->comment('media|query');
			$table->integer('tag_id')->unsigned();
			$table->string('name', 100);
			$table->float('qty', 10, 0);
			$table->timestamps();
			$table->softDeletes();
			$table->primary(['target_id','tag_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_media_tag');
	}

}
