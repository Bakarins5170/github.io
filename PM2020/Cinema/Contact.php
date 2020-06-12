
<?php
include '../Cinema/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/Contact.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title>Film Lion - Contact Us</title>

</head>
<body>
<div class="banner-image">
  <div class="banner-text">
    <h2>Contact Us</h2>
  </div>
</div>
        
    <article class="feedback">
    <h4>Need More Information? Submit a Feedback Form Here:</h4>
    <div class="main">
		<div class="info"></div>
		<form action="../PHP/Mail_contact.php" method="post" name="form" class="form-box">
			<label for="name">Full Name:</label><br>
			<input type="text" name="name" class="inp" placeholder="e.g. John Smith" required><br>
			<label for="email">Email Address:</label><br>
			<input type="email" name="email" class="inp" placeholder="e.g. johnsmith@gmail.com" required><br>
			<label for="message">Message:</label><br>
			<textarea name="msg" class="msg-box" placeholder="Type message here..." required></textarea><br>
			<input type="submit" name="submit" value="Send" class="sub-btn">
		</form>
	</div>
    </article>

  <article class="faq">
  <h4>FAQ Section:</h4>
    <div class="first">
            <div>
                <ul>
                <details>
                		<summary>
                			 <strong> How do I find my tickets?</strong>
                		</summary>
                		<p style="text-align:left;"> After confirming your booking information, an email receipt will be sent to the inbox of the email address provided. </p>
                	</details>
                </ul>  
                <ul>
                <details>
                		<summary>
                			 <strong> Can I change my account details?</strong>
                		</summary>
                		<p style="text-align:left;"> Once you have registered for a FilmLion account, you can login via the 'Login' page and select the option to view/alter your existing account details. </p>
                	</details>
                </ul>  
                <ul>
                <details>
                		<summary>
                			 <strong> What are the prices for tickets?</strong>
                		</summary>
                		<p style="text-align:left;"> The standard prices for tickets (no discounts or memberships applied) are: </br> Senior: £5.50 </br> Adult: £6.50 </br> Student: £5.00 </br> Teen: £4.50 </br> Child: £3.50</p>
                	</details>
                </ul>  
            </div>

        </div>
  
  </article>

  <article class="subscribe">
    <h4>Subscribe to our Newsletter for Regular Updates:</h4>
    <form action="../PHP/Subscribe.php" method="post" name="form">
                
                  <div>
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="email" placeholder="Email Address" name="email" required>
                
                  </div>
                
                  <div>
                    <input style="background-color:#D00000;color:white;font-size:12px" type="submit"
                    name="submitsubscribe" value="Subscribe">
                  </div>
                </form>
  </article>

	
<?php
include '../Cinema/footer.php';
?>
</body>
</html>



