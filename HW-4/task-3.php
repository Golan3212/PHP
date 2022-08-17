<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
 ];

 $find = readline("ВВедите искомое\n");

 function searchItem( string $a, array $b) : bool
 {
    $notArr = "";
    $res = false;
    foreach($b as $value){ 
        is_array($value) ? searchItem($a, $value) : $notArr = $a; 
        $notArr == $value ? $res = true : $res = false;
        echo "$res";
        }
    
    return $res;
    }
 
    print_r(searchItem($find, $box));

