<?php
class secureAction extends wbaseAction{
	
	
	public function __construct(){
		
		define('ALIPAY_PATH',EXTEND_PATH.'Vendor/alipay/');
	}
	
	public function alipay(){
		$this->display('alipay/index');
	}
	
	public function alipayto(){
		
		require_once ALIPAY_PATH.'alipayto.php';	
	}
	
}