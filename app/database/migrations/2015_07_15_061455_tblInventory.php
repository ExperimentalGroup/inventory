<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblInventory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblInventory',function($table){
			$table->string('strBatchID')->primary();
			$table->string('strProdID');//fk
			$table->string('strDlvryID');//fk
			$table->string('strBrchID');//fk
			$table->integer('intAvailQty');
			$table->double('dblCurRetPrice', 15, 8);
			$table->double('dblCurWPrice', 15, 8);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tblInventory');
	}

}
