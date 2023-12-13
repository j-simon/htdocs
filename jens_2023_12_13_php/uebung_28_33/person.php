<?php
class Person
{
    /* 
    Modifizieren Sie die Klasse Person so,

    dass sie bei setAdresse() ein Adresse-Objekt erwartet.
     Befüllen Sie nun auch dieses Attribut in der index.php. 
    */
    protected $name = "Dies soll mal der Name der Person";
    protected $email = "";
    protected Adresse $adresse;

    public function __construct($name, $email, $adresse)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setAdresse($adresse);
    }

    public function getStrasse()
    {
        if ($this->getAdresse() !== null)
            return $this->getAdresse()->getStrasse();
        else
            return "keine Strasse gespeichert!";
    }
    public function setStrasse($strasse)
    {
        $this->getAdresse()->setStrasse($strasse);

        return $this;
    }
    public function setHausnummer($hausnummer)
    {
        $this->getAdresse()->setHausnummer($hausnummer);

        return $this;
    }
    public function setPlz($plz)
    {
        $this->getAdresse()->setPlz($plz);

        return $this;
    }

    public function setOrt($ort)
    {
        $this->getAdresse()->setOrt($ort);

        return $this;
    }
    public function getHausnummer()
    {
        if ($this->getAdresse() !== null)
            return $this->getAdresse()->getHausnummer();
        else
            return "keine Hausnummer gespeichert!";
    }

    public function getPlz()
    {
        if ($this->getAdresse() !== null)
            return $this->getAdresse()->getPlz();
        else
            return "keine Plz gespeichert!";
    }

    public function getOrt()
    {
        if ($this->getAdresse() !== null)
            return $this->getAdresse()->getOrt();
        else
            return "kein Ort gespeichert!";
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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse(Adresse  $adresse)
    {


        $this->adresse = $adresse;

        return $this;
    }
}
