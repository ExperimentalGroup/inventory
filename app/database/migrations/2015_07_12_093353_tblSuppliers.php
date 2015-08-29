<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSuppliers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblSuppliers', function(Blueprint $table){
			$table->string('strSuppID')->primary();
			$table->string('strSuppCompanyName');
			$table->string('strSuppOwnerLName');
			$table->string('strSuppOwnerFName');
			$table->string('strSuppContactNo');
			$table->string('strSuppAddress');
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
		Schema::dropIfExists('tblSuppliers');
	}

}
