<?php

class TestDb {

  static public function makeMydb() {
    $db = new SQLite3('products.db');

    //drop the table if already exists
    $db->exec('DROP TABLE IF EXISTS products');

    //Create a basic table
    $db->exec('CREATE TABLE products (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        type TEXT,
        firstname TEXT,
        mainname TEXT,
        title TEXT,
        price FLOAT,
        numpages int,
        playlength int,
        discount int)
      ');
    echo "Table products has been created. \n";

    
    
    //insert rows
    $db->exec('INSERT INTO products (
    type, firstname, mainname, title, price, numpages, playlength, discount
    ) VALUES (
    "cd", "The", "Beatles", "Abbey Road", 15.99, null, 37, 10
    )');
    echo "Row inserted \n";
    
    $db->exec('INSERT INTO products (
    type, firstname, mainname, title, price, numpages, playlength, discount
    ) VALUES (
    "book", "Willa", "Cather", "My Antonia", 4.99, 320, null, 10
    )');
    echo "Row inserted \n";
  }
  
}
