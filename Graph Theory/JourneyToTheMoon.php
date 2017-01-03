<?php

/*
https://www.hackerrank.com/challenges/journey-to-the-moon
*/

function getNumberOfWays($pairs, $astronauts)
{
    $result = 0;
    $possiblePairs = $astronauts*($astronauts-1)/2;

    for ($i = 0; $i < count($pairs); $i++) {
        for ($j = $i + 1; $j < count($pairs); $j++) {
            if(in_array($pairs[$j][0], $pairs[$i]) || in_array($pairs[$j][1], $pairs[$i])) {
                $pairs[$i] = array_unique(array_merge($pairs[$i],$pairs[$j]));
                unset($pairs[$j]);
                $pairs = array_values($pairs);
                $j = $i;
            }
        }
        $x = count($pairs[$i]);
        $result += $x*($x-1)/2;
    }

    return $possiblePairs - $result;
}
