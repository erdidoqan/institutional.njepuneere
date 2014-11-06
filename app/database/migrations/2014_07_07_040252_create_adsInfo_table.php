<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdsInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adsInfo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('com_name');
			$table->string('logo');
			$table->string('ads_name');
			$table->string('ref_code');
			$table->string('languages');
			$table->string('number_of_staff');
			$table->string('only');
			$table->string('disabled');
			$table->string('transmit');
			$table->string('work_place');
			$table->string('gender');
			$table->text('job_desc');
			$table->text('qua');
			$table->date('rel_date');
			$table->string('pub_time');
			$table->integer('user_id');
			$table->integer('ads_id');
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
		Schema::drop('adsInfo');
	}

}
