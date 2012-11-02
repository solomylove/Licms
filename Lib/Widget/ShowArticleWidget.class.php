<?php

baseAction::$auth='not';
class ShowArticleWidget extends Widget{
	public function render($data){
	   $cmap['category_title']=$data['title'];
	   $cmap['p_id']=0;
	   	//
	   $amap=D('article')->create($_GET);                 
	   $amap=outBlank($amap);
	   //
	   if($cate_string=A('admin/category')->getAllChild($cmap)){          //获取所有分类
	   	  $amap['category_id']=array('in',$cate_string);
	   };
	   $keyword=$_GET['keyword'];
	   $amap=A('www/article')->getSearchMap($amap,$keyword,array('tag','article_title'));//
	   $article_list=M('article')->where($amap)->limit('0,5')->select();//
	   $data['article_list']=$article_list;
	   return $this->renderFile('ShowArticle',$data);
	   
	}
	
}