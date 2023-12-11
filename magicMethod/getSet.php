<?php
class MyClass {
private $data = [];

public function __get($name) {
// Handle attempts to get inaccessible properties
if (array_key_exists($name, $this->data)) {
return $this->data[$name];
} else {
return "Property '$name' does not exist or is inaccessible.";
}
}

public function __set($name, $value) {
// Handle attempts to set inaccessible properties
$this->data[$name] = $value;
}
}

$obj = new MyClass();

// Using __set to assign value to an inaccessible property
$obj->property1 = 'Value for property1';

// Using __get to retrieve value from an inaccessible property
echo $obj->property1 . "<br>";  // Output: Value for property1

// Attempting to access a non-existent property
echo $obj->nonExistentProperty . "<br>";  // Output: Property 'nonExistentProperty' does not exist or is inaccessible.
