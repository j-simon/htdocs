<?php
$text="Dies ist ein Text";



var_dump(isset($text)); // ist es gesetzt? gibt es diese Variable? ja oder nein?
// WENN die Variable vorhanden ist DANN gib ihren Wert aus (echo) SONST 
if ( isset($text) ) {
    echo $text;
} else {
   // echo "Die Variable text ist aus irgendwelchen Gründen nicht gesetzt";
}
echo "\n";

//empty(); // leer


// gettype()
// var_dump()
// echo
// isset()
// empty()
$text="Jens";
var_dump( empty($text) ); // nein


$text="";
var_dump( empty($text) ); // ja

$zahl=100;
var_dump( empty($zahl) ); // ? nein, ist doch 100

$zahl=null;
var_dump( empty($zahl) ); // ? ja, null


$zahl=0;
var_dump( empty($zahl) ); // ? ja, eigenartig

$zahl='0';
var_dump( empty($zahl) ); // ? ja, eigenartig


$zahl1=5;
$zahl2=4;
echo $zahl1+$zahl2;
echo "\n";

$zahl1="5"; // string
$zahl2="4";
echo $zahl1+$zahl2;
echo "\n"; //automatische Typumwandlung

$zahl1="5.5"; // string
$zahl2="4.4";
echo $zahl1+$zahl2;
echo "\n"; //automatische Typumwandlung

$zahl1="a"; // string
$zahl2="b";
echo $zahl1+$zahl2;
echo "\n"; //automatische Typumwandlung