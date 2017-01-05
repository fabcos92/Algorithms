<?php

/*
https://www.hackerrank.com/challenges/countingsort4
*/
$n = fgets($handle);
$arr = [];
for ($i = 0; $i < $n; $i++) {
    $row = explode(' ', trim(fgets($handle)));
    if ($i < $n/2) {
        $row[1] = '-';
    }
    $arr[$row[0]][] = $row[1];
}

for ($i = 0; $i < count($arr); $i++) {
  print implode(' ', $arr[$i]) . ' ';
}
