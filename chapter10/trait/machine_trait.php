<?php

require_once 'machinetrait.php';

class Fax {
  use machinetrait;

  public function send(){
    print 'sending Fax...sending';
  }
}

$fx = new Fax();
$fx->run();
print '<br>';
$fx->send();