<?php

// Create an array
$fruits = ['apple', 'banana', 'orange'];

// Add an element to the array
$fruits[] = 'grape';

// Access and print array elements
echo $fruits[0] . "\n";  // Output: apple
echo $fruits[1] . "\n";  // Output: banana

// Iterate over array elements
foreach ($fruits as $fruit) {
    echo $fruit . ', ';
}
// Output: apple,  banana, orange, grape,

?>
