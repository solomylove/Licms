<?php
class commentAction extends  baseAction{
	
	public function index(){
		$comment_list=M('comment')->where($map)->page($this->p().','.$this->size())->select();
		$count=M('comment')->where($map)->count();
		$page_show=$this->page($count,$this->size(), $map);
		$this->assign('comment_list',$comment_list);
		$this->display();
	}
	
	
	public function config(){
		$config=A('admin/system')->getAll(array('comment_status_on','comment_sensitive'));
		$this->assign('config',$config);
		$this->display();
	}
	
	
	public function pass(){
		import('@.Action.admin.commonAction');
		commonAction::pass('comment','comment_id');
	}
	
	
	public function del(){
		$info=M('comment')->where(array('comment_id'=>$_POST['id']))->delete();
		$this->after_del($info);

	}
	
	
    public function config_add(){
    	$info=A('admin/system')->set('comment_status_on',checkbox_value_create($_POST['comment_status_on']));
    	$info=A('admin/system')->set('comment_sensitive',checkbox_value_create($_POST['comment_sensitive']));
    	$this->after_edit($info && $info);
    }
	
}