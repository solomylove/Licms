<?php

/*
 * 
 * 需要注意del操作，由于开始没有设计好，所以惯性采用post操作；
 * 
 * 
 */

import('@.Action.admin.baseAction');
baseAction::$auth='not';
class wbaseAction extends Action {
	public function __construct(){
		parent::__construct();
	  	//$this->auth();
	}
	
	public function _empty($name){
		if(method_exists($this,'_notExist')){
			$this->_notExist();
		}
		A('www/ltemplate')->index();
	}
	
	
	
	
	public function role($title){
	 return 	M('role')->where(array('role_title'=>$role_name))->getField('role_id');
	}
	
	public function config($config_name){
	      
        return myconfig($config_name);
	}
	
	
	public function p(){
	     $p=!empty($_GET['p'])?$_GET['p']:1;
         return $p;
	 
	}
	
    public function size(){
    	 $size=!empty($_GET['size'])?$_GET['size']:C('SITE_MANAGE_PAGE_SIZE');
    	 return $size;
    }
    
    
    public function page($count,$size,$map){
    	
    	      //分页    	
       import("ORG.Util.Page");
       $Page= new Page($count,$size);
       foreach($map as $key=>$val) {
          $Page->parameter   .=   "$key=".urlencode($val)."&";
        }
      $page_show  = $Page->show();
      $this->assign('page_show',$page_show);
    }
	
    
/*   在原ajaxReturn方法基础上， 重新是实现*/
   public function ajaxSend($result,$type) {  

        //扩展ajax返回数据, 在Action中定义function ajaxAssign(&$result){} 方法 扩展ajax返回数据。
        if(method_exists($this,"ajaxAssign")) 
            $this->ajaxAssign($result);
        if(empty($type)) $type  =   C('DEFAULT_AJAX_RETURN');
        if(strtoupper($type)=='JSON') {
            // 返回JSON数据格式到客户端 包含状态信息
            header("Content-Type:text/html; charset=utf-8");
            exit(json_encode($result));
        }elseif(strtoupper($type)=='XML'){
            // 返回xml格式数据
            header("Content-Type:text/xml; charset=utf-8");
            exit(xml_encode($result));
        }elseif(strtoupper($type)=='EVAL'){
            // 返回可执行的js脚本
            header("Content-Type:text/html; charset=utf-8");
            exit($data);
        }else{
            // TODO 增加其它格式
        }
    }
      public function time(){
      	 $time1=strtotime($_GET['date1']);
      	 $time2=strtotime($_GET['date2']);

      	 if($time1){
          	   $time[]=array('gt',$time1);
         }
         if($time2){
          	  $time[]=array('lt',$time2);
          }
          return $time;
      }
      
      public function auth(){
      	if(!A('www/public')->isLogin()){
			if(!array_search(MODULE_NAME,C(NOT_AUTH_MODULE))){
				header("Content-type: text/html; charset=utf-8"); 
				$this->redirect(C('USER_AUTH_GATEWAY'),'',1,'请先登录。。。');
			}
		}
	}
	
	
	/*
	 * 
	 * 更新用户地理信息
	 * 
	 */
	
	public function updateLocation(){
		    $map=userLocation();
		    $_SESSION['province_id']=$map['province_id'];
			$_SESSION['city_id']=$map['city_id'];
		
	}
}