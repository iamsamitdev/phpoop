<?php

class CarClass {

    public $name;
    public $color;

    function sayHello(){
        echo "Hello from Car Class". PHP_EOL;
    }

}

// สร้าง Object เพื่อเรียกใช้งาน Class ที่สร้างไว้
$car1 = new CarClass();
$car1->name = "Ferrari";
$car1->color = "Red";

echo "Name: ".$car1->name. PHP_EOL. "Color: ". $car1->color. PHP_EOL; 
echo $car1->sayHello();

$car2 = new CarClass();
$car2->name = "BMW";
$car2->color = "Blue";

echo "Name: ".$car2->name. PHP_EOL. "Color: ". $car2->color. PHP_EOL; 
echo $car2->sayHello();