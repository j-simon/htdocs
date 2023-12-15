<?php

$request_uri=$_SERVER['REQUEST_URI'];

// Routing
echo match($request_uri){
'/startseite' => require_once(__DIR__."/seiten/start.php"),
'/page1' => "danke , hier ist die Seite 1",
default =>"error 404"
};
