<?php

class TriangleFigure  {

  public $base;
  public $hight;

  public function __construct(){
    $this->base = 1;
    $this->hight = 1;
  }

  public function getArea (): float{
    return $this->base * $this->hight / 2;
  }
}