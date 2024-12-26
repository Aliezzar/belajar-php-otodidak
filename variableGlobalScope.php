<?php

// global scope

$nama = "ujang";
function sayHello() {
    global $nama;  // ini namanya global keyword
    echo $nama . PHP_EOL;
};

sayHello(); // ujang