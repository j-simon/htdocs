<?php
setcookie("sprache","en");
print_r($_SERVER);
$ziel = $_SERVER['HTTP_REFERER'];

header("Location: $ziel"); // redirect
exit;