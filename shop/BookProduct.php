<?php namespace Petros\shop;

class BookProduct extends ShopProduct {
  public $numPages;
  
  function __construct($title, $firstName, $mainName, $price, $numPages) {
    parent::__construct ($title, $firstName, $mainName, $price);
    $this->numPages = $numPages;
  }
  
  
  function getNumberOfPages() {
    return $this->numPages;
  }
  
  function getSummaryLine() {
    $base  = "$this->title ( {$this->producerMainName}, ";
    $base .= "{$this->producerFirstName} )";
    $base .= " : \${$this->price}";
    $base .= " : page count - {$this->numPages}";
    return $base;
  }  
  
}