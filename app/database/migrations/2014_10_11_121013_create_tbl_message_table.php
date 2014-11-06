<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_message', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sirket_id');
			$table->integer('birey_id');
			$table->integer('ads_id');
			$table->string('com_name');
			$table->string('ads_name');
			$table->text('message');
			$table->integer('message_status');
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
		Schema::drop('tbl_message');
	}

}
