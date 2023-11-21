<?php

function rechne(int $a, int $b) { // $a = $zahl1 $b = $zahl2
    // Gültigkeitsbereiche - scope
    // lokale
    $ergebnis = $a + $b;

    //$a=100;

    return $ergebnis;
}

// Gültigkeitsbereich - scope
// globales
$zahl1=4;
$zahl2=5;
echo rechne($zahl1,$zahl2); // 3 // $a = &$zahl1 $b = &$zahl2
echo "\n";

echo "zahl1= ".$zahl1;
echo "\n";

echo $zahl2;
//echo "\n";
//echo rechne(3,4); // 7