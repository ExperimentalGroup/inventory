<?php

class Order extends Eloquent
{
	protected $table = 'tblOrders';
	protected $fillable = array('strSupplID','dtOrdDate','strPlacedBy');
}