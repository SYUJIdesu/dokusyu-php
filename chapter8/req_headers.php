<?php require_once '../function.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ヘッダ情報</title>
  </head>
  <body>
    <table border="1">
      <?php
      foreach($_SERVER as $key => $value){
        if(mb_strpos($key, 'HTTP')===0){
          ?>
          <tr valing="top">
          <th><?=e($key)?></th>
          <td><?=e($value)?></td>
          </tr>
      <?php
        }
      }
      ?>
    </table>
  </body>
</html>