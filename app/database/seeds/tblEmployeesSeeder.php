<?php


class tblEmployeesSeeder extends Seeder{
	
	public function run() {
		DB::table('tblEmployees')->delete();

		$tblEmployees = array (
			array(

				'strEmpID' => 'EMPL00001',
				'strEmpFName' => 'Earvin',
				'strEmpLName' => 'Tolentino',
				'intEmpAge' =>'18',
				'strEmpStatus' => 'Regular',
				'strEmpAddress' => '44 Rizal St.,Mandaluyong City',
				'strEmpBrchID' => 'BRCH001',
				'strEmpRoleID' => 'ROLE0001'
			),
			
			array(

				'strEmpID' => 'EMPL00002',
				'strEmpFName' => 'Amber',
				'strEmpLName' => 'Lastima',
				'intEmpAge' =>'22',
				'strEmpStatus' => 'Part Time',
				'strEmpAddress' => 'Signal Village, Taguig City',
				'strEmpBrchID' => 'BRCH003',
				'strEmpRoleID' => 'ROLE0002'
			),

			array(

				'strEmpID' => 'EMPL00003',
				'strEmpFName' => 'Zacharah Lloyd',
				'strEmpLName' => 'Seva',
				'intEmpAge' =>'18',
				'strEmpStatus' => 'Regular',
				'strEmpAddress' => 'Sta. Mesa, Manila',
				'strEmpBrchID' => 'BRCH002',
				'strEmpRoleID' => 'ROLE0003'
			)

	);

	
		DB::table('tblEmployees')->insert($tblEmployees);
		}
}

