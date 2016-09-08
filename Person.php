<?php
class Person {
  protected $name;
  
  function setName($name) {
    $this->name = $name;
  }  
  function getName() {
    return $this->name;
  }
}

class Student extends Person {
  protected $sid;
  
  function setSid($sid) {
    $this->sid = $sid;
  }
  function getSid() {
    return $this->sid;
  }
}


class Animal {
  protected $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
   public function getName() {
    return $this->name;
  }
   public function speak() {
    return $this->getName() . " is speaking<br>";
  }
}


class Cow extends Animal {
  public function getName() {
    return 'Cow: ' . parent::getName();
  }
}

function Name(Animal $a) {
  echo $a->getName();
}

