<?php
include 'connection.php';

$id = $_GET['id'];
$query = "DELETE FROM `patients` WHERE id = $id;";
$result = mysqli_query($conn, $query);
if ($result) {
    mysqli_close($conn);
    header("location:View_Patients.php");
} else {
    echo "Error deleting record";
}





?>
