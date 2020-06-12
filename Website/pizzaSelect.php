<?php 
include 'connection.php';
$query = "SELECT * FROM Pizza";
$result=mysqli_query($connection, $query);
if($result -> row >0) {
while($row=mysqli_fetch_assoc($result)){
echo $row["Pizza_Name"] . $row["Pizza_Price"] . 
$row ["Pizza_Quantity"] . $row["Pizza_Image"] ;
}
}
?>

