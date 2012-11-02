<?php
class moneyAction extends  wbaseAction{
	public function index(){
		$this->display();
		}
	 public function ajax(){
	 $map['user_id']=$_SESSION['user_id'];
	 if($time=$this->time()){
	 	$map['create_time']=$time;
	 }
	 $map=outBlank($map);
	 $count=M('money')->where($map)->count();
	 $pay_list=M('money')->where($map)->page($this->p().','.$this->size())->select();
	 $this->assign('money_list',$pay_list);
	 unset($map['user_id']);
	 $this->page($count,10,$map);
	 $this->display();
}

}