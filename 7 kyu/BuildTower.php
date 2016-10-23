<?php
/*
	返回一个N层的对称金字塔
*/
function tower_builder(int $n) {
  // Build your tower here

	$result = [];

	for ($i=1; $i <= $n; $i++) { 
		$front = "";
		$end = "";		
		$front .= str_repeat(' ', $n-$i).str_repeat('*', $i);
		$end = substr(strrev($front),1);
		$result[] = $front .$end;
	}
	return $result; 
}

$test = tower_builder(4);
print_r($test);
?>