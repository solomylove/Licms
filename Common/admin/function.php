<?php


function status($status){
	$status=$status=='1'?'已审核':'未审核';
	echo $status;
}

function checkbox($status){
	if($status=='1') echo 'checked';
}


function checkbox_value_create($field){
	
 return !empty($field)?'1':0;
}