<?php
$data = [1,2,3,4,5,6,7,8,9,10];

$result = array_map(fn(int $value) => $value * 10, $data);
var_dump($result);

rsort($data);
var_dump($data);

var_dump(array_keys($data)); // ini akan mengambil key dari array
var_dump(array_values($data)); // ini akan mengambil value dari array

$person = [
    "firstName" => "Aliezzar",
    "lastName" => "Wijaya",
];
var_dump(array_keys($person)); // ini akan mengambil key dari array
var_dump(array_values($person)); // ini akan mengambil value dari array

// key = firstname sama lastName
// sedangkan valuesnya itu Aliezzar wijaya

// Halaman dokumentasi resminya ada di : https://www.php.net/manual/en/ref.array.php