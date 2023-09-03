<?php
require_once '../database/db_connection.php';
 $username = 'username_test';
 $password = 'password_test';
 $Email    = 'Email_test';
 $Phone    = 'Phone_test';


$sql = "INSERT INTO
        users
            (username,password,Email,Phone)
        VALUES
            ('$username','$password','$Email','Phone')
        ";
if (mysqli_query($conn, $sql)){
    header("Location:../admin/userShow.php");
    echo "New record create successfully.";
} else {
    echo "Error: " . $sql . '<br>'. mysqli_error($conn);
}
mysqli_close($conn);
