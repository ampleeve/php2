<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

class Singleton {

    private static $instance; // экземпляр объекта
    // Защищаем от создания через new Singleton
    private function __construct(){

    }

    // Защищаем от создания через клонирование
    private function __clone() {

    }
    // Защищаем от создания через unserialize
    private function __wakeup() {

    }
    // Возвращает единственный экземпляр класса. @return Singleton
    public static function getInstance() {

        if ( empty(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function doAction() {

        echo "doAction<br>";

    }
}

Singleton::getInstance()->doAction();
?>
<a href="index.php">Полиморфизм</a><br>
<a href="tr.php">Трейты</a><br>
<a href="singletonThroughTraits.php">Синглтон через трейты</a>
</body>
</html>