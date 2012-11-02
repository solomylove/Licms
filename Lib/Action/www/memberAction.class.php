<?php
class memberAction extends  wbaseAction{
	
	
	
	public function index(){
		$p=$this->p();
		$size=20;
		$mlist=M('user')->limit(($p-1)*$size.",$size")->select();
		$count=M('user')->count();
		$this->page($count, $size, $map);
		$this->assign("mlist",$mlist);
		$this->display();
	}
	
	
	
	public function getList(){
		$mlist=M('user')->select();
		return $mlist;
	}
}