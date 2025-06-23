<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>kadai_016</title>
</head>

<body>
<p>
<?php

//クラスを定義
class Food {
  //プロパティを定義する
  private $name;
  private $price;

  //コンストラクタ定義
  public function __construct(string $name,int $price) {
    $this->name = $name;
    $this->price = $price;
  }

  //メソッドを追加
  public function show_price() {
    echo "The price is:" .$this->price;
  }
}
  
//インスタンス化
$food = new Food('potato', 250);

print_r($food);
echo '<br>';

//メソッドを呼ぶ
$food->show_price();

?>
<br>
<?php

class Animal {
  //プロパティ
  private $name;
  private $height;
  private $weight;

  //コンストラクタ定義
  public function __construct(string $name, int $height,int $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
}

//インスタンス化
$Food = new Food('potato', 250);
print_r($Food);
echo '<br>';

$Animal = new Animal('dog',60, 5000);
print_r($Animal);
echo '<br>';

$Food->show_price();
echo '<br>';
$Animal->show_height();

?>
</body>
</html>