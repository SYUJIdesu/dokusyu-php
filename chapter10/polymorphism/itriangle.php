<?php

require_once 'ifigure.php';

class Itriangle implements Ifigure {

  
  private $width;
  private $height;

  public function __construct(float $width,float $height){
    $this->widht = $width;
    $this->hight = $height;
  }

  public function getArea(): float {
    return $this->width * $this->height / 2;
  }
}