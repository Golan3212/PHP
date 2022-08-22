<?php

class TaskService{
    
    public static function addComment(User $user, Task $task, Comment $text) {
        
        $user = $user->getUsername();
        $task = $task->getDescription();
        $text = $text->getText(); 
        $comment = $task . " - " . $user . " сказал " . $text;
        
        return $comment;       
       }
}