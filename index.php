<?php
    include 'Task.php';
    error_reporting(0);
    $demoTask = new Task("");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>To-Do-List</title>
</head>

<body style="background-color: gray;">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <section class="navbar-brand">TO-DO-LIST</section>
        </div>
        </div>
    </nav>
    <div class="m-4">
        <table class="table table-borderless table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Task Descreption</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tasks = $demoTask->displayTasks();
                foreach ($tasks as $task) {
                ?>
                    <tr>
                        <td scope="row">
                            <?php
                            echo $task->getDesc();
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $task->getStatus();
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($task->getStatus() == "Not Started Yet") {
                            ?>
                                <a href="updateTask.php?desc=<?php echo $task->getDesc() ?>" class="btn btn-warning">Start</a>
                            <?php
                            } elseif ($task->getStatus() == "Started") {
                            ?>
                                <a href="updateTask.php?desc=<?php echo $task->getDesc() ?>" class="btn btn-info">Done</a>
                            <?php
                            } else {
                            }
                            ?>
                        </td>
                        <td>
                            <a href="deleteTask.php?desc=<?php echo $task->getDesc() ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <form action="addTask.php" method="POST">
                        <th scope="row">
                            <input type="text" name="desc" class="form-control" placeholder="Enter A New Task">
                        </th>
                        <td colspan="3">
                            <center>
                                <button type="submit" class="btn btn-success">Add Task</button>
                            </center>
                        </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>