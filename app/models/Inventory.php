<?php

class Inventory extends Eloquent
{
	protected $table = 'tblInventory';
	protected $fillable = array('strProdID', 'strDlvryID', 'strBrchID', 'intAvailQty', 'dblCurRetPrice', 'dblCurWPrice');
	
}