<?php
/*$_POST['username']
$_GET
*/

// $sql ="SELECT * FROM ratings;"
// DROP DATABASE rating_systems;
$db = new PDO(
    'mysql:host=localhost;dbname=rating_system',
    'root',
    'root');
$sql= "SELECT * FROM ratings WHERE username='".$_POST['username']."';";
echo $sql;


 //$statement = $db->query($sql);

// sql injection , prepared statement
$sql= "SELECT id,email,username FROM ratings WHERE username=? ";
$statement = $db->prepare($sql);
$statement->execute([
        $_POST['username'],
    ]);

 $kommentareJens = $statement->fetchAll(PDO::FETCH_ASSOC);
 //print_r($kommentareJens);
 foreach($kommentareJens as $kommentar) {
    echo $kommentar['username']."-".$kommentar['email'];
 }