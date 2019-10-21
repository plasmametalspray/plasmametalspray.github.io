<?php

function find($row, $col, $arr, $word) {
    $result = 0;

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $countWord = 0;
            if ($arr[$i][$j] == $word[$countWord]) {
                // cek kanan
                $count = $j;
                $status = true;
                while ($countWord < strlen($word) && $count < $col && $status == true) {
                    if ($arr[$i][$count] == $word[$countWord]) {
                        if ($countWord == strlen($word) - 1) {
                            $result++;
                        }
                        $count++;
                        $countWord++;
                    } else {
                        $status = false;
                    }
                }

                // cek kiri
                $count = $j;
                $status = true;
                $countWord = 0;
                while ($countWord < strlen($word) && $count >= 0 && $status == true) {
                    if ($arr[$i][$count] == $word[$countWord]) {
                        if ($countWord == strlen($word) - 1) {
                            $result++;
                        }
                        $count--;
                        $countWord++;
                    } else {
                        $status = false;
                    }
                }

                // cek atas
                $count = $i;
                $status = true;
                $countWord = 0;
                while ($countWord < strlen($word) && $count >= 0 && $status == true) {
                    if ($arr[$count][$j] == $word[$countWord]) {
                        if ($countWord == strlen($word) - 1) {
                            $result++;
                        }
                        $count--;
                        $countWord++;
                    } else {
                        $status = false;
                    }
                }

                // cek bawah
                $count = $i;
                $status = true;
                $countWord = 0;
                while ($countWord < strlen($word) && $count < $row && $status == true) {
                    if ($arr[$count][$j] == $word[$countWord]) {
                        if ($countWord == strlen($word) - 1) {
                            $result++;
                        }
                        $count++;
                        $countWord++;
                    } else {
                        $status = false;
                    }
                }

                // cek bawah kanan
                $count = $i;
                $count2 = $j;
                $status = true;
                $countWord = 0;
                while ($countWord < strlen($word) && $count < $row && $count2 < $col && $status == true) {
                    if ($arr[$count][$count2] == $word[$countWord]) {
                        if ($countWord == strlen($word) - 1) {
                            $result++;
                        }
                        $count++;
                        $count2++;
                        $countWord++;
                    } else {
                        $status = false;
                    }
                }

                // cek bawah kiri
                $count = $i;
                $count2 = $j;
                $status = true;
                $countWord = 0;
                while ($countWord < strlen($word) && $count < $row && $count2 >= 0 && $status == true) {
                    if ($arr[$count][$count2] == $word[$countWord]) {
                        if ($countWord == strlen($word) - 1) {
                            $result++;
                        }
                        $count++;
                        $count2--;
                        $countWord++;
                    } else {
                        $status = false;
                    }
                }

                // cek atas kiri
                $count = $i;
                $count2 = $j;
                $status = true;
                $countWord = 0;
                while ($countWord < strlen($word) && $count >= 0 && $count2 >= 0 && $status == true) {
                    if ($arr[$count][$count2] == $word[$countWord]) {
                        if ($countWord == strlen($word) - 1) {
                            $result++;
                        }
                        $count--;
                        $count2--;
                        $countWord++;
                    } else {
                        $status = false;
                    }
                }

                // cek atas kanan
                $count = $i;
                $count2 = $j;
                $status = true;
                $countWord = 0;
                while ($countWord < strlen($word) && $count >= 0 && $count2 < $col && $status == true) {
                    if ($arr[$count][$count2] == $word[$countWord]) {
                        if ($countWord == strlen($word) - 1) {
                            $result++;
                        }
                        $count--;
                        $count2++;
                        $countWord++;
                    } else {
                        $status = false;
                    }
                }
            }
        }
    }
    return $result;
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
