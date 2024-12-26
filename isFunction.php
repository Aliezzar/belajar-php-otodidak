<?php
// is function bertujuan untuk mengecek apakah sebuah variable itu function atau bukan
// dan juga is functiion bisa untuk mengecek tipe data dari sebuah variable

$data = 100.0;

var_dump(is_string($data)); 
var_dump(is_int($data)); 
var_dump(is_bool($data)); 
var_dump(is_float($data)); 
var_dump(is_array($data)); 

// is function ini memiliki halaman dokumentasi di: https://www.php.net/manual/en/ref.var.php