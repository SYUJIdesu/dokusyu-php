<?php

require_once '../db.php';

$db = getDb();
$stmt = $db->query('SELECT title AS name, publish AS name FROM book WHERE isbn="978-4-7981-4102-2');
print_r($stmt->fetch(PDO::FETCH_NAMED));