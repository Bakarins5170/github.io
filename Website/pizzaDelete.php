<?php 
include 'connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
}

$sql = "DELETE FROM Pizza WHERE Pizza_ID=" . $id;

if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
    header('location:Admin.php');
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}

?>

