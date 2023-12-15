<?php

class KlasseFuerEinObject
{

    static $hilfe = null;

    private function __construct()
    {
    }

    public static function create()
    {
        if (self::$hilfe===null) {
            echo "erster create-Aufruf\n";
            self::$hilfe =  new KlasseFuerEinObject();
            return self::$hilfe;
        }
    }
}


$obj1 = KlasseFuerEinObject::create();
var_dump($obj1);
$obj2 = KlasseFuerEinObject::create();
var_dump($obj2);


/*$obj1 = new KlasseFuerEinObject();
print_r($obj1);

$obj2 = new KlasseFuerEinObject();
print_r($obj2);*/
