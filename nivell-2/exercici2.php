<?php

    $studentGrades = [
        "Anna" => [5, 10, 7, 8, 6],
        "Bernat" => [3, 6, 9, 4, 7],
        "Clara" => [7, 8, 6, 9, 10],
    ];

    print_r($studentGrades);

    function calculateAverage($grades) {
        $total = array_sum($grades);
        $count = count($grades);
        return $total / $count;
    }

    foreach ($studentGrades as $student => $grades) {
        echo "Average grade for $student: " . calculateAverage($grades) . "\n";
    }


    $totalGrades = 0;
    $totalCount = 0;

    foreach ($studentGrades as $grades) {
        $totalGrades += array_sum($grades);
        $totalCount += count($grades);
    }

    $averageAll = $totalGrades / $totalCount;
    echo "Average grade for all students: " . $averageAll . "\n";

?>