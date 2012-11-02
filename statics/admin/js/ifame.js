// JavaScript Document

$(document).ready(function(){
	  $('.delete_button').live('click',function(){
		  delete_button($(this).parent().parent().find(':checkbox').val(),this);
	  });
$('.page_show a').live('click',function(){
	
	      $('#manage_content').load($(this).attr('href'));
		  return false;
	});
	
	$('.status_button').live('click',function(){
		obj=this;
	$.get($(this).attr('href'),function(json){
		if(json.status=='1'){
			var text=$(obj).text();
			
			if(-1!==text.search(/^已/)){
				text=text.replace(/已/,'未');
			}else{
				text=text.replace(/未/,'已');	
			}

			$(obj).text(text);
			}
		},'json')
		return false;
	});
	
$('.confirm').click(function(){
	
     $re=window.confirm('确定');
	
	if($re==false){
		
		return false;
		}
	});	


//ajax 提交

$('#ajax_submit').click(function(){
	  $url=$("form").attr('action');
	  
	  $.post($url,$("form").serialize(),function(json){
		   alert(json.info);
		  },'json');
	  $('form').submit(function(){
		  
		  return false;
		  
		  });
	});



//动态输入

$('.activeinput').click(function(){
	        if($(this).attr('lock')!=='1'){
			  $(this).attr('lock','1');
			  $(this).attr('oldvalue',$(this).html());
			  $(this).html('<input type="text" value="'+$(this).html()+'" style="width:'+$(this).attr('iwidth')+'">');
			}
	});
	
$('.activeinput').mouseleave(function(){
	obj=this;
	if($(this).attr('lock')=='1' && $(this).find('input').val()!==$(this).attr('oldvalue')){  //不同时才请求
		$.get($(this).attr('link'),{'value':$(this).find('input').val()},function(json){
		if(json.status==1){
			$(obj).attr('lock','');
			$(obj).attr('oldvalue',$(obj).find('input').val());
			$(obj).html($(obj).find('input').val());
			}else{
				$(obj).find('input').css('color','red');
				}
		},'json');
		}else{
			if($(this).attr('lock')=='1'){	
	        $(this).attr('lock','');
			$(this).html($(this).attr('oldvalue'));
				}
			}
	});


$('#manage_content tr').hover(function(){
     $(this).addClass('trhover');
	},function(){
		$(this).removeClass('trhover');
		});




$(':checkbox').live('click',function(){
      $(this).parent().parent().toggleClass('selected');
	});
	  
	});
	
	

function delete_button(id,obj){
	 $result= window.confirm('确认删除'); 
		  if($result){
			  $.post(delete_button_url,{'id':id},function(json){
				  if(json.status==1){
					  $(obj).closest('tr').remove();
					  }else{
						  alert(json.info);
						  }
				  },"json");
		  }
	}
	
	
function deleteSelect(){
	
	   $('input:checked').each(function(){
		   
		   delete_button($(this).val(),this);
	});
}
	



//self.parent.document.getElementById("#content").style.width=width;
//self.parent.document.getElementById("#content").style.height=height;