<?php

class StaticExample {
  static public $myNum;
  
  static public function sayHello() {
    self::$myNum++;
    echo "HELLO (" . self::$myNum . ")<br>\n";
  }
}