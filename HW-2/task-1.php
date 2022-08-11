<?php

$question = "В каком году было крещение Руси?";

for ($i = 1; $i > 0; $i++){
    
    $qYear = (int)readline("$question\n");

    switch ($qYear) {

        case 810:
            echo "Неверно";
            break 2;
    
        case 990:
            echo "Верно";
            break 2;
    
        case 740:
            echo "Неверно";
            break 2;
    
        default:
          continue 2;        
    }
}


