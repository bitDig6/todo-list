<?php
 $db_name = "todolist";
 $servername = "localhost";
 $username = "root";
 $password = "";

 $task =  $_GET['task-name'];

 try {
   $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql_query = "INSERT INTO taskslist(task_no,task_name,task_status) VALUES(NULL,'$task','undone')";
   $conn->exec($sql_query);
   echo "Task Added!";
 } catch(PDOException $e) {
   echo "Connection Error: " . $e->getMessage();
 }
?> 