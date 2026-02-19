<?php

    function hasCharacter($array, $character) {

        foreach ($array as $item) {
            if (strpos($item, $character) === false) {
                return false;
            }
        }
        return true;
    }

?>