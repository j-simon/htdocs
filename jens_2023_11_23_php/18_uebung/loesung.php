<?php
/*


Gegeben sei das nachfolgende Array:
$languages = ['Java', 'Perl', 'Ruby', 'Python', 'PHP', 'JavaScript'];

Schreibe ein PHP-Skript, das den Satz ausgibt:
Meine liebste Programmiersprache ist xxxx !
Den Namen deiner Lieblingssprache soll sich das Skript aus dem Array $languages holen. Suche dir deine liebste Programmiersprache aus.
*/

$languages = ['Java', 'Perl', 'Ruby', 'Python', 'PHP', 'JavaScript'];
//print_r($languages);

$txt = "Meine liebste Programmiersprache ist  !";

echo "$txt: $languages[4]\n";

echo "Meine liebste Programmiersprache ist $languages[4] !";