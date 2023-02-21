<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_tag', function(Blueprint $table)
		{
			$table->integer('media_id')->unsigned();
			$table->integer('tag_id')->unsigned();
			$table->string('name', 100);
			$table->string('qty', 100);
			$table->timestamps();
			$table->softDeletes();
			$table->primary(['media_id','tag_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_tag');
	}

}
