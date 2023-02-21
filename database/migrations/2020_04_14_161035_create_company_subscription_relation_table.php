<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanySubscriptionRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_subscription_relation', function(Blueprint $table)
		{
			$table->integer('company_id')->primary();
			$table->string('subscription_id', 45)->nullable();
			$table->date('subscription_expiry_date')->nullable();
			$table->integer('total_allowed_tiers')->nullable()->default(0);
			$table->integer('total_user_featured_deals')->nullable();
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
		Schema::drop('company_subscription_relation');
	}

}
