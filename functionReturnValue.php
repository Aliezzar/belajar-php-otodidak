<?php
function nilai(int $value) {
    if ($value >= 90 && $value < 100) {
        return "A";
    } elseif ($value >= 80) {
        return "B";
    } elseif ($value >= 50) {
        return "C";
    } elseif ($value >= 0) {
        return "jelek bangettt";
    } else {
        return "nilai tidak valid";
    }
}

$function = nilai(92);
echo "nilai adi adalah $function" . PHP_EOL;