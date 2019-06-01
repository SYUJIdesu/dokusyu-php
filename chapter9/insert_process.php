<?php
require_once '../db.php';
try{
  $db = getDb();
  $str = $db->prepare('INSERT INTO book(isbn,title,price,publish,published)VALUES(?,?,?,?,?)');
  $str->bindValue(1,$_POST['isbn']);
  $str->bindValue(2,$_POST['title']);
  $str->bindValue(3,$_POST['price']);
  $str->bindValue(4,$_POST['publish']);
  $str->bindValue(5,$_POST['published']);
  $str->execute();
  header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_form.php');
}catch(PDOExceprion $e){
  print $e->getMessage();
}