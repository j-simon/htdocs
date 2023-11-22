<?php

$zahlen = [90,30,13,34];

// 0->9
sort($zahlen); 
var_dump($zahlen);

// 9<-0
$zahlenAndersrum=array_reverse($zahlen);
var_dump($zahlenAndersrum);

$texte = ["c","a","b"];

sort($texte); 
var_dump($texte);
