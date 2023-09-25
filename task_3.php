<?php
$grades = [85, 92, 78, 88, 95];

function sortGradesDescending(&$gradesArray) {
    rsort($gradesArray);
}

// Call the function to sort the grades in descending order
sortGradesDescending($grades);

// Print the sorted grades as an array
print_r($grades);

