To-Do List Application
======================

Overview
--------
This is a PHP-based To-Do List application that allows users to:
-	Inspect current tasks 
- Add new tasks
- Update tasks
- Delete tasks

Features
--------
- Add Tasks
- Update Tasks
- Delete Tasks
- Minimalistic PHP implementation without a database

Requirements
------------
- PHP 7.0 or higher
- Web server (Apache, Nginx, etc.)

Project Structure
----------------
```
to-do/
├── index.php          # Main interface for viewing and managing tasks
├── addTask.php        # Handles adding new tasks
├── updateTask.php     # Handles updating existing tasks
├── deleteTask.php     # Handles deleting tasks
├── Task.php           # Task model with related methods
└── tasks.txt          # File-based storage for task data
```

Installation
-----------
1. Clone the repository:
   git clone https://github.com/Ah0m0ed/to-do.git
2. Move the project to your web server's document root
3. Ensure your web server is configured to handle PHP files
4. Access the application through your browser (e.g., http://localhost/to-do)

Usage
-----
1. Open the application in your web browser
2. To add a task:
   - Type your task in the input field
   - click the "Add Task" button
3. To update a task status("Started" - "Done"):
   - Click the button next to task in update column
4. To delete a task:
   - Click the "Delete" button next to the task

Notes
-----
. Tasks are stored in the 'tasks.txt' file in the project root. Ensure this file is writable by the web server.

. This application is intended for educational purposes.
