<?php
include "conn.php";
//this block of code only stops the warning to show up.isset

$task = $_POST['tasking'];
if(!empty($task)){
    $conn->query("INSERT INTO taskslist VALUES(NULL,'$task','Not Done')");
    //echo "task added";
}
header('location:index.php');

/*
More: 1. Handle empty field
2. Connection error
3. Stay on home page and show the added task below, show the successful message
in the homepage.
4. You have a fatal problem in Database about tasks id.
5. What to do on empty database.
*/
