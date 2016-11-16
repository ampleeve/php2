<?php
abstract class MyAbstractClass {

    abstract protected function getValue();
    public function printValue() {

        print $this->getValue() . "\n";
    }
}
class ChildClass extends MyAbstractClass {

    protected function getValue() {
        return " ChildClass ";
    }
}
$class1 = new ChildClass();
$class1->printValue();