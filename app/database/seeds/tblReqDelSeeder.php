<?php

class tblReqDelSeeder extends Seeder{
	
	public function run() {
		DB::table('tblReqDelivery')->delete();

		$tblReqDelivery = array (
			array(

				'strReqDlvryID' => 'DEL003',
				'strReqID' => 'REQ001'
			),

			array(

				'strReqDlvryID' => 'DEL001',
				'strReqID' => 'REQ002'
			),

			array(

				'strReqDlvryID' => 'DEL002',
				'strReqID' => 'REQ003'
			)
			
		);

	
		DB::table('tblReqDelivery')->insert($tblReqDelivery);
	}
}