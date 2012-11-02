<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($title); ?></title>
<script src="__STATICS__/js/jquery.min.js" type='text/javascript'></script>
<script src="__STATICS__/js/common.js" type='text/javascript'></script>
<link rel="stylesheet" type="text/css" href="__STATICS__/css/default.css" />
</head>
<body>
<style type="text/css">
/* CSS Document */

body {
font: normal 20px auto "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
color: #4f6b72;
}

a {
color: #c75f3e;
}

table {
width: 100%;
padding: 0;
margin: 0;
}

caption {
padding: 0 0 5px 0;
width: 700px;
font: italic 20px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
text-align: right;
}

th {
font: bold 20px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
color: #4f6b72;
border-right: 1px solid #C1DAD7;
border-bottom: 1px solid #C1DAD7;
border-top: 1px solid #C1DAD7;
letter-spacing: 2px;
text-transform: uppercase;
text-align: left;
padding: 6px 6px 6px 12px;
background: #CAE8EA no-repeat;
}
/*power by www.winshell.cn*/
th.nobg {
border-top: 0;
border-left: 0;
border-right: 1px solid #C1DAD7;
background: none;
}

td {
border-right: 1px solid #C1DAD7;
border-bottom: 1px solid #C1DAD7;
background: #fff;
font-size:23px;
padding: 6px 6px 6px 12px;
color: #4f6b72;
}

td.alt {
background: #F5FAFA;
color: #797268;
}

th.spec {
border-left: 1px solid #C1DAD7;
border-top: 0;
background: #fff no-repeat;
font: bold 13px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
}


th.specalt {
border-left: 1px solid #C1DAD7;
border-top: 0;
background: #f5fafa no-repeat;
font: bold 20px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
color: #797268;
}
/*---------for IE 5.x bug*/
html>body td{ font-size:13px;}
body,td,th {
font-family: 宋体, Arial;
font-size: 13px;
}

</style>
<style type="text/css">
.head li {
	float:left;
	display:block;
	margin-left:20px;
}

body li{
	list-style-type: none;
}

body {
    background: none repeat scroll 0 0 #EEEEEE;
    color: #6E6E6E;
    font: 14px/22px '微软雅黑','Helvetica Neue',Helvetica,Arial,Sans-serif;
}

.menu_center {
	left:50%;
	position:relative;
	margin-left:-500px;
	width:1000px;
	height:550px;
	border-left:1px  #A0A0A4 solid;
	border-right:1px  #A0A0A4 solid;
	filter: Shadow(Color=green, Direction=300);
	background-color:#FFF;
}
.usermenu {
	padding-top:10px;
	float:right;
}

.usermenu a:hover{
	text-decoration:underline;
	}

body{
	
	}
.category_detail {
	display:none;
}
.index {
	height: 70px;
	width: 200px;
	background-image: url(__STATICS__/img/index.png);
	background-repeat: no-repeat;
	display:inline-block;
	float:left;
}

.head {
	height:70px;
	background-image: url(__STATICS__/img/topbg.png);
		color:#FFF;
	}
.head a{
	color:#FFF;	
}
	
	

.user_self {
	background-image: url(__STATICS__/img/user.png);
}
.category_head {
	background-image: url(__STATICS__/img/al_head_bg.png);
	height:30px;
	padding-top:4px;
}
.menu_help {
	background-image: url(__STATICS__/img/question.png);
	background-repeat: no-repeat;
}
	
.main{
	width:auto;
	}	
.article_list_box {
	border: 1px solid #CCC;
}

#left{
	width:180px;
	float:left;
	height: 581px;
	
	overflow:hidden;
	}
.article_list_box {
	height: 150px;
	margin-bottom:30px;
}


.right{
	width:250px;
	float:right;
	}
.menu_setting {
	cursor: default;
}
.dialog_head {
	background-image: url(__STATICS__/img/dialog_head.png);
	background-repeat: repeat-x;
}




.foot {
	width: 100%;
	height:40px;
	text-align:center;
	clear:both;
}
.c_head_font {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: normal;
	font-weight: bold;
	text-transform: none;
	color: #333;
	padding-left:20px;
}
	
	
.center{
	width:auto !important;
	border: 1px solid #CCC;
	min-height:500px;
	float:left;
	margin-left:10px;
	margin-right:10px;
	padding:10px;
	}
.al_head_font {
	background-repeat: no-repeat;
	padding-left:20px;
	background-image: url(__STATICS__/img/ar_head.png);
	background-position:-12px;
}
.menu_setting {
	background-image: url(__STATICS__/img/settings.png);
	background-repeat: no-repeat;
}

.menu_self {
	background-image: url(__STATICS__/img/user.png);
}
.subca_up {
	background-image: url(__STATICS__/img/subca_ug.png);
	background-repeat: no-repeat;
	background-position: 0px;
	padding-left:14px;
	font-size: 14px;
	font-weight: lighter;
	color: #666;
	margin-top:5px;
}
	
.al_head{
	background-image: url(__STATICS__/img/al_head_bg.png);
	height:30px;
	padding-top:6px;
}

a {
	color:#174B73;
	text-decoration: none;	
}
.logout_icon {
	background-image: url(../../statics/img/logout.png);
}

.menu_help,.menu_setting,.user_self,.menu_help,.menu_pay,.menu_logout,.menu_money,.logout_icon{
	background-repeat:no-repeat;
	display:inline-block;
	width:20px;
	height:20px;
	margin-right:2px;
		vertical-align:bottom;
	}
.center_right {
	width: 681px;
	height:164px;
	position: absolute;
	left: 255px;
	top: 285px;
}
.tool_bar {
	height: 300px;

}
.tool_bar_head {
	background-repeat: repeat-x;
	height:: 60px;
	height: 29px;
	border-bottom:  #557FAA  3px solid;
}
#tool_bar_content {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #FFFBF0;
}
.footer {
	width: 100%;
}
.tool_menu {
	border-bottom:#2A3F55 1px solid;
}
.tool_head_font {
	margin-left:10px;
	margin-top:5px;
}


</style>


<script type="text/javascript">

var search_category='';          //瀹氫箟鍒嗙被


$(document).ready(function(){
	
	
	$('#search_button').click(function(){
		
		searchA();

		});
		
		
	$('.category_head').toggle(function(){
		
		$(this).parent().find('.category_detail').slideDown();
		
		},
		function(){
			
			$(this).parent().find('.category_detail').slideUp();
			
			}
		);
		
	
	
	
$('.cate_choose').click(function(){
	
	
     search_category=$(this).attr('value');
	 searchA();
});


	  relative();				
	});

function searchA(){
	
			   var url="__GROUP__/article/search";
			   
			   var map=$('form').serialize()+'&category_id='+search_category;
			   $.get(url,map,function(data){
				   $('#article_search_box').html(data);
				   });
				      
				relative(map);
	}

function relative(map){
	
	      $('.right').load('__GROUP__/article/relative',map).fadeIn();
	}
	




function category_selected(obj){
	obj.toggleClass('哈哈');
	}	
	
</script>
<div class="head">
<a href="<?php echo U('home/index');?>"><div class='index'></div></a>
 <div class="usermenu">
  <ul>
    <li><a>你好:<?php echo ($_SESSION["username"]); ?></a></li>
    <li><span class="menu_money"></span><a  href="<?php echo U('money/index');?>" >充值</a></li>
    <li><span class="menu_setting"></span><a  href="<?php echo U('home/profile');?>" >设置</a></li>
    <li><span class="menu_help"></span><a  href="<?php echo U('about/help');?>" >帮助</a></li>
    <li><span class="menu_pay"></span><a  href="<?php echo U('pay/index');?>" >积分[<?php echo ($_SESSION["score"]); ?>]</a></li>
    <li><span class="logout_icon"></span><a href="<?php echo U('public/logout');?>">安全退出</a></li>
  </ul>
 </div>
</div>


<style type="text/css">
.article_content,.article_info,.article_limit{
	border-bottom:#BBB solid 1px;
}
.article_content{
min-height:500px;
padding-top:20px;
	}
.article_info{
	text-align:center;
	padding-top: 20px;
	}	
	
.article_limit{
	float:right;	
}

.article_title_font{
	text-align:center;
	font-size:24px;
	}
	
.article_box {
    left: 50%;
    margin-left: -400px;
    position: relative;
    width: 800px;
	background-color:#FFF;
}	
</style>
<div class="article_box">
  <h1 class="article_title_font"><?php echo ($article["article_title"]); ?></h1>
  <div class="article_info">作者：<?php echo ($article_title); ?> 发布时间：<?php echo ($article["publish_time"]); ?> 浏览次数：<?php echo ($article["read_count"]); ?> 打印次数：<?php echo ($article["download_count"]); ?></div><div class="article_content"><?php echo ($article["content"]); ?></div>

  <div class="share"><!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
        <span class="bds_more">分享到：</span>
        <a class="bds_qzone">QQ空间</a>
        <a class="bds_tsina">新浪微博</a>
        <a class="bds_tqq">腾讯微博</a>
        <a class="bds_renren">人人网</a>
		<a class="shareCount"></a>
    </div>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->  <p><?php echo ($page_show); ?></p></div>
  <div class="article_limit">
    <p>支付积分：<?php echo ($article["score_pay"]); ?>  免费预览: <?php echo ($article["free_page"]); ?> 页 <a href="#" onClick="printer()">开始打印</a></p>
  </div>
</div>

<object  id="LODOP_OB" classid="clsid:2105C259-1E0C-4534-8141-A753534CB4CA" width=0 height=0> 
  <embed id="LODOP_EM" type="application/x-print-lodop" width=0 height=0></embed>
</object>
<script type="text/javascript">
function getLodop(oOBJECT,oEMBED){
/**************************
  本函数根据浏览器类型决定采用哪个对象作为控件实例：
  IE系列、IE内核系列的浏览器采用oOBJECT，
  其它浏览器(Firefox系列、Chrome系列、Opera系列、Safari系列等)采用oEMBED。
**************************/
        var strHtml1="<br><font color='#FF00FF'>打印控件未安装!点击这里<a href='__STATICS__/install_lodop.exe'>执行安装</a>,安装后请刷新页面或重新进入。</font>";
        var strHtml2="<br><font color='#FF00FF'>打印控件需要升级!点击这里<a href='__STATICS__/install_lodop.exe'>执行升级</a>,升级后请重新进入。</font>";
		 var strHtml3="<br><br><font color='#FF00FF'>注意：<br>1：如曾安装过Lodop旧版附件npActiveXPLugin,请在【工具】->【附加组件】->【扩展】中先卸它;<br>2：";
        var LODOP=oEMBED;		
	try{		     
	     if (navigator.appVersion.indexOf("MSIE")>=0) LODOP=oOBJECT;

	     if ((LODOP==null)||(typeof(LODOP.VERSION)=="undefined")) {
		 if (navigator.userAgent.indexOf('Firefox')>=0)
  	         document.documentElement.innerHTML=strHtml3+document.documentElement.innerHTML;
		 if (navigator.appVersion.indexOf("MSIE")>=0) document.write(strHtml1); else
		 document.documentElement.innerHTML=strHtml1+document.documentElement.innerHTML;
		 return LODOP; 
	     } else if (LODOP.VERSION<"6.0.5.6") {
		 if (navigator.appVersion.indexOf("MSIE")>=0) document.write(strHtml2); else
		 document.documentElement.innerHTML=strHtml2+document.documentElement.innerHTML; 
		 return LODOP;
	     }
	     //*****如下空白位置适合调用统一功能:*********	     

	     //*******************************************
	     return LODOP; 
	}catch(err){
	     document.documentElement.innerHTML="Error:"+strHtml1+document.documentElement.innerHTML;
	     return LODOP; 
	}
}

var LODOP=getLodop(document.getElementById('LODOP_OB'),document.getElementById('LODOP_EM'));

</script>
<script type="text/javascript">

function printer(){
	
	var url="__URL__/printer/article_id/<?php echo ($_GET["article_id"]); ?>";
	
	$.get(url,function(json){
		
		     if(json.status==1){
				  myPreview(json.data);
			 }else if(json.status==0){
					alert(json.info);
					window.location.href="<?php echo U('money/index');?>";
				 };
		
		},"json");
}


  function myPreview(data) { 
    LODOP.PRINT_INIT("");
    LODOP.ADD_PRINT_HTM(20,2,1200,900,data);
    LODOP.PREVIEW();
  };
</script>
<div class="foot">备案号：**** 电话：***** 公司地址：****** qq：********<br /></div>
</body>
</html>