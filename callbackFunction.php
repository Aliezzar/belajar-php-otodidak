<?php

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
};

sayHello("Ezzar", "strtoupper");
sayHello("aliezzar","ucfirst");
// bisa juga menggunakan anonymous function
sayHello("Ezzar", function(string $name): string {
    return strtoupper($name);
});

// atau juga bisa menggunakan arrow function
sayHello("Ezzar", fn($name) => strtoupper($name));