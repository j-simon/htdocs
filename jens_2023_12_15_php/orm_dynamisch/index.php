<?php
// Für die fremden mit composer installierten Code-Schnippsel  werden alle Klassen
// automatisch required 
require_once "vendor/autoload.php";

// Der eigenen Autoloader für meine Klassen, der vendor/autoload.php ist nur für die mitgelieferten anderern Klassen

function meinAutoload($name)
{
    echo "Class ", $name."\n";
    $file = __DIR__. "/classes/" . $name . '.php';
    echo $file."\n";
    if (file_exists($file)) {
        
        require_once $file;
    } else {
        echo "Diese Datei wurde nicht gefunden!";
        exit;
    }
}
spl_autoload_register('meinAutoload');

// diese require-Befehle brauchen wir nicht mehr!
// require_once "Model.php";
// require_once "classes/User.php";
// require_once "Article.php";
// require_once "Invoice.php";



// Das Hauptprogramm beginnt 
$presence = new Presence();
$presence->anfangZeit = "08:08 Uhr";
$presence->endeZeit = "16:54 Uhr";
$presence->save();


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


//Artikel::find(11); // id=11 in sql ermitteln und wenn vorhanden zeigen
Article::delete(1); // id=11 in sql ermitteln und wenn vorhanden löschen



$rechnung = new Invoice();
$rechnung->firma="Jens GmbH";
$rechnung->summe=234.56;
$rechnung->save(); // Insert


Invoice::delete(1); // Delete

$rechnungen = Invoice::getAll();//select
var_dump($rechnungen);