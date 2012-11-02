<?php
class filecacheAction extends baseAction{
	
	public function index(){
		//removeDir(RUNTIME_PATH.'Data/www');
		removeDir(RUNTIME_PATH.'Cache/www');
	}
	
	
/*	
		$path=TMPL_PATH.'www/public/login.html';   //tp以模板完整路径md5 生成模板缓存
		$cache_path=CACHE_PATH.'www/'.md5($path).'.php';
		if(unlink($cache_path) || !file_exists_case($cache_path)){
			echo '更新缓存成功';
		}else{
			echo '更新缓存失败，请重试';
		}*/
}