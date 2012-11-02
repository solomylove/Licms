<?php
class articlemanageViewModel extends ViewModel{


        public $viewFields = array(
        'article'=>array('article_title','article_id','create_time','user_id','province_id','city_id','hospital_id','_type'=>'LEFT','category_id','status'),
        'admin'=>array('username','_on'=>'admin.user_id=article.user_id'),
       );
}