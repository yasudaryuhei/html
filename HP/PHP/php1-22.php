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
// 商品の価格（税抜き）
$pencil_price = 100;
$eraser_price = 200;

// 消費税
$tax_rate = 10;

// 税込み価格を計算
$pencil_price_incl_tax = $pencil_price * (1 + $tax_rate / 100);
$eraser_price_incl_tax = $eraser_price * (1 + $tax_rate / 100);

echo "鉛筆の税込み価格は " . $pencil_price_incl_tax . " 円です。\n";
echo "消しゴムの税込み価格は " . $eraser_price_incl_tax . " 円です。\n";
?>
</body>
</html>