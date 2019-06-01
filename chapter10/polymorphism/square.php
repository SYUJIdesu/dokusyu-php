<?php
require_once 'figure.php';

class Squqre extends Figure {

  public function getArea(): float{
    return $this->width * $this->height;
  }
}