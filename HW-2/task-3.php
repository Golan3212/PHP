<?php

for ($i = 1; $i > 0; $i++){
    
    $number = (int)readline("Введите число! \n");
    if  ($number > 0) {
        
        $whichFinger = $number % (10-2);

        switch ($whichFinger) {

            case 1:
                echo "Большой палец!";
                break 2;
    
            case 3:
            case 7:
                echo "Средний палец!";
                break 2;

            case 4:
            case 6:
                echo "Безымянный палец!";
                break 2;

            case 5:
                echo "Мизинец!";
                break 2;
        
            default:
                echo "Указательный палец!";
                break 2;       
        }
    }   
}