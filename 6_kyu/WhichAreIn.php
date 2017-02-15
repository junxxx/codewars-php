<?php
/*
 *@param array1,array2
 * Given two arrays of strings a1 and a2 return a sorted array r in lexicographical order of the strings of a1 which are substrings of strings of a2.
 */
function inArray($a1, $a2){
	$result = array();
	if( is_array($a1) && is_array($a2) ){
		foreach ($a1 as $k1 => $v1) {
			foreach ($a2 as $k2 => $v2) {				
				if(strpos($v2,$v1) !== false && !in_array($v1,$result)){
					$result[] = $v1;
				}				
			}
		}
	}
	sort($result);
	return $result;
}

$a2 = ["lively", "alive", "harp", "sharp", "armstrong"];
$a1 = ["arp", "live", "strong"];
$a3 = inArray($a1,$a2);
print_r($a3);
?>	