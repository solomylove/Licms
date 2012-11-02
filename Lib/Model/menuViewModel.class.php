<?php
class menuViewModel extends  ViewModel{  
  public $viewFields = array(
 'role_menu'=>array('role_id'),
 'menu'=>array('menu_title','menu_name','menu_id','p_id','_on'=>'role_menu.menu_id=menu.menu_id'),
 );
}