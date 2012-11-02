<?php
import("@.Action.admin.baseAction");
class articleAction extends baseAction {
	public function __construct(){
		
		parent::__construct();
	}
	
	public function publish(){
		//分类列表
		$this->assign('category_list',A('admin/category')->getCategory());
		//
		$this->assign('target','add');
		$this->display();	
	}
	
	
	
    public function add(){
       $model=D('articlePublish');
       $this->createData($model);
       $model->user_id=$_SESSION[C('USER_AUTH_KEY')];   //session 没有值返回的是null，会导致插入数据库错误
       $model->create_time=time();
/*        if(!empty($_POST['tag'])){       //获取标签   //觉得单独tag性能不一定表现很好
                $tag=$_POST['tag'];
                $tag_array=explode(',',$tag);
                $model=M('tag');
                foreach ($tag_array as $key=>$value){
                	$tmap=array('tag_title'=>$value);
                	if(!$info=$model->where($tmap)->find()){
                	    $info=M('tag')->add($tmap);
                	}
                     	 $data['tag'].=$info.',';
                }
        }*/
        //想文章写入数据
        if($info=$model->add()){
        	$this->success('添加成功');	
        }else{
        	$this->error('添加失败');
        }
    }
    
    
    public function manage(){
    	$map=D('article')->create($_GET);
        $c_child=A('admin/category')->getAllchild(array('category_id'=>$map['category_id']));
        if(!empty($c_child)){
        	$map['category_id']=array('in',$c_child);
        }
        if($time=$this->time()){
        	$map['create_time']=$time;
        }
    	$article_list=M('article')->where($map)->page($this->p().','.$this->size())->select();
    	$this->assign('article_list',$article_list);
    	$this->assign('category_list',A('category')->getCategory());
    	$this->display();
    }
	
    
    
    
   
    public function del(){
    $model=D('article');
    $info=$model->where(array($model->getPk()=>$_POST['id']))->delete();
    $this->after_del($info);

    }
    
    public function ajaxManageContent(){
    	$model=D('article');
    	$map=$model->create($_GET);
       $time=$this->time();     //时间
       if(!empty($time)){
       	   $map['create_time']=$time;
       }
       if(!empty($_GET['keyword'])){            //搜索
       	  $map['article_title']=array('like','%'.$_GET['keyword'].'%');
       } 
       if(!empty($_GET['category_id'])){
       	   if($c_string=A('admin/category')->getAllChild(array('category_id'=>$_GET['category_id']))){
       	   	     $map['category_id']=array('in',$c_string);
       	   };
       }
      $map=outBlank($map);
      $count=$model->where($map)->count();
      $article_list=D('articlemanageView')->where(outBlank($map))->page($this->p().','.$this->size())->select(); //outBlank防止空值造成的异常
      //分页    	
      $this->page($count, $this->size(), $map);
    	//
    	$this->assign('article_list',$article_list);
    	$this->display();
    	
    
    }
    
    
    public function edit(){
    	$article=M('article')->where(array('article_id'=>$_GET['article_id']))->find();
        $this->assign('target','update/article_id/'.$article['article_id']);
		//分类列表
		$this->assign('category_list',A('admin/category')->getCategory());
		//
         $this->assign('article',$article);
         $this->display('publish');
    }
    
   public function update(){
       $model=D('articlePublish');  
       $this->createData($model);
       $model->article_id=$_GET['article_id'];
       if($model->save()){
       	$this->success('修改成功');
       }else{
        $this->error('修改失败');
       }   
   } 

   
   public function createData($model){
     if(!$data=$model->create()){
        	$this->error($model->getError());
        }
        
        
 //截断介绍


     if($_POST['guide_on'])  $model->guide=fi($model->content)->text()->cut(100)->end();
        
        
//更新顶级栏目

       $model->top_id=M('category')->where(array('category_id'=>$model->category_id))->getField('top_id');
       if(preg_match_all('/<img .+\/>/',$model->content,$match)){
       	foreach ($match as $key=>$value){
       		$photos[]=$value[0];
       	}
       	$model->photos=serialize($photos);
       	if(isset($_POST['thumb_on']) && !empty($photos)){  //生成缩略图
       		$thumb=explode('/',$photos[0]);
       		$thumb[count($thumb)-1].='thumb_';
       		$thumb[count($thumb)-2]='big';
       		dump($photos);
       		$model->thumb=implode('/',$thumb);
       	}
       	
       }
   }
   
	public function pass(){
		import('@.Action.admin.commonAction');
		commonAction::pass('article','article_id');
	}
	
	
	
	
   public function upload(){
   	   import("ORG.Net.UploadFile");
   	   $upload=new UploadFile();
   	  $upload->upload->autoSub=true;
	   $upload->upload->subType='date';
	   $upload->savePath='./uploads/big/';  
	   $upload->uploadReplace=true;
	  	//开启缩略图
		$upload->thumb=true;
		$upload->thumbMaxWidth="100";
		$upload->thumbMaxHeight="100";
	
	    $thumbpath='./uploads/thumb/'.date('Ymd',time());
	    //创建一个存放缩略图的文件
	    if(!is_dir($thumbpath)) {
	    	try {
	    		mkdir($thumbpath);
	    		$upload->thumbPath=$thumbpath.'/';  
       }catch (Exception $e) {
        echo '创建文件夹出现异常 ',  $e->getMessage(), "\n";
       }
	    }
         	    
		
		//上传成功返回true；不成功false;
		if($upload->upload()){
		$info=$upload->getUploadFileInfo();  //获得上传后的文件信息,采用kindeditor
		$data['url']=$info[0]['savename'];
        $data['url']='/uploads/big/'.$data['url'];
		$data['error']=0;
		}else{  //失败
             $data['error']=1;
			 $data['message']=$this->upload->getErrorMsg();
		}
	    $this->ajaxSend($data);//重写了核心的ajaxReturn ,升级请注意	
   }
}