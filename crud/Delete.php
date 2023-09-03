<?php
require_once '../database/db_connection.php';
$sql = "DELETE FROM user WHERE id = '1' ";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting recoed:" . mysqli_error($conn);
}
mysqli_close($conn);