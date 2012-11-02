<?php
class categoryAction extends  baseAction {
	public function choose(){
		$this->categoryType();
		$data=M('category')->select();
		$this->assign('category_list',$this->getCategory());
		$this->display()
		;
	}
	
	
	public function publish(){
    $this->categoryType();
    $this->assign('target','add');
	$this->display();
	}


	//添加分类
	
	public function add(){
	    $model=D('categoryPublish');
	    $data=$model->create();
	    $data['user_id']=$_SESSION[C('USER_AUTH_KEY')];
	    $father=M('category')->where(array('category_id'=>$data['p_id']))->find();
	    if($category_id=$model->add($this->compare($father, $data))){
	    	$this->success('添加成功');
	    }else{
	    	$this->error('添加失败了，请重试');
	    }
	}
	
	
	public function getCategory($map){
		$data=M('category')->where($map)->select();
		$data=list_to_tree($data,'category_id','p_id','_child',0);
		return $data;
	}
	
	
	public function del(){
		
		$model=M('category');
		$map=array($model->getPk()=>$_GET['category_id']);
		
		$info=M('category')->where($map)->find();
		
		if($info['lock']=='1'){
			
		   $this->error('系统文件不能删除');
		}
		
		
		if($model->where()->delete()){
			$this->success('删除成功');
		}else{
			
			$this->error('删除失败');
		}
	}
	
	/*
	 * 
	 * 
	 * 
	 */
	
	public function getChild($map){
		$cate_id=M('category')->where($map)->getField('category_id');
		$cate_list=M('category')->where(array('p_id'=>$cate_id))->select();
		foreach ($cate_list as $key=>$value){

			$cate_list[$key]['_child']=M('category')->where(array('p_id'=>$value['category_id']))->select();
		}
		
		return $cate_list;
	}
	
	
	/*
	 * 
	 * 获取符合条件下所有子分类
	 * 
	 * 
	 */
	
	public function getAllChild($map){
		  if($category_id=M('category')->where($map)->getField('category_id')){
		  $cates=$this->getCategory();     //           所有分类;
		   $cates=search_list($cates,'category_id',$category_id);  //获得分类下的子分类
		   $cate_child_list='';
		  create_category_string($cates,&$cate_child_list);            //获得子分类的一个string
		  $cate_child_list=trim($cate_child_list,',');        //45,45,67,44,    多处一个符号，需剔除
	      return $cate_child_list.','.$category_id;
		  }; 
	}
	public function edit(){
	      $model=D('category');
	      $category=$model->where(array($model->getPk()=>$_GET['category_id']))->find();
	       $this->categoryType();
	      $this->assign('category',$category);
	      $this->assign('target','update');
	      $this->display('publish');
	}
	
	
	
	/*
	 * 
	 * 读取栏目类型
	 */
	public  function categoryType(){
		$this->assign('category_type',C('category_type'));
	}
	
	public function update(){
		$model=D('categoryPublish');
		if(!$data=$model->create()){
			$this->error($model->getError());
		}
		if(empty($model->open)){
		    $model->open=0;
		}
			if(isset($_POST['open'])) $model->open=0;
		
		$father=M('category')->where(array('category_id'=>$model->p_id))->find();
	    $now=$data;

	    //当前更新后更新子
		if($this->updateOne($father,$now)){
			$childs=M('category')->where(array('p_id'=>$model->category_id))->select();
			$father=M('category')->where(array('category_id'=>$model->category_id))->find();
	    	$this->updateChild($father,$childs);
	    	$this->success('修改成功');
	    }else{
	    	$this->error('修改失败');
	    }
	}
	
	
	/**
	 * 
	 * 
	 * 
	 * Enter description here ...
	 * @info array  需要对比的信息
	 * @$value  array  需要修改的信息
	 */
	
	public function updateOne($father,$now){
	       	   if(M('category')->save($this->compare($father,$now))){
	       	   	   return true;
	       	   }
	}
	
	
	public function compare($father,$now){
			if(!empty($father['rewrite'])){
	       	  	$now['rewrite']=$father['rewrite'].'/'.$now['url_rule'];
	       	  }else{
	       	  	 if(!empty($father['url_rule'])){
	       	  	 	$sep='/';
	       	  	 }
	       	  	 $now['rewrite']=$father['url_rule'].$sep.$now['url_rule'];
	       	  }
	       	   $now['rewrite']=trim($now['rewrite'],'/');
	       	   $now['top_id']=$father['top_id']?$father['top_id']:$now['category_id'];
	       	   $now['p_id']=$father['category_id']?$father['category_id']:0;
	       	   $vlaue['level']=$father['level']+1;
	       	   return $now;
	}
	
	
	
	
	public function updateChild($father,$child){
	       foreach ($child as $value){
               $this->updateOne($father, $value);
               $child=M('category')->where(array('p_id'=>$value['category_id']))->select();
	       	   if($child){
	       	   	 $this->updateChild($value,$child);
	       	  }
	       }
	}
	

}
