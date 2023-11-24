<?php
print_r($_GET);
//var_dump($_GET);
//echo $_GET['vorname'];

/* 
super global variable(s)

immer vorhanden, zum Teil sind sie komplett leer
$_GET
$_SERVER

*/
// global

function tueEtwas() {
    // lokal
  $zahl=10;
  echo $zahl;
  print_r($_GET);
}


echo $zahl; // undefined variable zahl
