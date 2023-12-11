<?php
class MyClass {
    public $data1 = 'Some data 1';
    public $data2 = 'Some data 2';
    public $data3 = 'Some data 3';
    public $data4 = 'Some data 4';

    public function __sleep()
    {
    // Return an array of property names to be serialized
        return ['data1', 'data2'];
    }

    public function __wakeup()
    {
        // Any post-unserialization logic can be placed here
        $this->data3 = 'Restored data 3';
        $this->data4 = 'Restored data 4';
    }
}

$obj = new MyClass();

// Serialize the object - only 'data1' and 'data2' will be serialized
$serialized = serialize($obj);

// Unserialize the serialized data
$unserialized = unserialize($serialized);

echo PHP_EOL;
print_r($serialized);
