<?php
function perimeter($n) {
    return 4 * fibonacciSum($n);
}
function fib($n) {
    if ($n < 2)
        return $n;
    $first = 0;
    $second = 1;
    $third = 0;
    for($i=2; $i<=$n; $i++)
    {
        $third = $first + $second;
        $first = $second;
        $second = $third;
    }
    return $third;
}
function fibonacciSum($n) {
    $sum = 0;
    for($i = 1; $i <= $n; $i++)
    {
        $sum += fib($i);
    }
    return $sum;
}

echo perimeter(6) . PHP_EOL; 
for($i = 1; $i <= 10; $i++)
    echo fibonacciSum($i) . PHP_EOL;
