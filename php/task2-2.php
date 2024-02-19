<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="task2-2.css">
</head>
<body>
<?php
  $name = array('商品','価格','税込価格');
  $enpitu  = array('鉛筆','１００円','１１０円');
  $ruler = array('定規','３００円','３３０円');
  $kesigomu =array('消しゴム','２００円','２２０円')
?>


<table>
  <tr>
    <th><?= $name[0]; ?></th>
    <th><?= $name[1]; ?></th>
    <th><?= $name[2]; ?></th>
  </tr>
  <tr>
    <td><?= $kesigomu[0]; ?></td>
    <td><?= $kesigomu[1]; ?></td>
    <td><?= $kesigomu[2]; ?></td> 
  </tr>
  <tr>
    <td><?= $enpitu[0]; ?></td>
    <td><?= $enpitu[1]; ?></td>
    <td><?= $enpitu[2]; ?></td> 
  </tr>
  <tr>
    <td><?= $ruler[0]; ?></td>
    <td><?= $ruler[1]; ?></td>
    <td><?= $ruler[2]; ?></td> 
  </tr>
</table>
</body>
</html>