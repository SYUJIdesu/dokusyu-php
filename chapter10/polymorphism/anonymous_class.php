<?php

interface Runnable {
  function run();
}

class Myclass {
  public function execute(Runnable $rc){
    print 'start..';

    $rc->run();

    print 'end..';
  }
}
$cls = new Myclass();

$cls->execute(new class implements Runnable{
  public function run(){
    print 'process';
  }
});