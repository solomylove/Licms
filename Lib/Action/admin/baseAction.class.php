<?php

class baseAction extends Action {
	static $auth;
	public function __construct($auth){
		parent::__construct();		
		if(self::$auth!=='not'){
		A('admin/auth')->auth();
		}
		
		
		$this->menu_info();
	}
	
	
	public function menu_info(){
		if(!empty($_GET['menu_id'])){
			$menu_id=$_GET['menu_id'];
			do{
				$info=M('menu')->where(array('menu_id'=>$menu_id))->find();
			    $submenu_title[]=$info;
			    $menu_id=$info['p_id'];
			}while($menu_id!=='' && $menu_id!=='0');
		}
		$menu_child=M('menu')->where(array('p_id'=>$_GET['menu_id']))->select();
		$this->assign('menu_child',$menu_child);
		$this->assign('submenu_title',array_reverse($submenu_title));
	}
	
	
	public function role($title){
	 return 	M('role')->where(array('role_title'=>$title))->getField('role_id');
	}
	
	
	public function config($config_name){
		if(!C('CONFIG'.'.'.$config_name)){
		$configs=M('system')->select();
		$config=array();
	    foreach ($configs as $key=>$value){
	      $config[$value['sname']]=$value['svalue'];
	   }
		    C('CONFIG',$config);
		}
	          return C('CONFIG.'.$config_name);
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
          $year1=$_GET['year1'];
          $year2=$_GET['year2'];
          $day1=$_GET['day1'];
          $day2=$_GET['day2'];
          $month1=$_GET['month1'];
          $month2=$_GET['month2'];

          $time1=strtotime($year1.'/'.$month1.'/'.$day1);
          
          $time2=strtotime($year2.'/'.$month2.'/'.$day2);
          
          if($time1){
          	   $time[]=array('gt',$time1);
          }
          
          if($time2){
          	
          	  $time[]=array('lt',$time2);
          }
          
          return $time;     
      }
     
    
       	        
        protected  function after_edit($info){
        if($info){
	       $this->success('修改成功');
		}else{
			$this->error('修改失败');
		}
	}
	
	
	  protected function after_del($info){
	        if($info){
	       $this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	  }
	  protected function after_add($info){
	  	
	        if($info){
	       $this->success('添加成功');
		}else{
			$this->error('添加失败,请重试');
		}
	  }
}