<?php

class Employee extends Eloquent
{
	protected $table = 'tblEmployees';
	protected $fillable = array('strEmpFName', 'strEmpLName','strEmpStatus', 'strEmpAddress', 'strEmpBrchID', 'strEmpRoleID');
}
