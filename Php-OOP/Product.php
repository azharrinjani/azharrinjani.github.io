<?php
class Product {
  private $name;
  private $price;

  function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() {
    return $this->name;
  }

  public function setPrice($price) {
    $this->price = $price; // Menghapus return, ini adalah setter
  }
}

$product = new Product("Popok", 10000); // Perbaiki $produk menjadi $product
echo $product->getName(); // Pastikan menggunakan $product
