<?php
class EmptyAction extends  Action {
	
	
	public function  __construct(){
		parent::__construct();	
		A('www/ltemplate')->index();
		exit();
	}


	
	
	
}