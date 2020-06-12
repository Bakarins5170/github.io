<link rel="stylesheet" type="text/css" href="../CSS/MyAccount.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<?php
echo '<p style="color:white">Welcome '.$_SESSION['txtUser'].'</p><br><br/>';
echo '<p style="color:white">Click <a href="AccountSettings.php">here</a> to view/update your account settings</p><br /><br/><br/>';
echo '<p style="color:white"><a href="../PHP/Logout.php">Logout</a></p><br /><br/><br/>';
?>