<?php require_once '../function.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>クッキー</title>
  </head>
  <body>
    <form method="POST" action="cookie2.php">
      <label for="email">メールアドレス</label>
      <input id="email" type="text" name="email" size="40"
        value="<?=e($_COOKIE['email'] ?? '')?>">
      <input type="submit" value="送信">
    </form>
  </body>
</html>