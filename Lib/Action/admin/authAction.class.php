<?php
class authAction extends  Action {
	 function  _initialize(){
	 	session_start();
	 }
	 
	 public function auth(){
	 	//如果模块需要认证
	 	if(!in_array(MODULE_NAME,C('NOT_AUTH_MODULE'))){
	 		  if($action=C('NOT_AUTH_ACTION'.MODULE_NAME)){    //如果找到了某些不需要的操作
	 		  	 $action_array(',',$module);                   //
	 		  	 if(!array_search(ACTION_NAME,$action_array())){   //在 某个模块中没找到该操作
	 		  	 	  $this->checkAccess();
	 		  	 }                                                 //读取数据库rbac信息
	 		  }else{
	 		  	     $this->checkAccess(); 
	 		  }
	 	}
	 	}
	 	
	 	
	public function checkAccess(){
		
		if(empty($_SESSION[C('USER_AUTH_KEY')])){
			$this->error('请重新登录');
		}elseif ($_SESSION['role_id']!==C('ADMIN_ROLE_ID')){
			//不是网站拥有者则检查权限
			if($module_id=M('access')->where(array('access_name'=>MODULE_NAME,'p_id'=>0))->getField('access_id')){  //
			 if(!M('role_access')->where(array('access_id'=>$module_id,'role_id'=>$_SESSION['role_id']))->find()){
			 if($action_id=M('access')->where(array('access_name'=>ACTION_NAME,'p_id'=>$module_id))->getField('access_id')){
			 	if(!M('role_access')->where(array('role_id'=>$_SESSION['role_id'],'access_id'=>$action_id))->find()){
			 		$this->authError();
			 	}
			 }else{
			 	 $this->authError();
			 }
			 }
		}
		}
		
		
		

	}
	
	
	
	public function  validate($username,$password){
		
		$model=M('user');
	    $data['password']=md5($password);
	    $data['username']=$username;
	    
	    if($info=$model->where($data)->find()){
	    	
	    	$_SESSION['role_id']=$info['role_id'];
	    	
	    	$_SESSION[C('USER_AUTH_KEY')]=$info['user_id'];
	    	
	    	$_SESSION['username']=$info['username'];
	    	
	    	$_SESSION['truename']=$info['truename'];
	    	
	    	return $info;
	    }else{
	    	
	    	return false;
	    }
	    
	 }
	 
	 
	
	 public function authError(){
	 	
	 	 $this->error('你没有执行该操作的权限，更换站好，或者联系管理员');
	 	
	 }

	
}