<?php
class accessModel extends Model{
	
	protected  $_validate=array(
	
	array('access_title','require','不能为空',MODEL::MUST_VALIDATE),
	array('access_name','require','不能为空',MODEL::MUST_VALIDATE),
	);
	
	
}