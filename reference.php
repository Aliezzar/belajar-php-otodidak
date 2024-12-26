<?php
// Asign by reference

$nama = "Aliezzar"; // ini adalah value awal

$shortcut = &$nama; // ini adalah referencenya yang sama seperti kita membuat shortcut
$shortcut = "Budi"; // ini adalah value yang baru sama seperti jika kita mengotak ngatik shortcutnya, maka value aslinya juga akan berubah

echo $nama . PHP_EOL; // outputnya adalah Budi
echo $shortcut . PHP_EOL; // outputnya adalah Budi

// pass by reference

function increment(int &$value) {
    $value++;
}

$counter = 1;

increment($counter);

echo $counter . PHP_EOL;