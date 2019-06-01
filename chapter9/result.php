<?php
require_once '../db.php';
require_once '../function.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>isbnコード</th><th>書店</th><th>価格</th><th>出版日</th><th>日</th>
      </tr>
      <?php
      try{
        $db = getDb();
        $stmt = $db->prepare('SELECT * FROM book ORDER BY published DESC');
        $stmt->execute();
        /**
         * $stmt->setFetchMde(PDO::FETCH_ASSOC);
         * foreach($stmt as $row)
         */
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

      ?>
      <tr>
        <td><?=e($row['isbn'])?></td>
        <td><?=e($row['title'])?></td>
        <td><?=e($row['price'])?></td>
        <td><?=e($row['publish'])?></td>
        <td><?=e($row['publihed'])?></td>
      </tr>
      <?php
       }
      }catch (PDOException $e){
        print $e->getMessage();
      }
      ?>
    </table>
  </body>
</html>