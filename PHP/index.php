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
    require_once("car.php");
    require_once("uberX.php");
    require_once("uberPool.php");
    require_once("account.php");

  $uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
  $uberX->printDataCar();

  $uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
  $uberPool->printDataCar();
  ?>
</body>
</html>