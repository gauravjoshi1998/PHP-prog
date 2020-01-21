<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "tutorials";

$conn = mysqli_connect($servername, $username, $password) or die("Sorry, can't connect to the mysql.");

mysqli_select_db($conn, $dbname) or die("Sorry, can't select the database."); 

?>
