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
// 商品の価格と税込み価格を連想配列で作成
    $products = array(
        "鉛筆" => array("価格" => 100, "税込価格" => 110),
        "消しゴム" => array("価格" => 200, "税込価格" => 220),
        "定規" => array("価格" => 300, "税込価格" => 330)
    );

    echo"<table>";
    echo"<tr>";
    echo"<th>商品名</th>";
    echo"<th>価格</th>";
    echo"<th>税込価格</th>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>鉛筆</td>";
    echo"<td>" . $products["鉛筆"]["価格"] . "</td>";
    echo"<td>" . $products["鉛筆"]["税込価格"] . "</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>消しゴム</td>";
    echo"<td>" . $products["消しゴム"]["価格"] . "</td>";
    echo"<td>" . $products["消しゴム"]["税込価格"] . "</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>定規</td>";
    echo"<td>" . $products["定規"]["価格"] . "</td>";
    echo"<td>" . $products["定規"]["税込価格"] . "</td>";
    echo"</tr>";
    echo"</table>";
// 表の開始タグ
// echo "<table border='1'>\n";
// echo "<tr><th>商品名</th><th>価格</th><th>税込価格</th></tr>\n";

// 連想配列の内容を表に表示
// foreach ($products as $product => $prices) {
    // echo "<tr><td>" . $product . "</td><td>" . $prices["価格"] . "</td><td>" . $prices["税込価格"] . "</td></tr>\n";
// }

// 表の終了タグ
// echo "</table>\n";
?>
</body>
</html>