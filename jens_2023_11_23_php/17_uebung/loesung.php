<?php
/* 
Erweitere das Array $visitors aus dem Codebeispiel 
um eine weitere Dimension. 

Jeder Besucher der Veranstaltung soll einen Schlüssel visited haben, 
in dem ein Array der bisher besuchten Veranstaltungen hinterlegt ist. 
Greife dann auf eine dieser Veranstaltungen zu und gebe diese aus. 
*/
$visitors = [
    [
        'name' => 'Niclas',
        'age' => '21',
        'city' => 'Berlin',
        'organizer' => true,
        'visited' => ['Fussballspiel',true,false]
        
    ],
    [
        'name' => 'Jonas',
        'age' => '21',
        'city' => 'Cologne',
        'visited' => [1,2],

    ],
    [
        'name' => 'Vasil',
        'age' => '32',
        'city' => 'Munich',
        'visited' => array('Kongress','Oktoberfest'),
    ],
];

print_r($visitors);
echo $visitors[2]['visited'][1];