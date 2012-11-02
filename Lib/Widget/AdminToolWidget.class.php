<?php
class AdminToolWidget extends Widget{
	
	public function render($data){
		$method=$data['_tool'];
	   return $data=$this->$method($data);
	 // return 	$this->renderFile($$data['tool'],$data);	
	}
	
	public function chooseCategory($data){
		 $clist=M('category')->select();
		 $clist=list_to_tree($clist,'category_id','p_id','_child',$data['_root_id']);
		 $data['category_list']=$clist;
		 return $this->renderFile($data['_tool'],$data);
	}
	
	
}