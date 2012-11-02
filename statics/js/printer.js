// JavaScript Document


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



function printer(id){
	
	var url="__URL__/printer/article_id/"+id;
	
	$.get(url,function(json){
		
		     if(json.status==1){
				  myPreview(json.data);
			 }else if(json.status==0){
					alert(json.info);
					window.location.href="{:U('money/index')}";
				 };
		
		},"json");
}




  function myPreview(data) { 
    LODOP.PRINT_INIT("");
    LODOP.ADD_PRINT_HTM(20,2,1200,900,data);
    LODOP.PREVIEW();
  };