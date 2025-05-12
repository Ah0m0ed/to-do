<?php
class Task
{
    private $taskDesc;
    private $taskStatus;

    function __construct($desc = "", $status = "Not Started Yet")
    {
        $this->taskDesc = $desc;
        $this->taskStatus = $status;
    }

    public function getDesc()
    {
        return $this->taskDesc;
    }
    public function getStatus()
    {
        return $this->taskStatus;
    }

    private static function allTasks()
    {
        $contents = file_get_contents("tasks.txt");
        $contents = str_replace("\n", "", $contents);
        $contentsArray = explode("---", $contents);
        return $contentsArray;
    }
    public function addTask()
    {
        $array = [$this->taskDesc, $this->taskStatus];
        $data = implode(",", $array) . "\n";
        file_put_contents("tasks.txt", $data . "---\n", FILE_APPEND);
    }
    public function displayTasks()
    {
        $contents = $this->allTasks();
        $tasks=[];

        foreach ($contents as $array) {
            if ($array) {
                $task = explode(",", $array);
                $tasks[] = new Task($task[0], $task[1]);
            }
        }
        return $tasks;
    }

    public function deleteTask($desc)
    {
        $content = $this->allTasks();
        $newContent = [];
        foreach ($content as $task) {
            if ($task) {
                $task = explode(",", $task);
                if ($desc != $task[0]) {
                    $newContent[] = implode(",", $task);
                }
            }
        }
        file_put_contents("tasks.txt", implode("\n---\n", $newContent) . "\n---\n");
    }
    public function updateTask($desc)
    {
        $content = $this->allTasks();
        $newContent = [];
        foreach ($content as $task) {
            if ($task) {
                $task = explode(",", $task);
                if ($desc == $task[0]) {
                    if($task[1] == "Not Started Yet"){
                        $task[1] = "Started";
                    }else{
                        $task[1] = "Done";
                    }
                }
                $newContent[] = implode(",", $task);
            }
        }
        file_put_contents("tasks.txt", implode("\n---\n", $newContent) . "\n---\n");
    }
}
