<?php
require_once '../database/db_connection.php';
$sql = "UPDATE
            users
        SET
            username = 'changeUsername',
            password = 'changePassword'
        WHERE
            id = '1'
        ";
if (mysqli_query($conn, $sql)){
    echo "Record update successfully.";
} else {
    echo "Error updaing record: " . mysqli_error($conn);
}
mysqli_close($conn);