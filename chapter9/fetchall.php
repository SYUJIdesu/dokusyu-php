<?php
require_once '../db.php';

$db = getDb();
$stmt = $db->query('SELECT * FROM book ORDER BY published DESC');
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));