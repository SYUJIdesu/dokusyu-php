<?php
require_once '../db.php';
require_once '../function.php';

try{
  $db = getDb();
  $stt = $db->query('SELECT * FROM book ORDER BY published DESC');

  $cnt = 0;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>データ</title>
  </head>
  <body>
    <form method="POST" action="bindParam_process.php">
    <input type="submit" value="更新">
      <table border="1">
        <tr>
          <th>isbnコード</th><th>書店</th><th>価格</th><th>出版日</th><th>日</th>
        </tr>
        <?php
        while($row = $stt->fetch(PDO::FETCH_ASSOC)){
          $cnt++
     
        ?>
        <tr>
          <td>
            <?=e($row['isbn'])?>
            <input type="hidden" name="isbn<?=e($cnt)?>" value="<?=e($row['isbn'])?>">
          </td>
          <td>
            <input type="text" name="title<?=e($cnt)?>" value="<?=e($row['title'])?>" >
          </td>
          <td>
            <input type="text" name="price<?=e($cnt)?>" value="<?=e($row['price'])?>">
          </td>
          <td>
            <input type="text" name="publish<?=e($cnt)?>" value="<?=e($row['publish'])?>">
          </td>
          <td>
            <input type="text" name="published<?=e($cnt)?>" value="<?=e($row['published'])?>">
          </td>
        </tr>
        <?php
          }
        } catch (Exception $e){
          print $e->getMessage();
        }
        ?>
      </table>
      <input type="hidden" name="cnt" value="<?=e($cnt)?>">
    </form>
  </body>
</html>