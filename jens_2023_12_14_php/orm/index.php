<?php
require_once("user.php");

$otto = new User();
$otto->username = "Otto";
$otto->email = "o.schmidt@gmx.net";
$otto->password = "1mmmm43788";


$otto->insert();
