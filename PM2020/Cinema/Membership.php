<?php
include '../Cinema/header.php';
?>


<html>
    <head>
        <title>FilmLion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Membership.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="icon" href="../Images/logosmall1.jpg">
    </head>
<body>

<div class="banner-image">
  <div class="banner-text">
    <h2>Memberships & Discounts</h2>
    <h3>Browse All Valid Discounts</h3>
  </div>
</div>

<?php

//Make connection to database
include '../PHP/connection.php';


//create a query to select all records from Movies table
$discountQuery="SELECT * FROM Discounts";

//run query and store the result in a variable called $result
$discountResult=mysqli_query($connection, $discountQuery);

//Use a while loop to iterate through your $result array and display
echo "<table class='table'>
    <tr>
        <th>Discount</th>
        <th>Amount</th>
        <th>Description</th>
    </tr>";
    echo "<tr>";
while ($row=mysqli_fetch_assoc($discountResult)){
echo "<td>".$row['Discount_Name']."</td>";
echo "<td>".$row['Discount_Percent']."%"."</td>";
echo "<td>".$row['Description']."</td>";
echo "</tr>";
}
echo "</table>";


//create a query to select all records from Movies table
$membershipQuery="SELECT * FROM Memberships";

//run query and store the result in a variable called $result
$membershipResult=mysqli_query($connection, $membershipQuery);

//Use a while loop to iterate through your $result array and display
echo "<table class='table'>
    <tr>
        <th>Membership</th>
        <th>Price</th>
        <th>Description</th>
    </tr>";
    echo "<tr>";
while ($row=mysqli_fetch_assoc($membershipResult)){
echo "<td>".$row['Name']."</td>";
echo "<td>".'£'.$row['Price']."/month"."</td>";
echo "<td>".$row['Description']."</td>";
echo "</tr>";
}
echo "</table>";
?>

<?php
include '../Cinema/footer.php';
?>

</body>    
</html>
