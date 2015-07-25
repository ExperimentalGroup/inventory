<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblDeliveries extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblDeliveries', function ($table){
			$table->string('strDlvryID')->primary();
			$table->date('dtDlvryDate');
			$table->string('strDlvryRecBy');//fk
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExixts('tblDeliveries');
	}

}
