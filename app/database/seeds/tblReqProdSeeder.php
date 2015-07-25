<?php

class tblReqProdSeeder extends Seeder{
	
	public function run() {
		DB::table('tblRequestedProducts')->delete();

		$tblRequestedProducts = array (
			array(

				'strRPReqID' => 'REQ002',
				'strRPProdID' => 'PRO002',
				'intRPQuantity' => '10'
			),

			array(

				'strRPReqID' => 'REQ001',
				'strRPProdID' => 'PRO001',
				'intRPQuantity' => '3'
			),

			array(

				'strRPReqID' => 'REQ003',
				'strRPProdID' => 'PRO003',
				'intRPQuantity' => '4'
			)
			
		);

	
		DB::table('tblRequestedProducts')->insert($tblRequestedProducts);
	}
}