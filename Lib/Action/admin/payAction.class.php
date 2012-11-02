<?php
class payAction extends baseAction{
	
	
	/*
	 * 
	 * 
	 * 
	 */
	public function history($map){
		$count=M('pay')->where($map)->count();
    	$pay_list=D('payView')->where($map)->page($this->p().','.$this->size())->select();
    	$this->assign('pay_list',$pay_list);
    	$this->page($count, $this->size(), $map);
	}
	
	
	public function manage(){
		$this->assign('delete_button_url','__URL__/del');
		$this->display();
	}
	
	
	public function del(){
		if(M('pay')->where(array('pay_id'=>$_POST['id']))->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
	
		public function ajaxManage(){
		$map=D('pay')->create($_GET);
		if($time=$this->time()){
		 $map['create_time']=$time;
		}
		$this->history(outBlank($map));
		$this->display('history_item');
	}
	
	public function add($user_id,$pay,$article_id){
		$data=userLocation($user_id);
		$data['create_time']=time();
		$data['article_id']=$article_id;
		$data['user_id']=$user_id;
		$data['pay']=$pay;
		if(M('pay')->add($data)){
			return true;
		}else{
			$this->error(M('pay')->getLastSql());
			false;
		}
	}
}