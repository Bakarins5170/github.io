<?php

include 'connection.php';
$user=$_POST['txtUser'];
$pass=$_POST['txtPass'];

$query="SELECT * FROM User WHERE USER_NAME = '$user' AND USER_PASS = '$pass'";
$result=mysqli_query($connection, $query);
if ($row = mysqli_fetch_assoc($result)) {
    
$_SESSION['User']=$user;
header ('location:Musclemind.php');

} else {
    
$_SESSION['error']= 'User not Recognised';
header ('location:loginForm.php');
}
?>


