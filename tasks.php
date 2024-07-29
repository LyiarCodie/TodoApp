<?php
function getTasks()
{
    $tasks = json_decode(file_get_contents('tasks.json'), true);
    
    return $tasks;
}

function createTask(string $title)
{
    $tasks = getTasks();

    $task = [
        "id" => count($tasks),
        "title" => $title,
        "isDone" =>  false
    ];

    $tasks[] = $task;

    return writeJson($tasks);
}

function writeJson($updatedTasks)
{
    $tasks = json_encode($updatedTasks, JSON_PRETTY_PRINT);
    $filename = 'tasks.json';

    return file_put_contents($filename, $tasks);
}

function getTaskById(string $id)
{
    $tasks = getTasks();
    for ($i = 0; $i < count($tasks); $i++)
    {
        $currentTask = $tasks[$i];
        if ($currentTask['id'] == $id)
            return $currentTask;
    }
    return null;
}

function toggleDone(string $id)
{
    $task = getTaskById($id);
    $task['isDone'] = !$task['isDone'];

    $tasks = getTasks();

    $tasks[$id] = array_merge($tasks[$id], $task);

    return writeJson($tasks);
}