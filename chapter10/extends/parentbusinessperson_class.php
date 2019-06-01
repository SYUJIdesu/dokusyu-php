<?php

require_once 'businessPerson_class.php';

class HetareBusinessPerson extends BusinessPerson {
  public function work() {
    parent::work();
    print 'ただしぼちぼちと';
    }
}