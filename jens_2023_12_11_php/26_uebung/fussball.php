<?php

class Fussball
{

    protected $farbe = "nix";
    protected $durchmesser = -99999999999999;

    // magic
    // Konstruktor
    public function __construct($daten)
    {
        //print_r($daten);

        foreach($daten as $key => $value) {
            $methodenName ="set".ucfirst($key); //setFarbe

            if (method_exists($this,$methodenName) === true)
                $this->$methodenName($value);
            else
            {
                header("Location: error_page.html"); // redirect
                exit;
            }    

            //echo $methodenName."\n";
            /*
            switch($key)
            {
                case 'farbe':
                 $this->setFarbe($value);
                 break;

                 case 'durchmesser':
                    $this->setDurchmesser($value);
                    break;
            }
            */
            
         
        }
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
