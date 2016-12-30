<?php

/*
Dynamic Programming Solution to the Coin Changing Problem

An optimal solution to finding the number of ways of making change for n cents using coins of denominations from coins list of length m.
*/

function coinChangeProblem($n, $m, $coins)
{
    $table = [];

    for ($i = 0; $i < $m; $i++) {
        $table[0][$i] = 1;
    }

    for ($i = 1; $i < $n + 1; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if ($i - $coins[$j] >= 0) {
                $x = $table[$i - $coins[$j]][$j];
            } else {
                $x = 0;
            }
            if ($j >= 1) {
                $y = $table[$i][$j - 1];
            } else {
                $y = 0;
            }

            $table[$i][$j] = $x + $y;
        }
    }

    return $table[$n][$m - 1];
}
