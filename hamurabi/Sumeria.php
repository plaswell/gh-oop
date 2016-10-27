<?php namespace Petrosgames\hamurabi;

class Sumeria {
  public $current_year;
  public $reign_end;
  public $population;
  public $acres_owned;
  public $acres_planted;
  public $grain_in_silos;
  
  function __construct() {
    $this->population = 95;
    $this->acres_owned = 1000;
    $this->grain_in_silos = 2800; 
  }
  
  function showStats() {
    $this->current_year++;
    echo "<p>";
    echo "In year " . $this->current_year;
    echo "<br>";
    echo "Population: " . $this->population;
    echo "<br>";
    echo "You own " . $this->acres_owned . " acres of land";
    echo "<br>";
    echo "Grain in silos: " . $this->grain_in_silos . " bushels";
    echo "</p>";
  }
  
  
  
}
