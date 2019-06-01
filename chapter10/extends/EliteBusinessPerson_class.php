<?php

require_once 'businessPerson_class.php';

final class EliteBusinessPerson extends Business {
  public final function work() {
    print "<p>{$this->lastName}{$this->firstName}はエリート</p>";
  }
}