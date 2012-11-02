<?php
class feedbackAction extends  baseAction{
	
	
	
	public function index(){
		$feed_list=M('feedback')->select();
		$this->assign('feed_list',$feed_list);
		$this->display();
	}
	
	
	public function reply(){
		$feed=M('feedback')->where(array('feedback_id'=>$_GET['feedback_id']))->find();
		$reply=M('feedback_reply')->where(array('feedback_id'=>$_GET['feedback_id']))->select();
		$this->assign('reply',$reply);
		$this->assign('f',$feed);
		$this->display();
	}
	
	
	public function reply_add(){
		$model=D('feedback_reply');
		$model->create();
		$model->user_id=$_SESSION[C('USER_AUTH_KEY')];
		$model->create_time=time();
	    $model->feedback_id=$_GET['feedback_id'];
	    $model->p_id=$_GET['p_id']?$_GET['p_id']:0;
	    $model->content=fi($model->content)->need('回复内容不能 为空')->end();
		if($model->add()){
			$this->success('操作成功');
		}else{
			$this->error('操作失败');
		}
	}
	
	
	public function reply_del(){
		if(M('feedback_reply')->where(array('reply_id'=>$_GET['reply_id']))->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
	
	
	public function status(){
		import('@.Action.admin.commonAction');
		commonAction::pass('feedback','feedback_id');
	}
	
	public function del(){
		
		$map['feedback_id']=$_GET['feedback_id'];
		if(M('feedback')->where($map)->delete() ){
			 M('feedback_reply')->where($map)->delete();
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
		
	}
	
	
	public function config(){
		$this->assign('feedback_status_on',A('admin/system')->get('feedback_status_on'));
		$this->display();
	}
	
	public function config_add(){
		$feedback_status_on=$_POST['feedback_status_on']=='1'?'1':0;
		dump($feedback_status_on);
		if(A('admin/system')->set('feedback_status_on',$feedback_status_on)){
	       $this->success('修改成功');
		}else{
			$this->error('修改失败');
		}
	}
}