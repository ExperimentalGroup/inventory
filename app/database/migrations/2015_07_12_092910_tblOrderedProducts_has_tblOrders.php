<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblOrderedProductsHasTblOrders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOrdProOrders', function(Blueprint $table){
			$table->string('strOPOrdCode');
			$table->string('strOPProCode');
			$table->integer('strOOrdCode');

			//composite keys
			$table->primary(array('strOPOrdCode','strOPProCode','strOOrdCode'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblOrdProOrders');
	}

}
