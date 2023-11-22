<?php

/*
    Schreibe eine Funktion, die zwei numerische Werte sowie einen String entgegennimmt. 
    
    Wenn der String den Wert eines der folgenden mathematischen Operatoren 
    (Addition, Subtraktion, Multiplikation oder Division) hat, 
    soll die entsprechende mathematische Operation ausgeführt werden. 
    
    Gib das Ergebnis zurück. Du kannst es dir gerne auch ausgeben lassen.
*/

declare(strict_types=1);

function rechne(int |float  $a, int |float $b, string $operation): void
{
    if ($operation === "*")  $ergebnis = $a * $b;
    else
    if ($operation === "/")  $ergebnis = $a / $b;
    else
    if ($operation === "+")  $ergebnis = $a + $b;
    else
    if ($operation === "-")  $ergebnis = $a - $b;
    else $ergebnis = "falsche Operation angegeben!";

    echo $ergebnis;
    echo "\n\n";
}
echo "falsche Operation\n";
rechne(2, 3, "!");

echo "rechne 2 * 3, es sollte 6 raus kommen.\n";
rechne(2, 3, "*");

echo "rechne 2 / 3, es sollte 0.6666666.. raus kommen.\n";
rechne(2, 3, "/");

echo "rechne 2 + 3, es sollte 5 raus kommen.\n";
rechne(2, 3, "+");

echo "rechne 2 - 3, es sollte -1 raus kommen.\n";
rechne(2, 3, "-");

// rechne("a", "b", "-"); // das darf nicht ausgeführt werden, es muss ein error auftreten