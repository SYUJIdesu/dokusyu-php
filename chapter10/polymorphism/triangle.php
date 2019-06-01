<?php

require_once 'figure.php';

class Triangle extends Figure {

  public function getArea(): float{
    return $this->width * $this->height / 2;
  }

}