<?php
class userAction extends baseAction {

public function __construct(){
	
	parent::__construct();
}
	
public function publish(){
	$this->assign('role',M('role')->select());
	$this->display();
}

public function manage(){
	    $level_list=M('level')->select();
	    $this->assign('level_list',$level_list);
	    $this->assign('delete_button_url','__GROUP__/user/del');
	    $this->display();  
}


public function ajaxManageContent(){
    	$map=D('user')->create($_GET);
    	$map=outBlank($map);
    	if(!empty($_GET['keyword'])){
    		$map['username']=array('like','%'.$_GET['keyword'].'%');
    	}

    	if(!empty($_GET['level_id'])){       //如果option value为空 ，默认提交option值;
           $min_score=M('level')->where(array('level_id'=>$_GET['level_id']))->getField('score');
           $map['score'][0]=array('EGT',$min_score);
           if($max_score=M('level')->where(array('score'=>array('gt',$min_score)))->order('score asc')->getField('score')){
           	$map['score'][1]=array('LT',$max_score);
           } 
    	}
    	if($time=$this->time()){
    		$map['create_time']=$time;
    	}
       $p=$this->p();
       $size=$this->size();
       $user_list= M('user')->where($map)->page("$p,$size")->select();
       $count=M('user')->where($map)->count();
       $this->assign('user_list',$user_list);	
       $this->page($count, $size, $map);
     //
      $this->display();
    }
    
    
    //用户充值
    
    public function money(){
        $money=$_POST['money'];
        $user_id=$_POST['user_id'];
        $model=D('user');
        if($money==''){
            $this->error('你没有输入金额');
        }
        if($user_id==''){
        	$this->error('用户名不能为空');
        }	
        //向money表中添加记录
         if( A('admin/money')->add($user_id,$money,$_SESSION[C('USER_AUTH_KEY')])){
      	   $this->success('充值成功');
          }else{
          	 $this->error('充值失败，请重试');
          }

        
    }
    
    public function del(){
    
      
    	if(M('user')->where(array('user_id'=>$_POST['id']))->delete()){
    	
    		$this->success('删除成功');
    	
    	}else{
    	
    	
    	    $this->error('删除失败');
    	 
    	 }
    
    
    
    }
    
    
    public function profile(){
    
    	
    	$user=M('user')->where(array('user_id'=>$_GET['user_id']))->find();
    	
    	$user['role_title']=M('role')->where(array('role_id'=>$user['role_id']))->getField('role_title');
    	$this->assign('role',$this->roleSelect($_SESSION['role_id']));    	
    	$this->assign('user',$user);
    	$this->display();
    }
    
    
    
    /*
     * 
     * 重置密码
     */
    
    public function repassword(){
    	
    	$password=$_POST['password'];
    	$repassword=$_POST['repassword'];
    	if(empty($password)){
    		$this->error('密码不能为空');
    	}
    	if($password!==$repassword){
    		$this->error('两次输入不一样');
    	}
    	if(M('user')->where(array('user_id'=>$_POST['user_id']))->save(array('password'=>md5($password)))){
    		$this->success('修改 成功');
    	}else{
    		$this->error('修改失败');
    	}
    	
    }
    
    
     function roleSelect($id){
        
    	
    	  $role_list=M('role')->select();
    	  
    	  foreach ($role_list as $key=>$value){
    	  	
    	  	$render[$value['role_id']]=&$role_list[$key];
    	  }
    	  
          if($this->role('admin')==$id){
         	      $data=$role_list;
          }else{
          	
          	     $data=array($render[$this->role('dayindian')]);
          }
                  return $data;
    }
    
   
    
    /*
     * 
     * 添加角色安全,业务员只能添加打印店 ,超级管理员都可以干
     * 
     */
    
    
     protected  function roleAdd($owner_role_id,$role_id){
   	                    
               if($this->role('admin')==$id){
               	
               	   return $role_id;
               }else{
               	    
               	   return $this->role('dayindian');
               	    
               }
   	
      }
      

    
     /*
      * 
      * 更新资料单要防止密码被更新
      * 
      */ 
      
    
     public function updateProfile(){
           
     	
     	$map['user_id']=$_POST['user_id'];
     	
     	if(D('profile')->where($map)->save(D('profile')->create())){
     		
     		$this->success('修改成功');
     	}else{
     		$this->error('修改失败');
     		
     	}
     	
     	
     }
     
     
     /*
      * 
      * 用户充值记录
      * 
      */
     
     public function userMoneyHistory(){
        $this->assign('delete_button_url','__GROUP__/money/del');
     	$this->display();
     }

     
     public function ajaxUserMoneyHistory(){
     	     $map['user_id']=$_GET['user_id'];
     	     if($time=$this->time()){
               $map['create_time']=$time;
     	     }
     	      A('admin/money')->history($map);   //获取历史记录
              $this->display('money:history_item');
     }
    public function userPayHistory(){
    	$this->assign('delete_button_url','__GROUP__/pay/del');
    	$this->assign('ajax_auto_load_url','__APP__/user/ajaxUserPayHistory');
    	$this->display();
    	
    }
    
    
    public function ajaxUserPayHistory(){
    	if($time=$this->time()){
    		$map['create_time']=$time;
    	}
    	 $map['user_id']=$_GET['user_id'];
    	 A('admin/pay')->history($map);
    	 $this->display('pay:history_item');
    }
    
    
    public function updateScore(){
    	
    	$score=$_POST['score'];
    	$user_id=$_POST['user_id'];
    	if(M('user')->where(array('user_id'=>$user_id))->setField('score',$score)){
    		$this->success('修改成功');
    	}else{
    		$this->error('修改失败');
    	}
    }
    
    
    public function updateScorePay(){
    	
    	$score_pay=$_POST['score_pay'];
    	$user_id=$_POST['user_id'];
        	if(M('user')->where(array('user_id'=>$user_id))->setField('score_pay',$score_pay)){
    		$this->success('修改成功');
    	}else{
    		$this->error('修改失败');
    	}
    }
}