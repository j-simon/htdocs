<?php
function rechne(int |float  $a, int |float $b, string $operation): string|int|float
{
    if ($operation === "*")  $ergebnis = $a * $b;
    else
    if ($operation === "/")  $ergebnis = $a / $b;
    else
    if ($operation === "+")  $ergebnis = $a + $b;
    else
    if ($operation === "-")  $ergebnis = $a - $b;
    else $ergebnis = "falsche Operation angegeben!";

    return $ergebnis;
    //echo "\n\n";
}
