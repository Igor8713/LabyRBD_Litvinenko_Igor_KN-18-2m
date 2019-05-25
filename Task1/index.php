<html>
<head>
  <meta charset="utf-8">
  <title>Task 1</title>
</head>
<body>
<?php
  require_once 'connect.php';
  $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка: Соедиение с таблицой не установлено " . mysqli_error($link));
  $query ="SELECT * FROM phones";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result)
  {
      echo "Соединение с базой данных УСТАНОВЛЕНО";
  }

  mysqli_close($link);
 ?>
</body>
</html>