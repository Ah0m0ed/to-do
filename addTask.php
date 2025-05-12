<?php
    include 'Task.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $desc = $_POST["desc"];
        $task = new Task($desc);
        $task->addTask();
        header("location:index.php");
    }