<?php
class adminmanageViewModel extends  ViewModel{
	public $viewFields=array(
	'admin'=>array('user_id','username','role_id','last_login_time'),
	'role'=>array('role_title','_on'=>'admin.role_id=role.role_id'),
	);
}