<?php
$numbers = range(1, 10);

function removeEvenNumbers(&$arr) {
    $arr = array_filter($arr, function($number) {
        return $number % 2 !== 0;
    });
}

// Call the function to remove even numbers
removeEvenNumbers($numbers);

// Print the resulting array
print_r($numbers);

