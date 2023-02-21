<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template_fields', function(Blueprint $table)
		{
			$table->integer('template_id');
			$table->string('field', 45);
			$table->string('index', 45)->nullable();
			$table->primary(['template_id','field']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('template_fields');
	}

}
