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
// 一週間の日を配列で作成
$week = array("日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日");

// 配列の要素数を取得
$count = count($week);

// インデックスを初期化
$i = 0;

echo "<ul>\n";
// 配列の各要素を箇条書きに表示
while ($i < $count) {
    echo "<li>" . $week[$i] . "</li>\n";
    $i++;
}
echo "</ul>\n";
?>
</body>
</html>