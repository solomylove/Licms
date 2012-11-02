<?php
class sensitiveAction extends baseAction {
	
	public function index(){	
	   $word_list=M('sensitive')->where($map)->page($this->p().','.$this->size())->select();
		$count=M('sensitive')->where($map)->count();
		$page_show=$this->page($count,$this->size(), $map);
		$this->assign('word_list',$word_list);
		$this->display();
	}
	
	public function del(){
		$info=M('sensitive')->where(array('id'=>$_POST['id']))->delete();
	    $this->after_del($info);
	}
	
	
	public function publish(){
		$this->display();
	}
	
	public function add(){
		$model=D('sensitive');
		$model->create();
		$info=$model->add();
		$this->after_add($info);
	}
}