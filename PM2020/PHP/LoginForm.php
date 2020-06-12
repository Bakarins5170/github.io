        <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="box">
        
        <h3>Login</h3>
        
        <form method = "post" action ="../PHP/LoginInsert.php">
            
            <div class="inputBox">
             <input type="text" name="txtUser" required="">
             <label>Username:</label>
            </div>
            
            <div class="inputBox" >
                <input type="password" name="txtPass" required="">
                <label>Password:</label>
                
            </div>
            <input type="submit" name="subUser" value="Submit">
        </form>

    </div>