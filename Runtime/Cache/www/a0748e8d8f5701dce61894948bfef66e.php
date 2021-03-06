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
<style type="text/css">
.alipay {
	margin-top:20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	userMoney();
	
	$('#user_search_button').click(function(){

		           userMoney();
		});
		$('.page_show a').live('click',function(){
		      $('#tool_bar_content').load($(this).attr('href'));
			  return false;
		});
});


function userMoney(){
	
		$.get('<?php echo U('ajax');?>',$('form').serialize(),
function(data){
	
			$('#tool_bar_content').html(data);
			});
}

</script>


<div class="menu_center">
  <div class="tool_bar">
    <div class="tool_bar_head">
      <h4 class="tool_head_font">充值查询</h4>
    </div>
    <div class="tool_menu">
      <form action="" method="get">
        <table width="672" border="0">
          <tr>
            <td width="512">

<script type="text/javascript">

$('document').ready(function(){
	
	
		
	$("#date2").datepicker();
$( "#date1" ).datepicker();
	});

</script>

日期从
<input name="date1" type="text" id="date1">到<input name="date2" type="text" id="date2"></td>
            <td width="105"><input name="查询" type="button" id="user_search_button" value="查询"></td>
          </tr>
  </table>
  </form>
    </div>
    <div id="tool_bar_content"></div>
  </div>
  <div class="alipay"><?php
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<TITLE>支付宝即时到帐接口</TITLE>
<script language=JavaScript>
function CheckForm()
{
	if (document.alipayment.subject.value.length == 0) {
		alert("请输入商品名称.");
		document.alipayment.subject.focus();
		return false;
	}
	if (document.alipayment.total_fee.value.length == 0) {
		alert("请输入付款金额.");
		document.alipayment.total_fee.focus();
		return false;
	}
	var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
	if (! reg.test(document.alipayment.total_fee.value))
	{
        alert("请正确输入付款金额");
		document.alipayment.total_fee.focus();
		return false;
	}
	if (Number(document.alipayment.total_fee.value) < 0.01) {
		alert("付款金额金额最小是0.01.");
		document.alipayment.total_fee.focus();
		return false;
	}
	function getStrLength(value){
        return value.replace(/[^\x00-\xFF]/g,'**').length;
    }
    if(getStrLength(document.alipayment.alibody.value) > 200){
        alert("备注过长！请在100个汉字以内");
        document.alipayment.alibody.focus();
        return false;
    }
    if(getStrLength(document.alipayment.subject.value) > 256){
        alert("标题过长！请在128个汉字以内");
        document.alipayment.subject.focus();
        return false;
    }

	document.aplipayment.alibody.value = document.aplipayment.alibody.value.replace(/\n/g,'');
}  

</script>

<style>
*{
	margin:0;
	padding:0;
}
ul,ol{
	list-style:none;
}
.title{
    color: #ADADAD;
    font-size: 14px;
    font-weight: bold;
    padding: 8px 16px 5px 10px;
}
.hidden{
	display:none;
}

.new-btn-login-sp{
	border:1px solid #D74C00;
	padding:1px;
	display:inline-block;
}

.new-btn-login{
    background-color: transparent;
    background-image: url("__STATICS__/img/new-btn-fixed.png");
    border: medium none;
}
.new-btn-login{
    background-position: 0 -198px;
    width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.new-btn-login:hover{
	background-position: 0 -167px;
	width: 82px;
	color: #FFFFFF;
    font-weight: bold;
    height: 28px;
    line-height: 28px;
    padding: 0 10px 3px;
}
.bank-list{
	overflow:hidden;
	margin-top:5px;
}
.bank-list li{
	float:left;
	width:153px;
	margin-bottom:5px;
}

#main{
	width:750px;
	margin:0 auto;
	font-size:14px;
	font-family:'宋体';
}
#logo{
	background-color: transparent;
    background-image: url("__STATICS__/img/new-btn-fixed.png");
    border: medium none;
	background-position:0 0;
	width:166px;
	height:35px;
    float:left;
}
.red-star{
	color:#f00;
	width:10px;
	display:inline-block;
}
.null-star{
	color:#fff;
}
.content{
	margin-top:5px;
}

.content dt{
	width:100px;
	display:inline-block;
	text-align:right;
	float:left;
	
}
.content dd{
	margin-left:100px;
	margin-bottom:5px;
}
#foot{
	margin-top:10px;
}
.foot-ul li {
	text-align:center;
}
.note-help {
    color: #999999;
    font-size: 12px;
    line-height: 130%;
    padding-left: 3px;
}

.cashier-nav {
    font-size: 14px;
    margin: 15px 0 10px;
    text-align: left;
    height:30px;
    border-bottom:solid 2px #CFD2D7;
}
.cashier-nav ol li {
    float: left;
}
.cashier-nav li.current {
    color: #AB4400;
    font-weight: bold;
}
.cashier-nav li.last {
    clear:right;
}
.alipay_link {
    text-align:right;
}
.alipay_link a:link{
    text-decoration:none;
    color:#8D8D8D;
}
.alipay_link a:visited{
    text-decoration:none;
    color:#8D8D8D;
}
</style>
</head>
<body text=#000000 bgColor=#ffffff leftMargin=0 topMargin=4>
	<div id="main">
<div id="head">
  <div id="logo"></div>
<span class="title">支付宝即时到帐付款快速通道</span>
	<!--<div id="title" class="title">支付宝即时到帐付款快速通道</div>-->
  </div>
        <div class="cashier-nav">
            <ol>
                <li class="current">1、确认付款信息 →</li>
                <li>2、付款 →</li>
                <li class="last">3、付款完成</li>
            </ol>
        </div>
        <form name=alipayment onSubmit="return CheckForm();" action='__APP__/secure/alipayto' method=post target="_blank">
            <div id="body" style="clear:left">
                <dl class="content">
                    <dt>标题：</dt>
                    <dd>
                        <span class="red-star">*</span>
                        <input name=subject value="医学网用户充值" size=30 readonly="readonly" />
                    </dd>
                    <dt>付款金额：</dt>
                    <dd>
                        <span class="red-star">*</span>
                        <input maxLength=10 size=30 name=total_fee onfocus="if(Number(this.value)==0){this.value='';}" value="00.00"/>
                        <span>如：112.21</span>
                    </dd>
                    <dt>&nbsp;</dt>
                    <dd>&nbsp;</dd>
                    <dt></dt>
                    <dd>
                        <span class="new-btn-login-sp">
                            <button class="new-btn-login" type="submit" style="text-align:center;">确认付款</button>
                        </span>
                    </dd>
                </dl>
            </div>
		</form>
        <div id="foot">
			<ul class="foot-ul">
			  <li></li>
			</ul>
			<ul>
		</div>
	</div>
</body>
</html></div>
</div>

<div class="foot">备案号：**** 电话：***** 公司地址：****** qq：********<br /></div>
</body>
</html>