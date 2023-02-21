<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->nullable();
			$table->integer('company_group_id')->nullable();
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->integer('age')->nullable()->default(0);
			$table->date('dob')->nullable();
			$table->string('mobile_no', 45)->nullable();
			$table->string('email', 150)->nullable();
			$table->string('password', 100)->nullable();
			$table->string('token', 100)->nullable();
			$table->string('image_url', 150)->nullable();
			$table->string('latitude', 150)->nullable();
			$table->string('longitude', 150)->nullable();
			$table->integer('user_group_id');
			$table->string('gender', 20)->nullable()->default('male');
			$table->string('social_id', 45)->nullable();
			$table->string('social_type', 20)->nullable();
			$table->string('city', 100)->nullable();
			$table->string('state', 100)->nullable();
			$table->text('about_me', 65535)->nullable();
			$table->date('date_of_join')->nullable();
			$table->text('website', 65535)->nullable();
			$table->string('device_type', 100)->nullable();
			$table->string('device_token', 100)->nullable();
			$table->string('device', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->date('token_expiry_at')->nullable();
			$table->date('subscription_expiry_date')->nullable();
			$table->string('forgot_password_hash', 100)->nullable();
			$table->date('forgot_password_hash_date')->nullable();
			$table->integer('subscription_id')->nullable();
			$table->string('stripe_customer_id')->nullable();
			$table->string('stripe_default_source_id');
			$table->string('stripe_account_id');
			$table->string('crm_employee_email', 50)->nullable();
			$table->string('crm_employee_id', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
