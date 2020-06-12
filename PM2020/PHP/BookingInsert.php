<?php
include 'connection.php';

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

$query = "INSERT INTO Booking (Movie_Name, Location, Cinema, Date_Chosen, Time_Chosen, Cardholder_Name, Card_Number, Expiry_Date, CVV, Senior_Quantity, Adult_Quantity, Student_Quantity, Teen_Quantity, Child_Quantity, Total_Cost) VALUES ('$moviename', '$location', '$cinema', '$date', '$time', '$cardholdername', '$cardnumber', '$expirydate', '$cvv', '$seniorquantity', '$adultquantity', '$studentquantity', '$teenquantity', '$childquantity', '$totalcost')";
//echo "$query";
$result=mysqli_query($connection, $query);
$row=mysqli_fetch_assoc($result);

//create a query to select all records from products table
$query2="SELECT * FROM Booking WHERE Cardholder_Name='$cardholdername'";

//run query and store the result in a variable called $result
$result2=mysqli_query($connection, $query2);
$row2=mysqli_fetch_assoc($result2);

header('Location: ../Cinema/BookingReview.php');
