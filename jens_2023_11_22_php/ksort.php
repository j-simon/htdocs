<?php

// key    0    1    2   3
$liste = [100, 20, 900, 30];

ksort($liste); // keys sortieren 

//print_r($liste);

$liste = [42, 4, 12345]; // indiziert/nummeriert 0  bis 3

$liste=[ 'stockweg' => 4, 'plz' => 12345,'alter' =>  42,]; // assoziativ 
ksort($liste); // keys sortieren 

print_r($liste);
