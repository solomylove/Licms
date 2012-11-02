<?php
class ShowFromWidget extends Widget{
	
	public function render($data){
	  return 	$this->renderFile('ShowFrom',$data);	
	}
	
}