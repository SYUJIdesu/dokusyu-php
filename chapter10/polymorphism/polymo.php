<?php
require_once 'itriangle.php';
require_once 'square.php';

$tri = new Itriangle(5,10);
$squ = new Squqre(2,5);

print $tri->getArea();
print "<br>";
print $squ->getArea();