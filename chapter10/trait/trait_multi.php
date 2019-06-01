<?php

interface IFax {
  function send();
}

interface IPrinter {
  function print();
}

trait FaxTrait {
  public function send(){
    print 'sending Fax...sending';
  }
}

trait PrinterTrait {
  public function print(){
    print 'printing';
  }
}

class FaxPrinter implements IFax, IPrinter {
  use FaxTrait, PrinterTrait;
}

$fp = new FaxPrinter();
$fp->send();
$fp->print();

