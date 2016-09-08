<?php



class Fruit {
  public $color;
  public $weight;
  public $price;
  
  function getPrice() {
    return $this->weight / 1000 * $this->price;
  }
  
}

class Apple extends Fruit {
  function __construct() {
    $this->color = 'green';
    $this->weight = 200;
    $this->price = 2;
  }
}

class Banana extends Fruit {
  private $mySecretProperty;
  
  function __construct() {
    $this->color = 'yellow';
    $this->weight = 250;
    $this->price = 3;
  }
  
  function getPrice() {
    //return $this->weight / 1000 * $this->price * 0.9; // or, 
    return parent::getPrice() * 0.9;
  } 
}
  
$a[] = new Apple();
$a[] = new Banana();

foreach($a as $f) {
  echo $f->color, " ", $f->weight, "  Price: $", $f->getPrice(),  "<br>";
}

class DataModel {
  public static $conn = 1;
  static function getConn() {
    
  }
}

if (!DataModel::$conn) {
  echo 'Connection not established!';

} else {
  echo 'Boo!';
}