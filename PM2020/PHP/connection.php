<?php 
//Set up the database access credentials
$hostname = 'stu-db.aet.leedsbeckett.ac.uk'; 
$username = 'c3533674'; 
$password = 'MyDB60311911'; 
$databaseName = 'c3533674'; 
//Open the database connection - exit with error message otherwise 
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
?>