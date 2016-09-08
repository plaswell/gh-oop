<?php


class ShopProduct {
  public $title;
  public $producerMainName;
  public $producerFirstName;
  public $price = 0;
  
  function __construct($title, $firstName, $mainName, $price) {
    $this->title              = $title;
    $this->producerFirstName  = $firstName;
    $this->producerMainName   = $mainName;
    $this->price              = $price;
  }
  
  function getProducer() {
    return "{$this->producerFirstName}" . " " . "{$this->producerMainName}";
  }
}

class ShopProductWriter {
  public function write(ShopProduct $shopProduct) {
    $str = "{$shopProduct->title}: " . $shopProduct->getProducer() .
      " ({$shopProduct->price})\n";
    print $str;
  }
}




# --------------------------------------------------------------------------- #
error_reporting(E_ALL);
ini_set('display_errors', 1);

$product1 = new ShopProduct("The Rocks of Honey",
                            "Patricia",
                            "Wrightson",
                            15.99);

print "Author: {$product1->getProducer()}\n<br><br>";

$writer = new ShopProductWriter();
$writer->write($product1);

