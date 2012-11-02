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

<script type="text/javascript" src="__STATICS__/ui/jquery.ui.datepicker-zh-CN.js"></script>
<link rel="stylesheet" type="text/css" href="__STATICS__/css/datepicker.css" />
<script src="__STATICS__/ui/jquery.ui.core.min.js"></script>
<script src="__STATICS__/ui/jquery.ui.widget.min.js"></script>
<script src="__STATICS__/ui/jquery.ui.datepicker.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#birthday').datepicker({changeMonth: true,
			changeYear: true, yearRange: '1900:2010'});
	});
</script>
<div class="menu_center">
  <div class="tool_bar">
    <div class="tool_bar_head">
      <h4 class="tool_head_font">修改资料</h4>
    </div>
    <div id="tool_bar_content">  <form action="<?php echo U(updateProfile);?>" method="post">
    <div class="item">
      <table width="812" height="382" border="0">
        <tr>
          <td width="94" height="33"><label for="textfield5">账户：</label></td>
          <td width="708"><?php echo ($user["username"]); ?></td>
        </tr>
        <tr>
          <td height="55">电话：</td>
          <td><label for="password"></label>
            <input name="phone" type="text" class="input_input" id="textfield" value="<?php echo ($user["phone"]); ?>"></td>
        </tr>
        <tr>
          <td height="41">邮箱</td>
          <td><input name="email" type="text" class="input_input" id="textfield3" value="<?php echo ($user["email"]); ?>"></td>
        </tr>
        <tr>
          <td height="38">地区</td>
          <td><?php echo W('ShowArea',array('province_id'=>$user['province_id'],'city_id'=>$user['city_id']));?></td>
        </tr>
        <tr>
          <td height="44">生日：</td>
          <td><label for="birthday"></label>
            <input name="birthday" type="text" id="birthday" value="<?php echo ($user["birthday"]); ?>"></td>
        </tr>
        <tr>
          <td height="24">性别</td>
          <td>
          <input type="radio" name="radio" id="sex" value="1">
            男
            <input type="radio" name="radio" id="sex2" value="1">
            女</td>
        </tr>
        <tr>
          <td height="28">qq</td>
          <td><input name="qq" type="text" id="qq" value="<?php echo ($user["qq"]); ?>"></td>
        </tr>
        <tr>
          <td height="28">传真</td>
          <td><input name="fax" type="text" id="fax" value="<?php echo ($user["fax"]); ?>"></td>
        </tr>
        <tr>
          <td height="25">真实姓名</td>
          <td><input name="truename" type="text" id="truename" value="<?php echo ($user["truename"]); ?>"></td>
        </tr>
        <tr>
          <td height="44">地址：</td>
          <td><input name="address" type="text" class="input_input" id="address" value="<?php echo ($user["address"]); ?>"></td>
        </tr>
      </table>
      <p>
        <input type="submit" name="button" id="button" value="修改" class="button">
    </div>
  </form></div>
  </div>
</div>

<div class="foot">备案号：**** 电话：***** 公司地址：****** qq：********<br /></div>
</body>
</html>