<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTrainingScriptTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_training_script', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tenant_id')->nullable();
			$table->string('title', 100)->nullable();
			$table->text('description', 65535)->nullable();
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
		Schema::drop('user_training_script');
	}

}
