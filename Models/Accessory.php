<?php

require_once __DIR__ . '/Product.php';

class Accessory extends Product{

  public $material;
  public $size;

  public function __construct(String $_name,
                              FLoat $_price,
                              String $_image,
                              String $_code,
                              Category $_category,
                              String $_material,
                              String $_size){
      
    parent::__construct($_name, $_price, $_image, $_code, $_category);

    $this->material = $_material;
    $this->size = $_size;

  }


}