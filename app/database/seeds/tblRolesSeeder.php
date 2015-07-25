<?php

class tblRolesSeeder extends Seeder{
	
	public function run() {
		DB::table('tblRoles')->delete();

		$tblRoles = array (
			array(

				'strRoleID' => 'ROLE0001',
				'strRoleDescription' => 'Adminisistrator'
			),

			array(

				'strRoleID' => 'ROLE0002',
				'strRoleDescription' => 'Manager'
			),

			array(

				'strRoleID' => 'ROLE0003',
				'strRoleDescription' => 'Employee'
			)
			
		);

	
		DB::table('tblRoles')->insert($tblRoles);
	}
}