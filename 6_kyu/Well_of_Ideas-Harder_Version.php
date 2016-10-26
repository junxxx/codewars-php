<?php
function well($arr)
{
	$tmp = [];
	foreach ($arr as $key => $value) {
		foreach ($value as $k => $v) {
			$tmp[] = strtolower($v);
		}
		
	}
	$count = array_count_values($tmp);
	/*made a mistake below, key value confused*/
	if(array_key_exists ('good',$count)){
		if($count['good'] <= 2)
			return 'Publish!';
		else {
			return 'I smell a series!';
		}
	}else {
		return 'Fail!';
	}	
}
$test = [['bad', 'bAd', 'bad'], ['bad', 'bAd', 'bad'], ['bad', 'bAd', 'bad']];
$test1 = [['gOOd', 'bad', 'BAD', 'bad', 'bad'], ['bad', 'bAd', 'bad'], ['GOOD', 'bad', 'bad', 'bAd']];
$test2 = [['gOOd', 'bAd', 'BAD', 'bad', 'bad', 'GOOD'], ['bad'], ['gOOd', 'BAD']];
print_r(well($test1));
?>