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
function max_number($n1, $n2) {
    // return ($n1 > $n2) ? $n1 : $n2;
    if ($n1 > $n2) {
    return  $n1;
    }
    else {
    return  $n2;
    };
}

// $aと$bの値
$a = 29;
$b = 21;

// 関数の呼び出しと最大値の表示
$result = max_number($a, $b);
echo "最大値は: " . $result;
?>
</body>
</html>