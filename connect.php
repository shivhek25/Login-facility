<?php
$connection = mysqli_connect('localhost:8889', 'root', 'root');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'Login_facility');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}?>
