<?php
include '../Cinema/header.php';
?>
<html>
    <head>
        <title>FilmLion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Movies.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" href="../Images/logosmall1.jpg">
    </head>
<body>

<div class="banner-image">
  <div class="banner-text">
    <h2>Movies Page</h2>
    <h3>Browse Current and Upcoming Movies</h3>
  </div>
</div>
	
<?php

//Make connection to database
include '../PHP/connection.php';


//create a query to select all records from Movies table
$query="SELECT * FROM Movies";

//run query and store the result in a variable called $result
$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display
echo "<table class='table'>
    <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Age Rating</th>
        <th>Release Date</th>
        <th>Purchase Tickets</th>
        
    </tr>";
    echo "<tr>";
while ($row=mysqli_fetch_assoc($result)){
echo "<td>".'<img src="../Images/' . $row['Image_Name'] . '" /> '."</td>";
echo "<td>".$row['Movie_Name']."</td>";
echo "<td>".$row['Age_Rating']."</td>";
echo "<td>".$row['Release_Date']."</td>";

// this is Bader the line underneath I have added this code to link Purcahse Page
echo '<td><a href="../Cinema/Purchase.php">Purchase</a></td>';

//
//echo "<td><input type='submit' name='submit' value='Purchase'</td>";

echo "</tr>";
}
echo "</table>";

?>

<div class="filter">
<form method="post" action="../PHP/Filter.php" >
<legend>Filter:</legend><br/>
    
    <input type="radio" name="filter" value="Movie_Name"> Title<br /><br />
    <input type="radio" name="filter" value="Release_Date"> Release Date<br/><br/>

  <input type="submit" value="Submit" name='submit'>
</form>
</div>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div class="filter">
<form method="post" action="../PHP/AgeRating.php" >
<legend>Age Rating:</legend><br/>
    
  <input type="radio" name="filter" value="U"> U<br /><br />
  <input type="radio" name="filter" value="PG"> PG<br/><br/>
  <input type="radio" name="filter" value="12"> 12<br/><br/> 
  <input type="radio" name="filter" value="12A"> 12A<br/><br/> 
  <input type="radio" name="filter" value="15"> 15<br/><br/> 
  <input type="radio" name="filter" value="18"> 18<br/><br/> 

  <input type="submit" value="Submit" name='submit'>
</form>
</div>
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

