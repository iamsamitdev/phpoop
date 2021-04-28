<?php

final class University
{
    public $universityName = "Boston University";

    final function helloUniversity(){
        echo "Hello from University Class" . PHP_EOL;
    }
}

class Teacher extends University{

    public $teacherName = "Jane";
    function helloTeacher(){
        echo "Hello from Teacher Class" . PHP_EOL;
    }

    // Overide
    function helloUniversity(){ 
        echo "abc";
    }
}

$teacher1 = new Teacher();
$teacher1->helloUniversity();

