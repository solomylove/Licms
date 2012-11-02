<?php
class urlAction extends  baseAction{
	
	public function index(){
        $url_list=M('url')->page($this->p().','.$this->size())->select();
        $this->assign('url_list',$url_list);
		$this->display();
	}
	
	
	
   public function publish(){
   	$this->display();
   }
   
   public function add(){
   	$model=D('url');
   	$model->create();
    if($model->add()){
    	$this->success('添加成功');
    }else{
    	$this->error('添加失败');
    }
   	
   }
   
   
   public function del(){
		if(M('url')->where(array('id'=>$_GET['id']))->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
   	
   }
   
   
   public function status(){
 	   import('@.Action.admin.commonAction');
	   commonAction::pass('url','id');
   	
   }
	
}