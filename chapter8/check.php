<?php require_once '../function.php';?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ポストphp</title>
  </head>
  <body>
    <?=e(implode(',',$_POST['arch'])) ?>
  </body>
</html>