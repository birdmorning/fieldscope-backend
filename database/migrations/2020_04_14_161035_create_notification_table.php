<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notification', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('notification_identifier_id')->nullable();
			$table->integer('actor_id');
			$table->integer('target_id');
			$table->integer('reference_id');
			$table->string('reference_module', 50);
			$table->enum('type', array('push','email'));
			$table->string('title', 100);
			$table->text('description', 65535);
			$table->boolean('is_notify');
			$table->boolean('is_read');
			$table->boolean('is_viewed');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notification');
	}

}
