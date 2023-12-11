<?php
class Person
{
    public $name = "Jahidul";
    public $age = 36;

    public static function __callStatic(string $name, array $argument)
    {
       echo $name." Static method is called";
    }
}

$person = new Person();
echo $person::getMobilePhone();