<?php

// Fibonacci - Zahlen berechnen
$vorvorher = 0;
$vorher = 1;

for ($i = 0; $i < 10; $i++) { // 10 weitere Zahlen sollen berechnet werden, dies kann auch vergroesert werden!
 
    $ist = $vorvorher + $vorher;
    echo $ist . "\n"; // die aktuell zu brechnende naechste Fibonacci Zahl

    $vorvorher = $vorher; // jetzt die Zahlen so anordnen, das vorvorher und vorher aktuell sind
    $vorher = $ist;
}


// Loesung aus stackoverflow
// https://stackoverflow.com/questions/15600041/php-fibonacci-sequence
function getFib($n) {
    return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
}

echo "\n\nStackoverflow-Lösung \n";
echo getFib(10);
