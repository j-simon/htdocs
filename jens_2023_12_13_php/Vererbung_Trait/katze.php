<?php

class Katze extends Tier{

    // Attribut
    // gemeinsame Attribute mit einer anderen Klasse
    // public $name="meine noch nicht mir gehörende Katze";
    // public $geburtsTag;
    
    // eplizite Attribute dieser Klasse
    public $moebelstueck;
    
    public function sagMirWerDuBist(){
        echo "ich bin eine Katze\n";
    }
}