<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatingForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tblAdjustments', function($table){
			$table->foreign('strAdjProdID')->references('strProdID')->on('tblProducts');
			$table->foreign('strAdjBatchID')->references('strBatchID')->on('tblInventory');
		});

		Schema::table('tblDeliveries', function($table){
			$table->foreign('strDlvryRecBy')->references('strEmpID')->on('tblEmployees');
		});

		Schema::table('tblDeliveryDetails', function($table){
			$table->foreign('strDetID')->references('strDlvryID')->on('tblDeliveries');
			$table->foreign('strDetProdID')->references('strProdID')->on('tblProducts');
		});

		Schema::table('tblEmployees', function($table){
			$table->foreign('strEmpBrchID')->references('strBrchID')->on('tblBranches');
			$table->foreign('strEmpRoleID')->references('strRoleID')->on('tblRoles');
		});

		Schema::table('tblInventory', function($table){
			$table->foreign('strProdID')->references('strProdID')->on('tblProducts');
			$table->foreign('strDlvryID')->references('strDlvryID')->on('tblDeliveries');
			$table->foreign('strBrchID')->references('strBrchID')->on('tblBranches');
		});

		Schema::table('tblLogin', function($table){
			$table->foreign('strLoginEmpID')->references('strEmpID')->on('tblEmployees');
		});

		Schema::table('tblOrdNotes', function($table){
			$table->foreign('strOrdersID')->references('strOrdersID')->on('tblOrders');
		});

		Schema::table('tblOrdDelivery', function($table){
			$table->foreign('strOrdDlvryID')->references('strDlvryID')->on('tblDeliveries');
			$table->foreign('strOrdersID')->references('strOrdersID')->on('tblOrders');
		});

		Schema::table('tblOrderedProducts', function($table){
			$table->foreign('strOPOrdersID')->references('strOrdersID')->on('tblOrders');
			$table->foreign('strOPProdID')->references('strProdID')->on('tblProducts');
		});

		Schema::table('tblOrders', function($table){
			$table->foreign('strSupplID')->references('strSuppID')->on('tblSuppliers');
			$table->foreign('strPlacedBy')->references('strEmpID')->on('tblEmployees');
		});

		Schema::table('tblReqDelivery', function($table){
			$table->foreign('strReqDlvryID')->references('strDlvryID')->on('tblDeliveries');
			$table->foreign('strReqID')->references('strReqID')->on('tblRequests');
		});

		Schema::table('tblReqNotes', function($table){
			$table->foreign('strReqID')->references('strReqID')->on('tblRequests');
		});

		Schema::table('tblRequests', function($table){
			$table->foreign('strReqBrchID')->references('strBrchID')->on('tblBranches');
			$table->foreign('strPlacedBy')->references('strEmpID')->on('tblEmployees');
		});

		Schema::table('tblRequestedProducts', function($table){
			$table->foreign('strRPReqID')->references('strReqID')->on('tblRequests');
			$table->foreign('strRPProdID')->references('strProdID')->on('tblProducts');
		});

		Schema::table('tblTags', function($table){
			$table->foreign('strTagsProdID')->references('strProdID')->on('tblProducts');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tblAdjustments', function ($table) {
			$table->dropColumn('strAdjProdID');
			$table->dropColumn('strAdjBatchID');
		});

		Schema::table('tblDeliveries', function ($table){
			$table->dropColumn('strDlvryRecBy');
		});

		Schema::table('tblDeliveryDetails', function($table){
			$table->dropColumn('strDetID');
			$table->dropColumn('strDetProdID');
		});

		Schema::table('tblEmployees', function ($table) {
			$table->dropColumn('strEmpBrchID');
			$table->dropColumn('strEmpRoleID');
		});

		Schema::table('tblInventory', function ($table) {
			$table->dropColumn('strProdID');
			$table->dropColumn('strDlvryID');
			$table->dropColumn('strBrchID');
		});

		Schema::table('tblLogin', function($table) {
			$table->dropColumn('strLoginEmpID');
		});

		Schema::table('tblOrdNotes', function ($table) {
			$table->dropColumn('strOrdersID');
		});

		Schema::table('tblOrdDelivery', function ($table) {
			$table->dropColumn('strOrdDlvryID');
			$table->dropColumn('strOrdersID');
		});

		Schema::table('tblOrderedProducts', function ($table) {
			$table->dropColumn('strOPOrdersID');
			$table->dropColumn('strOPProdID');
		});

		Schema::table('tblOrders', function ($table) {
			$table->dropColumn('strSupplID');
			$table->dropColumn('strPlacedBy');
		});

		Schema::table('tblReqDelivery', function ($table) {
			$table->dropColumn('strReqDlvryID');
			$table->dropColumn('strReqID');
		});

		Schema::table('tblReqNotes', function ($table) {
			$table->dropColumn('strReqID');
		});

		Schema::table('tblRequestedProducts', function ($table) {
			$table->dropColumn('strRPReqID');
			$table->dropColumn('strRPProdID');
		});

		Schema::table('tblRequests', function ($table) {
			$table->dropColumn('strReqBrchID');
			$table->dropColumn('strPlacedBy');
		});

		Schema::table('tblTags', function ($table) {
			$table->dropColumn('strTagsProdID');
		});
	}

}
