<?php
require_once 'tasks.php';

include_once __DIR__ . '/partials/head.php';

if (!isset($_GET['id'])) 
{
    include_once(__DIR__ . '/partials/not_found.php');
    exit();
}

$result = toggleDone($_GET['id']);

if ($result)
    header("Location: index.php");