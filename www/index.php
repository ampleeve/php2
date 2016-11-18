<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php


abstract class Product {

    public $name;

    // определяем правило, что у каждого продукта должна подсчитываться стоимость итоговая
    abstract public function getCostProduct();
}

class Elbooks extends Product  {

    public $costForItem;
    public $count;

    public function __construct($name, $costForItem, $count){
        $this->name = $name;
        $this->costForItem = $costForItem;
        $this->count = $count;
    }

    // переопределяем абстрактный метод подсчета стоимости

    public function getCostProduct() {
        return $this->costForItem * $this->count;
    }
}

class Toy extends Product  {

    public $costForItem;

    public function __construct($name, $costForItem){
        $this->name = $name;
        $this->costForItem = $costForItem;
    }

    // переопределяем абстрактный метод подсчета стоимости

    public function getCostProduct() {
        return $this->costForItem;
    }
}

class Food extends Product  {

    public $costForKilogram;
    public $weight;

    public function __construct($name, $costForKilogram, $weight){
        $this->name = $name;
        $this->costForKilogram = $costForKilogram;
        $this->weight = $weight;
    }

    // переопределяем абстрактный метод подсчета стоимости

    public function getCostProduct() {
        return $this->costForKilogram * $this->weight;
    }
}


// наполняем массив products объектами
$products[] = new Elbooks("Электронная книга, набор 2 шт", 300, 2);
$products[] = new Toy("Плюшевый заяц", 150);
$products[] = new Food("Творог", 100, 0.2);

foreach ($products as $product) {
    if ($product instanceof Product) { // Если мы работаем с наследниками Product
        $cost = $product->getCostProduct();
        echo "$product->name - итоговая цена: $cost <br>";
    }
    else {
        echo "объект не является наследником класса Product";
    }
}
?>
<!--<a href="./tr.php">Трейты</a><br>
<a href="singleton.php">Синглтон</a><br> -->
<a href="singletonThroughTraits.php">Синглтон через трейты</a>
</body>
</html>


