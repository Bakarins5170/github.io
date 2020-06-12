<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="website.css" />
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
 <p>Providing the foods you <b>love</b> without the consequences!</p>
 
 <div class="navbar">
  <a href="Musclemind.php" class="active">Home</a>
  <a href="menu.php" class="right">The Menu</a>
  <a href="favourites.php" class="right">Favourites</a>
  <a href="Admin.php" class="right">Admin</a>
  <a href="protected.php" class="right">Protected</a>
 
 
  <a href="logout.php" class="right">Logout</a>
  
   <div class="search-container">
    <form method="post" action="">
      <input type="text" placeholder="Search" name="search">
      <input type= "submit" value= "Submit" name="subtext"/>
    </form>
  </div>
</div>
 </header>
 
 
 <div class= "featured">
 <div><h2>Featured Products</h2></div>
 <figure>
 <img src="Mediterranean.jpg" alt="Mediterranean" name="Mediterranean" width="200" height="200">
 <figcaption> Mediterranean Pizza</figcaption>
 <img src="Mexican Hot.jpg" alt="Mexican Hot" width="200" height="200">
 <figcaption> Mexican Hot Pizza</figcaption>
 </figure>
 </div>
 

 <footer>
<!--ENTER CONTENT HERE--> 

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



