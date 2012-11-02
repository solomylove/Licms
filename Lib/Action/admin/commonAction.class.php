<?php
class commonAction  extends  Action{
	
	
      public function pass($table,$field){
	  $model=D($table);
      $status=$model->where(array($model->getPk()=>$_GET[$field]))->getField('status');
	  $status=$status=='1'?'0':'1';
	  if($model->where(array($model->getPk()=>$_GET[$field]))->setField('status',$status)){
	  	$this->success('操作成功');
	  }
	}
	
	

	
}
 