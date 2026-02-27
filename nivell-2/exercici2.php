<?php

$studentGrades = [
    "Anna" => [5, 10, 7, 8, 6],
    "Bernat" => [3, 6, 9, 4, 7],
    "Clara" => [7, 8, 6, 9, 10],
];

print_r($studentGrades);

function calculateAverage($grades)
{
    $total = array_sum($grades);
    $count = count($grades);
    return $total / $count;
}

foreach ($studentGrades as $student => $grades) {
    echo "Average grade for $student: " . calculateAverage($grades) . "\n";
}


function calculateClassAverage(array $studentGrades)
{
    $totalGrades = 0;
    $totalCount = 0;

    foreach ($studentGrades as $grades) {
        $totalGrades += array_sum($grades);
        $totalCount += count($grades);
    }

    $classAverage = $totalGrades / $totalCount;
    return $classAverage;
    
}

$classAverage = calculateClassAverage($studentGrades);
echo "Average grade for all students: " . $classAverage . "\n";
