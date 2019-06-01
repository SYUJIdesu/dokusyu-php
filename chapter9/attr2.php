<?php
require_once '../db.php';

try{
  $db=getDb();
  $db->exce('MECAH KUCHA');

}catch (Exception $e){
  print $e->getCode();
  print $e->getMessage();
}