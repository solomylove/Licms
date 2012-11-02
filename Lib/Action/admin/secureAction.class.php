<?php
class secureAction extends baseAction{
	
	
	public function __construct(){
		
		parent::__construct();
		
		define('ALIPAY_PATH',EXTEND_PATH.'Vendor/alipay/');
	}
	
	public function alipay(){
		$this->display('alipay/index');
	}
	
	
	public function alipayto(){
		
		require_once ALIPAY_PATH.'alipayto.php';	
	}
	
}