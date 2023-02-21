<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('admin_group_id')->default(1);
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('email', 150)->unique();
			$table->string('password', 100);
			$table->string('remember_token', 100)->nullable();
			$table->boolean('is_active')->default(1);
			$table->timestamp('last_login_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('forgot_password_hash', 100);
			$table->dateTime('forgot_password_hash_created_at')->nullable();
			$table->string('remember_login_token', 100);
			$table->dateTime('remember_login_token_created_at')->nullable();
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
		Schema::drop('admin');
	}

}
