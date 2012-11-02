<?php
class articleViewModel extends  ViewModel{
	
	
	public $viewFields=array(
	'article'=>array('article_title','create_time','category_id','tag','article_id','guide','read_count','create_time','status'),
	'category'=>array('category_title','_on'=>'article.category_id=category.category_id','url_rule','rewrite'),
	);
	
}