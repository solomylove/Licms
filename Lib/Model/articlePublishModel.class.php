<?php
class articlePublishModel extends Model{
    protected $tableName='article';
    protected   $_validate=array(
	array('article_title','require','文章标题不能为空',MODEL::MUST_VALIDATE),
	array('category_id','require','分类不能为空',MODEL::MUST_VALIDATE),
	array('content','require','请输入内容',MODEL::MUST_VALIDATE),
	);
}