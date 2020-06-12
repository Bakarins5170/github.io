<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="loginForm.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
 </head>
 <body>
 <header>
<div>
 <img src="images/Muscle Minds.jpg" alt="Muscle Minds" width="200" height="75">
 </div>
 <p>Providing the foods you <b>love</b> without the consequences!</P>
 <form method ="post" action="login.php">
     <label for ="">Username:</label> <br>
     <input type="text" name="txtUser" value='' required="" /> <br>
     <label for ="">Password:</label> <br>
     <input type="password" name="txtPass" required="" /> <br>
     <input type="submit" name="subLogin" value="Log In"/>
</form>

<h3>Sign Up:</h3>
 <form method ="post" action="insertRecord.php">
<label for="suser">Username: </label>
<input type= "text" name="txtsUser"/>
<br />
<label for="fname">First Name: </label>
<input type= "text" name="txtFname"/>
<br />
<label for="lname">Last Name: </label>
<input type= "text" name="txtLname"/>
<br />
<label for="email">Email: </label>
<input type= "text" name="txtEmail"/>
<br />
<label for="spass">Password: </label>
<input type= "text" name="txtsPass"/>
<br />
<label for="gender">Gender: </label>
<select name="selGender">
<option value="M">Male</option>
<option value="F">Female</option>
</select>
<br />
<label for="age">Age</label>
<input type= "text" name="txtAge"/>
<br />
<input type= "submit" value= "Submit" name="subUser"/>
<input type="reset" value =  "Clear" name="Clear">
<br />
<?php 
include 'insertRecord.php';
?>

<footer>
<span>
<p class="legal">Legal </p>
<p class="private">Private </p>
<p class="cookies">Cookies </p>
</span>

<p class="divider">|</p>

<p class="copyright">&copy; 2019 Muscle Minds</p>
</footer>
 </body>
</html>
