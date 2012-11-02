<?php
class rbacAction extends baseAction {
	
	
	public function role(){
		
		$map['role_title']=array('neq','前台用户');
		$role_list=M('role')->where($map)->select();
		$this->assign('role_list',$role_list);
		$this->display();
	}


	public function role_access(){
		$access_list=M('access')->select();
		
		foreach ($access_list as $key=>$value ){
			
			$refer[$value['access_id']]=&$access_list[$key];
		}
	   $role_a_list= M('role_access')->where(array('role_id'=>$this->_get('role_id')))->select();
	   foreach ($role_a_list as $key=>$value){
	   	
	   	     $refer[$value['access_id']]['checked']=1;
	   }
	   $access_list=list_to_tree($access_list,'access_id','p_id','_child',0);
	   $this->assign('access_list',$access_list);
		$this->display();
	}
	
	
	public function rolePublish(){
	$this->assign('target','roleAdd');
	$this->display();
	}

	public function accessPublish(){
		$this->assign('target',"accessAdd");
		$this->display('access_edit');
	}


	
	public function roleAdd(){
		$model=D('role');
		if(!$model->create()){
			$this->error($model->getError());
		}
		$model->lock=0;
		if($model->add()){
			$this->success('添加成功');
		}else{
			$this->error('添加失败');
		}
	}
	
	
	/*
	 * 
	 * 删除角色
	 * 
	 */
	public function roleDel(){
		
		 
		   $map['role_id']=$_GET['role_id'];
		  
		   
		   
		   if($info=M('role')->where($map)->find()){
		   	
		   	      if($info['lock']==1){
		   	      	$this->error('系统角色不能删除');
		   	      }
		   }
		   
		   
		   
		   
		 
	      if(M('role')->where($map)->delete()){
	      	
	      	$this->success('删除成功');
	      	
	      }else{
	      	
	      	$this->error('删除失败');
	      }
		
	}
	
	
	//添加权限
	
	public function accessAdd(){
		$model=D('access');
	    $data=$model->create();
		if(!$data){
			$this->error($model->getError());
		}
		$this->after_add($model->add());
	}



	public function access(){
		
		  $access_list=M('access')->select();
		  $access_list=list_to_tree($access_list,'access_id','p_id','_child',0);
		  $this->assign('access_list',$access_list);
		  $this->display();
	}
	
	public function accessDel(){
		$info=M('access')->where(array('access_id'=>$_GET['access_id']))->delete();
		$this->after_del($info);
		}
	
	
	public function role_add_access(){
		$role_id=$this->_get('role_id');
		$map=array('role_id'=>$role_id);
		$old_access_list=M('role_access')->where($map)->select();
		
		foreach ($old_access_list as $key=>$value){
			$refer[$value['access_id']]=$key;
		}
		
		$new_access_list=$_POST['access_list'];            //用$this->_post会获取不到数据
		
		foreach ($new_access_list as $key=>$value){
			if(array_key_exists($value,$refer)){         //如果存在键，则卸载	
			 unset($old_access_list[$refer[$value]]);                       //unset 不能unset 其引用数组的值。。。
			}else{
				$data=array('role_id'=>$role_id,'access_id'=>$value);
				 M('role_access')->add($data);                   //不存在则，添加到一个新添加的数组
			}
		}
       if(!empty($old_access_list)){
       	
       	foreach ($old_access_list as $key=>$value){                   //原来剩下的就是未选,删除
			 
			  $map['access_id']=$value['access_id'];
		      M('role_access')->where($map)->delete();
		}                                                        
		
       }
		$this->success('修改成功');
	}
	
	
	
	/*
	 * 
	 * 添加后台用户
	 * 
	 */
	public function userPublish(){
		
		
		
	}
	
	
	public function access_edit(){
		$this->assign('target',"access_update");
		$this->assign('access',M('access')->where(array('access_id'=>$_GET['access_id']))->find());
		$this->display();	
	}
	
	
	public function access_update(){
		$model=D('access');
		dump($model->create());
		if($model->save($model->create())){
		  $this->success('修改成功');
		}else{
			$this->error('修改失败');
		}
	}
	
public function menu_add(){
	$model=D('menu');
	$model->create();
	if(empty($_POST['menu_title'])){
		$this->error('请输入菜单名');
	}
	if($model->add()){
		$this->success('添加成功');
	}else{
		$this->error('添加失败');
	}
}

public function menu(){
	$menu_list=M('menu')->select();
	$menu_list=list_to_tree($menu_list,'menu_id','p_id','_child',0);
	$this->assign('menu_list',$menu_list);
	$this->display();

}



public function menu_del(){
	
	if(M('menu')->where(array('menu_id'=>$_GET['menu_id']))->delete()){
		$this->success('删除成功');
	}else{
		$this->error('删除失败');
	}
}

public function menu_edit(){
	$menu=M('menu')->where(array('menu_id'=>$_GET['menu_id']))->find();
	$this->assign('menu',$menu);
	$this->assign('target','menu_update');
	$this->display('menu_publish');
}


public function menu_publish(){

	$this->assign('target','menu_add');
	$this->display();
}

public function menu_update(){
	$model=D('menu');
	$data=$model->create();
	
	if(empty($_GET['p_id'])){
		unset($model->p_id);
	}
	
	if($model->save()){
		$this->success('修改成功');
	}else{
		$this->error('修改失败,请重试');
	}
}

public function role_menu(){
		$menu_list=M('menu')->select();
		foreach ($menu_list as $key=>$value ){
			$refer[$value['menu_id']]=&$menu_list[$key];
		}
	   $menu_a_list= M('role_menu')->where(array('role_id'=>$this->_get('role_id')))->select();
	   foreach ($menu_a_list as $key=>$value){
	   	     $refer[$value['menu_id']]['checked']=1;
	   }
	$menu_list=list_to_tree($menu_list,'menu_id','p_id','_child',0);
	$this->assign('menu_list',$menu_list);
	$this->display();
}


public function role_add_menu(){
	
	$role_id=$this->_get('role_id');
		$map=array('role_id'=>$role_id);
		$old_menu_list=M('role_menu')->where($map)->select();
		foreach ($old_menu_list as $key=>$value){
			$refer[$value['menu_id']]=$key;
		}
		
		$new_menu_list=$_POST['menu_list'];            //用$this->_post会获取不到数据
		foreach ($new_menu_list as $key=>$value){
			if(array_key_exists($value,$refer)){         //如果存在键，则卸载	
			 unset($old_menu_list[$refer[$value]]);                       //unset 不能unset 其引用数组的值。。。
			}else{
				$data=array('role_id'=>$role_id,'menu_id'=>$value);
				 M('role_menu')->add($data);                   //不存在则，添加到一个新添加的数组
			}
		}
       if(!empty($old_menu_list)){
       	foreach ($old_menu_list as $key=>$value){                   //原来剩下的就是未选,删除
			  $map['menu_id']=$value['menu_id'];
		      M('role_menu')->where($map)->delete();
		}                                                        
       }
		$this->success('修改成功');
}



public  function role_edit(){
  $role=M('role')->where(array('role_id'=>$_GET['role_id']))->find();
  $this->assign('role',$role);
  $this->assign('target',"role_update");
  $this->display('rolePublish');
}


public function role_update(){
	$model=M('role');
	$this->after_update($model->save($model->create()));

}

}