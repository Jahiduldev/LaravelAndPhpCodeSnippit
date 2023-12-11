<?php
class Person
{

    public $name = "Jahidul";
    public $age = 36;


    public function __invoke()
    {
       return "Object is called as a function";
    }

    public function getMyNameAndAge()
    {
        return "My name".$this->name."Age".$this->age;
    }

}

$person = new Person();
echo $person();