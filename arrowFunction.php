<?php
// Arrow Function adalah fitur baru di PHP 7.4 yang memungkinkan kita membuat anonymous function dengan penulisan yang lebih singkat.
// Arrow Function tidak bisa memiliki body function yang kompleks, hanya bisa memiliki satu expression saja.
// Arrow Function tidak bisa memiliki nama.
// Arrow Function tidak bisa memiliki parameter default value.
// Arrow Function tidak bisa memiliki variadic parameter.
// Arrow Function tidak bisa memiliki parameter dengan tipe data nullable.
// Arrow Function tidak bisa memiliki parameter dengan tipe data scalar.
// Arrow Function tidak bisa memiliki parameter dengan tipe data return.
// Arrow Function tidak bisa memiliki parameter dengan tipe data union.
// Arrow Function tidak bisa memiliki parameter dengan tipe data nullable union.

$firstName = "Aliezzar";
$lastName = "Wijaya";

// tidak bisa menggunakan Arrow Function (menggunakan anonymous function)
$anonymousFunction = function () use ($firstName, $lastName): string {
    return "Halo $firstName $lastName" . PHP_EOL;
};

// Menggunakan Arrow Function
$sayHello = fn() => "Halo $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $sayHello();

// akan memiliki hasil yang sama

// output: Halo Aliezzar Wijaya
// output: Halo Aliezzar Wijaya
?>