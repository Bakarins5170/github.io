<?php include 'connection.php';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $rec = mysqli_query($connection, "SELECT * FROM Pizza WHERE Pizza_ID = $id");
    $record = mysqli_fetch_array($rec);
    $pname = $record['Pizza_Name'];
    $pprice = $record['Pizza_Price'];
    $pquan = $record['Pizza_Quantity'];
    $pimage = $record['Pizza_Image'];
    $id = $record ['Pizza_ID'];
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="menu.css" />
 </head>
 <body>
 <header>
 <div>
 <img src="images/Muscle Minds.jpg" alt="Muscle Minds" width="200" height="75">
 </div>
 <p>Providing the foods you <b>love</b> without the consequences!</P>
 
 <div class="navbar">
  <a href="Musclemind.php" class="active">Home</a>
  <a href="menu.php" class="right">The Menu</a>
  <a href="favourites.php" class="right">Favourites</a>
  <a href="Admin.php" class="right">Admin</a>
  <a href="logout.php" class="right">Logout</a>
   <div class="search-container">
    <form action="">
      <input type="text" placeholder="Search" name="search">
      <input type= "submit" value= "Submit" name="sub"/>
    </form>
  </div>
</div>
 </header>
 <?php if (isset($_SESSION['message'])):?>
 <div class = "msg">
 <?php 
 echo $_SESSION['message'];
 unset($_SESSION['message']);
 ?>
 </div>
 <?php endif ?>
 <?php $results = mysqli_query($connection, "SELECT * FROM Pizza"); ?>
    <table>
        <thead>
             <tr>
                <th>Pizza Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Pizza Image</th>
                <th colspan = "2"> Action</th>    
            </tr>
         </thead>
         
         <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['Pizza_Name'];?></td>
                <td><?php echo $row['Pizza_Price'];?></td>
                <td><?php echo $row['Pizza_Quantity'];?></td>
                <td><?php echo "<img src = '/wat2019/Website/images/" . $row['Pizza_Image'] . ".jpg'";?></td>
                <td>
                <a href = "menu.php?edit=<?php echo $row['Pizza_ID'];?>">Edit</a>
                </td>
                <td>
                <a href = "pizzaDelete.php?id=<?php echo $row['Pizza_ID'];?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
         
     </table>
     <form method = "post" action = "pizzaInsert.php">
     <input type="hidden" name="txtPizzaId" value ="<?php echo $id; ?>">
     <div class = "input-group">
     <label>Pizza Name:</label>
     <input type = "text" name = "txtPizzaName" value = "<?php echo $pname; ?>">
     </div>
     <div class = "input-group">
     <label>Pizza Price:</label>
     <input type = "text" name = "txtPizzaPrice" value = "<?php echo $pprice;?>">
     </div>
     <div class = "input-group">
     <label>Pizza Quantity:</label>
     <input type = "text" name = "txtPizzaQuantity" value = "<?php echo $pquan; ?>">
     </div>
     <div class = "input-group">
     <label>Pizza Image:</label>
     <input type = "text" name = "txtPizzaImage" value = "<?php echo $pimage; ?>">
     </div>
     <div class = "input-group">
     <?php if (!$_SERVER['QUERY_STRING']):?>
     <button type = "submit" name = "pizzaSubmit" class = "btn">Save</button>
     <?php else: ?>
     <button type = "submit" name = "pizzaUpdate" class = "btn">Update</button>
     <?php endif  ?>
     <?php 
     
     session_start();
     if (isset($_SESSION['pizzaUpdate'])) {
          header ('location: loginForm.php');
     }
     ?>
     
     </div>
 <?php
 
?>

 </body>
</html>



