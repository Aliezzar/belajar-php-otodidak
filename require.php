<?php

include "./requireDanInclude.php";

echo sayHello("Aliezzar", "Wijaya");

// Namun lebih aman jika menggunakan include_once atau require_once
//  karena jika file yang di include sudah pernah di include sebelumnya
// begitu juga dengan require_once

include_once "./requireDanInclude.php";

echo sayHello("Aliezzar", "Wijaya");