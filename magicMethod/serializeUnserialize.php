<?php

class MyClass {
    public $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function __serialize(): array {
        // Define what needs to be serialized
        return ['data' => $this->data];
    }

    public function __unserialize(array $data): void {
        // Define how to restore object state from serialized data
        $this->data = $data['data'];
    }
}

// Create an object
$obj = new MyClass('Hello, serialization!');

// Serialize the object (hypothetical usage)
$serializedObj = serialize($obj);

// Unserialize the object (hypothetical usage)
$unserializedObj = unserialize($serializedObj);
var_dump($unserializedObj);
