<?php

class tblReqNotesSeeder extends Seeder{
	
	public function run() {
		DB::table('tblReqNotes')->delete();

		$tblReqNotes = array (
			array(

				'strReqNotesID' => 'REQNOTE001',
				'strReqID' => 'REQ001',
				'strReqNotesStat' => 'Pending'
			),

			array(

				'strReqNotesID' => 'REQNOTE002',
				'strReqID' => 'REQ002',
				'strReqNotesStat' => 'Pending'
			),

			array(

				'strReqNotesID' => 'REQNOTE003',
				'strReqID' => 'REQ003',
				'strReqNotesStat' => 'Pending'
			)
			
		);

	
		DB::table('tblReqNotes')->insert($tblReqNotes);
	}
}