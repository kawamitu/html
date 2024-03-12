<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="task5-3.css">
  <title>Document</title>
</head>
<body>
<?php
// 商品情報の配列
$hyou = array(
    array("商品" => "鉛筆", "価格" => 100, "税込価格" => 110),
    array("商品" => "消しゴム", "価格" => 200, "税込価格" => 220),
    array("商品" => "定規", "価格" => 300, "税込価格" => 330)
);
?>
 <table>
        <tr>
            <th>商品</th>
            <th>価格</th>
            <th>税込価格</th>
        </tr>
        <?php foreach ($hyou as $name): ?>
            <tr>
                <td><?php echo $name["商品"]; ?></td>
                <td><?php echo $name["価格"]; ?>円</td>
                <td><?php echo $name["税込価格"]; ?>円</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>