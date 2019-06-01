<?php
require_once '../db.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXECPTION);
$db->exec('MECHA KUCHA');

if($db->errorCode() !== '00000'){
  $info = $db->errorCode();
  print $info[0].$info[1].$info[2];
}