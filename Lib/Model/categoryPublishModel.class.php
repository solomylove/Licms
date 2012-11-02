<?php
class categoryPublishModel extends Model{
	protected $tableName='category';
	protected $_validate=array(
	array('category_title','require','标题不能为空')
	);
}