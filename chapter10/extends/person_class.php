<?php

class Person {

  public $firstName;
  public $lastName;

  public function __construct(string $firstame, string $lastame){
    $this->firstName = $firstame;
    $this->lastName = $lastame;
  }

  /*public function __destruct(){
    print "<p>".__CLASS__."オブジェクトが破棄されました</p>";
  }
*/
  public function show(){
    print "<p>僕の名前は{$this->lastName}{$this->firstName}</p>";
  }
}


