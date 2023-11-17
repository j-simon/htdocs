<?php
/*
Schreibe ein Skript, in dem du in einer Variablen deinen Namen ablegst 
und dein Alter. 

Gib dann den Text 

Mein Name ist NAME und ich bin ALTER Jahre alt. 

aus. 

Ersetze NAME und ALTER mit den in den Variablen hinterlegten Werten.

*/
$name = "Jens";
$alter = 42;

echo "Mein Name ist $name und ich bin $alter Jahre alt.\n";
echo 'Mein Name ist $name und ich bin $alter Jahre alt.\n' . "\n";
echo "Mein Name ist {$name} und ich bin {$alter} Jahre alt.\n";
echo "Mein Name ist ${name} und ich bin ${alter} Jahre alt.\n";
echo "Mein Name ist " . $name . " und ich bin " . $alter . " Jahre alt.\n";
