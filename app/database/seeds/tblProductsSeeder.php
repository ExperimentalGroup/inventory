<?php


class tblProductsSeeder extends Seeder{
	
	public function run() {
		DB::table('tblProducts')->delete();

		$tblProducts = array (
			array(

				'strProdID' => 'PRO001',
				'strProdName' => 'Zenfone Series 2',
				'strProdBrand' => 'ASUS',
				'strProdModel' =>'Zenfone'
				
			),

			array(

				'strProdID' => 'PRO002',
				'strProdName' => 'iPhone 6',
				'strProdBrand' => 'Apple',
				'strProdModel' =>'6 series'
				
			),

			array(

				'strProdID' => 'PRO003',
				'strProdName' => 'LG U+',
				'strProdBrand' => 'LG',
				'strProdModel' =>'U+'

			)
		);

	
		DB::table('tblProducts')->insert($tblProducts);
	}
}

