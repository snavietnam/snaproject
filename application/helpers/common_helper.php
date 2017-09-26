<?php
function public_url($url = '')
{
	return base_url('public/'.$url);
}
function pre($list, $exit = true){
	echo "<pre>";
	print_r($list);
	if($exit){
		die();
	}
}
function show_values_in_month($row){
	if($row != ''){
		$total = 0;
		foreach($row as $row1){
			$total += $row1;
			}
		return $total;
	}else 
		return 'NULL';
}