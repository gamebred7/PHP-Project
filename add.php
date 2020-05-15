<?php

require 'configDB.php';

$task = $_POST['task'];
if($task==''){
    echo 'Введите само задание';
    exit();
}

  $stmt = $conn->prepare("INSERT INTO tasks (task)  VALUES (:task)");
  $stmt->execute(array('task'=>$task));
  echo "New records created successfully";
$conn = null;

header('Location: /');
?>