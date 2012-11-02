<?php
class commentAction extends  Action {
	
	public function add(){
		$model=D('comment');
		$model->create();
		$model->create_time=time();
		$model->ip=get_client_ip();
		$model->comment=fi($model->comment)->need('内容 必须')->htmlspecialchars()->sensitive()->end();
		if($model->add()){
			if(is_int($model->p_id) && $model->p_id!==''&& $model->p_id!=='0') 			$model->where(array('comment_id'=>$model->p_id))->setInc('reply',1);
			$this->success('评论成功');
		}else{
			$this->error('评论失败');
		}
	}
	
	public function getList($data){
		if(myconfig('comment_status_on')) $map['status']=1;
		$map['p_id']=0;
		$map['belong_id']=$data['belong_id'];
		return M('comment')->where($map)->limit($data['limit'])->order($data['order'])->select();
	}
		
	
	public function vote(){
		switch ($_GET['votefor']){
			case 'agree':
				$field='agree';	
				break;
			case 'disagree':
				$field='disagree';
				break;
			default:
				$this->error('目标缺失');		
		}
		
	
		   if(M('comment')->where(array('comment_id'=>$_GET['comment_id']))->setInc($field,1)){
		   	$this->success('操作成功');
		   }else{
		   	echo M('comment')->getLastSql();
		   	$this->error('操作失败');
		   }

		
	}
}