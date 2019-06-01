<?php

require_once 'person_class.php';

class BusinessPerson extends Person{
  public function work(){
    print "<p>{$this->lastName}{$this->firstName}ビジネスマンです</p>";
  }
}