<!DOCTYPE html>
<html lang = "ru">
<head>
<meta charset = "UTF-8">
<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
<meta http-equiv = "X-UA-Compatible" content = "ie=edge">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Список дел</title>
<?php require "database.php"?>
</head>
<body>

<div class="container">
<h1>Список дел</h1>

<form action="/add.php" method="post">
<input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
<button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
</form>


<?php
require 'configDB.php';

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }
}

echo '<ul>';
  $stmt = $conn->prepare("SELECT id, task FROM tasks ORDER BY id DESC");
  $stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_OBJ)){
echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button type="submit" name="sendTask" class="btn btn-danger">Удалить</button></a></li>';
}
  echo '</ul>';

$conn = null;

?>


</div>

</body>
</html>