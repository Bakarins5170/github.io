<?php
//end existing SESSION
session_start();
session_destroy();

//make connection to database
include 'connection2.php';

//redirect to login page
header('location: ../Cinema/Login.php')
?>