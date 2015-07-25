<?php


class tblInventorySeeder extends Seeder{
	
	public function run() {
		DB::table('tblInventory')->delete();

		$tblInventory = array (
			array(

				'strBatchID' => 'BATCH001',
				'strProdID' => 'PRO001',
				'strDlvryID' => 'DEL001',
				'strBrchID' =>'BRCH003',
				'intAvailQty' => '50',
				'dblCurRetPrice' => '48000',
				'dblCurWPrice' => '30000'
				
				),

				array(

				'strBatchID' => 'BATCH002',
				'strProdID' => 'PRO003',
				'strDlvryID' => 'DEL002',
				'strBrchID' =>'BRCH001',
				'intAvailQty' => '100',
				'dblCurRetPrice' => '32000',
				'dblCurWPrice' => '22000'
				
				),

				array(

				'strBatchID' => 'BATCH003',
				'strProdID' => 'PRO002',
				'strDlvryID' => 'DEL003',
				'strBrchID' =>'BRCH002',
				'intAvailQty' => '10',
				'dblCurRetPrice' => '40000',
				'dblCurWPrice' => '27000'
				
			)
		);

	
		DB::table('tblInventory')->insert($tblInventory);
	}
}

