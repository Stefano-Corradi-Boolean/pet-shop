<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{

  public $weight;
  public $ingredients;

  public function __construct(String $_name,
                              FLoat $_price,
                              String $_image,
                              String $_code,
                              Category $_category,
                              Int $_weight,
                              Array $_ingredients){
      
    parent::__construct($_name, $_price, $_image, $_code, $_category);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;

  }


}