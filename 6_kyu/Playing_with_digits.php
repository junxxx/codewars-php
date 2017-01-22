<?php

/*
Is there an integer k such as : (a ^ p + b ^ (p+1) + c ^(p+2) + d ^ (p+3) + ...) = n * k
if k exist,return k;else return -1;
*/
function findDigitK($num,$p){

	if(!is_string($num)){
		$num = strval($num);
	}

	$sum = 0;
	for($i = 0;$i < strlen($num); $i++){
		$sum += pow($num[$i],$p);
		$p++; 
	}

	$k = $sum / intval($num);

	if(is_int($k)){
		return $k;
	}
	return -1;
}

$num = 92;
$p = 1;
findDigitK($num,$p);