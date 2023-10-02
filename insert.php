<?php
include "conn.php";
//header("location:index.php");
//this block of code only stops the warning to show up.isset

$task = $_POST['tasking'];
//header('location:index.php');
if(empty($task)){
    echo "Field empty! Please Enter a task.";
}else{
    $conn->query("INSERT INTO taskslist VALUES(NULL,'$task','Not Done')");
    echo "Task added successfully!";
}

/*
More: 1. Handle empty field
2. Connection error
3. Stay on home page and show the added task below, show the successful message
in the homepage.
4. You have a fatal problem in Database.
*/
