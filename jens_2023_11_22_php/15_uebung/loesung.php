<?php

declare(strict_types=1);
/*
 Schreibe eine Funktion, die einen Integer Wert entgegennimmt und prüft,
 ob dieser gerade oder ungerade ist. 
 
 
 gerade Zahlen:  x % 2       x +1   0,2,4,6, ....
 ungerade Zahlen: 1,3,5,7, ....

 Gib einen String mit gerade oder ungerade zurück, 
 je nachdem welche Bedingung erfüllt ist.
*/


/* Lösung mit if /else */

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
    if ($wert % 2 === 0) {
        $ergebnis = "gerade";
    } else {
        $ergebnis = "ungerade";
    }

    return $ergebnis;
}

echo pruefeAufGeradeOderUngerade(6); // gerade
echo "\n";
echo pruefeAufGeradeOderUngerade(3); // ungerade
echo "\n";
