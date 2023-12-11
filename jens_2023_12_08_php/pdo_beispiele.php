<?php

$daten = explode(' ', 'Das ist 1 String mit 6 Leerzeichen');

echo implode(' ', array_filter($daten, function ($wert) {

    return $wert != 1;

}));



exit;
$db = new PDO('mysql:host=localhost;dbname=mysql', 'root', 'root');
var_dump($db);

$statement = $db->query('SELECT * FROM user');
var_dump($statement);

$data = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($data);
