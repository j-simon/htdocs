<?php

setcookie("sprache","de",time()+606024*30);
print_r($_SERVER);
$ziel = $_SERVER['HTTP_REFERER'];

header("Location: $ziel"); // redirect
exit;