<?php

require_once 'kapuseru_class.php';

$tri = new TriangleFigure();

$tri->base = 10;
$tri->hight = 12;
print $tri->getArea();
