<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyGroupCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_group_category', function(Blueprint $table)
		{
			$table->integer('company_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->integer('company_group_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->primary(['category_id','company_group_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_group_category');
	}

}
