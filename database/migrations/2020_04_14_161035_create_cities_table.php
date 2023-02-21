<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('country_id')->nullable()->index('country_id');
			$table->integer('state_id')->nullable()->index('state_id');
			$table->string('name')->nullable()->index('name');
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('timezone')->nullable();
			$table->integer('dma_id')->nullable();
			$table->string('code')->nullable();
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
		Schema::drop('cities');
	}

}
