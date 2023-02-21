<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->unsigned();
			$table->string('name', 100);
			$table->string('address1', 100);
			$table->string('address2', 100)->nullable();
			$table->integer('assigned_user_id')->unsigned()->default(0);
			$table->integer('state_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->string('postal_code', 100);
			$table->string('claim_num', 100)->nullable();
			$table->date('inspection_date')->nullable();
			$table->string('latitude', 100);
			$table->string('longitude', 100);
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id')->default(0);
			$table->integer('status_id')->nullable()->default(1)->comment('1:initiated,2:completed');
			$table->string('ref_id', 100)->nullable()->comment('app local id');
			$table->string('crm_project_id', 100)->nullable();
			$table->integer('thumbnail_media_id')->nullable();
			$table->dateTime('last_crm_sync_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project');
	}

}
