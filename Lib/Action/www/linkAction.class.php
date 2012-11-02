<?php
class linkAction extends  wbaseAction {
	
	
	
	
	
	
	/*
	 * 
	 *底层条件，例如，所有查询需要经过审核
	 */
	
	
	public function baseMap($map){
	      $map['status']=myconfig('link_status_on');
	      return $map;
	}
	
	
	public function _empty($name){
	    $cate_title=A('www/wCategory')->getInfoByRewrite(trim($_SERVER['REQUEST_URI'],'/'));
	    $_GET['category_id']=$cate_title['category_id'];
	    $child=A('www/wCategory')->getList();
	    $this->assign($child,$child);
	    $this->assign('cate',$cate_title);
		$this->display('category');
	}
	
	
	
	public function getList($data){
		if(!empty($data['category_id']))  $map['category_id']=$data['category_id'];
		if(A('admin/system')->get('link_status_on')=='1'){
			$map['status']=1;
		}
		if($data['limit']) $limit=$data['limit'];
		return M('link')->limit($limit)->where($map)->select();
	}
	
	/*
	 * 
	 * 
	 * 查询儿子
	 */
	
	public function getListSon($data){
	  	if(!empty($data['category_id']))  $map['category_id']=$data['category_id'];
		if(A('admin/system')->get('link_status_on')=='1'){
			$map['status']=1;
		}
		if($data['limit']) $limit=$data['limit'];
		return M('link')->limit($limit)->where($this->baseMap($map))->select();
	}
	
	
	
	
	
	
	
	
	/*
	 * 
	 * 查询
	 */
	
	
	public function getListSonSelf(){
	
	
	}
	
	
	public function publish(){
		$this->display();
	}
	
	
	public function add(){
		$model=D('link');
		$model->create();
		$model->link_title=fi($model->link_title)->need('请输入网站名')->htmlspecialchars()->end();
		$model->link_href=fi($model->link_href)->need('请输入链接')->end();
		if($model->add()){
			$this->success('链接申请成功，审核后予以显示');
		}else{
			$this->error('操作失败');
		}
	}
	
	
	public function index(){
		$link_category=M('category')->where(array('p_id'=>113))->select();
		foreach ($link_category as $key=>$value){
		  $link_category[$key]['_child']=$this->getList(array('category_id'=>$value['category_id']));
		}
		$this->assign('ll_list',$link_category);
		$this->display();
	}
	
}