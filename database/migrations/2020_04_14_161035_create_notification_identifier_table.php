<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationIdentifierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notification_identifier', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('identifier', 100);
			$table->enum('notification_type', array('push','email','none','web'))->default('none');
			$table->enum('send_type', array('actor','target','both'));
			$table->string('title')->nullable();
			$table->text('message', 65535)->nullable();
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
		Schema::drop('notification_identifier');
	}

}
