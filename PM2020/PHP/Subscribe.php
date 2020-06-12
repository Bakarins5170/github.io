<?php
//Make connection to database
include '../PHP/connection.php';

//Gather from $_POST[]all the data submitted and store in variables

	if(isset($_POST['submitsubscribe'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		
		 //If statement for if email entered is in correct form i.e. user@user.com   
    //if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		//Construct INSERT contact data  using variables holding data gathered
$query = "INSERT INTO Subscribe (Name, Email) VALUES ('$name', '$email')";
 
mysqli_query($connection, $query);
echo "It has been sent your subscribe successfully!";
echo "</br>";
echo "</br>";
echo " Thank you  ".    " "  .$name. " ,  We will send you last event about movies!";

//header('Location:../Cinema/Contact.php');
exit();


 }
//Temporarily echo $query for debugging purposes
//echo $query;
//exit();
//run $query
?>

<!-->
		
		
 //"B.Alobathany4895@student.leedsbeckett.ac.uk"
 // Receiver Email , Replace with your email 
		$to="bng911@hotmail.com"; 
		$subject="Form Submission";
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1> It has been Sent your feedback Successfully!</h1";
			echo "<h2> Thank you"." ".$name.", We will contact you shortly!</h2>";
			header('Location:../PHP/contact.php');
		}
		else{
			echo "Something went wrong!";
		}
	}
?>//-->