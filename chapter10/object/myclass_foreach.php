<?php

require_once 'myclass.php';

$cls = new MyClass();

foreach($cls as $key => $value){
  print "{$key}:{$value}<br>";
}

print "<hr>";

$cls->showProperty();