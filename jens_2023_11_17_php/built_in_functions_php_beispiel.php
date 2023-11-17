
<?php
$foo = 'jens';
// ucfirtst - wandelt den 1. Buchstaben eines strings in den Grossbuchstaben
$foo = ucfirst($foo);  // Jens
echo $foo;

echo "\n";

var_dump(100, true, 23.44, "Jens"); // mehrere Argumente möglich, echo ist in der Funktion mitintegriert

echo "\n";

echo gettype(100) . "\n"; // immer nur ein Argument möglich, kein echo integriert
echo gettype("100");

echo "\n";

phpinfo(); // ohne echo, die Ausgabe ist in der Funktion mitintegriert!


?>
