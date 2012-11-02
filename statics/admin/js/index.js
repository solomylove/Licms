// JavaScript Document


$(document).ready(function(){
	$('.mainmenu_font').parent().find('ul').hide();
	$('.mainmenu_font').toggle(function(){
		 $('.mainmenu_font').animate().stop();
			 $(this).parent().find('ul').slideDown('fast');
		},function(){
		$('.mainmenu_font').animate().stop();
			 $(this).parent().find('ul').slideUp('fast');
			})
	});
function menu(menu_id,target){
	$('#content').attr('src',target+'/menu_id/'+menu_id);
	}
	
	

function autoIframe(height){
	
	//ifame 自适应

	//if($.browser.msie){
	//	document.getElementById("content").style.height=rating_comments.document.body.scrollHeight;
		//}else{
	// var height=$('#content').contents().height();
	//$('#content').height(height);
			//}
			var height=document.getElementById('content').contentWindow.document.body.scrollHeight;
			alert("s");
			//$("#content").height(height);

	}	
	