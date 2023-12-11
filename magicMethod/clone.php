<?php
class MyClass {
    public $data1 = 'Some data 1';
    public $data2 = 'Some data 2';

    public function __clone() {
        // Any customization for the cloning process can be placed here
        $this->data1 = 'Cloned data 1';
    }
}

$obj = new MyClass();

// Clone the object
$clonedObj = clone $obj;

// Display the properties of the original and cloned objects
var_dump($obj);
echo "<br>";
var_dump($clonedObj);
