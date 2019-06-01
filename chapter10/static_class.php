<?php

class Area {

  public static $pi = 3.14;//静的プロパティ
  const PI = 3.14;//クラス定数

  public static function circle(float $radius): float{
    return pow($radius,2) * self::$pi;//self::PI
  }

}