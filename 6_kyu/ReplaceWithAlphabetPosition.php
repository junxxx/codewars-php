<?php
function alphabet_position($str)
{
    $str = strtolower($str);
    $ret = '';
    $strLen = strlen($str);
    for($i = 0; $i < $strLen; $i++)
    {
        if(ctype_alpha($str[$i]))
        {
            $ret .= ord($str[$i]) - ord('a')  + 1 . ' ';
        }
    }

    return rtrim($ret);
}

$test = 'The sunset sets at twelve o\' clock.';
echo alphabet_position($test);
