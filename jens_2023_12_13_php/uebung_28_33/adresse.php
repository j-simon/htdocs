<?php

class Adresse
{
    protected $strasse;
    protected $hausnummer;
    protected $plz;
    protected $ort;

    public function __construct($strasse,$hausnummer,$plz,$ort)
    {
        $this->setStrasse($strasse);
        $this->setHausnummer($hausnummer);
        $this->setPlz($plz);
        $this->setOrt($ort);
    }
    /**
     * Get the value of strasse
     */ 
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Set the value of strasse
     *
     * @return  self
     */ 
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;

        return $this;
    }

    /**
     * Get the value of plz
     */ 
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * Set the value of plz
     *
     * @return  self
     */ 
    public function setPlz($plz)
    {
        $this->plz = $plz;

        return $this;
    }

    /**
     * Get the value of ort
     */ 
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Set the value of ort
     *
     * @return  self
     */ 
    public function setOrt($ort)
    {
        $this->ort = $ort;

        return $this;
    }

    /**
     * Get the value of hausnummer
     */ 
    public function getHausnummer()
    {
        return $this->hausnummer;
    }

    /**
     * Set the value of hausnummer
     *
     * @return  self
     */ 
    public function setHausnummer($hausnummer)
    {
        $this->hausnummer = $hausnummer;

        return $this;
    }
}
