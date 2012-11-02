<?php
class wCategoryAction extends   wbaseAction{
	
		
	public function getList($data){
	if($data['limit'])  $limit=$data['limit']; 
	$category_list=M('category')->where($map)->order($order)->limit($limit)->select();
    return create_category_url($category_list);
   }
   
   
   
   /*
    * 
    * Child 特指一个表中的子类
    */
   
   public function getListChildren(){
   	if($data['limit'])  $limit=$data['limit']; 
	$category_list=M('category')->where($map)->order($order)->limit($limit)->select();
   
   }
   
   
   
   /*
    * 
    * son 特指 类中的元素
    * 
    *  
    */
   public function getListSon($data){
   	
   	
    if($data['limit'])  $limit=$data['limit']; 
	 return $category_list=M('category')->where($map)->order($order)->limit($limit)->select();
   }

   
   
   /*
    * 
    * 通过rewrite获取栏目信息
    *  
    */
		
    public function getInfoByRewrite($rewrite){
         return  M('category')->where(array('rewrite'=>array('like',"{$rewrite}")))->find();
    }
    
    
    
   /**
    * 
    * 通过id获取栏目信息 
    */
    
    public function getInfoById($id){
     return  M('category')->where(array('category_id'=>$_GET['category_id']))->find();
    }
	
}