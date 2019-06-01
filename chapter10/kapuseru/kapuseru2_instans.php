<?php

require_once 'kapuseru2_class.php';

$tri = new TriangleFigure();

$tri->setBase(-10);
$tri->setHeight(-10);
print $tri->getArea();