<?php

require_once 'itriangle.php';
require_once 'square.php';

$figs = [];
$figs[] = new Itriangle(12,2);
$figs[] = new Squqre(12,2);
//print_r($figs);

foreach ($figs as $fig){
  if($fig instanceof IFigure){//Ifigureを実装している場合にみgetAreaを実行
    print get_class($fig). '.' . $fig->getArea();
  }
}