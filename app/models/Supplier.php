<?php

class Supplier extends Eloquent
{
	protected $table = 'tblSuppliers';
	protected $fillable = array('strSuppCompanyName','strSuppOwnerLName','strSuppOwnerFName','strSuppContactNo','strSuppAddress');
}