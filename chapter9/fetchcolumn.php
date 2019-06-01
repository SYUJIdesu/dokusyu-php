<?php
require_once '../db.php';

$db = getDb();
$stmt = $db->query('SELECT COUNT(*) FROM book');
print "件数{$stmt->fetchColumn()}件";