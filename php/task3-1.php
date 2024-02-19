<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width. initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="task2-2.css">
</head>
<body>
<?php
  define('TAX',1.1);
  $name = array('商品','価格','税込価格','1Dzの価格');
  $kesigomun = array( '消しゴム',200);
  $Dz = 12;
  $enpitun = array( '鉛筆',100);
?>
<table>
  <tr>
    <th><?= $name[0]; ?></th>
    <th><?= $name[1]; ?></th>
    <th><?= $name[2]; ?></th>
    <th><?= $name[3]; ?></th>
  </tr>
  <tr>
    <td><?= $enpitun[0]; ?></td>
    <td><?= $enpitun[1]; ?></td>
    <td>
      <?php
        echo $enpitun[1] * TAX .'円';
      ?>
    </td>
    <td>
    <?php
        echo $enpitun[1] * TAX * $Dz  .'円';
      ?>
    </td>
  </tr>
  <tr>
    <td><?= $kesigomun[0]; ?></td>
    <td><?= $kesigomun[1]; ?></td>
    <td>
      <?php
        echo $kesigomun[1] * TAX .'円';
      ?>
    </td>
    <td>
    <?php
        echo $kesigomun[1] * TAX * $Dz  .'円';
      ?>
    </td>
  </tr>
  
</table>
</body>
</html>