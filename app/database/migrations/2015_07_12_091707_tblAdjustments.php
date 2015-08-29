<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAdjustments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblAdjustments', function($table){
			$table->string('strAdjID')->primary();
			$table->string('strAdjProdID');//fk
			$table->integer('intAdjQtyBef');
			$table->integer('intAdjQtyAft');
			$table->string('strAdjReason');
			$table->date('dtAdjDate');
			$table->string('strAdjBatchID');//fk
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
		Schema::dropIfExists('tblAdjustments');
	}

}
