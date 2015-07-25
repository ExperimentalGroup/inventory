<?php

class tblAdjustmentsSeeder extends Seeder{
	
	public function run() {
		DB::table('tblAdjustments')->delete();

		$tblAdjustments = array (
			array(

				'strAdjID' => 'ADJ001',
				'strAdjProdID' => 'PRO003',
				'intAdjQtyBef' => '39',
				'intAdjQtyAft' => '40',
				'strAdjReason' => 'Defective Product',
				'dtAdjDate' => '2015-07-02',
				'strAdjBatchID' => 'BATCH002'
			),

			array(

				'strAdjID' => 'ADJ002',
				'strAdjProdID' => 'PRO001',
				'intAdjQtyBef' => '19',
				'intAdjQtyAft' => '10',
				'strAdjReason' => 'Defective Product',
				'dtAdjDate' => '2015-07-15',
				'strAdjBatchID' => 'BATCH001'
			),

			array(

				'strAdjID' => 'ADJ003',
				'strAdjProdID' => 'PRO002',
				'intAdjQtyBef' => '100',
				'intAdjQtyAft' => '96',
				'strAdjReason' => 'Defective Product',
				'dtAdjDate' => '2015-07-20',
				'strAdjBatchID' => 'BATCH002'
			)
			
		);

	
		DB::table('tblAdjustments')->insert($tblAdjustments);
	}
}