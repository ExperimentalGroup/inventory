<?php


class tblSuppliersSeeder extends Seeder{
	
	public function run() {
		DB::table('tblSuppliers')->delete();

		$tblSuppliers = array (
			array(

				'strSuppID' => 'SUPPL0001',
				'strSuppCompanyName' => 'Sony Enterprises Ltd',
				'strSuppOwnerLName' => 'Legaspi',
				'strSuppOwnerFName' =>'Melody',
				'strSuppContactNo' => '09162451291',
				'strSuppAddress' => 'RBC Tower, Ayala Ave.,Makati City'
		
			),

			array(

				'strSuppID' => 'SUPPL0002',
				'strSuppCompanyName' => 'Samsung Enterprises Ltd',
				'strSuppOwnerLName' => 'Kim',
				'strSuppOwnerFName' =>'Josephine',
				'strSuppContactNo' => '09123450000',
				'strSuppAddress' => 'The Fort, Global City,Makati City'
		
			)
		);

	
		DB::table('tblSuppliers')->insert($tblSuppliers);
		}
}

