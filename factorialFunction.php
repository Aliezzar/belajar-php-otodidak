<?php

// Factorial function ini cocok untuk digunakan dengan masalah rekursif
// karena setiap kali memanggil dirinya sendiri, nilai parameter yang diberikan akan berkurang

function factorialLoop(int $value): int {
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
};

var_dump(factorialLoop(10));
// ini sama seperti jika dikali satu per satu
var_dump(1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10);

function factorialRecursive(int $value): int {
    if ($value == 1) { 
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
};

var_dump(factorialRecursive(10));

// loop function 

function loop (int $value) {
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(300000000);