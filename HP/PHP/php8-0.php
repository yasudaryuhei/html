<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>セッション生成</h1>
  <?php
  session_start();
  $_SESSION["date"] = "TEST中";
  echo "セッションID：" . session_id() . "<br>";
  echo "状況 : (".$_SESSION["date"].")<br><br>";
  ?>
<a href="./php8-1.php">別のページ</a>
</body>
</html>