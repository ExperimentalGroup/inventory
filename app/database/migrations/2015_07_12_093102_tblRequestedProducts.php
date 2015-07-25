<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblRequestedProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblRequestedProducts', function(Blueprint $table){
			$table->string('strRPReqID');//fk
			$table->string('strRPProdID');//fk
			$table->integer('intRPQuantity');
			//composite keys
			$table->primary(array('strRPReqID','strRPProdID'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblRequestedProducts');
	}

}
