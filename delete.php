<?php
include('conn.php');
$num = $_POST['del'];
$conn->query("DELETE FROM taskslist WHERE task_no = '$num'");
header('location:index.php');
?>