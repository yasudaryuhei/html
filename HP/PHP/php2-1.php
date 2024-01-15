<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../reset.css"> -->
  <title>Document</title>
</head>
<body>
  <h1>Hello PHP World</h1>
  <?php
// 一週間の日を配列で作成
$week = array("日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日");

// echo "<ul>\n";
// 配列の各要素を箇条書きに表示
// foreach ($week as $day) {
    // echo "<li>" . $day . "</li>\n";
// }
// echo "</ul>\n";
echo"<ul>";
  echo"<li>$week[0]</li>";
  echo"<li>$week[1]</li>";
  echo"<li>$week[2]</li>";
  echo"<li>$week[3]</li>";
  echo"<li>$week[4]</li>";
  echo"<li>$week[5]</li>";
  echo"<li>$week[6]</li>";
echo"</ul>";
  ?>
</body>
</html>