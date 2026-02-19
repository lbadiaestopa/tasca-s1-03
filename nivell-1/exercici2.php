<?php

    $array = array(1, 2, 3, 4, 5, 6);

    echo count($array) . "\n";

    unset($array[0]);
    $array = array_values($array);
    
    echo count($array) . "\n";
    echo implode(", ", $array);

?>