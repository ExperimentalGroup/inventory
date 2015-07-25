<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblRequests extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblRequests', function($table){
			$table->string('strReqID')->primary();
			$table->string('strReqBrchID');//fk
			$table->date('dtReqDate');
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
		Schema::dropIfExists('tblRequests');
	}

}
