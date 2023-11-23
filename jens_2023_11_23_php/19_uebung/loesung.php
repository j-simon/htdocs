<?php

$numbers = [1, 2, 3, 4, 4, 7, 8, 9];

// 1. Schritt
// key 4 wert 5
$numbers[4] = 5 ;

// 2. Schritt
// nach dem key 4 den 6 einfügen
array_splice($numbers, 5, 0, 6);

print_r($numbers);
//[1, 2, 3 ,4 ,5 ,7 ,8, 9]






