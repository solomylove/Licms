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
      <div class="login_right">
<script type="text/javascript" src="__STATICS__/js/jquery.validate.js"></script>
<script type="text/javascript" src="__STATICS__/ui/jquery.ui.datepicker-zh-CN.js"></script>
<link rel="stylesheet" type="text/css" href="__STATICS__/css/datepicker.css" />
<script src="__STATICS__/ui/jquery.ui.core.min.js"></script>
<script src="__STATICS__/ui/jquery.ui.widget.min.js"></script>
<script src="__STATICS__/ui/jquery.ui.datepicker.min.js"></script>
<style type="text/css">
.must_validate {
	color: #F00;
	float:right;
	margin-right:4px;
	
}


.main{
	height:700px;	
}

</style>


<style type="text/css">
/* CSS Document */

body {
font: normal 20px auto "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
color: #4f6b72;
}

a {
color: #c75f3e;
}

#regForm table {
width: 100%;
padding: 0;
margin: 0;
background-color:#FFFBF0;
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
#regForm th.nobg {
border-top: 0;
border-left: 0;
border-right: 1px solid #C1DAD7;
background: none;
}
.reg_box {
	overflow:hidden;
}

#regForm  td {
border-right: 1px solid #C1DAD7;
border-bottom: 1px solid #C1DAD7;
background: #fff;
font-size:13px;
padding: 6px 6px 6px 12px;
color: #4f6b72;
}

#regForm  td.alt {
background: #F5FAFA;
color: #797268;
}

#regForm  th.spec {
border-left: 1px solid #C1DAD7;
border-top: 0;
background: #fff no-repeat;
font: bold 13px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
}


#regForm  th.specalt {
border-left: 1px solid #C1DAD7;
border-top: 0;
background: #f5fafa no-repeat;
font: bold 20px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
color: #797268;
}
}

</style>


<script type="text/javascript">
$(document).ready(function(){

	$( "#birthday" ).datepicker({changeMonth: true,
			changeYear: true, yearRange: '1900:2010'});
	$("#regForm").validate({
		errorClass:'error',
		validClass:'success',
		errorElement: "em",
		onfocusout: function(element){ $(element).valid(); },
		 submitHandler: function(form) {
			 $.post('__GROUP__/public/checkreg',$('form').serialize(),function(data){
				 if(data.status==1){
					 window.location.href='<?php echo U('home/index');?>';
					 }else{
						alert(data.info); 
					 }
				 },'json')
 },
		rules: {
			username: { required: true,remote: {
					url: "<?php echo U('public/checkUsername');?>",
					type: "post",
					dataType: "json",
					data: {
						username: function(){return $("#username").val()},
					}
				}
			},
			password: { required: true, minlength: 4 ,},
			repassword: { required: true, minlength: 4,equalTo:"#password"},
			verify: { required: true},
			question:{required:true},
			answer:{required:true},
			email:{required:true,email:true},
		},
		messages: {
			username: { required: "请输入账户。"},
			password: { required: "请输入密码", minlength: "密码太短了，最少4位。" },
			repassword: { required: "请输入重复密码。", minlength: "密码太短了，最少4位。",
			              equalTo:"两次输入不一致",        
									},
					    question:{required:"安全问题有助于你找回密码"},
			answer:{required:"输入你的答案"},
			email:{required:"请输入邮箱",email:'邮箱格式不对'},
			verify: { required: "请输入验证码"}
		},
	});
	
	
	
});
	</script>

<h4>用户注册</h4>
<div class="reg_box">
    <div class="item">
<form action="<?php echo U('public/checkreg');?>" method="post" id="regForm">      <table width="675" height="482" border="0">
        <tr>
          <td width="120" height="27"><label for="textfield5">用户名：<span class="must_validate">*</span></label></td>
          <td width="545"><input name="username" type="text" class="input_input" id="username" autocomplete="off"></td>
        </tr>
        <tr>
          <td height="24"><label for="address">密码：<span class="must_validate">*</span></label></td>
          <td><input name="password" type="password" class="input_input" id="password"></td>
        </tr>
        <tr>
          <td height="32"><label for="textfield7">重复密码：<span class="must_validate">*</span></label></td>
          <td><input name="repassword" type="password" class="input_input" id="textfield6"></td>
        </tr>
        <tr>
          <td height="25">提示问题：<span class="must_validate">*</span></td>
          <td><input type="text" name="question" id="question"></td>
        </tr>
        <tr>
          <td height="27">答案：<span class="must_validate">*</span></td>
          <td><input type="text" name="answer" id="answer"></td>
        </tr>
        <tr>
          <td height="25">真实姓名：</td>
          <td><input type="text" name="truename" id="truename"></td>
        </tr>
        <tr>
          <td height="24">出生日期：</td>
          <td><input type="text" name="birthday" id="birthday"></td>
        </tr>
        <tr>
          <td height="24">性别：</td>
          <td><input type="radio" name="radio" id="sex" value="1">
          男
            <input type="radio" name="radio" id="sex2" value="1">
            女</td>
        </tr>
        <tr>
          <td height="33">手机：</td>
          <td><label for="password"></label>
          <input type="text" name="phone" id="textfield" class="input_input"></td>
        </tr>
        <tr>
          <td height="28">qq：</td>
          <td><input type="text" name="qq" id="qq"></td>
        </tr>
        <tr>
          <td height="28">传真：</td>
          <td><input type="text" name="fax" id="fax"></td>
        </tr>
        <tr>
          <td height="26">邮箱：<span class="must_validate">*</span></td>
          <td><input type="text" name="email" id="email" class="input_input"></td>
        </tr>
        <tr>
          <td height="21">地区：<span class="must_validate">*</span></td>
          <td><?php echo W('ShowArea',array('province_id'=>$province_id,'city_id'=>$city_id,'_init_text'=>'none'));?></td>
        </tr>
        <tr>
          <td height="28">地址：</td>
          <td><input type="text" name="address" id="address" class="input_input"></td>
        </tr>
        <tr>
          <td height="38">验证码：<span class="must_validate">*</span></td>
          <td><label for="verify"></label>
          <input name="verify" type="text" id="verify" size="10">
          <img src="<?php echo U('public/verify.jpg');?>" id="verify_button"></td>
        </tr>
        <tr>
          <td height="38">推荐人：</td>
          <td><label for=""></label>
          <input name="recommended" type="text" id="recommended"></td>
        </tr>
      </table>
        <input name="reg_button" type="submit" id="reg_button" value="注册">
      </form>
    </div>

</div></div>
    </div>
      <div class="foot">备案号：**** 电话：***** 公司地址：****** qq：********<br /></div>
  </div>
</body>
</html>