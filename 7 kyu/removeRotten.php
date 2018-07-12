<?php
function removeRotten($fruitBasket)
{
    return is_null($fruitBasket) ? [] : array_map(function($fruit){
       return  strtolower(preg_replace('/rotten/','', $fruit));
    }, $fruitBasket);
}
$test = ["apple","rottenBanana","apple"];
$test = [];
unset($test);
print_r(removeRotten($test));
