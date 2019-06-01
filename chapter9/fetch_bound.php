<?php

require_once '../db.php';

try {
  $db =getDb();
  $stmt = $db->prepare('SELECT * FROM photo WHERE id = ?');
  $stmt->bindValue(1,$_GET['id'] ?: 1);
  $stmt->execute();

  $stmt->bindColumn('type', $type, PDO::PARAM_STR);
  $stmt->bindColumn('data', $data, PDO::PARAM_LOB);
  if($stmt->fetch(PDO::FETCH_BOUND)){
    header("Content-type: {$type}");
    print $data;
  }else {
    print '該当するデータはありません';
  }
}catch(PDOException $e){
  print $e->getMessage();
}