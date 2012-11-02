<?php
class adminPublishModel  extends  Model {
	
	
	protected  $tableName='admin';
	
	protected  $_validate=array(
	           array('username','require','用户名不能为空',Model::MUST_VALIDATE),
	           array('password','require','密码不能为空',Model::MUST_VALIDATE),
	           array('repassword','password','重复密码不一致',Model::MUST_VALIDATE,'confirm'),
	           array('role_id','require','防止越权,角色必须',Model::MUST_VALIDATE),
	           );
	           
   protected $_auto=array(
   
               array('create_time','time',Model::MODEL_INSERT,'function'),               
   );
	
}
