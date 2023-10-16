<?php
include('conn.php');
$update = $_POST['up'];
//write query for updating status
$conn->query("UPDATE taskslist SET task_status='Done' WHERE task_no='$update' ");
header('location:index.php');
?>