<?php

class Fussball
{

    protected $farbe = "nix";
    protected $durchmesser = -99999999999999;

    // magic
    // Konstruktor
    public function __construct($farbe,$durchmesser)
    {
        $this->setDurchmesser($farbe);
        $this->setFarbe($durchmesser);
    }

    public function __toString()
    {
        return "Dieser Fussball ist " . $this->getFarbe() . " und hat einen Durchmesser von " . $this->getDurchmesser() . " cm.";
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
