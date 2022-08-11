<?php
$question1 = "Какая задача стоит перед вами сегодня?";
$question2 = "Сколько примерно времени эта задача займет (ч)?";

$qName = readline("Как тебя зовут?\n");
$sumTasks = (int)readline ("Сколько задач на сегодня?\n");
$resTime = 0;
$fullTask = "";

for($i = 1; $i <= $sumTasks; $i++){
    $task[$i] = readline("$question1\n");
    $time[$i] = (int)readline("$question2\n");
    $resTime += $time[$i];
    $fullTask = $fullTask . " - $task[$i] ({$time[$i]}ч)\n";
}


echo " $qName, сегодня у вас запланировано $sumTasks приоритетных задачи на день:\n
$fullTask
Примерное время выполнения плана = {$resTime}ч";