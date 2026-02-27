<?php

    function hasCharacter($array, $character) {

        foreach ($array as $item) {
            if (stripos($item, $character) === false) {
                return false;
            }
        }
        return true;
    }

?>