<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$func = function($a) 
{
return ($a % 2)? $a = "$a - нечетное" : $a = "$a - четное";
   
};

print_r(array_map($func, $arr));
