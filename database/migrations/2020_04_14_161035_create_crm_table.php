<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('access_token')->nullable();
			$table->timestamp('expires_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('crm');
	}

}
