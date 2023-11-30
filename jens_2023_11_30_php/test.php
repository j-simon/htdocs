<?php 

//print_r($_SERVER);

// substr , landessprache des Benutzer
$language = trim($_SERVER['HTTP_ACCEPT_LANGUAGE']); // "abc-786587645";//

echo $language."\n";

/*$anz_buchstaben=strpos($language,"-");
//echo $anz_buchstaben."\n";
$laender_kennung = substr($language,0,$anz_buchstaben);
*/
// kurzform
//$laender_kennung = substr($language,0,strpos($language,"-"));

//OK mit explode
//$laender_kennung = explode("-",$language);
//$laender_kennung =$laender_kennung[0];

// kurzform
$laender_kennung =explode("-",$language)[0];

echo $laender_kennung;

$translate['de']="deutsch";
$translate['fr']="französisch";
$translate['en']="englisch";

$laender_text =  $translate[$laender_kennung];

$laender_text = str_replace("ö","oe",$laender_text);
$laender_text = str_replace("ü","ue",$laender_text);
$laender_text = str_replace("ä","ae",$laender_text);
echo "Der Browser ist auf $laender_text  eingestellt!";





