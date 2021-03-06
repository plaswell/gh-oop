<?php namespace Petros\shop;

use \PDO;


include ('Chargeable.php');
include ('config.php');
include ('ShopProduct.php');
include ('ShopProductWriter.php');
include ('CdProduct.php');
include ('BookProduct.php');
include ('StaticExample.php');
include ('TestDb.php');
include ('PeterPrint.php');
include ('../constants.php');


?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php

    $product1 = new BookProduct("My Antonia", "Willa", "Cather", 5.99, 320);
    $product2 = new CdProduct("Abbey Road", "The", "Beatles", 15.99, 37.23);
        
    print "{$product1->getSummaryLine()}\n";
    print "<br>";
    print "{$product2->getSummaryLine()}\n";
    
    print "<br>";
    print "<br>";
    
    //print StaticExample::$myNum;
    StaticExample::sayHello();
    StaticExample::sayHello();
    StaticExample::sayHello();
        
    print "<br>";
    print "<br>";
    
    ///*
    
    $dsn = "sqlite://Users/petros/Sites/gh-oop/shop/products.db";
    $pdo = new PDO($dsn,null,null);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $obj = ShopProduct::getInstance(1, $pdo);
    var_dump($obj);
    print ShopProduct::MYWORD; //testing a constant containing a string
    unset($obj);
    
    print "<br>";
    print "<br>";
    
    $obj2= ShopProduct::getInstance(2, $pdo);
    
    var_dump($obj2);
    
    print "<br><p>Price: $" . $obj2->getPrice() . "</p><br>";
    
    unset($obj2);
    
    print "<br>";
    print "<br>";
    
    date_default_timezone_set('Australia/Canberra');
    
    $date = date_create(FRED);
    
    
    print  date_format($date, 'jS F Y');
    
    print "<br>";
    print NO;
    print "<br>";
    print YES;
    print "<br>";
    
    function simpGen() {
      yield 'foo';
      yield 'bar';
      yield '42';
      yield 'boo papa doo!';
      yield '0';
      yield 'The End.';
    }

        print "<br>";
   foreach (simpGen() as $foo) {
     echo $foo . "<br>";
   }
        print "<br>";
    
    print "That's All Folks!";
    
    //*/
    
    //$database = new SQLite3('myDatabase.sqlite');
    
    //TestDb::makeMydb();
    
    
    //$product2 = new ShopProduct();
    //$product2->title = "Catch 22";
    
    //$writer = new ShopProductWriter();
    //$writer->write($product1);
    
    //class Wrong{}
    
    //$writer = new ShopProductWriter();
    //$writer->write(new Wrong());
    
    //echo "author: {$product1->getProducer()}\n";
    
    //print "author: {$product1->producerFirstName} "
    //              . "{$product1->producerMainName}\n";
    
    //var_dump($product1);
    //var_dump($product2);
    
?>


</html>
