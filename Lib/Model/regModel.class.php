<?php
class regModel extends Model{
	protected $tableName='user';
    protected  $_validate=array(
	array('username','require','姓名必须',Model::MUST_VALIDATE),
	array('username','','帐号名称已经存在！',0,'unique',1),
	array('repassword','password','重复密码不一致',Model::MUST_VALIDATE,'confirm'),
	array('question','require','问题必须',Model::MUST_VALIDATE),
	array('answer','require','答案必须',Model::MUST_VALIDATE),
	array('email','require','邮箱必须',Model::MUST_VALIDATE),
	);
	protected $_auto=array(
	array('create_time','time',Model::MODEL_BOTH,'function'),
	);
}