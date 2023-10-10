<?php
session_start();
 $db_name = "todolist";
 $servername = "localhost";
 $username = "root";
 $password = "";

 try {
   $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
   echo "Connection Error: " . $e->getMessage();
 }