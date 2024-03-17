<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello PHP World</h1>
  <?php
class Staff {
  // プロパティ
  private $name;
  private $age;
  private $sex;
  private $id;
  static $idCounter = 1;
  
    // コンストラクタ
    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
<<<<<<< HEAD
        // $this->number();
=======
        $this->number();
>>>>>>> c37fb19716b94c127c31ff149a16361945e98ffe
    }

    // メソッド: number
    public function number() {
        // S0001番から順に割り振る処理
        // $this->id = 'S' . str_pad($idCounter++, 4, '0', STR_PAD_LEFT);
        $this->id = self::$idCounter++;
    }

    // メソッド: show
    public function show() {
        printf("(S%04s), %s, %d歳, %s", $this->id, $this->name, $this->age, $this->sex);
    }
}

// 実行例
<<<<<<< HEAD
$staffs[1] = new Staff("佐藤一郎", 25, "男性");
$staffs[2] = new Staff("山田花子", 25, "女性");
$staffs[3] = new Staff("鈴木次郎", 27, "男性");

// $staff1->show();
// echo "<br>";
// $staff2->show();
// echo "<br>";
// $staff3->show();
4
=======
$staffMembers = [
  new Staff("佐藤一郎", 25, "男性"),
  new Staff("山田花子", 25, "女性"),
  new Staff("鈴木次郎", 27, "男性")
];

foreach ($staffMembers as $staff) {
  $staff->show();
  echo "<br>";
}
// $staff[1] = new Staff("佐藤一郎", 25, "男性");
// $staff[2] = new Staff("山田花子", 25, "女性");
// $staff[3] = new Staff("鈴木次郎", 27, "男性");

// foreach ($staffs as $staff){
//   $staff->show();
//   echo "<br>";
// }
>>>>>>> c37fb19716b94c127c31ff149a16361945e98ffe
?>
</body>
</html>