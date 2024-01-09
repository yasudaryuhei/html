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
  $a=array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
  echo '<ul>';
foreach ($weekdays as $day) {
    echo '<li>' . $day . '</li>';
}
echo '</ul>';
  ?>
</body>
</html>