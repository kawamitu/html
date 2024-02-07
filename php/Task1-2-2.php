<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  define('TAX','10');
  $pno = 100;
  $eraser = 200;
  $pnoa = 110;
  $erasera = 220;
  $message = '現在、消費税は'.TAX.'%です。<br><br>鉛筆が'.$pno.'円で税込'.$pnoa.'円です。<br><br>消しゴムが'.$eraser.'円で税込'.$erasera.'円です。';
  
  ?>

 <p><?= $message; ?></p>
</body>
</html>