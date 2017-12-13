<?php
function compose($s1, $s2)
{
    $arr1 = explode("\n", $s1);
    $arr2 = explode("\n", $s2);
    $arrCom = array();
    $length = count($arr1);
    foreach($arr1 as $k => $v)
    {
        $arrCom[] = substr($arr1[$k], 0, $k + 1) . substr($arr2[$length - 1 - $k], 0 , $length - $k);
    }
    return implode("\n", $arrCom);
}
$s1 = "abcd\nefgh\nijkl\nmnop";
$s2 = "qrst\nuvwx\nyz12\n3456";
echo compose($s1, $s2);

