<?php
$geburtstag="30.11.2000";
$heute="30.11.2023";

//echo (int) ((strtotime($heute)-strtotime($geburtstag)) /60/60/24/365);



//echo strtotime("01.01.1970 01:00:00");

$heute_de="30.11.2023";
$heute_us=date('m/j/Y',strtotime($heute));
echo $heute_us;

