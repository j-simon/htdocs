<?php

require_once("produkt.php");
require_once("hersteller.php");


$hersteller = new Hersteller("Bosch", "https://i.otto.de/i/otto/3547b0e3-e12e-5957-93d5-28b2f6953c87?h=520&w=551&sm=clamp");
$mikrowelleBosch = new Produkt("BOSCH Mikrowelle FEL023MS2, Grill, Mikrowelle, 20 l ", 164.99, $hersteller);
//print_r($mikrowelleBosch);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?= $mikrowelleBosch->getName() ?></h3>
    <h5>Preis: <?= $mikrowelleBosch->getPreis() ?> €</h5>
    <p>
        Hersteller: <b><?= $hersteller->getFirmenName() ?></b><br>
    
        <img width="200px" src="<?= $hersteller->getUrlBildHerstellerProdukt() ?>" />

    </p>
</body>

</html>

