<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
trait MyTransliterator
{
    private $letters = array(
        'а' => 'a', 'г' => 'g', 'ё' => 'e',
        'и' => 'i', 'л' => 'l', 'о' => 'o',
        'с' => 's', 'ф' => 'f', 'ч' => 'ch',
        'ь' => '', 'э' => 'e', 'А' => 'A',
        'Г' => 'G', 'Ё' => 'E', 'б' => 'b',
        'д' => 'd', 'ж' => 'zh', 'й' => 'y',
        'м' => 'm', 'п' => 'p', 'т' => 't',
        'х' => 'h', 'ш' => 'sh', 'ы' => 'y',
        'ю' => 'yu', 'Б' => 'B', 'Д' => 'D',
        'Ж' => 'Zh', 'в' => 'v', 'е' => 'e',
        'з' => 'z', 'к' => 'k', 'н' => 'n',
        'р' => 'r', 'у' => 'u', 'ц' => 'c',
        'щ' => 'sch', 'ъ' => '', 'я' => 'ya',
        'В' => 'V', 'Е' => 'E', 'З' => 'Z',
        'И' => 'I', 'Л' => 'L', 'О' => 'O',
        'С' => 'S', 'Ф' => 'F', 'Ч' => 'Ch',
        'Ь' => '', 'Э' => 'E', 'є' => 'ye',
        'Є' => 'YE', ' ' => '_', 'Й' => 'Y',
        'М' => 'M', 'П' => 'P', 'Т' => 'T',
        'Х' => 'H', 'Ш' => 'Sh', 'Ы' => 'Y',
        'Ю' => 'Yu', 'ї' => 'yi', 'і' => 'i',
        'Ї' => 'YI', 'І' => 'I', 'К' => 'K',
        'Н' => 'N', 'Р' => 'R', 'У' => 'U',
        'Ц' => 'C', 'Щ' => 'Sch', 'Ъ' => '_',
        'Я' => 'Ya'
    );

    public function translate($str){
        //Заменяем символы кириллицы на символы латиницы
        return strtr(trim($str),$this->letters);
    }
}

class MyClass {
    use MyTransliterator;
    private $data;

    public function setData(array $data){
        $this->data = $data;
    }

    public function getPreparedData(){
        $this->data['url'] = mb_strtolower($this->translate($this->data['title']));
        return $this->data;
    }
}

$obj = new MyClass();

$obj->setData([
    'title' => 'Не очень простое название для страницы',
    'content' => 'Контент'
    ]);
$data = $obj->getPreparedData();
echo "<pre>";
var_dump($data);
echo "</pre>";
?>
<a href="index.php">Полиморфизм</a><br>
<a href="singleton.php">Синглтон</a><br>
<a href="singletonThroughTraits.php">Синглтон через трейты</a>
</body>
</html>