<?php

    $numbers = [0, 1, 2, 3, 4, 5];

    function cube($number) {
        return $number ** 3;
    }

    $cubed = array_map('cube', $numbers);

    print_r($cubed);

?>