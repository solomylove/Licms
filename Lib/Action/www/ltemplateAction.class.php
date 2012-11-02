<?php
class ltemplateAction extends Action{
	
	
	public function index(){
		 $request= $_SERVER[REQUEST_URI];
		 
		 
		$rule=array(
		array('/\/list\-(\d+)/i','category'),
	    array('/\/(.+)\/(\d+)/i','show'),
	    array('/\/(.+)\.html/i','_html'),
	    array('/\/(.+)/i','_default'),
		);
		 
	    foreach ($rule as $key=>$value){
	    	if(preg_match($value[0], $request,$match)){
	    		$_GET['category_id']=$match[1];
	    		$this->$value[1]($match);
	    		exit();
	    	}
	    }	
	}
	
	public function findTemplate($category_id,$first,$second){
		
			$top_id=M('category')->where(array('category_id'=>$category_id))->getField('top_id');
		 	$cate_list=M('category')->where(array('top_id'=>$top_id))->select();
		 	foreach ($cate_list as $key=>$value){
		 		$refer[$value['category_id']]=&$cate_list[$key];
		 	}
		 	$tpl;
            while (empty($tpl)){
            	$p_id=$refer[$category_id]['p_id'];
            	if(!empty($refer[$category_id][$first])){
            		$tpl=$refer[$category_id][$first];
            	}else if(!empty($refer[$p_id][$second])){
            		$tpl=$refer[$p_id][$second];
            	}else if((int)$p_id>0){
            		  $category_id=$p_id;
            	}else{
                      break;
            	}
            }
            
            return $tpl;
	}
	
	
	public function category($match){
		$_GET['category_id']=$match[1];
		$tpl=$this->findTemplate($_GET['category_id'],'tpl','c_tpl');
		$this->display($tpl);
	}
	
	
	
	public function show($match){
		$_GET['article_id']=$match[2];
		$info=M('article')->where(array('article_id'=>$_GET['article_id']))->field('category_id,category_id,top_id')->find();
        $_GET=array_merge($_GET,$info);	
		$dir=$match[1];
		$this->display('ltemplate:'.$dir.'/show');
	}
	
	public function _html($match){
		$tpl=$match[1];
		$this->display('ltemplate:'.$tpl);
	}
	
	
		
	/*
	 * 
	 * 友好的se，但是需要从数据读出url_rule
	 * 
	 */
	public function _default($match){
		$info=M('category')->where(array('rewrite'=>trim($match[1],'/')))->field('category_id,top_id,type')->find();
				$_GET=array_merge($_GET,$info);
		if(C('category_type'.'.'.$info['type']=='静态网页')){
		   $this->display('ltemplate:'.trim($match[1]).'/index');
		}else{
			//
		}
		

		

	}
	
	



}
