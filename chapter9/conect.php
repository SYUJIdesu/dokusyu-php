<?php
$dsn = 'mysql:dbname=selfphp;host=localhost;charset=utf8';
$usr = '';
$pass = '';

try {
  $dbh = new PDO($dsn,$usr,$pass);
  print '接続成功';
}catch (PDOException $e){
  print "接続エラー{$e->getMessage()}";
}finally{
  $db = null;
}