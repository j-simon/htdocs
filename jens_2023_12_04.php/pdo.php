<?php
// ('','username','password')
// $db = new PDO('mysql:host=localhost;dbname=mysql', 'root', 'root');
//$statement = $db->query('SELECT User, Host FROM user');

$db = new PDO('mysql:host=localhost;dbname=2023_kundenxy_seminarverwaltung', 'root', 'root');
$statement = $db->query('DELETE FROM seminare');

//$data = $statement->fetchAll();
//print_r($data);

