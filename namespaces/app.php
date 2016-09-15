<?php
namespace App;
include "config.php";
include "project.php";
use Project\Table as ProjectTable;
class Table {
  public static function get() {
    echo "App.Table.get \n";
  }
}

ProjectTable::get();
