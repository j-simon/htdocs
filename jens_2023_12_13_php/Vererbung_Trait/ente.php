<?php
class Ente extends Tier
{
    use schwimmfaehig;
    // Attribut
    // gemeinsame Attribute mit einer anderen Klasse
    // public $name = "mein noch nicht mir gehörender Hund";
    // public $geburtsTag;
    
    // eplizite Attribute dieser Klasse
    

    public function sagMirWerDuBist() {
        echo "ich bin eine Ente\n";
    }

  
}