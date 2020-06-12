<?php print_r($_POST);
include 'connection.php';
if(isset($_POST['keywords'])) {
  $keywords = $connection->escape_string($_POST['keywords']);
   $query = $connection->query("SELECT Movie, Cinema, Location FROM Filter WHERE '%{$keywords}%' LIKE '%{$keywords}%' ");
header('location: ../Cinema/Movies.php');



?>

