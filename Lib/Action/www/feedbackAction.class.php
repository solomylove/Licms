<?php
class feedbackAction extends  wbaseAction{
	
	public function  index(){
		
		if(A('admin/system')->get('feedback_status_on')) $map['status']=1;
		$feedback_list=M('feedback')->page($this->p().',10')->order('create_time desc')->where($map)->select();
		foreach ($feedback_list as $key=>$value){
			$feedback_list[$key]['_reply']=M('feedback_reply')->where(array('feedback_id'=>$value['feedback_id']))->find();
		}
		$count=M('feedback')->where($map)->count();
		$this->page($count, 10);		
	    $this->assign('feedback_list',$feedback_list);
		$this->display();
	}
	
	
	
	public function add(){
		$model=D('feedback');
	    $model->create();
	    $model->username=fi($model->username)->need('昵称不能为空')->htmlspecialchars()->end();
	    $model->title=fi($model->title)->need('标题不能为空')->htmlspecialchars()->end();
	    $model->content=fi($model->content)->need('内容不能为空')->htmlspecialchars()->end();
		$model->create_time=time();
		if($model->add()){
        	$this->success('你的问题已经提交,审核后会显示出来');
        }else{
        	$this->error('添加失败');
        }	
	}
	
}