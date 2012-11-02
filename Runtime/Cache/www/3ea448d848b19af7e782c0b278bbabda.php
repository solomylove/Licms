<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript"><!--


var province_id='<?php echo ($province_id); ?>';

var city_id='<?php echo ($city_id); ?>';


<!--省份 -->
var provinces=new Array();
    
  <?php if(is_array($provinces)): $i = 0; $__LIST__ = $provinces;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>provinces[<?php echo ($key); ?>]=new Array('<?php echo ($vo["ID"]); ?>','<?php echo ($vo["PROVINCENAME"]); ?>');<?php endforeach; endif; else: echo "" ;endif; ?>
  <!--城市 -->
var  cities=new Array();

<?php if(is_array($cities)): $i = 0; $__LIST__ = $cities;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>cities[<?php echo ($key); ?>]=new Array('<?php echo ($vo["PID"]); ?>','<?php echo ($vo["CITYNAME"]); ?>','<?php echo ($vo["ID"]); ?>');<?php endforeach; endif; else: echo "" ;endif; ?>



$(document).ready(function(){
	      
		  

		 
		 selectProvinces();
         
		 selectCities(); 
		  
		  

         //省份被选择时候

         $('#provinces').live('change',function(){
			     province_id=$(this).val();
				 selectCities();
		 });
	
	});
	
function selectCities(){
	

			 cities_html='<option value="">请选择</option>';

				$(cities).each(function(index,value){
				   if(province_id==value[0]){
		               var se='';
			          if(value[2]==city_id){
				  
				       se='selected';
				  }
				         cities_html+='<option value="'+value[2]+'"'+se+'>'+value[1]+'</option>';
					}
					
					});
					
				$('#cities').html(cities_html);
	
	}
	
	
	
function selectProvinces(){
	
		var provinces_html='';
			 provinces_html='<option value="">请选择</option>';

		  $(provinces).each(function(index,value){
			  
			  var se='';
			  
			  if(value[0]==province_id){
				  
				  se='selected';
				  
				  }
			  
	          provinces_html+='<option value="'+value[0]+'"'+se+'>'+value[1]+'</option>';
		  });
		  
		  $('#provinces').html(provinces_html);
	
	
	}	
	

--></script>


<select name="province_id" id="provinces">

    
</select> <select name="city_id" id="cities"></select>