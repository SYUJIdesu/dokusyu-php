<?php
require_once '../function.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>セッション</title>
  </head>
  <body>
    <form method="POST" action="session2.php">
      <label for="email">:email</label>
      <input id="email" type="text" name="email" size="40"
        value="<?=e($_SESSION['email'] ?? '')?>">
      <input type="submit" value="送信">
    </form>
  </body>
</html>