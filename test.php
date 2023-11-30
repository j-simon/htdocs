<?php
error_reporting(E_ALL); // show all errors, warnings and notices

session_start();
$_SESSION['logged_in']=true;
//print_r($_SERVER);
echo "hallo";
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$value = 'something from somewhere';

setcookie("TestCookie", $value);
// This is only an example, the numbers below will
// differ depending on your system
$start= microtime(true); 


echo memory_get_usage() . "\n"; // 

$a = str_repeat("Hello", 10_000_000);
//sleep(13);
echo memory_get_usage() . "\n"; // 

unset($a);

echo memory_get_usage() . "\n"; // 

#der zu messende PHP Code ...

$dauer = microtime(true) - $start; 
echo "Verarbeitung des Skripts: $dauer Sek.";

$dauer = microtime(true) - $start; 
echo "Verarbeitung des Skripts: $dauer Sek.";