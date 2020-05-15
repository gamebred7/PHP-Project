<?php

  require 'configDB.php';
  $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
  $conn->exec($sql);
$sql = "CREATE TABLE IF NOT EXISTS tasks (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  task VARCHAR(255) NOT NULL)";
$conn->exec($sql);

$conn = null;
?>