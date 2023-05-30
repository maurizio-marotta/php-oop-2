<?php

class Category {
  public $name;
  public $icone;


  public function __constract($name, $icone){
    $this->name = $name;
    $this->icone = $icone;  
  }
} 