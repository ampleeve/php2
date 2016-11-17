<?php
abstract class Product {

    public $id;
    
    abstract protected function getValue();
    public function printValue() {

        print $this->getValue() . "\n";
    }
}


abstract class Product{
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

    abstract protected function showProduct();

    public function view(){

        $this->showProduct();
       /* echo "<h1>$this->name</h1>";
        echo "Изображения: ";
        foreach ($this->img as $img){
            echo "<p>$img</p>";
        }
        echo "<p>Цена: $this->price</p>";
        echo "<p>Описание товара: $this->description</p>";
        echo "Ключевые слова: ";
        foreach ($this->keywords as $aKeyword){
            echo "<p>$aKeyword</p>";
        }*/
    }

}
class ChildClass extends MyAbstractClass {

    protected function getValue() {
        return " ChildClass ";
    }
}
$class1 = new ChildClass();
$class1->printValue();