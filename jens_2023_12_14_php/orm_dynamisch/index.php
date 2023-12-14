<?php
// Für die fremden mit composer installierten Code-Schnippsel  werden alle Klassen
// automatisch required 
require_once "vendor/autoload.php";



require_once "Model.php";
require_once "User.php";
require_once "Article.php";
require_once "Invoice.php";

$benutzer = new User();

$benutzer->vorname = "Otto";
$benutzer->nachname = "Schmitz";

// print_r($benutzer);

$benutzer->save();
//$benutzer->save(); //SQL Tabelle Benutzer , vorname ,nachname
// INSERT INTO users (username,email,password) 
// VALUES('$this->username','$this->email','$this->password')

$artikel = new Article();

$artikel->bezeichnung = "Mikrowelle";
$artikel->preis = 198.9;
// print_r($artikel);

$artikel->save();
//$artikel->save(); // SQL Tabelle Artikel , bezeichnung , preis
// INSERT INTO articles (bzeichnung,preis) 
// VALUES('$this->bezeichnung','$this->preis')

$rechnung = new Invoice();
$rechnung->firma="Jens GmbH";
$rechnung->summe=234.56;
$rechnung->save();