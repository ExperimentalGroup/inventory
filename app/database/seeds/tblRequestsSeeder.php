<?php

class tblRequestsSeeder extends Seeder{
	
	public function run() {
		DB::table('tblRequests')->delete();

		$tblRequests = array (
			array(

				'strReqID' => 'REQ001',
				'strReqBrchID' => 'BRCH001',
				'dtReqDate' => '2015-05-01',
				'strPlacedBy' => 'EMPL00002'
			),

			array(

				'strReqID' => 'REQ002',
				'strReqBrchID' => 'BRCH003',
				'dtReqDate' => '2015-07-20',
				'strPlacedBy' => 'EMPL00001'
			),

			array(

				'strReqID' => 'REQ003',
				'strReqBrchID' => 'BRCH001',
				'dtReqDate' => '2015-07-09',
				'strPlacedBy' => 'EMPL00003'
			)
			
		);

	
		DB::table('tblRequests')->insert($tblRequests);
	}
}