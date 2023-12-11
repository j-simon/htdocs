<?php
class Person
{
    // Attribute - Liste bei Konstruktor Nutzung weggelassen
    // protected $vorname;
    // protected $nachname;
      

   // magische Methode   / vorbestimmte Methode

   // der sogenannte Konstruktor / constructors
    function __construct(protected $vorname="",protected $nachname="unknown")
    {
        //echo "hallo ".$vorname." ".$nachname."\n";
      
        $this->setVorname($vorname);
        $this->setNachname($nachname);
      
    }


    // die sogennante toString Methode // mache zu einem Text
    function __toString(){
        return $this->getVorname()." ".$this->getNachname();
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
