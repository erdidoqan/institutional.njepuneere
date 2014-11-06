<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id');
			$table->string('wanted_pos');
			$table->string('sector');
			$table->string('bus_area');
			$table->string('position');
			$table->string('working_style');
			$table->string('exp');
			$table->string('degree');
			$table->string('gender');
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
		Schema::drop('ads');
	}

}
