<?php

declare(strict_types=1);
/*
 Schreibe eine Funktion, die einen Integer Wert entgegennimmt und prüft,
 ob dieser gerade oder ungerade ist. 

 Gib einen String mit gerade oder ungerade zurück, 
 je nachdem welche Bedingung erfüllt ist.
*/


/* Lösung mit dem ternären Operator */

function pruefeAufGeradeOderUngerade(int $wert): string
{
    // modulus 2 prüft auf gerade / ungerade
    //  1 % 2 ist 1
    //  2 % 2 ist 0
    //  3 % 2 ist 1
    //  4 % 2 ist 0
    //  5 % 2 ist 1
    // das Ergbnis ist entweder 0 also gerade oder 
    // das Ergebnis ist nicht 0 (1) für ungerade Zahlen 
    $ergebnis = $wert % 2 === 0 ? "gerade" : "ungerade";

    return $ergebnis;
}

echo pruefeAufGeradeOderUngerade(6); // gerade
echo "\n";
echo pruefeAufGeradeOderUngerade(3); // ungerade
echo "\n";
