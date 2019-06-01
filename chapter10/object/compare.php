<?php

require_once '../extends/person_class.php';

$p1 = new Person('りお','山田');
$p2 = $p1;

var_dump($p1 == $p2);
var_dump($p1 === $p2);

$p3 = clone $p1;

var_dump($p1 == $p3);
var_dump($p1 === $p3);