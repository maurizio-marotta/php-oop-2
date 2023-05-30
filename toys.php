<?php

require_once __DIR__ . '/toys.php';

class toys extends prodotti {
  public $features;
  public $size;

  public function __construct(
    String $_name,
    Float $_price,
    String $_image,
    Category $_categoria,
    String $features,
    String $size
  ){
parent:: __construct($_name, $_price, $_image, $_categoria);

$this->features = $_features;
$this->size = $_size;
  }

}