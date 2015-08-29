<?php

class Order extends Eloquent
{
	protected $table = 'tblOrders';
	protected $primaryKey = 'strOrdersID';
	protected $fillable = array('strSupplID','dtOrdDate','strPlacedBy');
}