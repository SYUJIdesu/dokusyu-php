<?php
require_once '../db.php';

$db = getDb();
$st = $db->query('SELECT publish, title FROM book');
print_r($st->fetchAll(PDO::FETCH_COLUMN));

print_r($st->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_UNIQUE));
print_r($st->fetchAll(PDO::FETCH_COLUMN | PDO::FETCH_GROUP));