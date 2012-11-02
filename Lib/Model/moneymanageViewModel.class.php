<?php
class moneymanageViewModel extends ViewModel{
	
 public $viewFields = array(
 'money'=>array('money_id','money','owner_id','create_time','user_id','province_id','city_id'),
 'user'=>array('username','_on'=>'money.user_id=user.user_id'),
 );
}