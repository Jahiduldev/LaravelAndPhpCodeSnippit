<?php

class MyClass
{
    public $property1;
    public $property2;

    public static function __set_state($an_array)
    {
        $obj = new self();
        $obj->property1 = $an_array['property1'] ?? '';
        $obj->property2 = $an_array['property2'] ?? '';
        return $obj;
    }
}

$obj = new MyClass();
$obj->property1 = 'Value 1';
$obj->property2 = 'Value 2';

// Exporting the object using var_export
$exportedObj = var_export($obj, true);

// Recreating the object from its exported state
$newObj = eval("return $exportedObj;");

var_dump($newObj);
