<?php
$test = [
    ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"],
    ["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH"],
    ["NORTH","SOUTH","SOUTH","EAST","WEST","NORTH","NORTH"]
];

function reverse($direction)
{
    $direction = strtoupper($direction);
    if($direction === 'SOUTH')
    {
        return 'NORTH';
    }
    else if($direction === 'WEST')
    {
        return 'EAST';
    }
}

function dirReduc($arr)
{
    $pace[] = array_shift($arr);

    foreach($arr as $direction)
    {
        if(in_array($direction, ['SOUTH', 'WEST'])
        {
        }
        else
        {

        }

    }

    $pace['NORTH'] += -$pace['SOUTH'];
    $pace['EAST'] += -$pace['WEST'];
    $path = [];
    if($pace['NORTH'] > 0)
    {
        while($pace['NORTH'] --)
        {
            $path[] = 'NORTH';
        }
    }
    else if($pace['NORTH'] < 0)
    {
        while($pace['NORTH']++ < 0)
        {
            $path[] = 'SOUTH';
        }
    }
    if($pace['EAST'] > 0)
    {
        while($pace['EAST'] --)
        {
            $path[] = 'EAST';
        }
    }
    else if($pace['EAST'] < 0)
    {
        while($pace['EAST']++ < 0)
        {
            $path[] = 'WEST';
        }
    }

    return $path;
}

foreach($test as $arr)
{
    dirReduc($arr);
}
