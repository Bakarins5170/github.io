<?php
//Make connection to database
include 'connection.php';
?>


<?php 
if (isset($_POST['pursub'])){	
	$moviename= $_POST['moviename'];
    $location= $_POST['location'];
    $cinema= $_POST['cinema'];
    $date= $_POST['date'];
    $time= $_POST['time'];
    $cardholdername= $_POST['cardholdername'];
    $cardnumber= $_POST['cardnumber'];
    $expirydate= $_POST['expirydate'];
    $cvv = $_POST['cvv'];
    $seniorquantity= $_POST['seniorquantity'];
    $adultquantity= $_POST['adultquantity'];
    $studentquantity= $_POST['studentquantity'];
    $teenquantity= $_POST['teenquantity'];
    $childquantity= $_POST['childquantity'];
    $totalcost= $_POST['totalcost'];
}

//create a query to select all records from products table
$query="SELECT * FROM Booking WHERE Cardholder_Name='$cardholdername'";
//echo "$query";
$result=mysqli_query($connection, $query);
$row=mysqli_fetch_assoc($result);

echo "Customer Name: ".$cardholdername."</br>";
echo "Movie Name: ".$moviename."</br>";
echo "Location: ".$cinema.", ".$location."</br>";
echo "Time: ".$time.", ".$date."</br>";
echo "Senior Quantity: ".$seniorquantity."</br>";
echo "Adult Quantity: ".$adultquantity."</br>";
echo "Student Quantity: ".$studentquantity."</br>";
echo "Teen Quantity: ".$teenquantity."</br>";
echo "Child Quantity: ".$childquantity."</br>";
echo "Total Payment: ".$totalcost."</br>";

//header('Location: ../Cinema/DisplayBookingDetails.php?cardholdername='. $row['Cardholder_Name'].'');
?>

