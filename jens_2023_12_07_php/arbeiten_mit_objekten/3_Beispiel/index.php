<?php
declare(strict_types=1);

require_once("person.php");

$test = new TextGenerator();

$person = new Person(); // object 
$person->setVorname("Jens");
$person->setNachname("Simon");

echo $test->beschreibePerson($person);

$person = new Person(); // object 
$person->setVorname("Kim");
$person->setNachname("Schmitz");

$tier=new Tier();

echo $test->beschreibePerson($person);
echo $test->beschreibePerson($tier);
// echo $test->beschreibePerson("hallo");

echo $test->beschreibeEineZahl(1000);
//echo $test->beschreibeEineZahl(true);
class Tier{

}
class TextGenerator {
    // properties

    // methoden
    public function beschreibeEineZahl(int $zahl){
        return $zahl*2;

    }
    public function beschreibePerson(object $person){ // "hallo"
      
        return $person->beschreibe();

    }

}




