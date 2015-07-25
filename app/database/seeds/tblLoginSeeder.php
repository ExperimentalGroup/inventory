<?php

class tblLoginSeeder extends Seeder{
	
	public function run() {
		DB::table('tblLogin')->delete();

		$tblLogin = array (
			array(

				'strUsername' => 'USER-A-001',
				'strPassword' => 'pass001',
				'strLoginEmpID' => 'EMPL00001'
			),

			array(

				'strUsername' => 'USER-M-002',
				'strPassword' => 'pass002',
				'strLoginEmpID' => 'EMPL00002'
			),

			array(

				'strUsername' => 'USER-E-003',
				'strPassword' => 'pass003',
				'strLoginEmpID' => 'EMPL00003'
			)
			
		);

	
		DB::table('tblLogin')->insert($tblLogin);
	}
}