<?php
require_once('car.php');
class UberPool extends Car{
  String brand;
  String model;

  public function __constuct($license, $driver, $brand, $model){
    parent::__constuct($license, $driver);
    $this->brand = $brand;
    $this->model = $model;  
  }
}
?>