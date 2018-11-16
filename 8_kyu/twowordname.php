<?php
function abbrevName($name) {
    return strtoupper(implode('.', array_map(function($str){
        return substr($str, 0, 1);
    }, explode(' ', $name))));
}
$name = "Sam Harris";

var_export( abbrevName($name));
