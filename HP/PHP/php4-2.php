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
switch ($month) {
    case 3:
    case 4:
    case 5:
        $season = "春";
        break;
    case 6:
    case 7:
    case 8:
        $season = "夏";
        break;
    case 9:
    case 10:
    case 11:
        $season = "秋";
        break;
    default:
        $season = "冬";
}

// 四季を表示
echo $month . "月は" . $season . "の四季です。\n";
?>
</body>
</html>