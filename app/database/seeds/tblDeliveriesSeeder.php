<?php

class tblDeliveriesSeeder extends Seeder{
	
	public function run() {
		DB::table('tblDeliveries')->delete();

		$tblDeliveries = array (
			array(

				'strDlvryID' => 'DEL001',
				'dtDlvryDate' => '2015-07-01',
				'strDlvryRecBy' => 'EMPL00003'
			),

			array(

				'strDlvryID' => 'DEL002',
				'dtDlvryDate' => '2015-07-13',
				'strDlvryRecBy' => 'EMPL00002'
			),

			array(

				'strDlvryID' => 'DEL003',
				'dtDlvryDate' => '2015-07-20',
				'strDlvryRecBy' => 'EMPL00003'
			)
			
		);

	
		DB::table('tblDeliveries')->insert($tblDeliveries);
	}
}