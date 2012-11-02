<?php
class payViewModel extends  ViewModel{
	
	
 public $viewFields = array(
 'pay'=>array('pay_id','pay','article_id','create_time','user_id','province_id','city_id'),
 'user'=>array('username','user_id','_on'=>'pay.user_id=user.user_id'),
 'article'=>array('article_title','article_id','_on'=>'pay.article_id=article.article_id'),
 );
}