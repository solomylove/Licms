<?php
/*文件管理*/
class filemanagerAction extends  baseAction{	
	
public function index(){
//真实路径
$realpath=$this->getRealpath();

//相对路径
$relativepath=$this->getRelativepath();
 //是文件
  if(is_file($realpath)){
  $pathinfo=pathinfo($realpath);
  
  $extension =strtolower($pathinfo['extension']) ; //格式
  
  //匹配图片
  if($this->checkType('jpg|bmp|gif',$extension)){
  		 $file_content='<image src="'.$relativepath.' "/>';
  		 echo $file_content;
  	//匹配可编辑文件
  }elseif($this->checkType('php|html|htm|txt|js',$extension)){
  	  $file_content=file_get_contents($realpath);
      $file_content= highlight_string($file_content,true);
  	  $this->assign('file_content',$file_content);
      $this->display('edit');
 }
 }else{
 	
 	
   //文件夹，则显示列表
   $path=$this->getRealpath();
  $list=scandir($realpath); //获得文件名！！
  foreach ($list as $key=>$file_name){
  $file_list[$key]['path']=!empty($_GET['path'])?$_GET['path'].'-'.$file_name:$file_name;  //赋值，解决当path为空，多出的‘-’
  	$file_list[$key]['file_name']=$file_name;
  	if(is_file($path.DIRECTORY_SEPARATOR.$file_name)){
  		$file_list[$key]['file']=true;
  	}

  }
  
  //返回的path
  
$path_temp=explode('/', $parsepath);
$count=count($path_temp);
unset($path_temp[$count-1]);  //除去最后一个即为上级目录
$backpath=implode('-', $path_temp);

  $this->assign('backpath',$backpath);
  $this->assign('file_list',$file_list);
  $this->display();
 
 }
  

}

public function checkType($types,$extension){
	$type_array=explode('|', $types);
    if(in_array($extension, $type_array)){
           return true;
    }else{
    return false;
    }
}

/*
 * 删除文件
 * 
 */

public function del(){
	
	$path=$this->getRealpath();
	
	echo $path;
	if(is_file($path)){
		$result=unlink($path);
	}else{
		$result=rmdir($path);
	}
	if($result){
		$this->success('删除文件成功');
	}else{
		$this->error('删除失败请重试');
	}
	
}

public function getRealpath(){
	
//分析路径
$parsepath=$this->getPath();

//真实路径
 return $realpath=APP_PATH.$parsepath ;   //APP_PATH  最后带'/'
}

public function getRelativepath(){
	return dirname($_SERVER['SCRIPT_NAME']).'/'.$this->getPath();
}


public function getPath(){
	
		
if(isset($_GET['path'])){  //如果用三目元算会产生错误
$path=$_GET['path'];
}else{
$path='';
}
return str_replace('-', '/', $path);
}

public function download(){
	
	import('ORG.Net.Http');
	Http::download($this->getRealpath());
	
}
}