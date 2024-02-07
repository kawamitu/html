<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  define('TITLE','現在、消費税は10％です。');
  $message = '鉛筆が１００円で税込１１０円です。<br><br>消しゴムが２００円で税込２２０円です。';
  ?>
 <p><?= TITLE; ?></p>
 <p><?= $message; ?></p>
</body>
</html>