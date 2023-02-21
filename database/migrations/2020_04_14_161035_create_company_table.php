<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 145)->nullable();
			$table->integer('primary_user_id')->nullable();
			$table->string('image_url', 45)->nullable();
			$table->string('website', 45)->nullable();
			$table->text('description', 65535)->nullable();
			$table->timestamps();
			$table->string('crm_employee_email', 100)->nullable();
			$table->string('crm_employee_id', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company');
	}

}
