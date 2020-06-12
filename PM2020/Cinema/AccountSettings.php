<?php
include '../PHP/connection2.php';
include '../Cinema/header.php';
//Make connection to database

?>
<html>
    <head>
        <title>FilmLion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/MyAccount.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" href="../Images/logosmall1.jpg">
    </head>
<body>
	
	<?php
	//include '../PHP/connection2.php';
	include '../PHP/DisplayAccountSettings.php';

$username = $_SESSION['txtUser'];

//create a query to select all records from products table
$query="SELECT * FROM User WHERE USER_NAME='$username'";

//run query and store the result in a variable called $result
$result=mysqli_query($connection, $query);

$row=mysqli_fetch_assoc($result);

	?>
	
	<a href="../PHP/EditAccountSettings.php?user_id='. $row['USER_ID'].'">Edit details</a>
	</br></br>
	<a href="../Cinema/Login.php">Back</a>
	

    <div>
        <footer>
        <a href="https://www.facebook.com/filmlion"
        class="icon-facebook" target="_blank" rel="noopener">Facebook</a>
            
        <a href="https://twitter.com/filmlion" 
        class="icon-twitter" target="_blank" rel="noopener">Twitter</a>
        <p> Copyright &copy 2020 Film Lion, All Rights Reseved.</p>
        </footer> 
    </div>
</body>    
</html>