<?php
//Make connection to database
include '../PHP/connection2.php';

$currentUser = $_SESSION['txtUser'];

//Gather data sent from relevant form
$user_id=$_POST['userid'];
$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$age=$_POST['txtAge'];

//Produce an update query to update product record for the username provided
$query="UPDATE User SET USER_PASS='$password', FirstName='$firstname', LastName='$lastname', Email='$email', Gender='$gender', Age='$age' WHERE USER_NAME='$currentUser' ";


//echo "$user_id";
//echo "$username";
//run query
mysqli_query($connection, $query);

//Redirect to Account Details page
header( 'Location: ../Cinema/AccountSettings.php' ) ;

?>