<?php

$array = [1,2,3,4,5,0,0,0,0,0];

foreach($array as $number => $value){
    if ($array[$number] == 0){
        unset($array[$number]);
    }else{
        array_push($array, $array[$number]);
    }
}

sort($array, SORT_NUMERIC);

print_r ($array);