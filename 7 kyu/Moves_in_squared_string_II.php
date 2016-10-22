<?php

function rot($s) {
    $str2array = explode("\n", $s);
    $result = array();    
    
    foreach ($str2array as $key => $value) {        
        $result[] = strrev($value);
    }
        

    return implode("\n", array_reverse($result));

    /* what a fuck stupid solution !!!
    *  strrev()  done what I've build.
    */
    // return strrev($s);
}
function selfieAndRot($s) {
    $str2array = explode("\n", $s);
    $result = array();    
    
    foreach ($str2array as &$row) {        
        $row .=str_repeat(".", strlen($row));
    }
    unset($row);
    $tmp_array = explode("\n", rot($s));
    foreach ($tmp_array as &$row) {        
        $row = str_repeat(".", strlen($row)).$row;
    }
    unset($row);
    return implode("\n", array_merge($str2array,$tmp_array));
}

function diag1Sym($s) {
    
    $str2array = explode("\n", $s);
    $result = array();
    $strlength = strlen($str2array[0]);
    
    for($i=0;$i<$strlength;$i++)
	{
		$result[$i] = "";
		foreach ($str2array as $key => $value) {		
    		$result[$i] .= $value[$i];
    	}
		
	}
    
    return implode("\n", $result);
}
function rot90Clock($s) {
    $str2array = explode("\n", $s);
    $result = array();
    $strlength = strlen($str2array[0]);
    
    for($i=0;$i<$strlength;$i++)
	{
		$result[$i] = "";
		foreach ($str2array as $key => $value) {		
    		$result[$i] .= $value[$i];
    	}
    	$result[$i] = strrev($result[$i]);
		
	}

	return implode("\n", $result);
}
function selfieAndDiag1($s) {
    $str2array = explode("\n", $s);
    $result = array();
    $strlength = strlen($str2array[0]);
    
    for($i=0;$i<$strlength;$i++)
	{
		$result[$i] = $str2array[$i];
		$tmp = "";
		foreach ($str2array as $key => $value) {		
    		$tmp .= $value[$i];
    	}
		$result[$i] .= "|".$tmp;
	}

	return implode("\n", $result);
}
function oper($fct, $s) {
    return $fct($s);
    // if($fct =="diag1Sym")
    // {
    // 	return diag1Sym($s);
    // }elseif ($fct =="rot90Clock") {    	
    // 	return rot90Clock($s);
    // }elseif ($fct =="selfieAndDiag1") {
    // 	return selfieAndDiag1($s);
    // }
}
$s = "abcd\nefgh\nijkl\nmnop";
print_r(selfieAndRot($s));exit;
// print_r(diag1Sym($s));
// print_r(rot90Clock($s));
// print_r(selfieAndDiag1($s));
$y = "EFAxSN\nXbJObC\nMrNVyg\nUKqDsE\nrYnAfU\nnNjADZ";
$r = oper("rot", $s);
print_r($r);
/*
 TODO duplicate function fix

*/
?>