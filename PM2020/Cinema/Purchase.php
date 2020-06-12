
<?php
include '../Cinema/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Purchase.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title>Film Lion - Contact Us</title>

</head>
<body>
	<div class="main">
		<div class="info">Booking and pay confirmed</div>
		<form action="../PHP/BookingInsert.php" action="../PHP/DisplayBookingDetails.php" method="POST" name="form" class="form-box">
			<label style ="color:black" for="name">Booking Details</label><br/><br/>
			
			<label>Movie Title:</label>
			<input type="text" name="moviename" class="inp" placeholder="Movie name" required>
			<label>Location:</label>
			<input type="text" name="location" class="inp" placeholder="Location" required>
			<label>Cinema:</label>
			<input type="text" name="cinema" class="inp" placeholder="Cinema" required>
			<label>Date:</label>
			<input type="date" name="date" min="2020-05-28" max="2020-06-28" class="inp" placeholder="Date" required>
			<label>Time:</label>
			<input type="time" name="time" class="inp" placeholder="Time" required>
			<label>Senior Ticket Quantity:</label>
			<input type="number" name="seniorquantity" class="inp" placeholder="Quantity" value ="" required>
			<label>Adult Ticket Quantity:</label>
			<input type="number" name="adultquantity" class="inp" placeholder="Quantity" value ="" required>
			<label>Student Ticket Quantity:</label>
			<input type="number" name="studentquantity" class="inp" placeholder="Quantity" value ="" required>
			<label>Teen Ticket Quantity:</label>
			<input type="number" name="teenquantity" class="inp" placeholder="Quantity" value ="" required>
			<label>Child Ticket Quantity:</label>
			<input type="number" name="childquantity" class="inp" placeholder="Quantity" value ="" required>
			<label>Total Cost:</label>
			<input type="number" name="totalcost" class="inp" placeholder="Total" required>
			<br>			
			<label style ="color:black" ><strong>Payment Form </strong><label>
			<img src="../Images/card-visa.jpg" alt="card visa"><br>
			<label style ="color:Gray">Cardholder Name<label>
			<input type="text" name="cardholdername" required><br>
			<label style ="color:Gray">Card Number<label>
			<input type="number" name="cardnumber" maxlength='16' required><br>
			<label style ="color:gray">Expiry Date<label>
			<input type="date" name="expirydate" placeholder="Expiry date" required><br>
			<label style ="color:gray">CVV<label>
			<input type="number" name="cvv" placeholder="CVV" required><br>
			<input type="submit" name="pursub" value="CONTINUE" class="sub-btn">
		</form>
	</div>
	</br>

			
	
<?php
include '../Cinema/footer.php';
?>
</body>
</html>



