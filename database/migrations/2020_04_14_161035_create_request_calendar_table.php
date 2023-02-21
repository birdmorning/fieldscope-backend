<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestCalendarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('request_calendar', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('request_id')->nullable();
			$table->integer('product_id')->nullable();
			$table->dateTime('date')->nullable();
			$table->integer('status_id')->nullable();
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
		Schema::drop('request_calendar');
	}

}
