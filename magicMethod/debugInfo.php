<?php
class MyClass {
    private $data1 = 'Value 1';
    private $data2 = 'Value 2';

    public function __debugInfo() {
        // Return an array of properties to be shown during debugging
        return [
            'data1' => $this->data1,
            'data2' => 'Custom value for data2' // You can also customize values here
        ];
    }
}

$obj = new MyClass();

// Debugging output using var_dump
var_dump($obj);
