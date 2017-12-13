<?php
/**
 *@param string $string only letter from a-z or A-Z
 *@param return string upcase first char with index+1 lowercase letter
 */
function accum($string)
{
    $ret = '';
    $len = strlen($string);
    for($i = 0; $i < $len; $i++)
    {
        $ret .= ucfirst(str_repeat(strtolower($string[$i]), $i + 1)) . '-';
    }
    return rtrim($ret, '-'); 
}

$strings = array('abcd', 'RqaEzty', 'cwAt');

foreach($strings as $string)
{
    echo accum($string) . "\n";
}
