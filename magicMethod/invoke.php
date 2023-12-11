<?php
class Person
{
    public function __invoke()
    {
       return "Object is called as a function";
    }
}

$person = new Person();
echo $person();