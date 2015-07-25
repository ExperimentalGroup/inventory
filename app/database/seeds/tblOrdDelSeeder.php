<?php

class tblOrdDelSeeder extends Seeder{
	
	public function run() {
		DB::table('tblOrdDelivery')->delete();

		$tblOrdDelivery = array (
			array(

				'strOrdDlvryID' => 'DEL001',
				'strOrdersID' => 'ORD002'
			),

			array(

				'strOrdDlvryID' => 'DEL002',
				'strOrdersID' => 'ORD003'
			),

			array(

				'strOrdDlvryID' => 'DEL003',
				'strOrdersID' => 'ORD001'
			)
			
		);

	
		DB::table('tblOrdDelivery')->insert($tblOrdDelivery);
	}
}