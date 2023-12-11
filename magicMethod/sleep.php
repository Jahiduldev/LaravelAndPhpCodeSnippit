<?php
class MyClass {
    public $data1 = 'Some data 1';
    public $data2 = 'Some data 2';
    public $data3 = 'Some data 3';
    public $data4 = 'Some data 4';

    public function __sleep() {
        // Return an array of property names to be serialized
        return ['data1', 'data2'];
    }
}

$obj = new MyClass();

// Serialize the object - only 'data1' and 'data2' will be serialized
$serialized = serialize($obj);

// Unserialize the serialized data
$unserialized = unserialize($serialized);

var_dump($unserialized); // Output: object(MyClass)#2 (2) { ["data1"]=> string(10) "Some data 1" ["data2"]=> string(10) "Some data 2" }
