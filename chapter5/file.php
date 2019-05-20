<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>アクセスログ</title>
</head>
<table border="1">
<tr>
  <th>アクセス日時</th><th>スクリプト名</th>
  <th>ユーザーエージェント</th><th>リンク元のURL</th>
</tr>
<?php
$file=file('access.log');

foreach($file as $fline){
  $line = explode("\t",$fline);
  print "<tr>";
  foreach($fline as $ value){
    print "<td>{$value}</td>";
  }
}
  print "</tr>";
?>
</table>
<body>
</body>
</html>