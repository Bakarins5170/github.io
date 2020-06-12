<?php
//Make connection to database
include 'connection2.php';

?>

<link rel="stylesheet" type="text/css" href="../CSS/MyAccount.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<?php

$username = $_SESSION['txtUser'];

//create a query to select all records from products table
$query="SELECT * FROM User WHERE USER_NAME='$username'";

//run query and store the result in a variable called $result
$result=mysqli_query($connection, $query);


while ($row=mysqli_fetch_assoc($result)){
echo "Username: ".$row['USER_NAME']."</br>";
echo "Name: ".$row['FirstName']." ".$row['LastName']."</br>";
echo "Email Address: ".$row['Email']."</br>";
echo "Password: ".$row['USER_PASS']."</br>";
echo "Gender: ".$row['Gender']."</br>";
echo "Age: ".$row['Age']."</br>";
}
?>

