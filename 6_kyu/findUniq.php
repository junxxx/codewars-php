<?php
function findUniq($array)
{
    $seed = $array[0] == $array[1] ? $array[0] : $array[2];
    return array_sum($array) - $seed * (count($array) - 1);
}
$a = [1, 1 ,1, 2, 1, 1];
$b = [0, 0, 0.55, 0, 0];
$c = [0, 0, 0.55, 0, 0, 0];
$d = [2, 1 ,1, 1, 1, 1];
var_dump(findUniq($a));
var_dump(findUniq($b));
var_dump(findUniq($c));
var_dump(findUniq($d));

