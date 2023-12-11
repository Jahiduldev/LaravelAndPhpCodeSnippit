<?php

Class Person
{
    public $age = 35;
    public $phone = "02598453";
    public function __construct()
    {
        echo "Construct is called". PHP_EOL;
    }

    public function __destruct()
    {
        echo "Construct is called". PHP_EOL;
    }

    public function __toString()
    {
        return  "Age". $this->age. PHP_EOL."Phone". $this->phone;
    }
}

$obj = new Person();
echo $obj;