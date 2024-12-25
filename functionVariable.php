<?php

function satu() {
    echo "oy oy oy baaaakaaaaa" . PHP_EOL;
}

function dua() {
    echo "Ryoku tenkai, bankaiii" . PHP_EOL;
}

$functionda = "satu";
$functionda();

$functionda = "dua";
$functionda();

function sayHello (string $name, $filternya) {
    $finalName = $filternya($name);
    echo "Hello $finalName" . PHP_EOL;
};

function sampleFunction(string $name): string {
    return "sample $name";
};

sayHello("Ezzar", "sampleFunction");
sayHello("Ezzar", "strtoupper");
sayHello("Ezzar", "strtolower");