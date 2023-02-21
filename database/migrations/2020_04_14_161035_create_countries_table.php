<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('region', 100)->nullable()->index('region');
			$table->string('name')->nullable()->index('name');
			$table->string('fips104')->nullable();
			$table->string('iso2')->nullable();
			$table->string('iso3')->nullable();
			$table->string('iosn')->nullable();
			$table->string('internet')->nullable();
			$table->string('capital')->nullable();
			$table->string('map_reference')->nullable();
			$table->string('nationality_singular')->nullable();
			$table->string('nationality_plural')->nullable();
			$table->string('currency')->nullable();
			$table->string('currency_code')->nullable();
			$table->integer('population')->nullable();
			$table->string('title')->nullable();
			$table->string('comment')->nullable();
			$table->dateTime('created_at')->nullable();
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
		Schema::drop('countries');
	}

}
