<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
 $tuki = mt_rand(1, 12); 

 if ($tuki >= 3 && $tuki <= 5) {
     $kisetu = '春';
 } elseif ($tuki >= 6 && $tuki <= 8) {
     $kisetu = '夏';
 } elseif ($tuki >= 9 && $tuki <= 11) {
     $kisetu = '秋';
 } elseif ($tuki == 12 || ($tuki >= 1 && $tuki <= 2)) {
     $kisetu = '冬';
 }
 
 echo "{$tuki}月は{$kisetu}です。";
 ?>
</body>
</html>