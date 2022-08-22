<?php
require_once('Task.php');
require_once('User.php');
require_once('TaskService.php');
require_once('Comment.php');

$user1 = new User('andrey', 'golan@mail.ru');
$task1 = new Task("попить", 1);

$text1 = new Comment();
$text1->setText("обязательно");

$task1->setUser($user1);
$task1->setText($text1);
$task1->markAsDone();

TaskService::addComment($user1, $task1, $text1);

print_r($task1);
// var_dump($task1);


