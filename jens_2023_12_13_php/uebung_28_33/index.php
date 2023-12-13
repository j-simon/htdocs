<?php 

// ist die Reihefolge der require-statements wichtig?
// nein, es ist code copy
require_once ("adresse.php");
require_once ("person.php");

/*
Schreiben Sie zwei Klassen Person und Adresse. 
Die Klasse Person hat die Attribute $name, $email und $adresse. 
Die Klasse Adresse hat die Attribute $strasse, $plz und $ort. 
Vergessen Sie nicht die entsprechenden Getter und Setter. 
Ergänzen Sie eine index.php,
in welcher Sie Instanzen beider Klassen erzeugen,
diese mit Ausnahme des Attributs $adresse 
über die Setter befüllen 


und dann die fünf befüllten Attribute mittels Getter ausgeben. Da derzeit noch keine Beziehung zwischen den beiden Objekten besteht, müssen Sie für zwei Attribute auf das Person-Objekt zugreifen und für die restlichen drei Attribute auf das Adresse-Objekt. 
*/

// $adresse = new Adresse();
// $adresse->setStrasse("Hauptstrasse 1");
// $adresse->setPlz("08695");
// $adresse->setOrt("München");
 $adresse = new Adresse("Hauptstrasse","1","08695","München");

// print_r($adresse);

// $adresse2 = new Adresse();
// $adresse2->setStrasse("Teststrasse 43");
// $adresse2->setPlz("12345");
// $adresse2->setOrt("A-Stadt");
$adresse2 = new Adresse("Teststrasse","43","12345","A-Stadt");
// print_r($adresse2);

$person = new Person("Uli Maurer","Uli.Maurer@gmx.net",$adresse2);
//$person->setName("Uli Maurer");
//$person->setEmail("Uli.Maurer@gmx.net");
// print_r($adresse);

//$person->setAdresse($adresse2);
//print_r($person);
$person->setStrasse("Teststrasse_nebenan");
$person->setHausnummer(-999);
$person->setPlz(99999);
$person->setOrt("Testort");
//$person->setAdresse($adresse);
// print_r($person);

//$person->setAdresse(null);
// Ich frage diese Person wo sie wohnt?
// 
//echo $person->getAdresse()->getOrt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>fehlerhafte Daten</p>
    <ul>
        <li><?= $person->getName() ?></li>
        <li><?= $person->getEmail() ?></li>
        
        <li><?=$adresse->getStrasse(); ?></li>
        <li><?=$adresse->getHausnummer(); ?></li>
        <li><?=$adresse->getPlz(); ?></li>
        <li><?=$adresse->getOrt(); ?></li>
    </ul>

    <p>fehlerfrei Daten</p>
    <ul>
        <li><?= $person->getName() ?></li>
        <li><?= $person->getEmail() ?></li>
        
        <li><?=$person->getStrasse(); ?></li>
        <li><?=$person->getHausnummer(); ?></li>
        <li><?=$person->getPlz(); ?></li>
        <li><?=$person->getOrt(); ?></li>
    </ul>
</body>
</html>

