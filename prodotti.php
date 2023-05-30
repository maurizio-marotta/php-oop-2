<?php

require_once __DIR__ . '/categoria.php';

  class prodotti {
    public $name;
    public $categoria;
    public $image;
    public $price;

    public function __construct(
      String $_name,
      Float $_price,
      String $_image,
      Category $_categoria,
      ){
      $this->name = $_name;
      $this->categoria = $_categoria;
      $this->image = $_image;
      $this->price = $_price;
    }

    public function setName(){
      $this->name = $_name;
    }
    
    public function setCategoria(){
      $this->categoria = $_categoria;
    }

    public function setImage(){
      $this->image = $_image;
    } 

    public function setPrice(){
      $this->price = $_price;
    } 



    public function getName(){
      return $this->name;
    }
    
    public function getCategoria(){
      return $this->categoria;
    }

    public function getImage(){
      return $this->image;
    } 

    public function getPrice(){
      return $this->price;
    } 
  }