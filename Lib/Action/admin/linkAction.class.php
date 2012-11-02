<?php
class linkAction extends  baseAction {
	public function index(){
		$this->manage();
		$this->display();
	}
	
	
	public function publish(){
		$this->assign('target','add');
		$this->display();
	}
	
	
	public function add(){
	   $model=D('link');
	   $data=$model->create();
		if($model->add()){
			$this->success('添加成功');
		}else{
			$this->error('添加失败');
		}
	}
	
	
	
	public function del(){
		if(M('link')->where(array('link_id'=>$_GET['link_id']))->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
	
	
	
	public function edit(){
		$link=M('link')->where(array('link_id'=>$_GET['link_id']))->find();
	    $this->assign('category_list',A('admin/category')->getCategory());
		$this->assign('link',$link);
		$this->assign('target','update/link_id/'.$_GET['link_id']);
		$this->display('publish');
	}
	
	
	
	public  function manage(){
		$link_list=M('link')->select();
		$this->assign('link_list',$link_list);
	}
	
	
	public function update(){
	
		$model=D('link');
		if($model->where(array('link_id'=>$_GET['link_id']))->save($model->create())){
			$this->success('修改成功');
		}else{
			$this->error('修改失败');
		}
	}
	
	
	public function pass(){
		import('@.Action.admin.commonAction');
		commonAction::pass('link','link_id');
	}
	

	public function config(){
		$this->assign('link_status_on',A('admin/system')->get('link_status_on'));
		$this->display();
	}
	
	
	public function config_add(){
		$link_status_on=$_POST['link_status_on']=='1'?'1':0;
		$info=A('admin/system')->set('link_status_on',$link_status_on);
		$this->after_edit($info);
	}
}