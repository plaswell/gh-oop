<?php

class ShopProductWriter {

  public function write(ShopProduct $shopProduct) {
    $str = "{$shopProduct->title}: " .
          $shopProduct->getProducer() .
          " ({$shopProduct->price})\n";
    print $str;
  }
  
}
