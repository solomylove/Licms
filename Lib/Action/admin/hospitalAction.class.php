<?php
class hospitalAction extends baseAction {

	
	 public function __construct(){
	 	parent::__construct();//
	 }

     public function publish(){
     $this->assign('target','add');
     $this->display();
     }
     
     
     public function add(){
     
     $model=D('hospital');
     
     if(!$data=$model->create()){
     	$this->error($model->getError());
     };
     $data['create_time']=time();   
     if($info=$model->add($data)){
          $this->success('添加成功');
     }else{
     	  $this->error('添加失败，请重试');
     }
     }


     
     public function manage(){
         $this->assign('delete_button_url',"__APP__/hospital/del");
     	 $this->display();
     }
     
     
    public function del(){
    
    $model=D('hospital');
    
    if($model->where(array($model->getPk()=>$_POST['id']))->delete()){
         $this->success('删除成功');
    }else{
    	
          $this->error('删除失败');
    }
    }
    
    
    public function ajaxManageContent(){
    	//初始化条件
    	if(!empty($_GET['keyword'])){
    		$map['hospital_title']=array('like','%'.$_GET['keyword'].'%');
    	}
    	
    	if($_GET['province_id']!==''){
    		$map['province_id']=$_GET['province_id'];
    	}
    	if($_GET['city_id']!==''){
    		$map['city_id']=$_GET['city_id'];
    	}
       $p=$this->p();
       $size=$this->size();
       $map=outBlank($map);
       //读值
      $hospital_list= D('hospital')->where($map)->page($p.','.$size)->select();
      $count=M('hospital')->where($map)->count(); 
      $this->assign('hospital_list',$hospital_list);	
         
      //分页 	 
     import("ORG.Util.Page");
     $Page= new Page($count,$size);
      foreach($map as $key=>$val) {
          $Page->parameter   .=   "$key=".urlencode($val)."&";
      }
     $page_show  = $Page->show();
     $this->assign('page_show',$page_show);
    //
      $this->display();
    }
    
    
    
    public  function edit(){

    	
    $hospital=M('hospital')->where(array('hospital_id'=>$_GET['hospital_id']))->find();
    $this->assign('hospital',$hospital);
    $this->assign('province_id',$hospital['province_id']);
    $this->assign('city_id',$hospital['city_id']);
    $this->assign('target','update/hospital_id/'.$hospital['hospital_id']);
    $this->display('publish');
    
    }
    
    
    public function update(){
    
            $model=D('hospital');
     
     $data=$model->create();
     
     
     if($info=$model->where(array('hospital_id'=>$_GET['hospital_id']))->save($data)){
          
          $this->success('修改成功');
     }else{
     	
     	  $this->error('修改，请重试');
     	
     }
     
    
    
    }
    

    
}