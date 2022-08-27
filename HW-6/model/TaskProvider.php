<?php
require_once "Task.php";
class TaskProvider
{
    private array $tasks = [];

    public function __construct()
    {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }

    public function addTask(Task $task)
    {
        $_SESSION['tasks'][] = $task;   
    }

    public function getUndoneList () : array
    {
       
        $tasks = [];
        foreach($this->tasks as $key => $task){
            if(!$task->isDone()){
                $task[$key] = $task;
            }
        }
        return $tasks;
    }

    public function deleteTask(int $key)
    {
        unset($_SESSION['tasks'][$key]);    
    }

}