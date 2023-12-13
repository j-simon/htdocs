<?php
class Hund extends Tier
{
    // Attribut
    // gemeinsame Attribute mit einer anderen Klasse
    // public $name = "mein noch nicht mir gehörender Hund";
    // public $geburtsTag;
    
    // eplizite Attribute dieser Klasse
    public $kleidungsstueck;

    public function sagMirWerDuBist(){
        echo "ich bin eine Hund\n";
    }
}
