<?php
function stringTransformer($string)
{
    $strToArray = array_reverse(explode(' ', $string));
    $ret = [];
    foreach($strToArray as $k => $v)
    {
        $ret[] = caseConver($v);
    }
    return implode(' ', $ret);
}

function caseConver($string)
{
    $strlen = strlen($string);
    for($i = 0; $i < $strlen; $i++)
    {
        $char = $string[$i];
        $string[$i] = ctype_upper($char) ? strtolower($char) : strtoupper($char);
    }
    return $string;
}

$string = "STRING eXAMPLE";
echo stringTransformer($string);
