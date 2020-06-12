<?php
include 'connection2.php';

        //collect data from form
        $suser=$_POST['txtUser'];
		$fname=$_POST['txtFname'];
		$lname=$_POST['txtLname'];
		$email=$_POST['txtEmail'];
		$spass=$_POST['txtPass'];
		$gender=$_POST['selGender'];
		$age=$_POST['txtAge'];


    //If statement for if email entered is in correct form i.e. user@user.com   
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        //if statement for if forename and surname entered contain only alpha values
        if (preg_match("/^[a-zA-Z ]*$/",$fname) && preg_match("/^[a-zA-Z ]*$/",$lname)) {
            
            //if statement for if password contains at least one capital letter, one number and one symbol
            if (preg_match('@[A-Z]@', $spass) && preg_match('@[0-9]@', $spass) && preg_match('@[^\w]@', $spass)) {
                
            //Construct INSERT query using variables holding data gathered
            $query="INSERT INTO User (USER_NAME, USER_PASS, FirstName, LastName, Email, Gender, Age) VALUES ('$suser','$spass','$fname','$lname','$email','$gender','$age')";

            //run $query
            mysqli_query($connection, $query);
            
            //SESSION message named 'error' for if all fields are filled in correctly
            $_SESSION['error']='<br/>Registration successful!';
            
        } else { //SESSION error message for if password is in wrong format
            $_SESSION['error']='<br/>Password must contain at least one capital letter, one symbol and one number!';
            header('location: ../Cinema/Register.php'); //redirect to register page
            
    } } else { //SESSION error message for if forename and surname are in wrong format
        $_SESSION['error']='<br/> First Name: '.$fname.' and Last Name: '.$lname.' must only contain letters!';
       header('location: ../Cinema/Register.php'); //redirect to register page
       
    } } else { //SESSION error message for if email is in wrong format
       $_SESSION['error']='<br/>'.$email.' is not a valid email address!';
       header('location: ../Cinema/Register.php');//redirect to register page
}
 

//redirect to register page
header('location: ../Cinema/Register.php');

?>