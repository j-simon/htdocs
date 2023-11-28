
<?php


$a = [1, 2, 3, 4, 5];

// built in core map beduetet abbilden 
$b = array_map(   function ($x) {
        return null;
    }, $a
);

function fkt ($x) {
    return null;
}

$b = array_map( "fkt", $a
);
print_r($b);
?>
