<?php
 
 require_once ("adresse.php");

 $vorname = "Jens"; // String
 //echo gettype($vorname);
 // Objekt / object
 $jensAdresse = new Adresse();
 $jensAdresse->strasse = "Teststr."; 
 $jensAdresse->ort="Köln"; 
 $jensAdresse->plz="12345"; 

 //echo gettype($jensAdresse);
 var_dump($jensAdresse);

 $timAdresse = new Adresse();
 //var_dump($timAdresse);
 //echo "\nHallo";

 $jensAdresseAlsAssoziativesArray=[];
 $jensAdresseAlsAssoziativesArray['strasse']="Teststr.";
 $jensAdresseAlsAssoziativesArray['ort']="Köln";
 $jensAdresseAlsAssoziativesArray['plz']="12345";
//var_dump($jensAdresseAlsAssoziativesArray);

echo $jensAdresseAlsAssoziativesArray['strasse'];
echo "\n";
echo $jensAdresse->strasse;

echo $jensAdresse->zeigeAn();
?>