<?php
function getDb(){
  $dbh = 'mysql:dbname=selfphp';
  $usr = 'nishiyama';
  $pass ='aimj230334';
  $db = new PDO($dbh,$usr,$pass);//PDO::ATTR_PRESISTENT => TRUE
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  return $db;
}