<?php

$arr = [1,2,3,4,5,6,5];

$filteredValue = array_filter($arr, function ($num){
     return $num%5 == 0;
});

echo "<pre>";
print_r($filteredValue);


//PHP arrow function
$arr = [1,2,3,4,5,6,5];
$filteredValue = array_filter($arr,  fn($num) =>  $num%5 == 0 );

echo "<pre>";
print_r($filteredValue);
