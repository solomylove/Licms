<?php
class TagLibLi extends  TagLib{
	
	
	protected $tags   =  array(

  // 定义标签
'cl'=>array('attr'=>'c_id,c_title','close'=>0), 
'a'=>array('attr'=>'c_id,a_id,c_title','close'=>0), 
'cache'=>array('close'=>1), 
);


        /*
         * 
         * 获取子分类
         * 
         */
	    public function _cl($attr,$content)   {
        $tag    = $this->parseXmlAttr($attr,'input');
        $name   =   $tag['name'];
        $id   =     $tag['id'];
        $type   =   $tag['type'];
        $value   =   $this->autoBuildVar($tag['value']);
        return '';
	    }
	    /*
	     * 
	     * 获取分类下的文章类表
	     * 
	     */
	    
	    
	    public function _al(){
	    	
	    }
	    
	    
	    /*
	     * 
	     * 调用文章
	     * 
	     */
	    public function _a($attr,$content){
	     $tag    = $this->parseXmlAttr($attr,'a');
	     $a_id=$tag['a_id'];
	     $c_id=$tag['c_id'];
	     $c_title=$tag['c_title'];
	     if(!empty($a_id)){
	     	$info=M('article')->where(array('article_id'=>$a_id))->find();
	     }else{
	     	if(empty($c_id)){
	     	    $c_id=M('category')->where(array('category_title'=>$c_title))->getField('category_id');
	     	}
	     	  $info=M('article')->where(array('category_id'=>$c_id))->limit(1)->find();	   
	     }
	           return $info['content'];
	    	    }
	    	    
	    	    
	   public function  _cache($attr,$content){
	   	$template=new ThinkTemplate();
	   	
	   	$tpl_content=$template->compiler($content);
        ob_start();
        eval('?>' . $tpl_content . '<?');  
        $out1 = ob_get_contents();
        ob_end_clean();
        return $out1;
	   }
	   
}