<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Orientado a Objetos</title>
</head>
<body>
  <?php
    include_once("car.php");
    include_once("account.php");

    $car = new Car("123XYZ", $account = new Account("Carlos Eduardo", "123ABC"));
    echo $car->printCarData();
  ?>
</body>
</html>