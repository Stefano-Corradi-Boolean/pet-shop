<?php

require_once __DIR__ . '/Category.php';

class Product{

  public $name;
  public $price;
  public $image;
  public $code;
  public $category;
  public $is_available =  true;
  private $discount = 0;

  public function __construct(String $_name,
                              FLoat $_price,
                              String $_image,
                              String $_code,
                              Category $_category){
      $this->name = $_name;
      $this->price = $_price;
      $this->image = $_image;
      $this->code = $_code;
      $this->category = $_category;
  }

  public function setDiscount($_discount){
    // TODO: mettere i conctrolli
    $this->discount = $_discount;
  }


  public function getFormatPrice(){
    return number_format($this->price, 2, ',', '.');
  }
  
  
  public function getFinalPrice(){
    return $this->price *=  1 - $this->discount / 100;
  }

  public function getFormatFinalPrice(){
    return number_format($this->getFinalPrice(), 2, ',', '.');
  }
}