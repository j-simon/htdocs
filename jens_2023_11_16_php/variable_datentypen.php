<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
/*
MySQL - Datentypen
Texte 
-----------
VARCHAR(100) "Jens"
TEXT    "Jens"

Zahlen
-------------
Ganze Zahlen: INTEGER  100
Kommazahlen: DECIMAL(5,2) , FLOAT, DOUBLE 100.33

Boolean
---------
0 1
TRUE FALSE

Datum Zeit
------------
DATE, DATETIME

NULL



PHP Datentype

TEXT : String "Jens" alternative 'Jens'
ZAHLEN: Ganzzahl Integer 100 , Kommazahlen float, double 3.141512  123.2345

ARRAY: Listen 

BOOLEAN: Wahrheitswerte : true, false

null


*/
$vorname = "Jens"; // string
echo gettype($vorname); // string

$vorname = 12; // integer
echo gettype($vorname); // intger

$zahl= 134;
$zahl2= 134.333; // float/double
$wahrheits = false;


$alter = null; // Es gibt eine Variable alter , deren Wert ich NOCH NICHT kenne, also merke ich dies nicht 



$alter = 18;


?>
</body>
</html>