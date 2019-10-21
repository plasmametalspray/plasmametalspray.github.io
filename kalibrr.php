<?php

function divisible($a, $b, $k) {
    $result = 0;

    for ($i = $a; $i <= $b; $i++) {
        if ($i % $k == 0) {
            $result++;
        }
    }

    return $result;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

$a = []; $b = []; $k = [];
for ($i = 0; $i < $t; $i++) {
    fscanf($stdin, "%d\n", $a[]);
    fscanf($stdin, "%d\n", $b[]);
    fscanf($stdin, "%d\n", $k[]);
}


for ($i = 0; $i < $t; $i++) {
    echo "Case ".($i+1).": ".divisible($a[$i], $b[$i], $k[$i]);
    echo ($i == ($t - 1)) ? "" : "\n";
}

fclose($stdin);
