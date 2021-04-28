<?php

class Student 
{
    public $name = "John Smith";
    public $class = "1st";

    function __construct()
    {
        echo "This is Constructor!". PHP_EOL;
    }

    function printDetails(){
        echo $this->name.PHP_EOL. $this->class. PHP_EOL;
    }

    function __destruct()
    {
        echo "This is Destructor!". PHP_EOL;
    }
}

// Create Object
$student1 = new Student();
$student1->printDetails();