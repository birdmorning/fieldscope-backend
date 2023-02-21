<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCommissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_commission', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tenant_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('lead_id')->nullable();
			$table->date('target_month')->nullable();
			$table->decimal('commission', 9)->nullable();
			$table->string('commission_event', 45)->nullable();
			$table->text('comments', 65535)->nullable();
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
		Schema::drop('user_commission');
	}

}
