<?php

$numbers = [1, 2, 3, 4, 4, 7, 8, 9];

// Den Wert 5 dem ersten Vorkommen von Key 4 zuweisen
$keyToFind = 4;
$newValue = 5;

$keyPosition = array_search($keyToFind, $numbers);

if ($keyPosition !== false) {
    $numbers[$keyPosition] = $newValue;
}
print_r($numbers);
// Den Wert 6 nach allen Vorkommen von Key 4 einfügen
$newValueToInsert = 6;

// Finde alle Positionen des Schlüssels im Array
$allKeyPositions = array_keys($numbers, $keyToFind);

// Füge den neuen Wert nach jedem Vorkommen des Schlüssels ein
foreach ($allKeyPositions as $position) {
    array_splice($numbers, $position + 1, 0, $newValueToInsert);
}

// Ausgabe des aktualisierten Arrays
print_r($numbers);

?>
