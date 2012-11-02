<?php
class passwordAction extends  baseAction{
	
	
	public function index(){
		$this->display();
	}
    public function repassword(){
    $model=M('admin');
    if(!$model->where(array('user_id'=>$_SESSION[C('USER_AUTH_KEY')],'password'=>md5($_POST['oldpassword'])))->find()){
             $this->error('原密码错误');
    }
    $password=$_POST['password'];
    if($password==''){
    	$this->error('密码不能为空');
    }
    if($password !==$_POST['repassword']){
    	$this->error('重复密码不一致');
    }
    if(!$model->where(array('user_id'=>$_SESSION[C('USER_AUTH_KEY')]))->save(array('password'=>md5($password)))){
         $this->error('修改失败');  
    }
       $this->success('修改成功');
   }
	
}