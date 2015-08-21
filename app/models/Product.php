<?php

class Product extends Eloquent
{
	protected $table = 'tblProducts';
	protected $fillable = array('strProdName', 'strProdBrand', 'strProdModel','');
}