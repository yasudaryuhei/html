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
// 定数の定義
define("TAX", 0.10);

// 鉛筆の価格
$pencil_price = 100;
$pencil_price_incl_tax = $pencil_price * (1 + TAX);

// 消しゴムの価格
$eraser_price = 200;
$eraser_price_incl_tax = $eraser_price * (1 + TAX);

echo "現在、消費税は" . TAX * 100 . "％です。";
echo "鉛筆が" . $pencil_price . "円で税込" . $pencil_price_incl_tax . "円です。";
echo "消しゴムが" . $eraser_price . "円で税込" . $eraser_price_incl_tax . "円です。";
?>
</body>
</html>