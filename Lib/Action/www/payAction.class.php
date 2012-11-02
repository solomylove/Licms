<?php
class payAction extends wbaseAction{
	public function index(){
		$this->display();
	}
	
	public function  ajax(){
		$map['user_id']=$_SESSION['user_id'];
		if($time=$this->time()){
			$map['create_time']=$time;
		}
		$map=outBlank($map);
		$pay_list=D('payView')->where($map)->page($this->p().','.'10')->select();
		$count=M('pay')->where($map)->count();
		$this->assign('pay_list',$pay_list);
		unset($map['user_id']);
		$this->page($count,10, $map);
		$this->display();
	}
}