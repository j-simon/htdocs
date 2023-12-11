<?php
// Klasse innen
class Person {

    protected $vorname="";  // Jens
    protected $nachname=""; // Simon

    // virtuelle Attribute
    // public $name1=""; // "Jens Simon"
     //public $name2=""; // "Simon Jens" 


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
     * Get the value of name1
     */ 
    public function getName1()
    {
         return $this->vorname." ". $this->nachname;
    }

    /**
     * Set the value of name1
     *
     * @return  self
     */ 
    public function setName1($name1)
    {
         //$this->name1 = $name1; // "Kim Schmitz"
         // Kim
         // Leerzeichen kann weg
         // Schmitz
         // suche space und trenne da
         $teileArray=explode(" ",$name1);
         //print_r($teileArray);
         $this->vorname = $teileArray[0];
         $this->nachname=$teileArray[1];

         

        return $this;
    }

     /**
      * Get the value of name2
      */ 
     public function getName2()
     {
        return $this->nachname." ". $this->vorname;
     }

     /**
      * Set the value of name2
      *
      * @return  self
      */ 
     public function setName2($name2)
     {
        $teileArray=explode(" ",$name2);
        //print_r($teileArray);
        $this->vorname = $teileArray[1];
        $this->nachname=$teileArray[0];

        

       return $this;
     }
}

// Hauptprogramm
// aussen
$jens= new Person();


$antwort=$jens instanceof  Person;
var_dump($antwort);



exit;

$jens->setVorname("Jens");
$jens->setNachname("Simon");

echo $jens->getName1(); "Jens Simon";
echo "\n";

$jens->setName1("Kim Schmitz");
echo $jens->getName1(); "Kim Schmitz";
echo "\n";

echo $jens->getName2(); "Kim Schmitz";
echo "\n";