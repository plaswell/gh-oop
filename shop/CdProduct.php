<?php namespace Petros\shop;

class CdProduct extends ShopProduct {
  public $playLength;
  
  function __construct($title, $firstName, $mainName, $price, $playLength) {
    parent::__construct($title, $firstName, $mainName, $price);
    $this->playLength = $playLength;
  }
   
  function getPlayLength() {
    return $this->playLength;
  }
  
  function getSummaryLine() {
    $base  = "$this->title ( {$this->producerMainName}, ";
    $base .= "{$this->producerFirstName} )";
    $base .= " : \${$this->price}";
    $base .= " : playing time - {$this->playLength}";
    return $base;
  }
  
}
