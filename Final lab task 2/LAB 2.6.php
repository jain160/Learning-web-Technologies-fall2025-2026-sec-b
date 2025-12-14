<?php
$array = [1, 2, 3, 4, 5];
$search = 3;
$found = false;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo $search . " found in the array.";
} else {
    echo $search . " not found.";
}
?>