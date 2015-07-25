<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOrders', function(Blueprint $table){
			$table->string('strOrdersID')->primary();
			$table->string('strSupplID');//fk
			$table->date('dtOrdDate');
			$table->string('strPlacedBy');//fk
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblOrders');
	}

}
