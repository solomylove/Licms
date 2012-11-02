<?php
class linkWidget extends Widget{
	
	public function render($data){
	  return 	$this->renderFile('link',$data);	
	}
	
}