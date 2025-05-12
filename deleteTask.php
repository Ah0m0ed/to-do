<?php
    include 'Task.php';
    if(isset($_GET["desc"])){
        $desc = $_GET["desc"];
        $demoTask=new Task();
        $demoTask->deleteTask($desc);
        header("location:index.php");
    }
?>