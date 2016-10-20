<?php
function bouncingBall($height,$bounce,$window_height) {
    if($bounce <= 0 || $bounce >= 1 ||$height <= 0 ||$window_height >= $height)
    {
        return -1;
    }
    
    $bouncing_height = $bounce * $height;
    $seen_times = 0;
    
    echo "bouncing height:$bouncing_height\n";
    if($bouncing_height <= $window_height)
    {
        $seen_times += 1;
        return $seen_times;
    }else {
        $seen_times += 2;
    }
    while($bouncing_height >= $window_height)
    {
        if($bouncing_height == $window_height)
        {
            $seen_times += 1;
            return $seen_times;
        }
        $seen_times += 2;
        $bouncing_height *= $bounce;
        echo "bouncing height:$bouncing_height\n";
        
    }
    return $seen_times -1;   
    
}

$test1= bouncingBall(30.0, 0.66, 1.5);
echo "test1:".$test1;

?>