<?php

    function eratosthenesSieve($numbers) {

        if (empty($numbers)) return [];

        $limit = max($numbers);

        if ($limit < 2) return [];

        $sieve = array_fill(0, $limit + 1, true);
        $sieve[0] = false;
        $sieve[1] = false;

        for ($i = 2; $i <= sqrt($limit); $i++) {
            if ($sieve[$i]) {
                for ($j = $i * $i; $j <= $limit; $j += $i) {
                    $sieve[$j] = false;
                }
            }
        }

        $primeNumbers = [];

        foreach ($numbers as $num) {
            if ($num >= 2 && $sieve[$num]) {
                $primeNumbers[] = $num;
            }
        }

        return $primeNumbers;
    }

    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

    $primeNumbers = eratosthenesSieve($numbers);

    function sum($acc, $num) {
        return $acc + $num;
    }

    $sum = array_reduce($primeNumbers, 'sum', 0);

    echo $sum;

?>