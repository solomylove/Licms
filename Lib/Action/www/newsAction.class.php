<?php
class newsAction extends wbaseAction{

public function index(){
	$p=$_GET["p"]?$_GET["p"]:1;
	$size=30;
	$aList=D("articleView")->limit(($p-1)*$size.",$size")->select();
	$count=D("articleView")->count();
	$this->page($count, $size, $map);
	$this->assign("article_list",$aList);
	$this->display();
}

}