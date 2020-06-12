<?php
include '../PHP/connection2.php';
include '../Cinema/header.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>FilmLion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Register.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" href="../Images/logosmall1.jpg">
    </head>

    <body>
    
    <div class="banner-image">
  <div class="banner-text">
    <h2>Registration Page</h2>
    <h3>Register For a FilmLion Account Today!</h3>
  </div>
</div>
     
    <div class="box">
        </br>
        </br>
        </br>
        </br>
        <h3>Register</h3>
        <form method = "post" action ="../PHP/RegisterInsert.php">
            
            <div class="inputBox">
            <input type="text" name="txtUser" pattern= "[A-Z\sa-z].{0-9}.{2,20}"
             title = "Must contain between 2 and 20 characters." required>
             <label>Username:</label> 
            </div>
            
            
            <div class="inputBox">
             <input type="text" name="txtFname" pattern= "[A-Z\sa-z].{2,20}"
             title = "Must contain between 2 and 20 letters." required>
             <label>First Name:</label>
            </div>
            
            <div class="inputBox" >
                <input type="text" name="txtLname" pattern= "[A-Z\sa-z].{2,20}"
             title = "Must contain between 2 and 20 letters." required>
                <label>Last Name:</label>
            </div>
            
        <div class="inputBox" >
                <input type="email" name="txtEmail" required>
                <label>Email:</label>
            </div>
            
            
            <div class="inputBox">
             <input type="password" name="txtPass" 
             title="Must contain syntax email address e.g 'test@test.com/co.uk" required>
             <label>Password:</label>
            </div>
            
           
            <div class="inputBox" >
                <input type="number" name="txtAge" pattern= "{0-9}" 
                title="Must contain numbers only" required>
                <label>Age:</label>
            </div>
            
            <div class="inputBox">
                <label for="gender">               </label>
              
            </div>
            
                <label style="color:white"for="gender" name="selGender">Choose a gender:</label>
                
                
                <select name="selGender">
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select><br/><br/>

            <input type="submit" name="subUser" value="Submit">
        </form>
        <br/>
        
        <?php
        //connect to database 

        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
        }
        $_SESSION['message']=null;
?>
    </div>

<!--/*<--!<footer-->
        </br></br></br></br></br></br></br></br>
        </br></br></br></br></br></br></br></br>
        </br></br></br></br></br></br></br></br>
                </br></br></br></br></br></br></br></br>
                </br></br></br></br></br></br></br></br>
        
        
        <div>
            <footer>
            <a href="https://www.facebook.com"
            class="icon-facebook" target="_blank" rel="noopener">Facebook</a>
        
            <a href="https://twitter.com" 
            class="icon-twitter" target="_blank" rel="noopener">Twitter</a>
                <p style="color:white"> Copyright &copy 2020 Film Lion, All Rights Reseved.</p>
            </footer> 
         </div>

</body>    
