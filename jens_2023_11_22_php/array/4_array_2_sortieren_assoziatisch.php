<?php

$adresse = array();
//       key       = value
$adresse['vorname'] = "Jens";
$adresse['nachname'] = "Simon";

//
$adresse = array(
                    // key    => value    
                    "vorname" => "Jens",
                    "nachname" => "Simon"
                );
var_dump($adresse);               

sort($adresse);
var_dump($adresse);    

/*ksort() key-sort
asort() values-sort */
