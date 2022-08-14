<?php

$wishesArr = array("счастья", "здоровья", "слуха", "нюха");
$epithetArr = array("бесконечного", "крепкого", "замечательного", "высококачественного");
$generatedWishes = [];

$nameBirthday = readline("Как вас зовут?\n");

if($nameBirthday){
    shuffle($wishesArr);
    shuffle($epithetArr);
}

foreach($epithetArr as $key => $value){
    $res = "$value  $wishesArr[$key]";
    array_push($generatedWishes, $res);
}

$finWishes = implode(', ', $generatedWishes);
$generatedWishes = explode(', ', $finWishes, 2);
$reversed = array_reverse($generatedWishes);
$finWishes = implode(' и ', $reversed);

print_r ("Дорогой $nameBirthday, от всего сердца поздравляю тебя с днем рождения, желаю $finWishes!");

