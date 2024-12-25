<?php

function sum(int $first, int $second) {
    return $first + $second;
}

$total = sum(10, 5);
var_dump($total);

$total = sum(10,200);
var_dump($total);