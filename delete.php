<?php
require 'configDB.php';


$id=$_GET['id'];

$sql = "DELETE FROM tasks WHERE id = ?";
$query = $conn->prepare($sql);
  $query->execute([$id]);


  header('Location: /');
?>