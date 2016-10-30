<?php namespace Petrosgames\hamurabi;

class Sumeria {
  public static $current_year = 1;
  public static $current_question = 1;
  public static $reign_end = 10;
  public static $population = 95;
  public static $acres_owned = 1000;
  public static $acres_planted = 0;
  public static $grain_in_silos = 2800;
  public static $buy;
  public static $sell;
  public static $feed;
  public static $plant;
  public static $error = "";
  
  public static function updateVals($qans, $qnum) {
    echo "qnum: " . $qnum;
    switch ($qnum) {
      case 1:
        if ($qans > 0) {
          self::$buy = $qans;
          self::$current_question = 3;
        } else if ($qans == 0){
          self::$current_question = 2;
        } else {
          self::$error = "NEGATIVE BUY";
        }
        break;
      case 2:
        if ($qans >= 0) {
          self::$sell = $qans;
          self::$current_question = 3;
        } else {
          self::$error = "NEGATIVE SELL";
        }
        break;
      case 3:
        if ($qans >= 0) {
          self::$feed = $qans;
          self::$current_question = 4;
        } else {
          self::$error = "NEGATIVE FEED";
        }
        break;
      case 4:
        if ($qans >= 0) {
          self::$plant = $qans;
          self::$current_question = 1;
          self::$current_year++;
        } else {
          self::$error = "NEGATIVE PLANT";
        }
        break;
    }
  }
   
  function showStats() {
    echo "<p>";
    echo "In year " . self::$current_year;
    echo "<br>";
    echo "Population: " . self::$population;
    echo "<br>";
    echo "You own " . self::$acres_owned . " acres of land";
    echo "<br>";
    echo "Grain in silos: " . self::$grain_in_silos . " bushels";
    echo "</p>";
  }
  
  function getCurrentQuestion() {
    return self::$current_question;
  }
  
  function setCurrentQuestion($cQ) {
    self::$current_question = $cQ;
  }
  
  function showAllVals() {
    
    echo "<br><br><br><br><br>";
    echo "<h3>Show All Values</h3>";
    echo "<hr>";
    echo "current_year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$current_year;
    echo "<br>";
    echo "current_question:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$current_question;
    echo "<br>";
    echo "reign_end:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$reign_end;
    echo "<br>";
    echo "population:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$population;
    echo "<br>";
    echo "acres_owned:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$acres_owned;
    echo "<br>";
    echo "acres_planted:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$acres_planted;
    echo "<br>";
    echo "grain_in_silos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$grain_in_silos;
    echo "<br>";
    echo "buy:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$buy;
    echo "<br>";
    echo "sell:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$sell;
    echo "<br>";
    echo "feed:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$feed;
    echo "<br>";
    echo "plant:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$plant;
    echo "<br>";
    echo "error:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . self::$error;
    echo "<hr>";
  }
  
  
  
  
} // END CLASS Sumeria


class Question {
  public static $first   = "How many acres do you wish to buy?";
  public static $second  = "How many acres do you wish to sell?";
  public static $third   = "How many bushels do you wish to feed your people?";
  public static $fourth  = "How many acres do you wish to plant with seed?";

  public function getQuestion($which) {
    switch ($which) {
    case 1:
        $ans = self::$first;
        break;
    case 2:
        $ans = self::$second;
        break;
    case 3:
        $ans = self::$third;
        break;
    case 4:
        $ans = self::$fourth;
        break;
    }
    return $ans;
  }
}
