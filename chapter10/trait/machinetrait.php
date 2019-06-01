<?php
//トレイトを定義
trait MachineTrait {
  private $starting = 'Starting...Run';

  public function run(){
    print $this->starting;
  }
}