<?php
class homeAction extends  wbaseAction{
	

 public function index(){
      $this->display();
 }
 
 
public function pay(){
     $this->display();

}

public function repassword(){
	
	
	$model=M('user');
	$_validate=array(
	              array('oldpassword','require','原始密码必须',MODEL::MUST_VALIDATE),
	              array('password','require','新密码必须',MODEL::MUST_VALIDATE),
	              array('repassword','password','重复密码不一致',MODEL::MUST_VALIDATE,'confirm'),	              
	              );
    $model->setProperty('_validate', $_validate);
    if(!$data=$model->create()){
    	$this->error($model->getError());
    }
    $oldpassword=md5($_POST['oldpassword']);
    $password=md5($_POST['password']);
	if(!$model->where(array('password'=>$oldpassword,'user_id'=>$_SESSION['user_id']))->find()){
			$this->error('原密码错误');
	}
	if($model->where(array('user_id'=>$_SESSION['user_id']))->save(array('password'=>$password))){
		$this->success('密码修改成功');
	}else{
		$this->error('密码修改失败');
	}
		
}


public function password(){
	
	$this->display();
}


public function profile(){
	
            $user=M('user')->where(array('user_id'=>$_SESSION['user_id']))->find();
            $this->assign('title','设置');
            $this->assign('user',$user);
            $this->display();
}


public function updateProfile(){
	$model=D('profile');
	if(!$model->create()){
		$this->error($model->getError());
	}
	if(!$model->where(array('user_id'=>$_SESSION['user_id']))->save()){
		$this->error('修改失败');
	}
	
	$this->updateLocation();
    $this->success('修改成功');
}
}