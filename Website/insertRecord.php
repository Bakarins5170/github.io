<?php
	//include connection
	include 'connection.php';
	if(isset($_POST['subUser'])) {
	//has form been submitted?
        //collect data from form
        $suser=$_POST['txtsUser'];
		$fname=$_POST['txtFname'];
		$lname=$_POST['txtLname'];
		$email=$_POST['txtEmail'];
		$spass=$_POST['txtsPass'];
		$gender=$_POST['selGender'];
		$age=$_POST['txtAge'];
		
	
		
	$query="INSERT INTO User (USER_NAME, USER_PASS, FirstName, LastName, Email, Gender, Age) VALUES ('$suser','$spass','$fname','$lname','$email','$gender','$age')";
		//echo $query;
	//	exit();
		
		//run query through connection		
mysqli_query($connection, $query);
		header('location:loginForm.php'); //. $_SERVER['HTTP_REFERER']);
		
}

	
?>