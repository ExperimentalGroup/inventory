<?php


class tblTagsSeeder extends Seeder{
	
	public function run() {
		DB::table('tblTags')->delete();

		$tblTags = array (
			array(

				'strTagsID' => 'TAG001',
				'strTagsProdID' => 'PRO002',
				'strTagsField' => 'Phone'
				
			),

			array(

				'strTagsID' => 'TAG002',
				'strTagsProdID' => 'PRO002',
				'strTagsField' => 'Battery'
				
			),

			array(

				'strTagsID' => 'TAG003',
				'strTagsProdID' => 'PRO001',
				'strTagsField' => 'Mouse'

			)
		);

	
		DB::table('tblTags')->insert($tblTags);
	}
}