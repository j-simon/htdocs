<?php
class Model {

    

    public function __set($name,$value) {
        echo "Name eines Attributes der Klasse name: $name\n";
        echo "Wert diese Atributes. value: $value\n";
        $this->$name = $value;
        switch($name) {
            
        }

    }

    public function __get($name) {
               return  $this->$name;
    }
}

$jens = new Model();
$jens->vorname="Jens";
$jens->nachname="Simon";

echo $jens->vorname;
echo $jens->nachname;

var_dump($jens);