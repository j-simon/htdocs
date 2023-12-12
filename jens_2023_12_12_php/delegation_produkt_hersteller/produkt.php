<?php
class Produkt {
    // Produkt spezifisch
    protected  $name = "unbekanntes Produkt";
    protected  $preis = 1_000_000;
    protected  $hersteller = null;
    // ...

    // Hersteller spezifische
    // protected $hersteller = "unbekannter Hersteller";
    // protected $urlBildHerstellerProdukt = "noch nicht veröffentlich";
    // ...

    public function __construct($name, $preis) 
    {
        $this->setName($name);
        $this->setPreis($preis);
        
        $this->hersteller = new Hersteller();
        //print_r($this->hersteller);
    }

    /**
     * Get the value of preis
     */ 
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Set the value of preis
     *
     * @return  self
     */ 
    public function setPreis($preis)
    {
        $this->preis = $preis;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setHerstellerFirmenname($herstellerFirmename) {
            $this->hersteller->setFirmenname($herstellerFirmename);
    }

    public function  setHerstellerUrlBildHerstellerProdukt($urlBildHerstellerProdukt){
        $this->hersteller->setUrlBildHerstellerProdukt($urlBildHerstellerProdukt);
    }
}