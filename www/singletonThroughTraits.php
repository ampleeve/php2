<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
trait Singleton
{
    static public function getInstance()
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new static();
        }
        return $instance;
    }
}

class MyClass
{
    use Singleton;
}

class MyExtClass extends MyClass {}

echo get_class(MyClass::getInstance()), PHP_EOL; //MyClass
echo "<br>";
echo get_class(MyExtClass::getInstance()), PHP_EOL; //MyExtClass
echo "<br>";

?>
<a href="index.php">Полиморфизм</a><br>
<!--<a href="tr.php">Трейты</a><br>
<a href="singleton.php">Синглтон</a>-->
</body>
</html>