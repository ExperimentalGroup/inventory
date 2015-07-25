<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblOrdDelivery extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOrdDelivery', function($table){
			$table->string('strOrdDlvryID')->primary();//fk
			$table->string('strOrdersID');//fk
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblOrdDelivery');
	}

}
