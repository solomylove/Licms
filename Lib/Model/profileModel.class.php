<?php
class profileModel extends Model{
	
	
	protected $tableName = 'user'; 

	protected $fields=array(
	
	'phone',
	'email',
	'province_id',
	'city_id',
	'address',
	'qq',
	'fax',
	'truename',
	'birthday',
	 );
	  

}