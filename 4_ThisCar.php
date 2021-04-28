<?php

class ThisCar {

    public $name = "Ferrari";
    
    public function printName(){
        echo $this->showName();
    }

    public function showName(){
        return $this->name;
    }

}

$obj = new ThisCar();
$obj->printName();