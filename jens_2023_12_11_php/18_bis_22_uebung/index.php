<?php
require_once("person.php");

$jens = new Person();
$jens->setVorname("Jens");
$jens->setNachname("Simon");
$jens->setGeburtTimestamp(123131313);

// ohne virtuelle Attribute, Nachteil keine Wiederverwendbarkeit
echo $jens->getVorname()." ".$jens->getNachname()."\n";

echo $jens->getName()."\n";

echo $jens->getGeburtstag()."\n";

$jens->setName("Tim Schmitz");
echo $jens->getName()."\n";

$jens->setGeburtstag("11.12.2012");
echo $jens->getGeburtstag()."\n";