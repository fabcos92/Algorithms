<?php
/*
https://www.hackerrank.com/challenges/angry-children-2
*/
function minUnfairness($packets, $children, $candies)
{
    $unfairness = $sum = 0;
    $low = $candies[0];

    for ($i = 1; $i < $children; $i++) {
        $sum += $candies[$i];
        $diff = abs($candies[$i] - $candies[$i - 1]);
        $unfairness += $i * ($children - $i) * $diff;
    }

    $minUnfairness = $unfairness;

    for ($i = $children; $i < $packets; $i++) {
        $unfairness -= $sum - $low * ($children - 1);
        $unfairness += $candies[$i] * ($children - 1) - $sum;

        if ($unfairness < $minUnfairness) {
          $minUnfairness = $unfairness;
        }
        $sum += $candies[$i] - $candies[$i - $children + 1];
        $low = $candies[$i - $children + 1];
    }
    return $minUnfairness;
}
