<?php
class passwordModel extends  Model{
	protected  $tableName='user';
	protected  $_validate=array(
	array('answer','require','安全问题不能为空',Model::MUST_VALIDATE),
	array('password','require','密码必须',Model::MUST_VALIDATE),
	array('repassword','password','两次输入不一样',Model::MUST_VALIDATE,'confirm'),
	);
}