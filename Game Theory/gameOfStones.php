<?php
/*
https://www.hackerrank.com/challenges/game-of-stones-1
*/
function getWinner($cases)
{
    $result = "";
    for ($i = 0; $i < count($cases); $i++) {
        if ($cases[$i] % 7 > 1) {
            $result .= "First\n";
        } else {
            $result .= "Second\n";
        }
    }

    return $result;
}
