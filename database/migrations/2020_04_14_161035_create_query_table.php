<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQueryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('query', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->nullable();
			$table->text('query', 65535)->nullable();
			$table->string('type', 15)->nullable();
			$table->integer('category_id');
			$table->string('options', 200);
			$table->integer('category_view_id')->nullable();
			$table->string('image_url', 100)->nullable()->comment('sample image url');
			$table->string('custom_tag', 50)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('order_by')->nullable();
			$table->integer('photo_view_id')->nullable()->comment('Exception Rule to photo vie');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('query');
	}

}
