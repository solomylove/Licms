<?php
class  noticeAction extends  baseAction{
	
	public function index(){
	 $notice_list=M('notice')->page($this->p().',25')->order('create_time desc')->select();
	 $this->assign('notice_list',$notice_list);
	 $this->display();
	}
	
	
	public function publish(){
		
		$this->display();
	}
	
	
	public  function add(){
		
		
	$model=D('notice');
	$model->create();
	$model->create_time=time();
	if($model->add()){
		$this->success('发布成功');
	}else{
		$this->error('发布失败');
	}
	}
	
	
	public function del(){
	  if(M('notice')->where(array('id'=>$_GET['id']))->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
}