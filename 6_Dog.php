<?php

class Dog
{
    private $color;
    public $breed;

    function dogBark(){
        echo $this->color;
        echo "Woof! Woof!". PHP_EOL;
    }

    function dogSleep(){
        echo "ZZZZZZZzzzzzzz...". PHP_EOL;
    }
}

$dog1 = new Dog();

var_dump($dog1);

$dog1->color = 'Black'; // Cannot access
$dog1->breed = 'German Shepard';

echo $dog1->color. PHP_EOL; // Cannot access
echo $dog1->breed;

