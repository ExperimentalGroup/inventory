<?php

class Branch extends Eloquent
{
	protected $table = 'tblBranches';
	protected $fillable = array('strBrchName', 'strBrchAddress');
}