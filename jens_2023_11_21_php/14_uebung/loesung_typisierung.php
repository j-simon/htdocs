<?php
declare(strict_types=1);

// Schreibe eine Funktion, die zwei numerische Werte entgegennimmt, 
// diese multipliziert und das Ergebnis zurückgibt. 
function multipliziere(int $a ,int $b){

  $rechenErgebnis = $a * $b;

  return  $rechenErgebnis;
}


// Beim Aufruf der Funktion mit den Werten 3 und 5 soll der 
// Rückgabewert 15 sein.
echo multipliziere(1,2);
echo "\n";
echo multipliziere("13","12");

