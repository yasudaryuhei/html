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
// 0から99までの乱数を生成
$rand_num = rand(0, 99);

// 乱数の値に基づいて運勢を決定
if ($rand_num < 5) {
    $fortune = "大凶";
} elseif ($rand_num < 20) {
    $fortune = "凶";
} elseif ($rand_num < 50) {
    $fortune = "吉";
} elseif ($rand_num < 80) {
    $fortune = "中吉";
} else {
    $fortune = "大吉";
}

// 運勢を表示
echo "今日の運勢は" . $fortune . "です。\n";
?>
</body>
</html>