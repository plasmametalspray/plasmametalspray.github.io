<?php

function find($row, $col, $arr, $word) {
    $count = 0;
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            if ($arr[$i][$j] == $word[0]) {
                for ($k = $i)
                $count++;
            }
        }
    }
    return $count;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

$n = []; $m = []; $word = []; $wordTemp = []; $wordSearch = [];
for ($i = 0; $i < $t; $i++) {
    fscanf($stdin, "%d\n", $n[]);
    fscanf($stdin, "%d\n", $m[]);
    for ($j = 0; $j < $n[$i]; $j++) {
        fscanf($stdin, "%s\n", $wordTemp[]);
    }
    fscanf($stdin, "%s\n", $wordSearch[]);

    array_push($word, $wordTemp);
    $wordTemp = [];
}

for ($i = 0; $i < $t; $i++) {
    echo "Case ".($i+1).": ".find($n[$i], $m[$i], $word[$i], $wordSearch[$i]);
    echo ($i == ($t - 1)) ? "" : "\n";
}

fclose($stdin);
