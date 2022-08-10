<?php
// task №2

$qName = readline("Как тебя зовут?\n");
$qAge = (int)readline("Сколько тебе лет?\n");



// task №3

$question1 = "Какая задача стоит перед вами сегодня?";
$question2 = "Сколько примерно времени эта задача займет (ч)?";
$sumTasks = 0;

$taskFirst = readline("$question1\n"); $sumTasks++;
$$taskFirst = (int)readline("$question2\n");

$taskSecond = readline("$question1\n"); $sumTasks++;
$$taskSecond = (int)readline("$question2\n");

$taskThird = readline("$question1\n"); $sumTasks++;
$$taskThird = (int)readline("$question2\n");

$sumHours = $$taskFirst + $$taskSecond + $$taskThird;


echo "Вас зовут  $qName, вам  $qAge  лет\n";

echo <<<START
$qName, сегодня у вас запланировано $sumTasks приоритетных задачи на день:
- $taskFirst (${$taskFirst}ч)
- $taskSecond (${$taskSecond}ч)
- $taskThird (${$taskThird}ч)
Примерное время выполнения плана = {$sumHours}ч
START;




