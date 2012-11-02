<?php
class levelAction extends  baseAction{
	
	
	
	
	public function manage(){
		$level_list=M('level')->select();
		$this->assign('level_list',$level_list);
		$this->display();
	}
	
    public function del(){
    	if(M('level')->where(array('level_id'=>$_POST['id']))->delete()){	
    		$this->success('删除成功');
    	}else{
    		$this->error('删除失败');
    	}
    }
	
    
    public function update(){
    	
    	$model=D('level');
    	$data=$model->create();
    	if($model->where(array('level_id'=>$_GET['level_id']))->save()){
    		$this->success('修改成功');
    	}else{
    		$this->error('修改失败');
    	}
    }
	
    
    public function add(){
     
    	$model=D('level');
    	$data=$model->create();
    	if($model->add()){
    		$this->success('添加成功');
    	}else{
    		$this->error('添加失败');
    	}
    	
    
    
    }
	
}