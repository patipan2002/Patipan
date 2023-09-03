<?php
$severnames = "localhost";
$username = "root";
$password = "";
$dbname = "db_patipan";
$port = "3306";
$conn = mysqli_connect($severnames, $username, $password, $dbname, $port);
if (!$conn){
    die("Connection failed" . mysqli_connect_error());
} else{

}