<?php
class passwordAction extends  wbaseAction{
	 public function step1(){
	 	$this->display();
	 	
	 }
	 public function step2(){
	   $username=$_POST['username'];
	   $verify=$_POST['verify'];
	   if(md5($verify)!==$_SESSION['verify']){
	   	$this->error('验证码有误');
	   }
	 	if($username==''){
	 		$this->error('请输入用户名');
	 	}
	 	if(!$info=M('user')->where(array('username'=>$username))->find()){
	 		$this->error('用户名有误');
	 	}
	 	$_SESSION['lost_user_id']=$info['user_id'];
	 	$this->assign('question',$info['question']);
	 	$this->display();
	 }
	 
	 
	 public function step3(){
	 	$model=D('password');
	 	if(!$model->create()){
	 		$this->error($model->getError());
	 	}
	 	if(M('user')->where(array('user_id'=>$_SESSION['lost_user_id']))->getField('answer')!==$model->answer){
	 		$this->error('回答不正确');
	 	}
	 	if(!M('user')->where(array('user_id'=>$_SESSION['lost_user_id']))->save(array('password'=>md5($model->password)))){
	 		$this->error('修改密码失败');
	 	}
	 	$this->redirect('public/login','','','修改密码成功');
	 }
	
}