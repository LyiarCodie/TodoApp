<?php
require_once __DIR__ . '/tasks.php';

if (!isset($_GET['id']))
{
    include_once __DIR__ . '/partials/not_found.php';
    exit();
}

if (deleteTask($_GET['id']))
{
    header("Location: index.php");
}