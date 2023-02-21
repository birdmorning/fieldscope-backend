<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sender_id');
			$table->integer('receiver_id')->nullable()->default(0);
			$table->integer('admin_id')->default(0);
			$table->string('transaction_type', 20)->default('credit');
			$table->string('transaction_mode', 30)->default('default');
			$table->string('transaction_head', 50)->nullable()->default('signup');
			$table->decimal('amount', 9)->default(0.00);
			$table->text('gateway_request', 65535);
			$table->text('gateway_response', 65535);
			$table->string('gateway_type', 50)->nullable()->default('paypal');
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
		Schema::drop('transactions');
	}

}
