<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello PHP World</h1>
  <?php
function showString($num, $str) {
    for ($i = 0; $i < $num; $i++) {
        echo $str . "<br>";
    }
}

// 3回表示させる例
showString(3, "気合いだ！");
?>
</body>
</html>