<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectQueryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_query', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('project_id')->nullable();
			$table->integer('query_id');
			$table->binary('query', 65535)->nullable();
			$table->text('response', 65535)->nullable();
			$table->timestamps();
			$table->string('signature', 100)->nullable();
			$table->dateTime('date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_query');
	}

}
