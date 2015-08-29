<?php

class Employee extends Eloquent
{
	protected $table = 'tblEmployees';
	protected $fillable = array('strEmpID' , 'strEmpFName', 'strEmpLName','strEmpStatus', 'strEmpAddress', 'strEmpBrchID', 'strEmpRoleID');
}
