<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include ('Person.php');

$stud = new Student();
$stud->setName("Fred");
echo $stud->getName();
echo "<br>";

$stud->setName("Joe");
echo $stud->getName();
echo "<br>";

$stud->setSid("23");
echo $stud->getSid();
echo "<br>";

$a = new Cow("Daisy June");
echo $a->getName();
echo "<br>";
echo $a->speak();
echo "<br>";

$b = new Animal("something");
echo $b->speak();
echo "<br>";

$c = new Cow("Flibblette Naus");
Name($c);

