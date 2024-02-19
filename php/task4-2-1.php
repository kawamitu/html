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


switch ($tuki) {
    case 3:
    case 4:
    case 5:
        $kisetu = "春";
        break;
    case 6:
    case 7:
    case 8:
        $kisetu = "夏";
        break;
    case 9:
    case 10:
    case 11:
        $kisetu = "秋";
        break;
    case 12:
    case 1:
    case 2:
        $kisetu = "冬";
        break;
}

echo "{$tuki}月は{$kisetu}です。";

?>
</body>
</html>