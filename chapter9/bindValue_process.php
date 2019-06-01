<?php
require_once '../db.php';

try{
  $db = getDb();
  $stmt = $db->prapare('INSERT INTO photo (type,data) VALUES(:type,:data)');
  
  $file = fopen($_FILES['photo']['tmp_name'],'rb');

  $stmt->bindValue(':type', $_FILES['photo']['type'],PDO::PARAM_STR);
  $stmt->bindValue(':data',$file,PDO::PARAM_LOB);
  $stmt->execute();
  print '成功';
}catch (Exception $e){
  print "エラーメッセージ{$e->getMessage()}";
}