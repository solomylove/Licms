<?php
class ShowAreaWidget extends  Widget{

public function render($data){
	   if($data[0]=='provinces'){
	      $data['provinces_list']=M('provinces')->select();
	      return $this->renderFile('ShowProvinces',$data);
	   }else{
	   $data['provinces']=M('provinces')->select();
	   $data['cities']=M('cities')->select();
       return $this->renderFile('ShowArea',$data);
	   }

}



}