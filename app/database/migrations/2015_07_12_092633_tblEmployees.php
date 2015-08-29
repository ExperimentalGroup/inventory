<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblEmployees extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblEmployees', function(Blueprint $table){
			$table->string('strEmpID')->primary();
			$table->string('strEmpFName');
			$table->string('strEmpLName');
			$table->integer('intEmpAge');
			$table->string('strEmpStatus');
			$table->string('strEmpAddress');
			$table->string('strEmpBrchID');//fk
			$table->string('strEmpRoleID');//fk
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
		Schema::dropIfExists('tblEmployees');
	}

}
