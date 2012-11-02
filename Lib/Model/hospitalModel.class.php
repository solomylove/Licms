<?php
class hospitalModel extends Model{
	protected  $_validate=array(
	array('hospital_title','require','医院标题不能为空',MODEL::MUST_VALIDATE),
	);
}