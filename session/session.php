<?php
session_start();
$_SESSION['username']='john_doe';
$_SESSION['email']'john@example.com';

$username = $_SESSION['username'];
$email = $_SESSION['email'];

echo "Userneme:". $username . "<be>";
echo "Email:". $email . "<br>";

session_destroy();
?>