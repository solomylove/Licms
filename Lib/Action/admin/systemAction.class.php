<?php
class systemAction extends Action {

	
	 public function read(){
      	$this->commonSelect();
      	$this->display();
      }
      public function  money(){
      	$this->commonSelect();
      	$this->display();
      }
	
      
      
      public function commonSelect(){
      	
      	$data=M('system')->select();
        foreach ($data as $key=>$value){
        	
        	$config[$value['sname']]=$value['svalue'];
        	
        }
      	
      	$this->assign('config',$config);
      	
      }
      
      
      public function add_read(){
      	
       	$model=D('system');
      	$data=$model->setProperty('fields', array('page_size','free_page','money_default','score_pay','bilv','user_search_count','site_title','article_status_on','site_keywords','site_description'))->create();
        $data['article_status_on']=isset($data['article_status_on'])?1:0;
        foreach ($data as $key=>$value){
        	$this->set($key,$value);
        }
        $this->success('修改成功');
        }
       
      
         public function add_money(){
      	  $this->commonAdd();
          }
      
      
      public function commonAdd(){
      	$model=D('system');
      	$data=$model->setProperty('fields', array('page_size','free_page','money_default','score_pay','bilv','user_search_count','site_title','article_status_on'))->create();
      	foreach ($data as $name=>$value){
      	    if($model->where(array('sname'=>$name))->find()){
      	    	M('system')->where(array('sname'=>$name))->setField('svalue',$value);  //用$model  会出现错误，应该是D模型的字段过滤造成的
      	    }
      	}
      	         	    $this->success('修改成功');
      }

      public function get($sname){
            	return M('system')->where(array('sname'=>$sname))->getField('svalue');	
      }
      
      
      public function set($sname,$svalue){
         if($id=M('system')->where(array('sname'=>$sname))->setField('svalue',$svalue)){
         	return $id;
         }
      }
      
      
      public function getAll($data){
      	foreach ($data as $key=>$value){
      		$return[$value]=$this->get($value);
      	}
      	return $return;
      	
      }
      
      
      public function reg($word){
      	$map=array('sname'=>$word);
      	if(!M('system')->where($map)->find()){
      		M('system')->add(array('sname'=>$word));
      	}
      	
      }
}