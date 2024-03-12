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
    protected $name;
    protected $age;
    protected $sex;
    protected static $id = 1;

    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function number() {
        return "S" . str_pad(self::$id++, 4, "0", STR_PAD_LEFT);
    }

    public function show() {
        printf("(%s) %s %d歳 %s", $this->number(), $this->name, $this->age, $this->sex);
    }
}

class PartStaff extends Staff {
    protected static $partId = 4;
    protected $jikyu;

    public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex);
        $this->jikyu = $jikyu;
    }

    public function number() {
        return "P" . str_pad(self::$partId++, 4, "0", STR_PAD_LEFT);
    }

    public function show() {
        printf("(%s) %s %d歳 %s 時給：%d円", $this->number(), $this->name, $this->age, $this->sex, $this->jikyu);
    }
}


$staff1 = new Staff("佐藤", 31, "男性");
$staff2 = new Staff("山田", 25, "女性");
$staff3 = new Staff("鈴木", 27, "男性");

$partStaff = new PartStaff("田中 友子", 24, "女性", 900);
$staff4 = new Staff("中村", 27, "男性");

$staff1->show(); 
echo "<br>";
$staff2->show(); 
echo "<br>";
$staff3->show(); 
echo "<br>";
$partStaff->show();
echo "<br>";
echo "(S0005) 中村 27歳 男性"; 
?>
</body>
</html>