<?php

class Person
{

    // attribute
    protected $vorname = "";
    protected $nachname = "";

    public function a()
    {
        $this->b();
    }

    public function b()
    {
        $this->c();
    }

    public function c()
    {
        echo "angekommen!";
    }

    // eigene methoden
    // die andere Methoden nutzt

    public function beschreibeWillkomenPerson()
    {
        // properties benutzen
        //$beschreibung = "Herzlich Willkommen auf unserer Webseite, $this->vorname $this->nachname!";

        // anderen Methoden / getter
        $beschreibung = "<b class='red'>Herzlich Willkommen auf unserer Webseite, " . $this->getVorname() . " " . $this->getNachname() . "!</b>";
        return $beschreibung;
    }


    public function beschreibe()
    {
        $text = 'Die Person heisst ' . $this->getVorname() . ' '; 
        $text .= $this->getNachname() . '!'; 
        return $text;
    }

    // spezial methoden getter & setter


    /**
     * Get the value of vorname
     */
    public function getVorname()
    {
        return ucfirst($this->vorname);
    }

    /**
     * Set the value of vorname
     *
     * @return  self
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;

        return $this;
    }

    /**
     * Get the value of nachname
     */
    public function getNachname()
    {
        return $this->nachname;
    }

    /**
     * Set the value of nachname
     *
     * @return  self
     */
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;

        return $this;
    }
}
