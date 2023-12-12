<?php
class Hersteller {

    protected $firmenname = "unbekannte";
    protected $urlBildHerstellerProdukt = "fehlt_noch";
    
    
    public function __construct($firmenname,$urlBildHerstellerProdukt){
        $this->setFirmenname($firmenname);
        $this->setUrlBildHerstellerProdukt($urlBildHerstellerProdukt);
    }
    /**
     * Get the value of firmenname
     */ 
    public function getFirmenname()
    {
        return $this->firmenname;
    }

    /**
     * Set the value of firmenname
     *
     * @return  self
     */ 
    public function setFirmenname($firmenname)
    {
        $this->firmenname = $firmenname;

        return $this;
    }

    /**
     * Get the value of urlBildHerstellerProdukt
     */ 
    public function getUrlBildHerstellerProdukt()
    {
        return $this->urlBildHerstellerProdukt;
    }

    /**
     * Set the value of urlBildHerstellerProdukt
     *
     * @return  self
     */ 
    public function setUrlBildHerstellerProdukt($urlBildHerstellerProdukt)
    {
        $this->urlBildHerstellerProdukt = $urlBildHerstellerProdukt;

        return $this;
    }
}