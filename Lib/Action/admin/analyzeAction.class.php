<?php
class analyzeAction extends baseAction{
      public function bianji(){
      $this->assign('target','ajaxBianji');
      $this->display('layout');
      }
      
      public function yewuyuan(){  	
           $this->assign('target','ajaxYewuyuan');
           $this-> display('layout');
      }
      
      public function ajaxYewuyuan(){
      	   $map['province_id']=$_GET['province_id'];
      	   $map['city_id']=$_GET['city_id'];
      	   if($_GET['keyword']!==''){
      	   	$map['username']=$_GET['keyword'];
      	   }
      	   $map=outBlank($map);
      	   
      	   $map['role_id']=$this->role('业务员');  //
      	   $user_list=M('admin')->where($map)->page($this->p().','.$this->size())->select();
           $count=M('admin')->where($map)->count();
      	    unset($map);
      	    if($time=$this->time()){
           	  $map1['create_time']=$time;
            }
           foreach ($user_list as $key =>$value){   //查询每个业务员  ,添加的用户
                $map1['owner_id']=$value['user_id'];
                $user_publish_count=M('user')->where($map1)->count();
                $user_list[$key]=$value;
                $user_list[$key]['user_publish_count']=$user_publish_count;
           }
           $this->page($count,$this->size(),$map);
           $this->assign('user_list',$user_list);
      	   $this->display();
      }
      
      
      public  function ajaxBianji(){
      	  
           $map['province_id']=$_GET['province_id'];
      	   $map['city_id']=$_GET['city_id'];
      	   if($_GET['keyword']!==''){
      	   	$map['username']=$_GET['keyword'];
      	   }
      	   $map=outBlank($map);
      	   $map['role_id']=$this->role('资料编辑');
      	   $user_list=M('admin')->where($map)->page($this->p().','.$this->size())->select();      	   //查询用户
      	   if($time=$this->time()){          	   //时间
           	    $map1['create_time']=$time;
           }
           foreach ($user_list as $key =>$value){
                $map1['user_id']=$value['user_id'];    
               $article_publish_count=M('article')->where($map1)->count();
                $user_list[$key]['article_publish_count']=$article_publish_count;
           }
           $this->page($count,$this->size(),$map);         //快捷分页
           $this->assign('user_list',$user_list);
      	   $this->display();
      }
      
      


      
      /*
       * 
       * 总统计
       * 
       */
      
      public function area(){
      	$this->assign('target','__URL__/ajaxArea');
      	$this->display('count_layout');
      }
      
      
      public  function ajaxArea(){
            $province_id=$_GET['province_id'];
            $city_id=$_GET['city_id'];
            if($time=$this->time()){
                $map['create_time']=$time;
            }
            
            if($city_id){
            	$cities[]=array(
            	'ID'=>$city_id,
            	'CITYNAME'=>M('cities')->where(array('ID'=>$city_id))->getField('CITYNAME'),
            	);
            }else{
            	 $cities=M('cities')->where(array('PID'=>$province_id))->select();//获取城市列表
            }
            $province_name=M('provinces')->where(array('ID'=>$province_id))->getField('PROVINCENAME');//获取省名
            foreach ($cities as $key=>$value){
                  $map['city_id']=$value['ID'];
                  $count_list[$key]['province_name']=$province_name;
                  $count_list[$key]['city_name']=$value['CITYNAME'];
                 // 
                 $count_list[$key]['pay_count']=M('pay')->where($map)->sum('pay');
                 $count_list[$key]['money_count']=M('money')->where($map)->sum('money');

            }
                 $this->assign('count_list',$count_list);
                 $this->display(); 
      }

}