<?php

class tblDelDetSeeder extends Seeder{
	
	public function run() {
		DB::table('tblDeliveryDetails')->delete();

		$tblDelDet = array (
			array(

				'strDetID' => 'DEL001',
				'strDetProdID' => 'PRO001',
				'intDetQty' => '10'
			),

			array(

				'strDetID' => 'DEL002',
				'strDetProdID' => 'PRO003',
				'intDetQty' => '5'
			),

			array(

				'strDetID' => 'DEL003',
				'strDetProdID' => 'PRO002',
				'intDetQty' => '1'
			)
			
		);

	
		DB::table('tblDeliveryDetails')->insert($tblDelDet);
		}
}