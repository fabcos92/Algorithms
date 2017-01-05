<?php
/*
https://www.hackerrank.com/challenges/candies
*/
$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%d", $n);
$children = [];
for ($i = 0; $i < $n; $i++) {
    fscanf($_fp, "%d", $child);
    array_push($children, $child);
}

function distributeMinCandies($children)
{
    $candies = count($children);
    $candiesArr = [];
    $cumul = 0;
    for ($i = 0; $i < count($children); $i++) {
        if ($children[$i] < $children[$i+1]) {
            $cumul++;
            $candiesArr[$i+1] = $cumul;
        } else {
            $cumul = 0;
        }
    }
    $cumul = 0;
    for ($i = count($children)-1; $i > 0; $i--) {
        if ($children[$i] < $children[$i-1]) {
            $cumul++;
            if ($candiesArr[$i-1] < $cumul) {
                $candiesArr[$i-1] = $cumul;
            }
        } else {
            $cumul = 0;
        }
    }
    $candies += array_sum($candiesArr);
    return $candies;
}

$result = distributeMinCandies($children);
print_r($result);
fclose($_fp);
