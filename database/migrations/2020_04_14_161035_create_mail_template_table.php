<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailTemplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mail_template', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('identifier', 100);
			$table->string('subject', 100);
			$table->string('type', 100)->nullable();
			$table->string('hint');
			$table->text('body', 65535);
			$table->string('wildcards');
			$table->string('from', 100);
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
		Schema::drop('mail_template');
	}

}
