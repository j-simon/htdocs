<?php

require_once("produkt.php");
require_once("hersteller.php");

$mikrowelleBosch = new Produkt("BOSCH Mikrowelle FEL023MS2, Grill, Mikrowelle, 20 l ",164.99);
print_r($mikrowelleBosch);
$mikrowelleBosch->setHerstellerFirmenname("Bosch");
$mikrowelleBosch->setHerstellerUrlBildHerstellerProdukt("https://bosch.com/produktbildmikrowelle.png");
print_r($mikrowelleBosch);


// 2. Objekt
$wmSiemens = new Produkt("Siemens Waschmaschine FJHJHS2,",264.99);

$wmSiemens->setHerstellerFirmenname("Siemens");
$wmSiemens->setHerstellerUrlBildHerstellerProdukt("https://siemens.com/produktbilwaschmaschinen.png");

print_r($wmSiemens);

?>
