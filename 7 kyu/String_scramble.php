<?php
/**
 *@param string $str original string
 *@param array $arr new string's index
 *@return string  new string which's character in the gaven arr index
 */
function scramble($str, $arr)
{
    $ret = array();
    foreach($arr as $k => $row)
    {
        $ret[$row] = $str[$k];
    }
    ksort($ret);
    return implode('', $ret);
}

echo scramble('abcd', array(0,3,1,2));
