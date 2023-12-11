<?php
class Person
{

    public $name = "Jahidul";
    public $age = 36;

}

$person = new Person();
$serialize = serialize($person);
$unSerialize = unserialize($person);
var_dump($serialize);