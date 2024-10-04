<?php
class Mobil {
  public $name;
  public $Merk;

  function __construct($name, $Merk) {
    $this->name = $name;
    $this->Merk = $Merk;
  }
  function get_name() {
    return $this->name;
  }
  function get_Merk() {
    return $this->Merk;
  }
}

$Kendaraan = new Mobil("Toyota", "Avanza");
echo $Kendaraan->get_name();
echo "<br>";
echo $Kendaraan->get_Merk();
