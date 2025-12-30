<?php
$num1 = 5;
$num2 = 12;
$num3 = 8;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "Largest: " . $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "Largest: " . $num2;
} else {
    echo "Largest: " . $num3;
}
?>