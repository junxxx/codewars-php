<?php
$test = [
    ['a','b','c','d','f'],
    ['O','Q','R','S']
];

function find_missing_letter(array $array): string {
    $firstChar = $array[0];
    unset($array[0]);
    foreach($array as $char)
    {
        if(++$firstChar !== $char)
        {
            return $firstChar;
        }
    }
}

foreach ($test as $arr)
{
    echo find_missing_letter($arr) . PHP_EOL;
}
