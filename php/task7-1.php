<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
class Staff {
    private $name;
    private $age;
    private $sex;
    private static $id = 0;

    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function number() {
        self::$id++;
        return "S" . str_pad(self::$id, 4, "0", STR_PAD_LEFT);
    }

    public function show() {
        printf("(%s) %s %d歳 %s", $this->number(), $this->name, $this->age, $this->sex);
    }
}

$staff1 = new Staff("佐藤", 31, "男性");
$staff2 = new Staff("山田", 25, "女性");
$staff3 = new Staff("鈴木", 27, "男性");

$staff1->show();
echo "<br>";
$staff2->show();
echo "<br>";
$staff3->show();
?>

</body>
</html>