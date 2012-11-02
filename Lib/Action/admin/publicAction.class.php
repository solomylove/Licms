<?php
class publicAction extends Action {
	/*
	public function addCity(){
	       $data=file_get_contents('D:\Provinces.xml');

	        $p=xml_parser_create();

	        xml_parse_into_struct($p, $data, $values);
	        
	        
	        foreach ($values as $key=>$value){
	        
	            
	        	if(isset($value['attributes'])){
	        	      $item=$value['attributes'];
	        	     if(M('provinces')->add($item)){
	        	           echo '成功'.$item['ID'];
	        	     
	        	     }else{
	        	     	
	        	     	
	        	     	  echo '错误'.$item['ID'];
	        	     }
	        	      
	        	
	        	}
	        }
	        
	}
	*/
	
	
	public function place_tool(){
		$this->display();
		
	}
	

	
	

	/*
	public function getArea(){
		
		
		
		$provinces=M('provinces')->select();
		
		$cites=M('cities')->select();
		
		
		foreach ($provinces as $key=>$value){
			
			$id=$value['ID'];
			$data[$id]=&$provinces[$key];
		}
		
		
		
		foreach ($cites as $key=>$value){
			
			$pid=$value['PID'];   //
			
			$id=$value['ID'];
			
			$data[$pid]['_child']=$value;
			
		}
		
		     return $provinces;
	}
	*/
	
	public function verify(){	
		import('ORG.Util.Image');
        Image::buildImageVerify();
	}
	public function pdf(){
		
try {
    $p = new PDFlib();

    /*  open new PDF file; insert a file name to create the PDF on disk */
    if ($p->begin_document("", "") == 0) {
        die("Error: " . $p->get_errmsg());
    }

    $p->set_info("Creator", "hello.php");
    $p->set_info("Author", "Rainer Schaaf");
    $p->set_info("Title", "Hello world (PHP)!");

    $p->begin_page_ext(595, 842, "");

    $font = $p->load_font("Helvetica-Bold", "winansi", "");

    $p->setfont($font, 24.0);
    $p->set_text_pos(50, 700);
    $p->show("Hello world!");
    $p->continue_text("(says PHP)");
    $p->end_page_ext("");

    $p->end_document("");

    $buf = $p->get_buffer();
    $len = strlen($buf);

    header("Content-type: application/pdf");
    header("Content-Length: $len");
    header("Content-Disposition: inline; filename=hello.pdf");
    print $buf;
}
catch (PDFlibException $e) {
    die("PDFlib exception occurred in hello sample:\n" .
    "[" . $e->get_errnum() . "] " . $e->get_apiname() . ": " .
    $e->get_errmsg() . "\n");
}
catch (Exception $e) {
    die($e);
}
$p = 0;
		
		
	}
	
	
	public function ajax_gethospital(){
		
		
		if($data=M('hospital')->where(array('city_id'=>$_GET['city_id']))->select()){
		
			    $status=1;
		}else{
		
		        $status=0;
		}
         $this->ajaxReturn($data,$_GET['city_id'],$status);
		
	}
	
      /*
       * 
       * 
       * 处理时间的公共方法
       * 
       * 
       */
      
      public function role(){
            
      	$roles=M('role')->select();
      	
        foreach ($roles as $key=>$value){
        
              $role[$value['role_name']]=$value['role_id'];
        }
           C('role',$role);
      }
      public  function logout(){
      
         $_SESSION=array();
         session_destroy();
         unset($_SESSION);
         $this->redirect('login');
      }
     
      
      public function login(){
      	
      	$this->display();
      }
      
      
      public function checklogin(){
      	$username=$_POST['username'];
      	$password=$_POST['password'];
      	$verify=$_POST['verify'];
      	if($username==''){
      		$this->error('用户名不能为空');
      	}
      	if($password==''){
      		$this->error('密码不能为空');
      	}
      	if($verify==''){
      		 $this->error('验证码不能为空');
      	}
       if(md5($verify)!==$_SESSION['verify']){
       	$this->error('验证码错误');
      	 }
      	$map['password']=md5($password);
      	$map['username']=$username; 	
        if(!$info=D('admin')->where($map)->find()){
        		$this->error('密码错误');
        }
             $_SESSION[C('USER_AUTH_KEY')]=$info['user_id'];
             $_SESSION['username']=$info['username'];
             $_SESSION['role_id']=$info['role_id'];
             $_SESSION['last_login_time']=$info['last_login_time'];
             D('admin')->setInc('login_count');     //更新数据  
             D('admin')->where(array('user_id'=>$info['user_id']))->save(array('last_login_time'=>time()));
             $this->redirect('admin/admin/index');
      }
      
      public function showDefault(){
      	
      	$this->display();
      }
      
      public function test(){
      	echo date('Ymd',time());
        echo $_SERVER['DOCUMENT_ROOT'];
      }
}