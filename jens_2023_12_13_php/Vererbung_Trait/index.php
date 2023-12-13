<?php
require_once("schwimmfaehig.php"); // code copy
require_once("tier.php"); // code copy
require_once("katze.php"); // code copy
require_once("hund.php"); // code copy
require_once("ente.php"); // code copy
require_once("schwan.php"); // code copy

//$tier = new Tier();


$katze = new Katze();
// print_r($katze);

$katze->name="Kitty";
$katze->geburtsTag="01.10.2020";
$katze->moebelstueck="Kratzbaum";
$katze->sagMirWerDuBist();

// print_r($katze);


$hund = new Hund();
$hund->name="Hr. Schulz";
$hund->geburtsTag="01.10.2020";
$hund->kleidungsstueck="blaue Jacke";
$hund->sagMirWerDuBist();
// print_r($hund);


$ente = new Ente();
$ente->name="Frau Quak";
$ente->geburtsTag="01.10.2022";
$ente->heimatGewaesser="Tuempel in Koeln";
$ente->sagMirWerDuBist();
$ente->schwimmeWohin("Berlin");
// print_r($hund);

$schwan = new Schwan();
$schwan->name="Herr Quaker";
$schwan->geburtsTag="01.10.2023";
$schwan->heimatGewaesser="Tuempel in Hamburg";
$schwan->sagMirWerDuBist();
$schwan->schwimmeWohin("München");