<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblOrderedProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblOrderedProducts', function($table){
			$table->string('strOPOrdersID');//fk
			$table->string('strOPProdID');//fk
			$table->integer('intOPQuantity');

			//composite keys
			$table->primary(array('strOPOrdersID','strOPProdID'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblOrderedProducts');
	}

}
