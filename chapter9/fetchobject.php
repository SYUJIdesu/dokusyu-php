<?php
require_once '../db.php';
require_once 'book.php';

$db = getDb();
$stmt = $db->query("SELECT * FROM book WHERE isbn='978-4-7981-4102-2'");

if($row = $stmt->fetchObject('Book',[0.1])){
  print "{$row->title}:{$row->discount()}円";
}