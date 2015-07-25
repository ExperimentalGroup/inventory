<?php

class tblOrdersSeeder extends Seeder{
	
	public function run() {
		DB::table('tblOrders')->delete();

		$tblOrders = array (
			array(

				'strOrdersID' => 'ORD001',
				'strSupplID' => 'SUPPL0001',
				'dtOrdDate' => '2015-06-25',
				'strPlacedBy' => 'EMPL00003'
			),

			array(

				'strOrdersID' => 'ORD002',
				'strSupplID' => 'SUPPL0002',
				'dtOrdDate' => '2015-07-03',
				'strPlacedBy' => 'EMPL00002'
			),

			array(

				'strOrdersID' => 'ORD003',
				'strSupplID' => 'SUPPL0001',
				'dtOrdDate' => '2015-07-19',
				'strPlacedBy' => 'EMPL00001'
			)
			
		);

	
		DB::table('tblOrders')->insert($tblOrders);
	}
}