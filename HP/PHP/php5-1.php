<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello PHP World</h1>
  <table>
  <?php
// 外側のループ（行
for ($i = 1; $i <= 9; $i++) {
    // 内側のループ（列）
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        // 九九の計算と結果を表示
        
        echo "<td>". $i . " × " . $j . " = " . $i * $j .  " </td>";
        
    }
    echo "</tr>";
    // 行の終わり
    
}
?>
</table>
</body>
</html>