<?php
include 'connection.php';
session_start();

$edit_state = false;

if (isset($_POST['pizzaSubmit'])){
$pname = $_POST['txtPizzaName'];
$pprice = $_POST['txtPizzaPrice'];
$pquan = $_POST['txtPizzaQuantity'];
$pimage = $_POST['txtPizzaImage'];

$query = "INSERT INTO Pizza (Pizza_Name, Pizza_Price, Pizza_Quantity, Pizza_Image) VALUES ('$pname','$pprice','$pquan','$pimage')";
$_SESSION['message'] = "Product Saved";
mysqli_query($connection, $query);
		header('location:menu.php');
		
}

if(isset($_POST['pizzaUpdate'])) {
    $id = $_POST['txtPizzaId'];
    $pname = $_POST['txtPizzaName'];
    $pprice = $_POST['txtPizzaPrice'];
    $pquan = $_POST['txtPizzaQuantity'];
    $pimage = $_POST['txtPizzaImage'];    
    mysqli_query($connection, "UPDATE Pizza SET Pizza_Name = '$pname', Pizza_Price = '$pprice', Pizza_Quantity = '$pquan', Pizza_Image = '$pimage' WHERE Pizza_ID = $id ");
    $_SESSION['msg'] = "Product Updated";
    header('location:menu.php');
    
}

$results = mysqli_query($connection, "SELECT * FROM Pizza");
?>