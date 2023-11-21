<?php

// Schreibe eine Funktion, die zwei numerische Werte entgegennimmt, 
// diese multipliziert und das Ergebnis zurückgibt. 
function multipliziere($a ,$b){
  $rechenErgebnis = $a * $b;

  return  $rechenErgebnis;
}


// Beim Aufruf der Funktion mit den Werten 3 und 5 soll der 
// Rückgabewert 15 sein.
echo multipliziere(3,5); // 15
echo "\n";
echo multipliziere(0,0); // 0
echo "\n";
echo multipliziere(-4,-7); // 28
echo "\n";
echo multipliziere(2.4,4.1); // 9.84