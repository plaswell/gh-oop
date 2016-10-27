<?php namespace Petrosgames\hamurabi;

class Sumeria {
  public $current_year = 0;
  public $reign = 10;
  public $population = 0;
  public $acres_owned = 0;
  public $acres_planted = 0;
  public $grain_in_silos = 0;
  
  function __construct() {
    $this->population = 95;
    $this->acres_owned = 1000;
    $this->grain_in_silos = 2800; 
  }
  
  
  
}
