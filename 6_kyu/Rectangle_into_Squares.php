<?php
function sqInRect($lng, $wdth) 
{
	if($lng == $wdth)
		return null;
    $reslut = [];
    $max = max([$lng,$wdth]);
    $min = min([$lng,$wdth]);
    while($max - $min != 0)
    {
    	$reslut[] = $min;
    	$tmp = $max - $min;
    	$max = max([$min,$tmp]);
    	$min = min([$min,$tmp]);
    }
    $reslut[] = $min;

    return $reslut;  	    
}
print_r(sqInRect(14,20));
?>