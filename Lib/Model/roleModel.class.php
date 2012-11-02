<?php
class roleModel extends Model{
	
   protected  $_validate=array(
	array('role_title','require','不能为空',MODEL::EXISTS_VAILIDATE),
	array('role_name','require','不能为空',MODEL::EXISTS_VAILIDATE),
	);
}