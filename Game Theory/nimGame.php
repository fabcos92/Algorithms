<?php
$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%d", $g);
$cases = [];
for ($i = 0; $i < $g; $i++) {
    fscanf($_fp, "%d", $n);
    $arri = [];
    $scanfPattern = str_repeat("%d", $n);
    $arri = fscanf($_fp, $scanfPattern);
    $cases[] = $arri;
}

function getWinner($cases)
{
    $result = "";
    foreach ($cases as $case) {
        $x = $case[0];

        for ($i = 1; $i < count($case); $i++) {
            $x ^= $case[$i];
        }
        if ($x == 0) {
            $result .= "Second\n";
        } else {
            $result .= "First\n";
        }
    }
    return $result;
}

$result = getWinner($cases);
print_r($result);
fclose($_fp);
