<?php

class Person
{
    public $name = "Jahidul";
    public $age = 36;
}

$person = new Person();
$serialize = serialize($person);

// Unserialize the serialized string
$unserializedPerson = unserialize($serialize);

var_dump($unserializedPerson);
