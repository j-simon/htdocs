<?php

$foo = 'Jens';
$foobar = $foo; // Kopie

echo $foo . "\n";
echo $foobar. "\n";

$foo = "Tim";
echo $foo . "\n"; // gerade geändert
echo $foobar; // Jens