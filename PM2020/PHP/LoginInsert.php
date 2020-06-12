<?php

//include connection2.php
include 'connection2.php';

if (isset($_POST['subUser'])){	
	$user=$_POST['txtUser'];
    $pass=$_POST['txtPass'];
	
	//build queries to see if any user details entered match any in user table
	$query="SELECT * FROM User WHERE USER_NAME='$user' AND USER_PASS='$pass'";
	$query2="SELECT * FROM User WHERE USER_NAME='$user'";
	
	//run queries
	$result=mysqli_query($connection, $query);
	$result2=mysqli_query($connection, $query2);
	
	//check for matching record
    if ($row = mysqli_fetch_assoc($result)) { //outcome if username and password are stored in User database
        $_SESSION['txtUser']=$user;       
		//$_SESSION['message']='Login success!';
		header('Location: ../Cinema/Login.php'); //outcome if username is stored in User database but password didn't match
		//echo $_SESSION['txtUser'];
	} else if ($row = mysqli_fetch_assoc($result2)) {
        $_SESSION['message']='<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><p>Login failed! The password entered does not match the registered username.</p>';
		header('Location: ../Cinema/Login.php');
	} else { //outcome if email address is not stored in the Register database
		$_SESSION['message']='<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><p>Login failed! The username entered is not linked to a registered account.</p>';
		header('Location: ../Cinema/Login.php');
	}
} else {
    //redirect to login page
	//header('Location: LoginInsert.php');
}

?>

