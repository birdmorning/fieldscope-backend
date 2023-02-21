<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQueryTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('query_tag', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('query_id')->unsigned();
			$table->integer('category_id');
			$table->string('name', 100);
			$table->float('qty', 10, 0);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('query_tag');
	}

}
