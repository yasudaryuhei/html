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
// 1から12までの乱数を生成
$month = rand(1, 12);

// 乱数の値に基づいて四季を決定
if ($month >= 3 && $month <= 5) {
    $season = "春";
} elseif ($month >= 6 && $month <= 8) {
    $season = "夏";
} elseif ($month >= 9 && $month <= 11) {
    $season = "秋";
} else {
    $season = "冬";
}

// 四季を表示
echo $month . "月は" . $season . "の四季です。\n";
?>
</body>
</html>