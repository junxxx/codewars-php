<?php
/*
 *  this function should return the first pair of two prime numbers spaced 
 *  with a gap of g between the limits m, n if these numbers exist 
 *  otherwise  null
*/
function gap($g, $m, $n)
{
    $result = array();
	for($i = $m;$i <= $n;$i++)
    {
        if(is_prime($i) && is_prime($i+$g))
        {
            $result = [$i,$i+$g];  
            if(!empty($result))
            {     
                // print_r($result);  
                for($y = $result[0]+1; $y <= $result[1]-1;$y++)
                {
                    if(is_prime($y))
                    {
                        // echo "y is $y\n";
                        $result = array();
                        break;
                    }                            
                }                            
            }
            if(!empty($result))
                return $result;
        }
            
    }
    return null;
}
/* 
 *  the function below is better than above
 *  Learn the solution from it.
*/
function gap_better($g, $m, $n) {
    $prime = false;
    
    for($i = $m; $i<$n; $i++){
      $isPrime = isPrime($i);
      if($isPrime && $prime && $i-$prime == $g){
        return [$prime, $i];
      }
      if($isPrime){
         $prime = $i;
      }
          
    }
  return null;
}

/* 
 *parameter integer $n > 1
 *return true if $n is a primes,otherwise return false
 */
function is_prime($n)
{
	if($n > 1)
	{
		$m = floor(sqrt($n));        
		for($i =2;$i <= $m;$i++)
		{
			if($n % $i == 0)
			{
				break;
			}
		}
        if($i > $m)
            return true;        
	}
	
	return false;
}
 
 $test1 = gap(6,100,110);
 var_dump($test1);
?>
