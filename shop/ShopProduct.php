<?php

class ShopProduct {
  private $id = 0;
  public $title;
  public $producerMainName;
  public $producerFirstName;
  public $price;
  public $discount;
  const MYWORD = 'foo';

  
  
  function __construct($title, $firstName, $mainName, $price) {
    $this->title = $title;
    $this->producerFirstName = $firstName;
    $this->producerMainName = $mainName;
    $this->price = $price;
 
  }
  
  public function setId($id) {
    $this->id = $id;
  }
  
  public function setDiscount($discount) {
    $this->discount = $discount;
  }
  
  public static function getInstance($id, PDO $pdo) {
    $sql = $pdo->prepare("SELECT * FROM products where id=?");
    $result = $sql->execute(array($id));
    $row = $sql->fetch();
    if (empty($row)) {
      return null;
    }
    if ($row['type'] == "book") {
      $product = new BookProduct(
        $row['title'],
        $row['firstname'],
        $row['mainname'],
        $row['price'],
        $row['numpages']
      );
    } else if ($row['type'] == "cd") {
      $product = new CdProduct(
        $row['title'],
        $row['firstname'],
        $row['mainname'],
        $row['price'],
        $row['playlength']
      );
    } else {
      $product = new ShopProduct(
        $row['title'],
        $row['firstname'],
        $row['mainname'],
        $row['price']
      );
    }
    $product->setId($row['id']);
    $product->setDiscount($row['discount']);
    return $product;
    
  }
  
  
  function getProducer() {
    return  "{$this->producerFirstName}" . " " .
            "{$this->producerMainName}";
  }
  
  function getSummaryLine() {
    $base  = "$this->title ( {$this->producerMainName}, ";
    $base .= "{$this->producerFirstName} )";
    return $base;
  }
  
  

  
  
}
