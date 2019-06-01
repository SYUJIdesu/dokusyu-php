<?php
require_once '../db.php';

try {
  $db = getDb();
  $db->exec("INSERT INTO member (nam,sex,old,enter,memo) VALUES('山田','男',18,'2016-09-30','')");
  print $db->lastInsertId();
}catch(Exception $e){
  print $e->getMessage();
}