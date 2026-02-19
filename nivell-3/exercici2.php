<?php

    $words = [
    "ocell",
    "muntanya",
    "estel",
    "llibre",
    "riu",
    "flors",
    "mar",
    "llum",
    "arbre",
    "somni"
    ];

    function evenLetters($word) {
        return strlen($word) % 2 == 0;
    }

    $isEven = array_filter($words, 'evenLetters');

    print_r($isEven);

?>