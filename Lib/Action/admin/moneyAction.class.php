<?php
class moneyAction extends baseAction{
	
	    public function history($map){
     	     $count=D('money')->where($map)->count();
     	     $money_list= D('moneymanageView')->where($map)->page($this->p().','.$this->size())->select();
     	     //tp不支持两个相同的user model
     	     foreach ($money_list as $key=>$value){
     	           if($value['owner_id']!==''){
     	           		$money_list[$key]['ownername']=M('admin')->where(array('user_id'=>$value['owner_id']))->getField('username');
     	           }
     	     }
     	      $this->page($count,$this->size(),$map);
     	      $this->assign('money_list',$money_list);
	    }
	    
	    
        public function add($user_id,$money,$owner_id){
          //向money表中添加记录
        $model=M('user');  
        $score=$this->config('bilv')*$money;
        $model->startTrans();

        if($model->where(array('user_id'=>$user_id))->setInc('score',$score)){
       
           $data=userLocation($user_id);
           $data['money']=$money;
           $data['user_id']=$user_id;
           $data['create_time']=time();
           $data['score']=$score;              //empty 可以判断''，或者无值  。!=='',只能判定空字符
           if(!empty($owner_id)){
           	$data['owner_id']=$owner_id;
           }
           if(M('money')->add($data)){
        		$model->commit();
        		return true;	
           }else{
           	    $model->rollback();
           	    return false;
           }
        }
     }
     
	public function manage(){
		$this->assign('delete_button_url','__URL__/del');
		$this->display();
	}

	public function ajaxManage(){
		$map=D('money')->create($_GET);
		if($time=$this->time()){
		$map['create_time']=$time;
		}
		$this->history(outBlank($map));
		$this->display('history_item');
	}

	
	
	public function del(){
		if(M('money')->where(array('money_id'=>$_POST['id']))->delete()){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
	
}