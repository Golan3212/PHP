<?php

$arr1 = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function mathFunc( array $a) : array {
    $avg = array_sum($a) / count($a);
    $maxArr = max($a);
    $minArr = min($a);
     return [
        $minArr,
        $maxArr,
        round($avg, 2)
   ];
};
$arr2 = mathFunc($arr1);
print_r($arr2);