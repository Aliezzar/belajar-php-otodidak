<?php
var_dump(join(",", [1, 2, 3, 4, 5])); //ini akan menjadi array
var_dump(explode(" ", "satu dua tiga empat lima")); // ini akan menjadi string
var_dump(strtolower("HELLO WORLD")); // ini akan menjadi huruf kecil
var_dump(strtoupper("hello world")); // ini akan menjadi huruf besar
var_dump(trim ("     Hello World    ")); // ini akan menghilangkan spasi di awal dan di akhir
var_dump(substr("Hello World", 6, 5)); // ini akan mengambil kata dari index ke 6 sebanyak 5 huruf

// masih banyak lagi, cek https://www.php.net/manual/en/ref.strings.php