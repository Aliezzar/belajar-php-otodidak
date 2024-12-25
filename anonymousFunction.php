<?php

// Anonymous Function Original
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Ezzar");
$sayHello("Ejar");


function sayGoodBye(string $name, $filternya) {
    $finalName = $filternya($name);
    echo "Good bye $finalName" . PHP_EOL;
};

// Bisa langsung functionnya di panggil

sayGoodBye("Ezzar", function (string $name): string {
    return strtoupper($name);
});

// Atau bisa di simpan ke dalam variable

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Ezzar", $filterFunction);

// Mengakses variable di luar Closure (Menggunakan use)

$firstName = "Aliezzar";
$lastName = "Wijaya";

$sayHello = function () use ($firstName, $lastName) {
    echo "Halo $firstName $lastName" . PHP_EOL;
};
$sayHello();

// jika kita beginikan ini hasilnya akan sama saja dan tidak berfungsi, tapi $sayHello() nya itu mengarah ke atas, yang berarti fungsi nya memanggil variable yang ada di atasnya
$firstName = "Nabil";
$lastName = "Aswangga";
$sayHello();