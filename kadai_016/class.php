<head>
    <meta charset="UTF-8">
    <title>課題　クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <p>
      <?php
    // Food
    //クラスを定義する
      class Food {
        // プロパティを定義する
        private $name;
        private $price;
        public function show_price(int $price){
      }
        // コンストラクタを定義する
        public function __construct(string $name, int $price){
            $this->name = $name;
            $this->price = $price;
        }
      }

    //インスタンス化する
    $food = new Food('potate',250);

    //インスタンス$Foodの各プロパティ値を出力する
    print_r($food);
    echo "<br>";

    // Animal
    class Animal {
      private $name;
      private $height;
      private $weight;
     
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      public function show_height(int $height){
        $this->height = $height;
      }

    }

    $Animal=new Animal('dog',60,5000);
    print_r($Animal);

    
    // public
    class Product {
      // プロパティを定義する
      public $food;

      // メソッドを定義する
      public function show_price(){
        echo $this->price . '<br>';
      }
    }
    //インスタンス化する
    $price = new Product();

    // メソッドにアクセスして実行する
    $price->show_price(250);        

    class height{
      public $height;

      public function show_height(int $height){
      echo $this->height . '<br>';
      }
    }
    $height = new height();

    $height->show_height(60);

      ?>
    </p>
</body>

