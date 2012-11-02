<?php
class adminAction extends  baseAction {
	public function index(){
	$this->assign('menu',$this->menu($_SESSION['role_id']));
	$this->display();
}

public function menu($role_id){
	 if($role_id!==C('ADMIN_ROLE_ID')){
	 	$map['role_id']=$_SESSION['role_id'];
	 	$menu_list=D('menuView')->where($map)->select();
	 }else{
	 	 $menu_list=M('menu')->select();
	 }
     $menu_list=list_to_tree($menu_list,'menu_id','p_id','_child','0');  //php 的 0 与 '0' 判断很怪
     return $menu_list;
}
   
   
   public function ajax_manage(){
   	 $map=D('admin')->create($_GET);
   	 $map['create_time']=$this->time();
   	 $map=outBlank($map);
   	 if(!empty($_GET['keyword'])){
   	 	$map['username']=array('like','%'.$_GET['keyword'].'%');
   	 }
   	 $count=M('admin')->where($map)->count();
   	 $user_list=D('adminmanageView')->where($map)->page($this->p().','.$this->size())->select();
   	 $this->assign('user_list',$user_list);
   	 $this->page($count,$this->size(),$map);
     $this->display();
   }
	
   public function repassword(){
   	
   	if(empty($_POST['password'])){
   		$this->error('密码不能为空');
   	}
   	if(empty($_POST['user_id'])){
   		$this->error('用户名不能为空');
   	}
   	 
   	if(M('admin')->where(array('user_id'=>$_POST['user_id']))->save(array('password'=>md5($_POST['password'])))){
   		$this->success('修改成功');
   	}else{
   		 $this->error('修改失败');
   	}
   }
   
   
   public function manage(){
   	$this->assign('role_list',M('role')->select());
   	$this->display();
   }
   
   
   public function publish(){
   	$this->assign('role_list',M('role')->select());
   	$this->display();
   	
   }
   
   
   
   
   
public function add(){
      $model=D('adminPublish');
      if(!$data=$model->create()){
      	$this->error($model->getError());
      };
      $data['password']=md5($data['password']);
	    if(md5($_POST['verify'])!==$_SESSION['verify']){
	    	//$this->error('验证码不正确');
	  }
      if(M('admin')->where(array('username'=>$data['username']))->find()){
      	$this->error('账号 已存在');
      }
      if(empty($data['role_id'])|| $data['role_id']==C('ADMIN_ROLE_ID') ){
      	$data['role_id']='null';
      }
	  $data['create_time']=time();
      if($info=$model->add($data)){
       	$this->success('添加成功');
      }else{
      	$this->error('账户添加失败');
      }
}
  
public function del(){
	if(M('admin')->where(array('user_id'=>$_POST['id']))->delete()){
		$this->success('删除成功');
	}else{
		$this->error('删除失败');
	}
}



public function  profile(){
	$user=M('admin')->where(array('user_id'=>$this->_get('user_id')))->find();
	$role_list=M('role')->select();
	$this->assign('role_list',$role_list);
	$this->assign('user',$user);
	$this->display();
}

public function updateProfile(){
	$model=D('admin');
	$user_id=$_GET['user_id'];
	$data=$model->setProperty('fields', array('phone','qq','email','other','province_id','city_id','role_id'))->create();
	if(empty($user_id)){
		$this->error('目标缺失');
	}
	if(!$model->where(array('user_id'=>$user_id))->save($data)){
		$this->error('修改失败');
	}else{
		$this->success('修改成功');
	}
}



}