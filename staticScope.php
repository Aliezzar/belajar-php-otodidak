<?php
// Static Scope
function increment() {
    $counter = 1;

    echo "Counter : $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();

/* output : 
Counter : 1
Counter : 1
Counter : 1
*/

function increment2() {
    static $counter = 1;

    echo "Counter : $counter" . PHP_EOL;

    $counter++;
}

increment2();
increment2();
increment2();

/* output :
Counter : 1
Counter : 2
Counter : 3
*/