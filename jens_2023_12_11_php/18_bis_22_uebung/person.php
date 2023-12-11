<?php

class Person
{
    protected $vorname = "";
    protected $nachname = "";
    protected $geburtTimestamp = 0; // int timestamp z.b. Aus : time() oder strtotime()

    // name soll virtuell sein
    // protected name..

    // geburtstag soll virtuell sein
    // protected name..

    public function getGeburtstag()
    {
        return date('Y-m-d', $this->geburtTimestamp);
    }

    public function setGeburtstag($geburtstag)
    {
        // 12131234234
        $this->geburtTimestamp = strtotime($geburtstag) ; //"11.12.2012"
    }

    // gut wartbar, alles an einem zentralen Ort verändern, verbessern
    public function getName()
    {
        return $this->getVorname() . " " . $this->getNachname();
    }

    public function setName($name)
    { // $name ist ein string
        //"Jens Simon"
        $teile = explode(" ", $name);
        $this->setVorname($teile[0]);
        $this->setNachname($teile[1]);
    }

    public function getGeburtTimestamp()
    {
        return $this->geburtTimestamp;
    }


    public function setGeburtTimestamp($geburtTimestamp)
    {
        $this->geburtTimestamp = $geburtTimestamp;
    }

    /**
     * Get the value of vorname
     */
    public function getVorname()
    {
        return $this->vorname;
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
