<?php
class Person
{
    // Attribute - Liste bei Konstruktor Nutzung weggelassen
    protected $vorname;
    protected $nachname;
    protected $geburtstag;

    // magische Methode   / vorbestimmte Methode

    // der sogenannte Konstruktor / constructors
    function __construct($daten)
    {
        //echo "hallo ".$vorname." ".$nachname."\n";

        // HTML Formular Feld mit dem Attribut name = "vorname"
        // <input type="text" name"=vorname">
        // $_POST['vorname']
        // $daten['vorname']

        //  $this->setVorname($daten['vorname']);
        if (!empty($daten)) {
            foreach ($daten as $key => $data) {
                //echo $key . " " . $data . "<br>";
                $methodenName = "set".ucfirst($key);
                //echo $methodenName."<br";
                $this->$methodenName($data);
              
            }
          
        }
    }


    // die sogennante toString Methode // mache zu einem Text
    function __toString()
    {
        return htmlspecialchars(trim($this->getVorname()) . " " . trim($this->getNachname()));
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




    /**
     * Get the value of geburtstag
     */
    public function getGeburtstag()
    {
        return $this->geburtstag;
    }

    /**
     * Set the value of geburtstag
     *
     * @return  self
     */
    public function setGeburtstag($geburtstag)
    {
        $this->geburtstag = $geburtstag;

        return $this;
    }
}
