<?php
$studentGrades = [
    ['Math' => 80, 'English' => 96, 'Science' => 76],
    ['Math' => 76, 'English' => 89, 'Science' => 93],
    ['Math' => 99, 'English' => 82, 'Science' => 86],
];

function calculateAverageGrades($gradesArray) {
    $averages = [];

    foreach ($gradesArray as $studentGrades) {
        $total = array_sum($studentGrades);
        $count = count($studentGrades);
        $average = $total / $count;
        $averages[] = $average;
    }

    return $averages;
}

// Call the function to calculate average grades
$averageGrades = calculateAverageGrades($studentGrades);

// Print the average grades for each student
foreach ($averageGrades as $index => $average) {
    echo "Student " . ($index + 1) . " Average Grade: " . $average . "\n";
}

