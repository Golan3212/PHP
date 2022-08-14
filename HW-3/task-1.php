<?php
$arr1 = range(1, 10);
$arr2 = range(1, 10);
$resArr = [];

foreach($arr1 as $key => $value){
    $res = $value * $arr2[$key];
    print_r("$res\n");
    array_push($resArr, $res);
}

