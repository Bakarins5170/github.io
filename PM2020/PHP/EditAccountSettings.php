<?php
include 'connection2.php';
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
    
    $username = $_SESSION['txtUser'];

 
    //create a query to select all records from products table
    $query="SELECT * FROM User WHERE USER_NAME='$username'";
    
    //run query and store result
    $result=mysqli_query($connection, $query);
    //extract row from result using mysqli_fetch_assoc()and store $row
    $row=mysqli_fetch_assoc($result);
       
    
    //create form to prompt user for new data to replace old data stored in Merchandise database
    ?>
		<form method="post" action="../Cinema/UpdateAccountSettings.php"> 

			<fieldset>
				<legend>
					Enter New Details
				</legend>
				<input type="hidden" name="userid" value="<?php echo $row['USER_ID']; ?>" />
				<label for="username">Username: </label>
				<input name="username"  readonly value="<?php echo $row['USER_NAME']; ?>"/>
				<br />
				<br />
				<label for="password">Password: </label>
				<input type="text" name="password"  value="<?php echo $row['USER_PASS']; ?>"/>
				<br />
				<br />
				<label for="firstname">First Name: </label>
				<input type="text" name="firstname" value="<?php echo $row['FirstName']; ?>" />
				<br />
				<br />
				<label for="lastname">Surname: </label>
				<input type="text" name="lastname"  value="<?php echo $row['LastName']; ?>"/>
				<br />
				<br />
				<label for="email">Email Address: </label>
				<input type="text" name="email"  value="<?php echo $row['Email']; ?>"/>
				<br />
				<br />
				<label for="txtAge">Age: </label>
				<input type="text" name="txtAge"  value="<?php echo $row['Age']; ?>"/>
				<br />
				<br />
				<label for="gender">Gender: </label>
				<select name="gender" value="<?php echo $row['Gender']; ?>""
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>			

			</fieldset>

			<input type="submit" value="Submit" name='submit' />
			<input type="reset" value="Clear" />
		</form>
		
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