<?php

require_once '../extends/person_class.php';

$p1 = new Person('りお','山田');
//$p2 = $p1;オブジェクトの代入 $p2の変更に反映される
$p2 = clone $p1;

$p2->firstName = 'aa';
$p2->lastName = 'bb';

print_r($p1);
print_r($p2);