<?php

require_once __DIR__ . '/prodotti.php';

class food extends prodotti {
  public $peso;
  public $ingredienti;

  public function __construct(
    String $_name,
    Float $_price,
    String $_image,
    Category $_categoria,
    String $_peso,
    array $_ingredienti
  ){
parent:: __construct($_name, $_price, $_image, $_categoria);

$this->peso = $_peso;
$this->ingredienti = $_ingredienti;
  }

}