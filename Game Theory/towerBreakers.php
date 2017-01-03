<?php
/*
https://www.hackerrank.com/challenges/tower-breakers-1
*/
function getWinner($cases, $c)
{
    $result = "";

    for ($i = 0; $i < $c; $i++) {
        if ($cases[$i][0] % 2 == 0 || $cases[$i][1] == 1) {
            $result .= "2\n";
        } else {
            $result .= "1\n";
        }
    }

    return $result;
}
