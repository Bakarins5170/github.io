<?php
include '../PHP/connection2.php';
include '../Cinema/header.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>FilmLion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" href="../Images/logosmall1.jpg">
    </head>
    
    <body>
    
    <div class="banner-image">
  <div class="banner-text">
    <h2>Login Page</h2>
  </div>
</div>

    <?php
    //include '../PHP/connection2.php';
    //$_SESSION['error']=null;
    
    //Check to see if someone is logged in, display login form or welcome message
    if(!isset($_SESSION['txtUser'])){
               
    	include '../PHP/LoginForm.php';
 	
    } else {
    	
    	include 'MyAccount.php';
    	
    }
    
    //check to see if there is a message to be displayed
//    echo "<br/><br/>";
    if(isset($_SESSION['message'])){ 
    	echo $_SESSION['message'];
    }
    
    ?>

<!--/*<--!<footer-->
        </br></br></br></br></br></br></br></br>
        </br></br></br></br></br></br></br></br>
        </br></br></br></br></br></br>
        
        
     <div>
            <footer>
            <a href="https://www.facebook.com"
            class="icon-facebook" target="_blank" rel="noopener">Facebook</a>
        
            <a href="https://twitter.com" 
            class="icon-twitter" target="_blank" rel="noopener">Twitter</a>
                <p> Copyright &copy 2020 Film Lion, All Rights Reseved.</p>
            </footer> 
         </div>

</body>    
</html>


