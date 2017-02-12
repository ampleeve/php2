<?php
    class Product{
        /**
         * @var $id int - идентификатор продукта
         * @var $name string - Название продукта
         * @var $img array - Адреса изображений
         * @var $price int - Цена продажи
         * @var $description string - Описание продукта
         * @var $keywords array - Ключевые слова
         */
        public $id;
        public $name;
        public $img;
        public $price;
        public $description;
        public $keywords;

        /**
         * Product constructor.
         * @param $id
         * @param $name
         * @param $img
         * @param $price
         * @param $description
         * @param $keywords
         */
        public function __construct($id, $name, $img, $price, $description, $keywords){
            $this->id = $id;
            $this->name = $name;
            $this->img = $img;
            $this->price = $price;
            $this->description = $description;
            $this->keywords = $keywords;
        }

        public function view(){
            echo "<h1>$this->name</h1>";
            echo "Изображения: ";
            foreach ($this->img as $img){
                echo "$img<br/>";
            }
            echo "<p>Цена: $this->price</p>";
            echo "<p>Описание товара: $this->description</p>";
            echo "Ключевые слова: ";
            foreach ($this->keywords as $aKeyword){
                echo "<p>$aKeyword</p>";
            }
        }
        
    }

    $product = new Product(
        1,
        'Продукт',
        ["ссылка на изображение 1", "ссылка на изображение 2"],
        220,
        "Описание продукта",
        ["ключевое слово продукта 1", "ключевое слово продукта 2"]
    );
    $product->view();

    class Toy extends Product {

        /**
         * @var $age int - Ограничение по возрасту
         * @var $type string - Тип игрушки
         */
        public $age;
        public $type;

        /**
         * Toy constructor.
         * @param $id
         * @param $name
         * @param $img
         * @param $price
         * @param $description
         * @param $keywords
         * @param $age
         * @param $type
         */
        public function __construct($id, $name, $img, $price, $description, $keywords, $age, $type){
            parent::__construct($id, $name, $img, $price, $description, $keywords);
            $this->age = $age;
            $this->type = $type;
        }

        public function view(){
            parent::view();
            echo "<p>Ограничение по возрасту(лет): $this->age</p>";
            echo "<p>Тип игрушки: $this->type</p>";
        }


    }

    $toy = new Toy(
        2,
        'Плюшевый заяц',
        ["Плюшевый заяц серый", "Плюшевый заяц белый"],
        300,
        "Игрушка плюшевая, заяц",
        ["купить", "плюшевый заяц"],
        3,
        "Плюшевая игрушка"
    );
    $toy->view();

    class Car extends Product {
        /**
         * @var $color string - Цвет автомобиля
         * @var $brandName string - Название бренда
         */
        public $color;
        public $brandName;

        /**
         * Car constructor.
         * @param $id
         * @param $name
         * @param $img
         * @param $price
         * @param $description
         * @param $keywords
         * @param $color
         * @param $brandName
         */
        public function __construct($id, $name, $img, $price, $description, $keywords, $color, $brandName){
            parent::__construct($id, $name, $img, $price, $description, $keywords);
            $this->color = $color;
            $this->brandName = $brandName;
        }

        public function view(){
            parent::view();
            echo "<p>Цвет: $this->color</p>";
            echo "<p>Брэнд: $this->brandName</p>";
        }
    }
    $car = new Car(
        3,
        'BMW X5',
        ["Вид сверху", "Вид сбоку"],
        5000000,
        "Автомобиль семейный",
        ["купить", "bmw"],
        "Красный",
        "BMW"
    );
    $car->view();

/*
    5. Дан код
 * */
/*class A {

    public function foo() {
        static $x = 0; echo ++$x;
    }
}

$a1 = new A();
$a2 = new A();

$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();*/

//Что он выведет на каждом шаге? Почему?
// Ответ: выведет "1234", т.к. задано статическое свойство $x, а статические свойства создаются в одном экземпляре
// для всех объектов класса. Вопрос: на сколько правильно определять свойства в методе вообще? Хоть статические,
// хоть не статические.. Пример - когда это уместно?

//6. Немного изменим п.5
/*

class A {

    public function foo() {
        static $x = 0; echo ++$x;
    }
}

class B extends A {
}

$a1 = new A();
$b1 = new B();

$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
// Объясните результаты в этом случае.
// Ответ: Выведет "1212" - т.к. мы создали 2 класса и, поскольку, второй класс наследник первого, то для него
// автоматически создалось статическое свойство $x. Мы создали 2 экземпляра 2 разных классов и
// поочередно вызвали их методы foo.
*/