<?php
function backwardsPrime($start, $stop)
{
	$backwardsPrime = [];
	for($i = $start; $i <= $stop; $i++)
	{
		if(($i!=strrev($i)) && is_prime($i) && is_prime(strrev($i)))
		{
			$backwardsPrime[] = $i;
		}
	}
	return $backwardsPrime;
}
/*if the input number is prime return true*/
function is_prime($int_number)
{
	for($i=2; $i <= floor(sqrt($int_number)); $i++)
	{
		if($int_number % $i == 0)
			return false;
	}
	return true;
}

print_r(backwardsPrime(2,100));
?>