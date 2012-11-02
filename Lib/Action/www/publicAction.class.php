<?php
class publicAction extends  Action {
	
	
 public function login(){
 	if($this->isLogin()){
 		$this->redirect("/home/index");
 	}
  	  $this->display();
  }
  
  
 public  function reg(){
	if($this->isLogin()){
		$this->redirect('USER_AUTH_GATEWAY');
	}
 	$location=getLocationId();
 	$this->assign('province_id',$location['province_id']);
 	$this->assign('city_id',$location['city_id']);
    $this->display();
 } 
 
	public function verify(){
		
		import('ORG.Util.Image');
        Image::buildImageVerify();
	}
	
	public function checklogin(){
	$model=M('user'); 	
	if($this->isLogin()){   //已经登陆
   		  $this->success('已经 登陆');
  	}
  	$user=$_POST['username'];
  	$password=$_POST['password'];
    if(empty($user)){
    	$this->error('请输入用户名');
    }
    if(empty($password)){
    	$this->error('请输入密码');
    }
  	$map=array(
  	'username'=>$_POST['username'],
  	'password'=>md5($_POST['password']),
  	);
  	if($info=$model->where($map)->find()){
        $this->common($info);
  		$this->sessionInit($info);   //session初始化
  	  	if($_POST['remeber']=='1'){
  		$this->ajaxReturn(array('password'=>$map['password'],'username'=>$map['username']),'登陆成功','1');
  		}else{
  			$this->success('登陆成功');
  		}
  		
  	}else{
  		 $this->error('密码错误');
  	}
	}
	
	
public function checkreg(){
	$model=D('reg');
	if(!$data=$model->create()){
		$this->error($model->getError());
	}
	if($model->where(array('user_id'=>$model->user_id))->find()){
		$this->error('用户名存在');
	}
	$model->password=md5($model->password);
	$model->score=M('system')->where(array('sname'=>'score_default'))->getField('svalue');
    $model->score_pay=M('system')->where(array('sname'=>'score_pay'))->getField('svalue');
	if($_POST['recommended']){                              //更新推荐人
         if($id=M('admin')->where(array('username'=>$_POST['recommended']))->find()){
         	$model->owner_id=$id;
		}
		}          
	if($info=$model->add()){
		$data['user_id']=$info;
		$this->common($info);
		$this->sessionInit($data);
		$this->success('注册成功');
	}else{
		$this->error('注册失败');
	}
}


/*
 * 
 * 
 * 登陆注册的session 初始化
 */

public function sessionInit($info){
	
	$_SESSION['user_id']=$info['user_id'];
	$_SESSION['username']=$info['username'];
	if($info['province_id']=='' && $info['city_id']==''){
		$location=getLocationId();
		$province_id=$location['province_id'];
		$city_id=$location['city_id'];
	}else{
		$province_id=$info['province_id'];
		$city_id=$info['city_id'];
	}
	
	$this->updateChangeSession($info['user_id']);
	$_SESSION['province_id']=$province_id;
	$_SESSION['city_id']=$city_id;
	$_SESSION['score']=$info['score'];
}


      public  function logout(){
         $_SESSION=array();
         session_destroy();
         unset($_SESSION);
         setcookie('password','',-1,'/');
         $this->redirect('public/login');
      }
      
      
      public function checkUsername(){
      $username=$_POST['username'];
      if($username==''){
      	 $info='用户名不能为空';
      }elseif(!M('user')->where(array('username'=>$username))->find()){
      	 $info=true;
      }else{
      	$info='抱歉，该用户名已被注册';
      }
      

    header("Content-Type:text/html; charset=utf-8");
        echo  json_encode($info);
      }
      
      
	public  function isLogin(){
		if(empty($_SESSION['user_id'])){
            if(!empty($_COOKIE['username'])){
            	$username=$_COOKIE['username'];				
            	$password=$_COOKIE['password'];
	    	if($info=M('user')->where(array('username'=>$username,'password'=>$password))->find()){
	    		$this->sessionInit($info);
	                return true;
            }
	    }
		}else{
			   return true;
		}
	}
      
   public function common($info){
      	$model=M('user');
   	  	$model->where(array('user_id'=>$info))->save(array('last_login_time'=>time()));    //更新最新登陆时间
  		$model->where(array('user_id'=>$info))->setInc('login_count',1);  //更新登陆次数
   	
   }
   
   
   
   /*
    * 
    * 更新可变的session
    * 
    */
   
   public function updateChangeSession($user_id){
   	
   	$score=M('user')->where(array('user_id'=>$user_id))->getField('score');
   	if(!$level_info= M('level')->where(array('score'=>array('EGT',$info['score'])))->order('score asc')->limit(1)->select()){
   		$level_info= M('level')->where(array('score'=>array('ELT',$info['score'])))->order('score desc')->limit(1)->select();
   	}
   	$_SESSION['level_title']=$level_info[0]['level_title'];
   	$_SESSION['level_id']=$level_info[0]['level_id'];
   	$_SESSION['score']=$score;
   	
   }
   
   
   public function test(){
   	
   		$level_info= M('level')->where(array('score'=>array('EGT',567)))->order('score asc')->select();
        
   		
   		print_r($level_info);   	

   }
}