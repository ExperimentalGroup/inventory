<?php

class tblBranchesSeeder extends Seeder{
	
	public function run() {
		DB::table('tblBranches')->delete();

		$tblBranches = array (
			array(

				'strBrchID' => 'BRCH001',
				'strBrchName' => 'Mandaluyong',	
				'strBrchAddress' => 'Boni,Mandaluyong'

			),

			array(

				'strBrchID' => 'BRCH002',
				'strBrchName' => 'Manila ',	
				'strBrchAddress' => 'Sta.Mesa,Manila'
			),

			array(

				'strBrchID' => 'BRCH003',
				'strBrchName' => 'Taguig',	
				'strBrchAddress' => 'Global City,Taguig'
			)

		);

	
		DB::table('tblBranches')->insert($tblBranches);
	}
}