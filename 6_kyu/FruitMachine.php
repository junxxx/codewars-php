<?php
function fruit($reels, $spins)
{
    $threeSameScore = [
        "Wild" => 100,
        "Star" => 90,
        "Bell" => 80,
        "Shell" => 70,
        "Seven" => 60,
        "Cherry" => 50,
        "Bar" => 40,
        "King" => 30,
        "Queen" => 20,
        "Jack" => 10
    ];
    $result = [];
    foreach($reels as $k => $reel)
    {
        $result[] = $reels[$k][$spins[$k]];
    }
    $result = array_count_values($result);
    $score = 0;
    switch(count($result))
    {
        //three the same
        case 1:
            $score = $threeSameScore[array_keys($result, 3)[0]];
            break;
        //two the same
        case 2:
            //plus wild
            if(isset($result['Wild']) && $result['Wild'] == 1)
            {
                $score = $threeSameScore[array_keys($result, 2)[0]] / 5;
            }
            else
            {
                $score = $threeSameScore[array_keys($result, 2)[0]] / 10;
            }
            break;
        //three disticnt
        case 3:
            break;
    }

    return $score;
}

$reel1 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
$reel2 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
$reel3 = ["Wild","Star","Bell","Shell","Seven","Cherry","Bar","King","Queen","Jack"];
$spin = [5,5,0];
echo $result = fruit([$reel1,$reel2,$reel3],$spin);

