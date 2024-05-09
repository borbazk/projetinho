<?php
function insertEcho($var){
    $b=$var + 1;
    echo $b;
}

function insertreturn($var){
    $b=$var + 1;
    return $b;
}

$z = 1;

$a = insertEcho($z);

var_dump($a);
// echo $a;
// echo $a;
// echo $a;
