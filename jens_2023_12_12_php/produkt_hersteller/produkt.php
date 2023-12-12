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

    public function __construct($name, $preis,$hersteller) 
    {
        $this->setName($name);
        $this->setPreis($preis);
         $this->setHersteller($hersteller); 
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

  

    /**
     * Get the value of hersteller
     */ 
    public function getHersteller()
    {
        return $this->hersteller;
    }

    /**
     * Set the value of hersteller
     *
     * @return  self
     */ 
    public function setHersteller($hersteller)
    {
        $this->hersteller = $hersteller;

        return $this;
    }
}