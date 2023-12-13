<?php
class Autor
{
    protected $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Buch
{
    protected $titel = '';
    protected $autor = NULL; // kein Standardwert

    public function __construct(){
        $this->autor = new Autor();
    }
    public function getTitel()
    {
        return $this->titel;
    }

    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    public function getAutorName()
    {
        return $this->autor->getName();
    }

    public function setAutorName($name)
    {
        
        $this->autor->setName($name); // Fehlermeldung Fatal error
        /*
        Fatal error: Uncaught Error: Call to a member function setName() on null in C:\MAMP\htdocs\jens_2023_12_13_php\index.php:24

Stack trace:  Stapel verfolgung
#0 C:\MAMP\htdocs\jens_2023_12_13_php\index.php(36): Buch->setAutorName('Bastian Sick')
#1 {main}
  thrown in C:\MAMP\htdocs\jens_2023_12_13_php\index.php on line 24

  */
    }
}

$buch = new Buch();
print_r($buch);

$buch->setTitel('Der Dativ ist dem Genitiv sein Tod');
$buch->setAutorName('Bastian Sick'); // Erzeugt eine Fehlermeldung
print_r($buch);
//echo $buch->getAutorName();