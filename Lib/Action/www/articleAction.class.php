<?php
class articleAction extends  wbaseAction{
	
	
	
	public $page_break='<hr style="page-break-after:always;" class="ke-pagebreak" />';
	
	
	 public function show($data){
	 	$p=empty($_GET['p'])?1:$_GET['p'];
    	$article_id=$data['article_id']?$data['article_id']:$_GET['article_id'];
        if(!$article=M('article')->where(array('article_id'=>$article_id))->find()){
       	      $this->error('你访问的页面不存在');
        }; 
        M('article')->where(array('article_id'=>$article_id))->setInc('read_count',1);         //阅读数增1
       if($article['link']){
       	  redirect($article['link']);//
       }       	
            
    	    $data=$this->limitInfo($article_id);
      	    $free_page=$data['free_page'];
      	    $score_pay=$data['score_pay'];
      	    $page_size=$data['page_size']; 

       $article['free_page']=$free_page;
       $article['score_pay']=$score_pay*$page_count;
       $article['current_page']=$p;
        
        $content_array=explode($this->page_break,$article['content']);
    	$page_count=count($content_array);
    	$article['content']=$content_array[$p-1];
    // $article['content']=remove_xss($article['content']);
    

       //当前位置
     $category_id=$article['category_id'];     
     
     $current_location=current_location($category_id);
      //分页类
     import("ORG.Util.Page");
     $Page= new Page($page_count,1);
     $Page->setConfig('header', '页');
     $page_show  = $Page->show();
     $level_info= $this->levelInfo();   //获取用户,文章级别信息
     $relative_list=$this->relativeRead($info['category_id'], $article['tag']);     //相关阅读
     $return['relative_list']=$relative_list;
     $return['level_info']=$level_info;
     $return['page_show']=$page_show;
     $return['article']=$article;
     $return['current_location']=$current_location;
      return $return;
    }
	
    
    
    
    
    public function printer(){
    	$article_id=$_GET['article_id'];
    	$article_info=M('article')->where(array('article_id'=>$article_id))->find();   //获取文章信息
    	$article['content']=str_replace($this->page_break,'', $article['content']);
    	if(!$this->checkSepTime($article_id)){   //没有找到历史支付记录,且不在三分钟之内;
    	$limit=$this->limitInfo($article_id);
    	$pay=$limit['score_pay'];
    	$user_model=M('user');             //获取用户信息
    	$user_info=M('user')->where(array('user_id'=>$_SESSION['user_id']))->find(); //获取用户信息
    	$level_info=$this->levelInfo();
    	$page_count=$this->contentPageSize($article_info['content']);
    	$true_pay=$pay*$page_count;       //折算实际扣积分  
    	if($user_info['score']<$true_pay){            //检查余额
    	    $this->error('余额不足了');
    	}
    	M('article')->where(array('article_id'=>$article_id))->setInc('download_count',1);    //打印次数增1                        //开始事务
    	$user_model->startTrans();
    	$user_model->where(array('user_id'=>$_SESSION['user_id']))->setDec('score',$true_pay); //扣钱

        if( A('admin/pay')->add($_SESSION['user_id'],$true_pay,$article_id)){//写入支付记录 
             A('www/public')->updateChangeSession($_SESSION['user_id']);           //更新session
        	$user_model->commit();
        }else{
        	 	$user_model->rollback();
        	 	$this->error('出错了，请重试');
        	 }
    	}
    	   
        	 $this->assign('a',$article_info);
    	    $this->ajaxReturn($this->fetch('printer'),'开始打印 ',1);              //输出文章
    }
    
     public function search(){
   	     $map=D('article')->create($_GET);
   	     $map=outBlank($map);
   	     $keyword=$this->getKeyword();
   	     $category_id=$_GET['category_id'];              //获取子列表
   	     
   	     if(empty($_GET['keyword'])){
   	     	$this->error('你没有输入任何搜索内容');
   	     }
   	     if(empty($category_id)){
   	     	$category_id=M('category')->where(array('category_title'=>'科目'))->getField('category_id');
   	     }
   	     if($cate_string=A('admin/category')->getAllChild(array('category_id'=>$category_id))){
   	       	     $map['category_id']=array('in',$cate_string);      
   	     };  
   	       $map=$this->getSearchMap($map, $keyword,array('article_title','content','tag'));
   	       $keyword=$this->parseKeyword($keyword);
   	       $article_list=M('article')->where($map)->page($this->p().','.$this->config('user_search_count'))->select();
   	       $content_size=100;
   	     //循环文章,对搜索结果加亮
           foreach ($article_list as $key=>$value){
   	       $article_list[$key]['article_title']=highlight($value['article_title'], $keyword);
   	       $content=strip_tags($value['content']);  //更具关键词对内容进行截取
   	       $content=strip_tags($content);
   	       $content=$this->contentText($content);
   	       $content_len=strlen($content);
   	       $content_size=100;
   	       if($_GET['keyword']){
   	       	foreach ($keyword as $value){
   	       		 $current_pos=strpos($content,$value);
   	       		 if($current_pos<$content_len){
   	       		 	$first_pos=$current_pos; //获取最小第一个被找到的位置
   	       		 }
   	       	}
   	       }
   	       
   	       if(!$first_pos) $first_pos=0;
   	        $content=msubstr($content,$first_pos, $content_size);	                               
   	      	$article_list[$key]['content']=highlight($content, $keyword);
   	     }

   	     $search_count=D('article')->where($map)->count();
   	     $this->page($search_count,$this->config('user_search_count'), $map);
   	     $this->assign('search_count',$search_count);
   	     $this->assign('article_list',$article_list);
   	     $this->display();
   }
   
   
   
   /*
    * 
    * 获取相关推荐内容
    * 
    * 
    */
   
   
   public function relative(){
   	$this->assign('yaowu_list',$yaowu_list);
   	$this->assign('yiyuan_list',$yiyuan_list);
   	$this->assign('zhuanjia_list',$zhuanjia_list);
   	$this->display();
   }
   
   
   
   /*
    * 
    * 搜索通用
    * @$keyword     //关键字
    * @count         //需要调用的值
    * @map           //附加查询条件
    */
   
   public function getSearchMap($map,$keyword,$fields){
   	$keyword=$this->parseKeyword($keyword);
   	 if(!empty($keyword)){
   	        	                                       //$fields=array('article_title','content','tag');
                foreach ($fields as $field ){
                           foreach ($keyword as $value){   	        
   	     	                 $submap[$field][]=array('like','%'.$value.'%');
   	                       }
   	                        $submap[$field][]='or';
                }
   	     }
   	     if(!empty($submap)){
   	     	$submap['_logic']='or';
   	     	 $map['_complex']=$submap;
   	     }   
               return $map;
   }
   
   public function parseKeyword($keyword){
   	
   	         if(!empty($keyword)){
      	   	  $keyword=trim($keyword);
   	     	   $keyword=preg_split('/[\s]+/',$keyword);
   	     	    return $keyword;
   	         }else{
   	         	return false;
   	         }
   	     	  
   }
   
   public function notice(){
   	
   	$limit=$this->limitInfo($_GET['article_id']);
   	$user_score=M('user')->where(array('user_id'=>$_SESSION['user_id']))->getField('score');
   	$level_info=$this->levelInfo();
    $article=M('article')->where(array('article_id'=>$_GET['article_id']))->find();  	
    $page_count=$this->contentPageSize($article['content']);
   	$limit['score_pay']=$limit['score_pay']*$page_count;   	
 
    if($pay_history=$this->checkSepTime($_GET['article_id'])){
    	$this->assign('pay_history',$pay_history);
    }else{
    	 if($limit['score_pay']>$user_score ){   //默认积分-优惠积分  大于 用户积分
    	$this->assign('user_score',$user_score);
    }
    
    	
    }
    
    $this->assign('level_info',$level_info);//
   	$this->assign('limit',$limit);
   	$this->display();
   }
   
   
   
   public function limitInfo($article_id){
       $article=M('article')->where(array('article_id'=>$article_id))->find();
      //对比系统设置和文章设置
       $page_size=$this->config('page_size');
       $free_page=$this->config('free_page');
       $score_pay=M('user')->where(array('user_id'=>$_SESSION['user_id']))->getField('score_pay');
             if(!$score_pay){
             	$score_pay=$this->config('score_pay');
             }
            $data['page_size']=$page_size;
          	$data['free_page']=$free_page;
          	$data['score_pay']=$score_pay;
          	return $data;
   }
   
 
   public function levelInfo(){
   	
          $data['level_title']=$_SESSION['level_title'];
          $data['back']=M('level')->where(array('level_id'=>$_SESSION['level_id']))->getField('back');
          return $data;
   }
   
   
   /*
    * 
    * 相关阅读
    * 
    * 
    */
   
   
   
   public function relativeRead($category_id,$tag){
          
   	     $article_id=$_GET['article_id'];
   	     $map['article_id']=array('NEQ',$article_id);
   	     if($cate_string=A('admin/category')->getAllChild(array('category_id'=>$category_id))){
   	       	     $map['category_id']=array('in',$cate_string);      
   	     };  
   	     $map=$this->getSearchMap($map, $tag, array('tag'));
   	     return  $relative_list=D('articleView')->where($map)->limit(4)->select();
   }
   
   
   public function getKeyword(){
   	     return trim($_GET['keyword']);
   }
   
   
   //检查间隔时间
   
   public function checkSepTime($article_id){
   $pay_history=M('pay')->where(array('article_id'=>$article_id))->limit(1)->order('create_time desc')->find();
    if( $pay_history  && (time()-$pay_history['create_time'])<(3*60)){
    	return $pay_history;
   }
   }
   
   
   
   /*
    * 
    * 内容分页
    * 
    */
   
   public function contentPageSize($content){
   	$page_size=$this->config('page_size');
   	$start=0;
   	$p=0;
   	$total_size=strlen($content);
   	do {
   		$min_content=mb_strimwidth($content,$start,$page_size,'utf-8');  //mb_substr 截取的是字  
   		$min_size=strlen($min_content);          //实际截取的长度
   	    $start=$min_size+$start;
   	    $p+=1;
   	}
   	while($start<$total_size);     
    $size=ceil(strlen($content)/$page_size);
    return $p;
   }
   
   
   /*
    * 
    * 
    * 获取纯文本
    */
   
   public function contentText($content){
   return 	preg_replace('/([\s]+)|(&nbsp;)|(<[.*]>)/','',$content);
   }
   
   
   public function getList($data){
   	 if(empty($data['limit'])) $data['limit']=5;
   	 //处理栏目
   	 if(!empty($data['category_title'])){
   	 	$category_id=M('category')->where(array('category_title'=>$data['category_title']))->getField('category_id');
   	 }else if(!empty($data['category_id'])){
   	 	$category_id=$data['category_id'];
   	 }else{
   	 	$category_id=$_GET['category_id'];
   	 }
   	if(!empty($category_id)){
   		 $map['category_id']=array('in',A('admin/category')->getAllChild(array('category_id'=>$category_id)));
   	}
   	if($data['order']){
   		$order=$data['order'];
   	}
   	 if('1'==A('admin/system')->get('article_status_on')) $map['status']='1';
     $article_list= D('articleView')->where($map)->limit($data['limit'])->order($order)->select();
     return create_article_url($article_list);
     }
      //上下篇阅读
      
     public function upDown($article_id){
     	
     	$article_id=$article_id?$article_id:$_GET['article_id'];
     	$model=M('article');
     	$field='category_id,article_id,article_title';
     	$content['up']=$model->where(array('article_id'=>array('lt',$article_id)))->field($field)->find();
     	 $content['down']=$model->where(array('article_id'=>array('gt',$article_id)))->field($field)->find();
     	     	return create_article_url($content);
     }
      
     
    public function comments(){
    $p=!empty($_GET['P'])?$_GET['p']:1; 	
    $comment_list=A('www/comment')->getList(array('limit'=>10,belong_id=>$_GET['article_id'],order=>'create_time desc'));
    $this->assign("comment_list",$comment_list);
    $this->display('comments');
    } 
      
}

