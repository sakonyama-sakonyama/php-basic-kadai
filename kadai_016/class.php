<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>16章課題</title>
</head>
<body>
  <p>
    <?php
    class Food {
      //プロパティを定義する
      private $name;
      private $price;

      //コンストラクタを定義する
      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
      }

      //priceのプロパティの値を出力するメソッド
      public function show_price(){
        echo $this->price . '<br>';
      }

    }

    class Animal {
      //プロパティを定義する
      private $name;
      private $height;
      private $weight;

      //コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight; 
      }

      //heightのプロパティの値を出力するメソッド
      public function show_height(){
        echo $this->height . '<br>';
      }
    }

    //インスタンス化する
    $potato = new Food('potato', 250);
    print_r($potato);
    echo '<br>';
    
    $dog = new Animal('dog', 60, 5000);
    print_r($dog);
    echo '<br>';

    //メソッドを使ってプロパティの値を出力する
    $potato->show_price();
    $dog->show_height();
    ?>
  </p>
  
</body>
</html>