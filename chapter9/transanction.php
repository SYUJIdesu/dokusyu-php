<?php
require_once '../db.php';

try{
  $db = getDb();
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  $db->beginTransaction();
  $db->exec("INSERT INTO book(isbn,title,price,publish,published) VALUES ('978-4-7981-2151-2','独習',3200,'会社','2012-04-12')");

  $db->exec("INSERT INTO book(isbn,title,price,publish,published) VALUES ('978-4-7981-2151-2','独習',3200,'会社','2012-04-12')");

  $db->commit();
  
} catch(PDOException $e){
  $db->rollBack();
  print "エラーメッセージ{$e->getMessage()}";
}