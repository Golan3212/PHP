<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 3,
        'Кириллов Кирилл' => 2,
        'Мазур Валерий' => 5,
    ],
    'БАП20' => [
        'Антонов Антон' => 5,
        'Бузруков Антон' => 4,
        'Шуфутинский Михаил' => 5,
        'Киркоров Филипп' => 2,
    ]
 ];

 $badStudents = [];
 $avgMarks = [];
 foreach($students as $group => $studentList){
    $avgMarks[$group] = array_sum($studentList) / count($studentList);

    foreach($studentList as $student => $mark){
        if ($mark < 3){
           $badStudents[$group] = $student;
        }
    }
 }
 $topMark = max($avgMarks);
 $topGroup = array_search($topMark, $avgMarks);
 

 
 echo "Самый высокий средний показатель у группы $topGroup, $topMark балла!\n";
 print_r($badStudents);
 