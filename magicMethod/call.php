<?php
class Person
{

    public $name = "Jahidul";
    public $age = 36;


    public function __call(string $name, array $arr)
    {
        if ($name === 'getMobilePhone')
        {
            return $this->getMyNameAndAge();
        }
        return false;
    }

    public function getMyNameAndAge()
    {
        return "My name".$this->name."Age".$this->age;
    }

}

$person = new Person();
echo $person->getMobilePhone();