<?php

require_once __DIR__ . '/accessori.php';

class accessori extends prodotti {
  public $materiale;
  public $size;

  public function __construct(
    String $_name,
    Float $_price,
    String $_image,
    Category $_categoria,
    String $size,
    String $materiale
  ){
parent:: __construct($_name, $_price, $_image, $_categoria);

$this->size = $_size;
$this->materiale = $_materiale;
  }

}