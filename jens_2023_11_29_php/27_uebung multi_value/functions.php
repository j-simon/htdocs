<?php

$result = 0;




function calculate(float|int $numberOne, float|int $numberTwo, string $operator): float|int|string
{
    switch ($operator) {
        case '+':
            return $numberOne + $numberTwo;
            break;

        case '-':
            return $numberOne - $numberTwo;
            break;

        case '*':
            return $numberOne * $numberTwo;
            break;

        case '/':
            if ($numberTwo == 0) {
                return 'Cannot divide by zero';
            } else {
                return $numberOne / $numberTwo;
            }
            break;

        default:
            //if  ()
            return "No valid operator given";
    }
}



function validateInput(array $formData = []): float|int|string
{
    if (!empty($formData) && is_numeric($formData['numberOne']) && is_numeric($formData['numberTwo']) && !empty($formData['operator'])) {
        return calculate($formData['numberOne'], $formData['numberTwo'], $formData['operator']);
    } else {
        return 'Please enter valid numbers';
    }
}


$result = validateInput($_POST);

// wert scheiben, falls es eine Zahl ist, also ein Ergebnis ist und keine Meldung 
if (is_numeric($result)) {
    
    $filename = __DIR__ . "\daten.txt";

    // Wenn die Daten-Datei vorhanden ist ( am Anfang gibt es sie ja nicht)
    if (file_exists($filename)) {
        // Die Werte(Array) aus der Datei lesen und zum Array wandeln
        $werte = unserialize(file_get_contents($filename)); // : string
        
    } else {
        $werte = []; // leeres Array , wenn die Datei noch nicht da ist
    }

    // Wenn bereits 2 Werte da sind, einen löschen 
    if (count($werte) === 2) array_shift($werte);

    // Den nächsten ans Ende anhängen
    $werte[] = $result; 

    // serialisieren und speichern
    file_put_contents($filename, serialize($werte));
    
}


// wert lesen
$filename = __DIR__ . "\daten.txt";

if (file_exists($filename)) {
    $wert = file_get_contents($filename); // : string
    $result = unserialize($wert);
} 
