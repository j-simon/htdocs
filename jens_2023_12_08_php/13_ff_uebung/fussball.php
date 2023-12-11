<?php

class Fussball
{

    protected $farbe = "rot";
    protected $durchmesser = 20.6;

    public  function beschreibeFussball() {

        echo "Dieser Fussball ist ".
        $this->getFarbe().
        " und hat einen Durchmesser von ".
        $this->getDurchmesser(). 
        " cm.";
    }

    /**
     * Get the value of farbe
     */ 
    public function getFarbe()
    {
        return $this->farbe;
    }

    /**
     * Set the value of farbe
     *
     * @return  self
     */ 
    public function setFarbe($farbe)
    {
        $this->farbe = $farbe;

        return $this;
    }

    /**
     * Get the value of durchmesser
     */ 
    public function getDurchmesser()
    {
        return $this->durchmesser;
    }

    /**
     * Set the value of durchmesser
     *
     * @return  self
     */ 
    public function setDurchmesser($durchmesser)
    {
        $this->durchmesser = $durchmesser;

        return $this;
    }
}
