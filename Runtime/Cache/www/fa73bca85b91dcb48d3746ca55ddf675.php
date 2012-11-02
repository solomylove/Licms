<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
<script type="text/javascript" src="__STATICS__/js/jquery.min.js"></script>
<script type="text/javascript" src="__STATICS__/js/common.js"></script>
<link href="__STATICS__/css/default.css" rel="stylesheet" type="text/css">
</head>
<STYLE>


.login_head {
	background-image: url(__STATICS__/img/topbg.png);
	height: 40px;
	
}

em.error {
	background-image: url(__STATICS__/img/error.png);
	background-repeat: no-repeat;
	padding-left:40px;
	background-size:19px,19px;
	background-position: 7px;
	font-size: 15px;
	color: #808080;
}

.index_font {
	color: #FFFBF0;
	font-size: 20px;
	font-weight: bold;
	margin-top:30px;
}

.login_body {
	width: 1100px;
	left: 50%;
	margin-left:-550px;
	position: absolute;
	border: 1px solid #CCC;
}

.login_left {
	width:220px;
	height:auto;
	float:left;
	background-color: #F1F1F1;
	height:100%;
}

.login_right {
	float:left;
	background-color:#FFF;
	height:100%;
	padding-left:30px;
}

li{
	list-style:none;
		}
.main{
	height:500px;
	overflow-y:auto scroll;
	}		
		
</STYLE>




<SCRIPT type=text/javascript>

$(document).ready(function(){
	
	$('#login_button').click(function(){
		
		
		$.post("<?php echo U('public/checklogin');?>",{
			
			username:$('#login_username').val(),
			
			password:$('#login_password').val(),			
			
			},function(json){
			
			if(json.status==1){
				window.location.href="<?php echo U('home/index');?>";
				}else{
					alert(json.info);
					}
			
			},'json')
		
		});
	});
	


</SCRIPT>

<body>
<div class="login_body">
    <div class="login_head"><strong class="index_font">医学网</strong></div>
    <div class="main">
      <div class="login_left"><table width="216" border="0">
  <tr>
    <td width="51" height="61">&nbsp;</td>
    <td width="155">&nbsp;</td>
  </tr>
  <tr>
    <td>账户：</td>
    <td><input name="login_username" type="text" id="login_username" size="20"></td>
  </tr>
  <tr>
    <td height="31">密码：</td>
    <td>
      <input name="login_password" type="text" id="login_password" size="20"></td>
  </tr>
  <tr>
    <td height="41">&nbsp;</td>
    <td><input type="checkbox" name="checkbox" id="checkbox">
      <label for="checkbox">记住密码</label></td>
  </tr>
  <tr>
    <td height="34">&nbsp;</td>
    <td><input type="button" name="login_button" id="login_button" value="登陆" class="button">   </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><ul>
      <li><a href="<?php echo U('public/reg');?>">注册</a></li>
      <li><a href="<?php echo U('password/step1');?>">找回密码</a></li>
    </ul>      </td>
  </tr>
      </table>
</div>
      <div class="login_right"><style type="text/css">
.index_box_font {
	color: #2A1FAA;
	font-size: 36px;
}

.index_box {
	position:relative;
	text-align: center;
	top:30%;
}
</style>


<div class="index_box">
在文章首页'首页'分类下，编辑文章<br />
</div>
</div>
    </div>
      <div class="foot">备案号：**** 电话：***** 公司地址：****** qq：********<br /></div>
  </div>
</body>
</html>