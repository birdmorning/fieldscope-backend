<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_media', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->integer('category_id');
			$table->string('path', 200);
			$table->string('note', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->enum('media_type', array('image','audio','video','pdf'))->nullable();
			$table->string('ref_id', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_media');
	}

}
