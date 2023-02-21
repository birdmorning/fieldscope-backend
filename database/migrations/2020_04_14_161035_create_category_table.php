<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->integer('company_id')->unsigned();
			$table->boolean('type')->default(1)->comment('1:required|2:damaged|');
			$table->integer('parent_id')->unsigned();
			$table->integer('min_quantity')->unsigned()->nullable();
			$table->integer('thumbnail')->nullable()->default(0);
			$table->integer('order_by')->nullable()->default(0);
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
		Schema::drop('category');
	}

}
