<?php

class tblOrdProdSeeder extends Seeder{
	
	public function run() {
		DB::table('tblOrderedProducts')->delete();

		$tblOrderedProducts = array (
			array(

				'strOPOrdersID' => 'ORD001',
				'strOPProdID' => 'PRO002',
				'intOPQuantity' => '2'
			),

			array(

				'strOPOrdersID' => 'ORD002',
				'strOPProdID' => 'PRO003',
				'intOPQuantity' => '1'
			),

			array(

				'strOPOrdersID' => 'ORD003',
				'strOPProdID' => 'PRO001',
				'intOPQuantity' => '5'
			)
			
		);

	
		DB::table('tblOrderedProducts')->insert($tblOrderedProducts);
	}
}