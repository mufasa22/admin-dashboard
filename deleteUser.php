<?php
//db.connection
require_once('dbconnection.php');
//sql 
$sql = mysqli_query($conn, "DELETE FROM enrollment WHERE id='" . $_GET['id'] . "' ");

if ($sql) {
    echo "user data deleted successfully";
    header('location : student.php');
} else {
    echo "error occured.please try again";
}
