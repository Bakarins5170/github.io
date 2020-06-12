<html>
    <head>
        <title>FilmLion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Movies.css">
        <link rel="icon" href="../Images/logosmall1.jpg">
    </head>
<body>
<?php
include '../Cinema/header.php';
?>
 
 


	<!--/*<--!<footer>
		<p>&copy; copyright for Film Lion | 2020</p>
	</footer>--*/-->
	
<?php

//Make connection to database
include '../PHP/connection.php';

$filter=$_POST['filter'];

//create a query to select all records from Movies table
$query="SELECT * FROM Movies";

//create a query to select all records from products table
$filterquery="SELECT * FROM Movies WHERE Age_Rating='$filter'";

//run query and store the result in a variable called $result
$result=mysqli_query($connection, $filterquery);

//Use a while loop to iterate through your $result array and display
echo "<table class='table'>
    <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Age Rating</th>
        <th>Release Date</th>
    </tr>";
    echo "<tr>";
while ($row=mysqli_fetch_assoc($result)){
echo "<td>".'<img src="../Images/' . $row['Image_Name'] . '" /> '."</td>";
echo "<td>".$row['Movie_Name']."</td>";
echo "<td>".$row['Age_Rating']."</td>";
echo "<td>".$row['Release_Date']."</td>";
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

</body>    
</html>