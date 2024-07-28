<?php
function getTasks()
{
    $tasks = json_decode(file_get_contents('tasks.json'), true);
    
    return $tasks;
}