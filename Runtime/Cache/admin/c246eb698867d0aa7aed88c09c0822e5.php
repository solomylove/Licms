<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>医学网后台管理</title>
<script type="text/javascript" src="__STATICS__/js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="__STATICS__/css/reset.css" />
</head>
<style type="text/css">


body{
	background-color:#AAA;
	font-family: "宋体", Arial, Helvetica, sans-serif;
}

li{
	
	
		list-style-type:none;
		
	}

.content {
	background-color:#FFF;
	border-left:#DDD solid 1px;
	width:1100px;
	float:left;
	height:auto !important;
}
#content{
	width:100%;
	width: auto; height: auto!important; min-height: 1000px; height: 1000px;width: 1100px; border: 0;
	}
	
.body{
	padding-top:10px;
	padding-left:10px;
}
.usermenu {
	width: 200px;
	float:left;
}
.topmenu {
	float: right;
}

.topmenu a{
	   color:#FFFBF0;
	}


.mainmenu li{
	list-style-type:none;
	}
	
	
.head {
	background-color: #2A0055;
	height:40px;
	width:100%;
	padding-top:10px;
}

.topmenu li {
	float:left;
	margin-right:10px;
	}

.mainmenu li a:hover{
	background-color:#2A5FFF;
	}

.mainmenu_font{
	background-image: url(__STATICS__/img/mainmenu_bg.png);
	background-repeat: no-repeat;
	cursor:pointer;
	height: 30px;
	color: #2A1F55;
	padding-left:5px;
		padding-top:2px;
	}

a {
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;;
	text-decoration: none;
	color: #400000;
}	
</style>

<script type="text/javascript">
$(document).ready(function(){
 	var animate_obj=$('.mainmenu_font').parent().find('ul');
	animate_obj.hide();
	$('.mainmenu_font').toggle(function(){
		$('.usermenu').animate().stop();
		$(this).parent().find('ul').slideUp('fast');
		},function(){
					$('.usermenu').animate().stop();
					$(this).parent().find('ul').slideDown('fast');
			});
	});
function menu(target){
	$('#content').attr('src',target);
	}
</script>
<body>

  <div class="head">
    <ul class="topmenu">  <li><a>你好:<?php echo ($_SESSION["username"]); ?></a></li>
      <li><a>上次登录：<?php echo (date('y-m-d H-i-s',$_SESSION["last_login_time"])); ?></a></li>
       <li><a href="javascript:menu('__GROUP__/password')">修改密码</a></li>
       <li><a href="javascript:menu('__GROUP__/filecache')">更新首页缓存</a></li>
    <li><a><a href="__GROUP__/public/logout">退出</a></a></li></ul>
  </div>
  <div class="body">
  <div class="usermenu">
    <?php foreach($menu as $key1=>$value1){ echo '<div class="mainmenu">'; $menu_title=$value1['menu_title']; echo "<h4 class='mainmenu_font'>$menu_title</h4>"; if(is_array($value1['_child'])){ echo "<ul>"; foreach($value1['_child'] as $key2 =>$value2){ $url='__GROUP__/'.$value2['menu_name']; $menu_title=$value2['menu_title']; echo "<li><a href='javascript:menu(\"$url\")'>$menu_title</a></li>"; } echo "</ul>"; } echo "</div>"; } ?>
  </div>
  <div class="content"><iframe src="__URL__/showDefault" scrolling="no" frameborder="0" id="content"> </iframe></div>
</div>
</body>
</html>