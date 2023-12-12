<?php
session_start();

class Beispiel
{ 
    public $text="Guten Morgen!";
    function __construct() {
        echo "Im Konstruktor\n";
    }

    function __destruct() {
        echo "Zerstoere wurde in Klasse: " . __CLASS__ . " aufgerufen ".__FILE__."\n";
        // 1. speichern
        // $_SESSION
        // datei / db speichern
        $_SESSION['Beispiel_Objekt']=$this;

        // 2. debugger für Objekt Verlust // Meldung sms, email, logfile
    }
}

$obj = new Beispiel(); // bei new wird __construct aktiviert / aufgerufen

$obj = "Jens";

$obj = new Beispiel();


